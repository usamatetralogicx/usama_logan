@extends('layouts.new_app')
@section('content')
    <section class="export">
        <div class="container">
            <div class="export_main">
                <div class="export_form">
                    <label class="container_two"><span><img src="images/export1.png"> </span> Export as Spreadsheet
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark_one"></span>
                    </label>
{{--                    <label class="container_two"><span><img src="images/export2.png"> </span> Export For Labels--}}
{{--                        <input type="radio" name="radio">--}}
{{--                        <span class="checkmark_one"></span>--}}
{{--                    </label>--}}
                    <div class="unable_exp">  <a href="{{ route('exports.download') }}" class="btn">Export Now</a></div>
                </div>
            </div>
        </div>
    </section>
    @endsection
