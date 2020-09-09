@extends('layouts.new_app')
@section('content')
    <section class="link_form">
        <div class="container">
            <div class="link_form_main">
                @if(session()->has('success'))
                    <div class="alert alert-success mb-3 text-center font-weight-bold">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="logo_link">
                    <img src="images/link.png">
                </div>
                <h4>This is your Paper Pearl link</h4>
                <p>Send this link to your friend from your own email account.
                    They click it, fill out a private form & their info is yours forever!
                </p>
                <form action="{{ route('link.generate') }}" method="POST" >
                    @csrf
                    <div class="flex">
                        <div class="flex-main">
                                <div class="input-group-text custom_btn" style="
    color: white;
    border-color: #00265d;padding: 7px 1px;">{{ env('APP_URL') }}/</div>
                        </div>
                            <div class="flex-main">
                            <input type="text" name="unique_code" class="form-control" value="@if($user->unique_code){{ $user->unique_code }}@endif">
                        </div>
                    </div>

                    <div class="form-group button">
                        <button type="submit" class="btn btn-primary bt  custom_btn">Update Link</button>
                    </div>

                </form>

                @if($user->unique_code)
                    <button  class="btn btn-warning btn-sm" onclick="myFunction()" id="copyBtn" >Copy Link</button>
                <a target="_blank" href="{{ env('APP_URL') }}/{{ $user->unique_code }}" class="btn btn-primary btn-sm">Preview Page</a>
                    <input type="text" id="copyTarget" value="{{ env('APP_URL') }}/{{ $user->unique_code }}" >
                <h6><span>You can also </span>change your link <span>or</span> edit your private form</h6>
                @endif
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('#copyTarget').hide();
        })
        function myFunction() {
            var copyText = document.getElementById("copyTarget");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            // alert("Copied the text: " + copyText.value);
            document.getElementById("copyBtn").innerHTML = "Copied Link";
        }
    </script>
@endsection
