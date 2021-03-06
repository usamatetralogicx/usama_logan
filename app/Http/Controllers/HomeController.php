<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Exports\ContactExport;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Excel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Contact $contact ,Request $request)
    {
        $contact_query = $contact->newQuery();
        if(Auth::user()->hasRole('user')){
            $contact_query->where('user_id', Auth::id());
        }else{
            if($request->input('user')){
                $contact_query->where('user_id', $request->input('user'));
            }
        }

        if($request->input('q')){
            $contact_query->where('first_name', 'like', '%' . $request->input('q') . '%');
//            $contact_query->orWhere('last_name', 'like', '%' . $request->input('q') . '%');
//            $contact_query->orWhere('email', 'like', '%' . $request->input('q') . '%');
        }

        $contacts = $contact_query->paginate(20);
        return view('new_contacts')->with([
            'contacts' => $contacts,
            'query' => $request->input('q'),
            'user' => $request->input('user')
        ]);
//        return view('home');
    }

    public function LinkSettings(){
        $user = Auth::user();
        return view('new_link')->with([
            'user' => $user
        ]);
    }

    public function UserLink($id){
        $user = User::where('unique_code', $id)->first();
        if($user === null){
            abort('404');
        }else {
            return view('new_user_link')->with([
                'user' => $user
            ]);
        }
    }

    public function contacts(Contact $contact, Request $request){
        $contact_query = $contact->newQuery();
        if(Auth::user()->hasRole('user')){
            $contact_query->where('user_id', Auth::id());
        }else{
            if($request->input('user')){
                $contact_query->where('user_id', $request->input('user'));
            }
        }

        if($request->input('q')){
            $contact_query->where('first_name', 'like', '%' . $request->input('q') . '%');
//            $contact_query->orWhere('last_name', 'like', '%' . $request->input('q') . '%');
//            $contact_query->orWhere('email', 'like', '%' . $request->input('q') . '%');
        }

        $contacts = $contact_query->paginate(20);
        return view('new_contacts')->with([
            'contacts' => $contacts,
            'query' => $request->input('q'),
            'user' => $request->input('user')
        ]);
    }
    public function Users(Request $request){
        if($request->input('q')){
            $users = User::role('user')
                ->where('name', 'like', '%' . $request->input('q') . '%')
                ->paginate(50);
        }else {
            $users = User::role('user')->paginate(20);
        }
         return view('new_user')->with([
             'users' => $users,
             'request' => $request->input('q')
         ]);
    }
    public function LinkGenerate(Request $request){
            $validatedData = $request->validate([
                'unique_code' => ['unique:users']
            ]);

            $user = Auth::user();
            $user->unique_code = $request->input('unique_code');
            $user->save();

            return redirect()->back()->with('success')->with('success', 'Link Generated Successfully');
        }

        public function ContactsUpdate(Request $request){
            if($request->input('contact_id')) {
                $contact = Contact::find($request->input('contact_id'));
                $update = true;
            }else {
                $contact = new Contact();
                $update = false;
            }
            $contact->prefix = $request->input('prefix');
            $contact->first_name = $request->input('first_name');
            $contact->last_name = $request->input('last_name');
            $contact->address = $request->input('street');
            $contact->apt = $request->input('apt');
            $contact->city = $request->input('city');
            $contact->state = $request->input('state');
            $contact->zip = $request->input('zip');
            $contact->country = $request->input('country');
            $contact->phone = $request->input('phone');
            $contact->email = $request->input('email');
            $contact->date = $request->input('birthday');
            $contact->spouce_prefix = $request->input('spouce_prefix');
            $contact->spouce_first_name = $request->input('partner_first_name');
            $contact->spouce_last_name = $request->input('partner_last_name');
            $contact->user_id = $request->input('user');
            $contact->save();
            if($update){
                return redirect()->back()->with('success', 'Contact Detail has been updated.');
            }else{
                return redirect()->back()->with('success', 'Your contact details has been submitted.');
            }
    }

    public function Exports(){
        return view('new_export');
    }
    public function Imports(){
        return view('import');
    }

    public function exportDownload()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new ContactExport(), 'contacts.xlsx');
    }

    public function ContactDelete($id){
        Contact::find($id)->delete();
        return redirect()->back()->with('success', 'Contact Deleted Successfully.');
    }
    public  function Logout(){
        Auth::logout();
        return redirect('login');
    }
    public function alphabetic(Request $request)
    {
        $character =$request->value;
        $seacrh=Contact::where('first_name','like',$character.'%')->get();
        return response()->json(['success'=>$seacrh]);
    }
}
