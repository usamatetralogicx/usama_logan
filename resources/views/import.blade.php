@extends('layouts.new_app')
@section('content')
    <section class="link_form">
        <div class="container">
            <div class="link_form_main">
                <div class="logo_link">
                    <img src="images/import-logo.png">
                </div>
                <h4>Let's import some contacts</h4>
                <p>Before uploading your spreadsheet, please review the info below to
                    make the process as smooth as possible.
                </p>
                <ul>
                    <li>
                        <div class="import_img">
                            <img src="images/import1.png">
                        </div>
                        <div class="import_txt">
                            <h5>Spreadsheet Format</h5>
                            <p>For the best results, you can download our spreadsheet template here. If you don't use
                                our template, just make sure that you're importing a one page Excel or CSV with column headers.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="import_img">
                            <img src="images/import2.png">
                        </div>
                        <div class="import_txt">
                            <h5>Birthdays and Anniversaries</h5>
                            <p>If you'd like to send automated birthday cards or automated anniversary cards be sure to
                                include "birthday" or "anniversary" columns in your spreadsheet.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="import_img">
                            <img src="images/import3.png">
                        </div>
                        <div class="import_txt">
                            <h5>Please Note</h5>
                            <p>In order to keep your address book organized, we can only import contacts who already have mailing address associated with them. If you need a mailing address for someone, you can use <a href="">Your Link</a> to request it from them.</p>
                        </div>
                    </li>
                </ul>
                <div class="sheet">
                    <a class="btn" href="">Upload Spreadsheet</a>
                </div>
                <p>Need help? <a href="">Contact us</a> and we'll get your list imported asap.</p>
            </div>
        </div>
    </section>
@endsection
