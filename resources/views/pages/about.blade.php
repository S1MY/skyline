@extends('layouts.master')

@section('content')
    <div class="headerP"></div>
    <section class="section _hero" style="background: url(/image/about/hero.jpg);">
        <div class="page">
            <h1 class="title">@lang('mainPages.about_first_screen.title')</h1>
            <p class="subText">@lang('mainPages.about_first_screen.subtitle')</p>
            <p class="aboutText _mt40">@lang('mainPages.about_first_screen.description')</p>
        </div>
    </section>
    <section class="section">
        <div class="page">
            <h2 class="title">@lang('mainPages.about_second_screen.title')</h2>
            <p class="subText">@lang('mainPages.about_second_screen.subtitle')</p>
            <div class="servicesFlex">
                <div class="serviceItem">
                    <div class="serviceIcon">1</div>
                    <h3 class="serviceTitle">@lang('mainPages.about_second_screen.cards.first_title')</h3>
                    <p class="serviceText">@lang('mainPages.about_second_screen.cards.first_description')</p>
                </div>
                <div class="serviceItem">
                    <div class="serviceIcon">2</div>
                    <h3 class="serviceTitle">@lang('mainPages.about_second_screen.cards.second_title')</h3>
                    <p class="serviceText">@lang('mainPages.about_second_screen.cards.second_description')</p>
                </div>
                <div class="serviceItem">
                    <div class="serviceIcon">3</div>
                    <h3 class="serviceTitle">@lang('mainPages.about_second_screen.cards.third_title')</h3>
                    <p class="serviceText">@lang('mainPages.about_second_screen.cards.third_description')</p>
                </div>
            </div>
        </div>
    </section>
@endsection
