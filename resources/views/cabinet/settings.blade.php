@extends('cabinet.layouts.master')

@section('cabContent')

    <div class="page">

        @include('cabinet.layouts.sidebar')
        @php
            // phpinfo();
        @endphp
        <div class="content">
            <div class="contentWrapper">
                <h1 class="pageTitle">@lang('cabinet.settings.title')</h1>
                <div class="settingFlex">
                    <form class="settingForm _long" id="updateSettings" action="{{ route('updateSettings') }}">
                        <p class="settingName">@lang('cabinet.settings.user')</p>
                        <div class="inputFlex displayFlex spaceBetween flexWrap">
                            <label>
                                <p class="inputName">@lang('cabinet.settings.input_name')<span class="_req">*</span></p>
                                <input type="text" class="contentInput" name="fname" value="{{ Auth::user()->userInfo->name }}" required placeholder="@lang('cabinet.settings.input_name')">
                            </label>
                            <label>
                                <p class="inputName">@lang('cabinet.settings.input_surname')<span class="_req">*</span></p>
                                <input type="text" class="contentInput" name="lname" value="{{ Auth::user()->userInfo->surname }}" required placeholder="@lang('cabinet.settings.input_surname')">
                            </label>
                            <label>
                                <p class="inputName">@lang('cabinet.settings.input_phone')<span class="_req">*</span></p>
                                <input type="tel" class="contentInput" name="phone" value="{{ Auth::user()->userInfo->phone }}" required placeholder="@lang('cabinet.settings.input_phone')">
                            </label>
                            <label>
                                <p class="inputName">@lang('cabinet.settings.input_date')<span class="_req">*</span></p>
                                <input type="date" class="contentInput" name="bdate" value="{{ Auth::user()->userInfo->birth }}" required>
                            </label>
                            <div class="_long">
                                <p class="inputName">@lang('cabinet.settings.input_sex')</p>
                                <div class="labelFlex displayFlex spaceBetween">
                                    <label class="customCheck"><input type="radio" name="gender" value="1"
                                    @if ( Auth::user()->userInfo->sex == 1 )
                                        checked
                                    @endif
                                    ><p>@lang('cabinet.settings.sex_m')</p></label>
                                    <label class="customCheck"><input type="radio" name="gender" value="0"
                                    @if ( Auth::user()->userInfo->sex == 0 )
                                        checked
                                    @endif
                                    ><p>@lang('cabinet.settings.sex_f')</p></label>
                                </div>
                            </div>
                            <label>
                                <p class="inputName">@lang('cabinet.settings.input_country')</p>
                                <div class="contentSelect" data-select="country">
                                    <input type="text" class="contentInput searchSelect" name="country" value="{{ Auth::user()->userInfo->country }}" placeholder="@lang('cabinet.settings.input_country')" autocomplete="off">
                                    <div class="selectFlow">
                                    </div>
                                </div>
                            </label>
                            <label class="_disable">
                                <p class="inputName">@lang('cabinet.settings.input_sity')</p>
                                <div class="contentSelect" data-select="city">
                                    <input type="text" class="contentInput searchSelect" name="city" value="{{ Auth::user()->userInfo->city }}" placeholder="@lang('cabinet.settings.input_sity')">
                                    <div class="selectFlow">
                                    </div>
                                </div>
                            </label>
                        </div>
                        <button class="btn">@lang('cabinet.settings.save')</button>
                    </form>
                    <form class="settingForm" data-form="password" id="changePassword" action="{{ route('changePassword') }}">
                        <p class="settingName">@lang('cabinet.settings.change_pass')</p>
                        <p class="inputName">@lang('cabinet.settings.old_pass')</p>
                        <input type="password" class="contentInput" name="oldpass" required placeholder="@lang('cabinet.settings.old_pass')">
                        <p class="inputName">@lang('cabinet.settings.new_pass')</p>
                        <input type="password" class="contentInput" name="newpass" required placeholder="@lang('cabinet.settings.new_pass')">
                        <button class="btn">@lang('cabinet.settings.change_pass_btn')</button>
                    </form>
                    <form class="settingForm" id="setAvatar" enctype="multipart/form-data" data-form="avatar" action="{{ route('setAvatar') }}">
                        <p class="settingName">@lang('cabinet.settings.set_avatar')</p>
                        <div class="settingsAvatar displayFlex alignItemsCenter spaceCenter" style="background-image: url(/image/users/user.png);"></div>
                        <div class="avatarImageInput displayFlex alignItemsCenter spaceCenter">
                            <input type="file" name="img" class="avatarImage" id="avatarImage">
                            <span class="avatarImageInputText">
                                @lang('cabinet.settings.upload_avatar')
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 11.25L4.63125 12.1313L9.375 7.39375L9.375 18.75H10.625L10.625 7.39375L15.3687 12.1313L16.25 11.25L10 5L3.75 11.25ZM3.75 5L3.75 2.5L16.25 2.5V5H17.5V2.5C17.5 2.16848 17.3683 1.85054 17.1339 1.61612C16.8995 1.3817 16.5815 1.25 16.25 1.25L3.75 1.25C3.41848 1.25 3.10054 1.3817 2.86612 1.61612C2.6317 1.85054 2.5 2.16848 2.5 2.5L2.5 5H3.75Z" fill="#333333"/>
                                </svg>
                            </span>
                        </div>
                        <button class="btn">@lang('cabinet.settings.save_avatar')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('cabBlocked')

<link rel="stylesheet" href="/assets/css/index.css">
<div class="popup" style="display: block;">
    <div class="popupBg"></div>
    <div class="popupItem" style="display: block;" id="confirmEmailNotic">
        <svg class="responseIcon" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_53_662)">
            <path opacity="0.12" d="M45 90.0001C69.5966 90.0001 89.5361 69.8529 89.5361 45.0001C89.5361 20.1473 69.5966 9.15527e-05 45 9.15527e-05C20.4034 9.15527e-05 0.463917 20.1473 0.463917 45.0001C0.463917 69.8529 20.4034 90.0001 45 90.0001Z" fill="#EB3B5A"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M29.2318 56.38C27.9878 57.637 27.9878 59.6751 29.2318 60.9321C30.4759 62.1891 32.4929 62.1891 33.7369 60.9321L44.9995 49.5521L56.2626 60.9325C57.5067 62.1895 59.5237 62.1895 60.7677 60.9325C62.0118 59.6755 62.0118 57.6375 60.7677 56.3805L49.5046 45.0001L60.7675 33.6199C62.0116 32.3629 62.0116 30.3248 60.7675 29.0678C59.5235 27.8108 57.5065 27.8108 56.2624 29.0678L44.9995 40.4481L33.7371 29.0683C32.4931 27.8113 30.476 27.8113 29.232 29.0683C27.988 30.3253 27.988 32.3633 29.232 33.6203L40.4944 45.0001L29.2318 56.38Z" fill="#EB3B5A"/>
            </g>
            <defs>
            <clipPath id="clip0_53_662">
            <rect width="90" height="90" fill="white"/>
            </clipPath>
            </defs>
            </svg>
            <p class="responseText">@lang('popups.block.title')</p>
            <p class="responseDesc">@lang('popups.block.text0')</p>
            <p class="responseDesc">@lang('popups.block.text1')</p>
            <div class="btnWrapper displayFlex spaceCenter">
                <a href="#" class="responseBtn confirmEmail" data-email="{{ Auth::user()->email }}" data-url="{{ route('confirmEmail') }}">@lang('popups.block.btn')</a>
            </div>
    </div>
    <form class="popupItem" data-name="activator" id="activator" action="{{ route('register') }}">
        <svg class="popupCross" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 14L2 2M14 2L2 14" stroke="#353535" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        <h3 class="popupName">@lang('popups.activate.title')</h3>
        <p class="policeForm popDesc">@lang('popups.activate.text0') <a href="#" style="color: #20BF6B;"> {{ Auth::user()->email }} </a>@lang('popups.activate.text01')</p>
        <p class="policeForm popDesc">@lang('popups.activate.text1')</p>
        <input type="text" name="name" placeholder="Код формата: 000000" class="formInput" readonly onfocus="this.removeAttribute('readonly')">
        <button class="formButton">@lang('popups.block.btn')</button>
    </form>
</div>
<style>
    .popDesc{
        margin-top: 0;
    }
    body{
        height: 100vh;
        color: #202020;
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(107.56deg, #3867D6 0%, #EB3B5A 100%);
        position: relative;
        font-size: 16px;
        line-height: 140%;
    }
    .responseDesc{
        padding-bottom: 5px;
        font-size: 18px;
        line-height: 20px;
        text-align: center;
    }
    .responseDesc:nth-last-child(2){
        padding-bottom: 20px;
    }
</style>

@endsection
