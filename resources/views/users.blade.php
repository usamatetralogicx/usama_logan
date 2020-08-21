@extends('layouts.app')

@section('content')
    <div class="container">
                <div class="card  text-center">

                    <form action="{{ route('users') }}" method="GET" class="p-2">
                        <div class="row">
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="q" value="@if(isset($request)){{ $request }}@endif">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary form-control">Search</button>
                            </div>

                        </div>
                    </form>
                    <table class="table text-left">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Link</th>
                            <th scope="col">Contacts</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($users) >= 1)
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="{{ env('APP_URL') }}/{{ $user->unique_code }}" target="_blank">{{ $user->unique_code }}</a></td>
                            <td>{{ count($user->has_contacts) }}</td>
                            <td class="text-right">
                                <a href="{{ route('contacts') }}?user={{ $user->id }}" class="btn btn-primary btn-sm">View</a>
{{--                                <button class="btn btn-danger btn-sm">Delete</button>--}}
                            </td>
                        </tr>
                        @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="text-center">
                                    No Record find
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>

@endsection
