@extends('cabinet.layouts.master')

@section('cabContent')

    <div class="page">

        @include('cabinet.layouts.sidebar')

        <div class="content">
            <div class="contentWrapper">
                <h1 class="pageTitle">@lang('cabinet.navigation.messages')</h1>
                @if ( Auth::user()->isAdmin() )
                <link rel="stylesheet" href="/assets/css/admin.css">
                <div class="adminItem">
                    <p class="adminText">@lang('cabinet.messages.adminText')</p>
                    <form class="adminForm" id="sendMessageFromAdmin" action="{{ route('sendMessage') }}">
                        <textarea name="msg_ru" placeholder="@lang('cabinet.messages.msg_ru')"></textarea>
                        <textarea name="msg_en" placeholder="@lang('cabinet.messages.msg_en')"></textarea>
                        <textarea name="msg_ge" placeholder="@lang('cabinet.messages.msg_de')"></textarea>
                        <div class="btnWrapper displayFlex spaceCenter">
                            <button class="btn">@lang('cabinet.messages.btn')</button>
                        </div>
                    </form>
                </div>
                @endif
                <div class="messageWrapper">
                    @foreach ($msgs as $msg)
                        @php
                            if( $msg->from == 0){
                                $supportClass = ' _reded';
                            }elseif ( $msg->from == 1 ) {
                                $supportClass = '';
                            }

                            if( session('locale') == 'ru' ){
                                $message = $msg->message;
                            }elseif ( session('locale') == 'en' ) {
                                $message = $msg->en_message;
                            }elseif ( session('locale') == 'de' ) {
                                $message = $msg->de_message;
                            }

                        @endphp

                        <div class="messageItem{{ $supportClass }}">
                            <p class="messageText">{!! $message !!}</p>
                            <p class="messageDate">29.01.2022 в 20:00</p>
                        </div>

                    @endforeach
                    <div class="messageItem _greened">
                        <p class="messageText">Поздравляем! Вы успешно перешли на пакет <span class="_bold">"STANDARD"</span>. В скором времени вам откроются новые функции, которые многократно увеличат ваш заработок!</p>
                        <p class="messageDate">29.01.2022 в 20:00</p>
                    </div>
                    <div class="messageItem _reded">
                        <p class="messageText">Поздравляем! Вы успешно перешли на пакет <span class="_bold">"STANDARD"</span>. В скором времени вам откроются новые функции, которые многократно увеличат ваш заработок!</p>
                        <p class="messageDate">29.01.2022 в 20:00</p>
                    </div>
                    <div class="messageItem">
                        <p class="messageText">Поздравляем! Вы успешно перешли на пакет <span class="_bold">"STANDARD"</span>. В скором времени вам откроются новые функции, которые многократно увеличат ваш заработок!</p>
                        <p class="messageDate">29.01.2022 в 20:00</p>
                    </div>
                    <div class="messageItem">
                        <p class="messageText">Поздравляем! Вы успешно перешли на пакет <span class="_bold">"STANDARD"</span>. В скором времени вам откроются новые функции, которые многократно увеличат ваш заработок!</p>
                        <p class="messageDate">29.01.2022 в 20:00</p>
                    </div>
                    <div class="messageItem">
                        <p class="messageText">Поздравляем! Вы успешно перешли на пакет <span class="_bold">"STANDARD"</span>. В скором времени вам откроются новые функции, которые многократно увеличат ваш заработок!</p>
                        <p class="messageDate">29.01.2022 в 20:00</p>
                    </div>
                    <div class="paginationWrapper displayFlex alignItemsCenter spaceCenter">
                        <button class="prev displayFlex alignItemsCenter spaceCenter disabledPag">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.011 19.497L8.70297 12L16.011 4.50299C16.1418 4.36905 16.2151 4.18923 16.2151 4.00199C16.2151 3.81475 16.1418 3.63494 16.011 3.50099C15.9474 3.43614 15.8716 3.38461 15.7879 3.34944C15.7042 3.31426 15.6143 3.29614 15.5235 3.29614C15.4327 3.29614 15.3428 3.31426 15.2591 3.34944C15.1754 3.38461 15.0995 3.43614 15.036 3.50099L7.25997 11.4765C7.12345 11.6166 7.04705 11.8044 7.04705 12C7.04705 12.1956 7.12345 12.3834 7.25997 12.5235L15.0345 20.499C15.0981 20.5643 15.1741 20.6162 15.2581 20.6517C15.3421 20.6871 15.4323 20.7054 15.5235 20.7054C15.6146 20.7054 15.7049 20.6871 15.7889 20.6517C15.8728 20.6162 15.9489 20.5643 16.0125 20.499C16.1433 20.365 16.2166 20.1852 16.2166 19.998C16.2166 19.8108 16.1433 19.6309 16.0125 19.497L16.011 19.497Z" fill="#202020"/>
                                </svg>
                        </button>
                        <button id="1" class="active">1</button>
                        <button class="link">2</button>
                        <button class="next displayFlex alignItemsCenter spaceCenter link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.98903 4.503L15.297 12L7.98903 19.497C7.85819 19.631 7.78495 19.8108 7.78495 19.998C7.78495 20.1852 7.85819 20.3651 7.98903 20.499C8.05257 20.5639 8.12842 20.6154 8.21213 20.6506C8.29584 20.6857 8.38573 20.7039 8.47653 20.7039C8.56733 20.7039 8.65721 20.6857 8.74092 20.6506C8.82463 20.6154 8.90048 20.5639 8.96403 20.499L16.74 12.5235C16.8765 12.3834 16.953 12.1956 16.953 12C16.953 11.8044 16.8765 11.6166 16.74 11.4765L8.96553 3.50101C8.90193 3.43569 8.8259 3.38378 8.74191 3.34833C8.65792 3.31288 8.56769 3.29462 8.47653 3.29462C8.38536 3.29462 8.29513 3.31288 8.21114 3.34833C8.12715 3.38378 8.05112 3.43569 7.98753 3.50101C7.85669 3.63495 7.78345 3.81476 7.78345 4.002C7.78345 4.18925 7.85669 4.36906 7.98753 4.503L7.98903 4.503Z" fill="#202020"/>
                                </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('cabBlocked')


<link rel="stylesheet" href="/assets/css/index.css">
<div class="popup" style="display: block;">
    <div class="popupBg confirmEmail"></div>
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
    <form class="popupItem" data-name="activator" id="activator" action="{{ route('extendAccount') }}">
        <svg class="popupCross" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 14L2 2M14 2L2 14" stroke="#353535" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        <h3 class="popupName">@lang('popups.activate.title')</h3>
        <p class="policeForm popDesc">@lang('popups.activate.text0') <a href="#" style="color: #20BF6B;"> {{ Auth::user()->email }} </a>@lang('popups.activate.text01')</p>
        <p class="policeForm popDesc">@lang('popups.activate.text1')</p>
        <input type="text" name="code" placeholder="Код формата: 000000" class="formInput" readonly onfocus="this.removeAttribute('readonly')">
        <p class="erorrMsg"></p>
        <button class="formButton">@lang('popups.block.btn')</button>
    </form>
</div>
<style>
    .formInput{
        text-align: center;
    }
    .erorrMsg{
        color: red;
        text-align: center;
        padding-top: 8px;
        font-size: 14px;
    }
    .formInput.error{
        border: 1px solid red;
        color: red;
    }
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
