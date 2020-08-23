@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">

                    <div class="card-header">
                        Link
                    </div>

                    <div class="p-4">

                    @if($user->unique_code)
                        <div class="text-right">
                            <a href="javascript:void(0);" type="button" class="btn btn-warning btn-sm" id="copyBtn" data-clipboard-target="#copyTarget">Copy Link</a>
                            <a target="_blank" href="{{ env('APP_URL') }}/{{ $user->unique_code }}" class="btn btn-primary btn-sm">Preview Page</a>
                            <input type="text" id="copyTarget" value="{{ env('APP_URL') }}/{{ $user->unique_code }}" style="display: none;">
                        </div>
                    @endif

                    <div class="icon mb-2">
                        <img src="https://www.postable.com/assets/images/icon_link.svg">
                    </div>

                    <h3>Your Link</h3>

                    <p>Send this link to your friends from your own email account.
                        They click it, fill out a private form & their info is yours forever!
                    </p>

            <form action="{{ route('link.generate') }}" method="POST" >
                {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="    background: #00265d;
    color: white;
    border-color: #00265d;">{{ env('APP_URL') }}/</div>
                            </div>
                        <input type="text" name="unique_code" class="form-control" value="@if($user->unique_code){{ $user->unique_code }}@endif">
                    </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create Link</button>
                    </div>

                </form>

                    </div>
{{--                    <p>You can also <a href="">change your Link</a>.</p>--}}
                </div>
            </div>
        </div>
    </div>

    @endsection
