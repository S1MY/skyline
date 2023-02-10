@extends('layouts.master')

@section('title', __('pagesTitle.navigation.contact'))

@section('content')
    <div class="headerP"></div>
    <section class="section _hero" style="background: url(/image/contact.jpg);">
        <div class="page">
            <h1 class="title">@lang('mainPages.contacts_page.title')</h1>
            <p class="subText">@lang('mainPages.contacts_page.subtitle')</p>
            <p class="myText">@lang('mainPages.contacts_page.description')</p>

            <form class="formWrapper" id="messageSend" action="{{ route('contactMail') }}">
                <input type="text" class="formInput" required name="fullname" placeholder="@lang('mainPages.contacts_page.form_input_name')">
                <input type="email" class="formInput" required name="email" placeholder="@lang('mainPages.contacts_page.form_input_email')">
                <textarea name="area" class="formArea" placeholder="@lang('mainPages.contacts_page.form_input_message')" required></textarea>
                <button class="formButton @php
                    if( session('sendMail') ){
                        echo 'blocked';
                    }
                @endphp">@lang('mainPages.contacts_page.form_submit')</button>
            </form>
        </div>
    </section>
@endsection
