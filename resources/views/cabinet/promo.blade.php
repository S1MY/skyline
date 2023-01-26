@extends('cabinet.layouts.master')

@section('cabContent')

    <div class="page">

        @include('cabinet.layouts.sidebar')

        <div class="content">
            <div class="contentWrapper">
                <h1 class="pageTitle">Рекламные материалы</h1>
                <p class="pageText">@lang('cabinet.promo.desc')</p>
                <div class="pageTabs">
                    <p class="pageTab _active" data-table="468x60">468x60</p>
                    <p class="pageTab" data-table="728x90">728x90</p>
                    <p class="pageTab" data-table="200x300">200x300</p>
                </div>
                <div class="pageTabItem _active" data-table="468x60">
                    <div class="bannerItem">
                        <div class="bImage">
                            <img src="/image/b/46860.png" class="image468">
                        </div>
                        <div class="linkBlock">
                            <p class="bannerFlexName displayFlex alignItemsCenter spaceBetween">
                                <span class="bannerFlexCount">@lang('cabinet.promo.banner_title', ['attribute' => '468x60']):</span>
                                <span class="bannerFlexWeight">@lang('cabinet.promo.banner_lenght'): 6.40 KB</span>
                            </p>
                            <p class="fullLink">
                                <span class="linkCopy displayFlex alignItemsCenter spaceCenter" title="Скопировать">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_354_1362)">
                                            <path d="M20.2499 2.99951H6.74892C6.55 2.99951 6.35923 3.07853 6.21858 3.21919C6.07792 3.35984 5.9989 3.55061 5.9989 3.74953C5.9989 3.94845 6.07792 4.13922 6.21858 4.27988C6.35923 4.42053 6.55 4.49955 6.74892 4.49955H19.4999V17.25C19.4999 17.4489 19.5789 17.6397 19.7196 17.7803C19.8602 17.921 20.051 18 20.2499 18C20.4489 18 20.6396 17.921 20.7803 17.7803C20.9209 17.6397 21 17.4489 21 17.25V3.74953C21 3.55062 20.9209 3.35985 20.7803 3.21919C20.6396 3.07853 20.4489 2.99951 20.2499 2.99951V2.99951Z" fill="white"></path>
                                            <path d="M17.2498 5.99951H3.74886C3.33464 5.99951 2.99884 6.33531 2.99884 6.74953V20.2499C2.99884 20.6641 3.33464 20.9999 3.74886 20.9999H17.2498C17.664 20.9999 17.9998 20.6641 17.9998 20.2499V6.74953C17.9998 6.33531 17.664 5.99951 17.2498 5.99951Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_354_1362">
                                                <path d="M0 0H18C21.3137 0 24 2.68629 24 6V18C24 21.3137 21.3137 24 18 24H0V0Z" fill="white"></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="linkRef">https://skyline.com/image/b/46860.png</span>
                                <span class="copy">@lang('cabinet.partners.copy')</span>
                            </p>
                        </div>
                    </div>
                    <div class="bannerItem">
                        <div class="bImage">
                            <img src="/image/b/46860.png" class="image468">
                        </div>
                        <div class="linkBlock">
                            <p class="bannerFlexName displayFlex alignItemsCenter spaceBetween">
                                <span class="bannerFlexCount">@lang('cabinet.promo.banner_title', ['attribute' => '468x60']):</span>
                                <span class="bannerFlexWeight">@lang('cabinet.promo.banner_lenght'): 6.40 KB</span>
                            </p>
                            <p class="fullLink">
                                <span class="linkCopy displayFlex alignItemsCenter spaceCenter" title="Скопировать">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_354_1362)">
                                            <path d="M20.2499 2.99951H6.74892C6.55 2.99951 6.35923 3.07853 6.21858 3.21919C6.07792 3.35984 5.9989 3.55061 5.9989 3.74953C5.9989 3.94845 6.07792 4.13922 6.21858 4.27988C6.35923 4.42053 6.55 4.49955 6.74892 4.49955H19.4999V17.25C19.4999 17.4489 19.5789 17.6397 19.7196 17.7803C19.8602 17.921 20.051 18 20.2499 18C20.4489 18 20.6396 17.921 20.7803 17.7803C20.9209 17.6397 21 17.4489 21 17.25V3.74953C21 3.55062 20.9209 3.35985 20.7803 3.21919C20.6396 3.07853 20.4489 2.99951 20.2499 2.99951V2.99951Z" fill="white"></path>
                                            <path d="M17.2498 5.99951H3.74886C3.33464 5.99951 2.99884 6.33531 2.99884 6.74953V20.2499C2.99884 20.6641 3.33464 20.9999 3.74886 20.9999H17.2498C17.664 20.9999 17.9998 20.6641 17.9998 20.2499V6.74953C17.9998 6.33531 17.664 5.99951 17.2498 5.99951Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_354_1362">
                                                <path d="M0 0H18C21.3137 0 24 2.68629 24 6V18C24 21.3137 21.3137 24 18 24H0V0Z" fill="white"></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="linkRef">https://skyline.com/image/b/46860.png</span>
                                <span class="copy">@lang('cabinet.partners.copy')</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pageTabItem " data-table="728x90">
                    <div class="bannerItem">
                        <div class="bImage">
                            <img src="/image/b/72890.png" class="image728">
                        </div>
                        <div class="linkBlock">
                            <p class="bannerFlexName displayFlex alignItemsCenter spaceBetween">
                                <span class="bannerFlexCount">@lang('cabinet.promo.banner_title', ['attribute' => '468x60']):</span>
                                <span class="bannerFlexWeight">@lang('cabinet.promo.banner_lenght'): 6.40 KB</span>
                            </p>
                            <p class="fullLink">
                                <span class="linkCopy displayFlex alignItemsCenter spaceCenter" title="Скопировать">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_354_1362)">
                                            <path d="M20.2499 2.99951H6.74892C6.55 2.99951 6.35923 3.07853 6.21858 3.21919C6.07792 3.35984 5.9989 3.55061 5.9989 3.74953C5.9989 3.94845 6.07792 4.13922 6.21858 4.27988C6.35923 4.42053 6.55 4.49955 6.74892 4.49955H19.4999V17.25C19.4999 17.4489 19.5789 17.6397 19.7196 17.7803C19.8602 17.921 20.051 18 20.2499 18C20.4489 18 20.6396 17.921 20.7803 17.7803C20.9209 17.6397 21 17.4489 21 17.25V3.74953C21 3.55062 20.9209 3.35985 20.7803 3.21919C20.6396 3.07853 20.4489 2.99951 20.2499 2.99951V2.99951Z" fill="white"></path>
                                            <path d="M17.2498 5.99951H3.74886C3.33464 5.99951 2.99884 6.33531 2.99884 6.74953V20.2499C2.99884 20.6641 3.33464 20.9999 3.74886 20.9999H17.2498C17.664 20.9999 17.9998 20.6641 17.9998 20.2499V6.74953C17.9998 6.33531 17.664 5.99951 17.2498 5.99951Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_354_1362">
                                                <path d="M0 0H18C21.3137 0 24 2.68629 24 6V18C24 21.3137 21.3137 24 18 24H0V0Z" fill="white"></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="linkRef">https://skyline.com/image/b/72890.png</span>
                                <span class="copy">@lang('cabinet.partners.copy')</span>
                            </p>
                        </div>
                    </div>
                    <div class="bannerItem">
                        <div class="bImage">
                            <img src="/image/b/72890.png" class="image728">
                        </div>
                        <div class="linkBlock">
                            <p class="bannerFlexName displayFlex alignItemsCenter spaceBetween">
                                <span class="bannerFlexCount">@lang('cabinet.promo.banner_title', ['attribute' => '468x60']):</span>
                                <span class="bannerFlexWeight">@lang('cabinet.promo.banner_lenght'): 6.40 KB</span>
                            </p>
                            <p class="fullLink">
                                <span class="linkCopy displayFlex alignItemsCenter spaceCenter" title="Скопировать">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_354_1362)">
                                            <path d="M20.2499 2.99951H6.74892C6.55 2.99951 6.35923 3.07853 6.21858 3.21919C6.07792 3.35984 5.9989 3.55061 5.9989 3.74953C5.9989 3.94845 6.07792 4.13922 6.21858 4.27988C6.35923 4.42053 6.55 4.49955 6.74892 4.49955H19.4999V17.25C19.4999 17.4489 19.5789 17.6397 19.7196 17.7803C19.8602 17.921 20.051 18 20.2499 18C20.4489 18 20.6396 17.921 20.7803 17.7803C20.9209 17.6397 21 17.4489 21 17.25V3.74953C21 3.55062 20.9209 3.35985 20.7803 3.21919C20.6396 3.07853 20.4489 2.99951 20.2499 2.99951V2.99951Z" fill="white"></path>
                                            <path d="M17.2498 5.99951H3.74886C3.33464 5.99951 2.99884 6.33531 2.99884 6.74953V20.2499C2.99884 20.6641 3.33464 20.9999 3.74886 20.9999H17.2498C17.664 20.9999 17.9998 20.6641 17.9998 20.2499V6.74953C17.9998 6.33531 17.664 5.99951 17.2498 5.99951Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_354_1362">
                                                <path d="M0 0H18C21.3137 0 24 2.68629 24 6V18C24 21.3137 21.3137 24 18 24H0V0Z" fill="white"></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="linkRef">https://skyline.com/image/b/72890.png</span>
                                <span class="copy">@lang('cabinet.partners.copy')</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pageTabItem " data-table="200x300">
                    <div class="bannerItem">
                        <div class="bImage">
                            <img src="/image/b/200300.png">
                        </div>
                        <div class="linkBlock">
                            <p class="bannerFlexName displayFlex alignItemsCenter spaceBetween">
                                <span class="bannerFlexCount">@lang('cabinet.promo.banner_title', ['attribute' => '468x60']):</span>
                                <span class="bannerFlexWeight">@lang('cabinet.promo.banner_lenght'): 6.40 KB</span>
                            </p>
                            <p class="fullLink">
                                <span class="linkCopy displayFlex alignItemsCenter spaceCenter" title="Скопировать">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_354_1362)">
                                            <path d="M20.2499 2.99951H6.74892C6.55 2.99951 6.35923 3.07853 6.21858 3.21919C6.07792 3.35984 5.9989 3.55061 5.9989 3.74953C5.9989 3.94845 6.07792 4.13922 6.21858 4.27988C6.35923 4.42053 6.55 4.49955 6.74892 4.49955H19.4999V17.25C19.4999 17.4489 19.5789 17.6397 19.7196 17.7803C19.8602 17.921 20.051 18 20.2499 18C20.4489 18 20.6396 17.921 20.7803 17.7803C20.9209 17.6397 21 17.4489 21 17.25V3.74953C21 3.55062 20.9209 3.35985 20.7803 3.21919C20.6396 3.07853 20.4489 2.99951 20.2499 2.99951V2.99951Z" fill="white"></path>
                                            <path d="M17.2498 5.99951H3.74886C3.33464 5.99951 2.99884 6.33531 2.99884 6.74953V20.2499C2.99884 20.6641 3.33464 20.9999 3.74886 20.9999H17.2498C17.664 20.9999 17.9998 20.6641 17.9998 20.2499V6.74953C17.9998 6.33531 17.664 5.99951 17.2498 5.99951Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_354_1362">
                                                <path d="M0 0H18C21.3137 0 24 2.68629 24 6V18C24 21.3137 21.3137 24 18 24H0V0Z" fill="white"></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="linkRef">https://skyline.com/image/b/200300.png</span>
                                <span class="copy">@lang('cabinet.partners.copy')</span>
                            </p>
                        </div>
                    </div>
                    <div class="bannerItem">
                        <div class="bImage">
                            <img src="/image/b/200300.png">
                        </div>
                        <div class="linkBlock">
                            <p class="bannerFlexName displayFlex alignItemsCenter spaceBetween">
                                <span class="bannerFlexCount">@lang('cabinet.promo.banner_title', ['attribute' => '468x60']):</span>
                                <span class="bannerFlexWeight">@lang('cabinet.promo.banner_lenght'): 6.40 KB</span>
                            </p>
                            <p class="fullLink">
                                <span class="linkCopy displayFlex alignItemsCenter spaceCenter" title="Скопировать">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_354_1362)">
                                            <path d="M20.2499 2.99951H6.74892C6.55 2.99951 6.35923 3.07853 6.21858 3.21919C6.07792 3.35984 5.9989 3.55061 5.9989 3.74953C5.9989 3.94845 6.07792 4.13922 6.21858 4.27988C6.35923 4.42053 6.55 4.49955 6.74892 4.49955H19.4999V17.25C19.4999 17.4489 19.5789 17.6397 19.7196 17.7803C19.8602 17.921 20.051 18 20.2499 18C20.4489 18 20.6396 17.921 20.7803 17.7803C20.9209 17.6397 21 17.4489 21 17.25V3.74953C21 3.55062 20.9209 3.35985 20.7803 3.21919C20.6396 3.07853 20.4489 2.99951 20.2499 2.99951V2.99951Z" fill="white"></path>
                                            <path d="M17.2498 5.99951H3.74886C3.33464 5.99951 2.99884 6.33531 2.99884 6.74953V20.2499C2.99884 20.6641 3.33464 20.9999 3.74886 20.9999H17.2498C17.664 20.9999 17.9998 20.6641 17.9998 20.2499V6.74953C17.9998 6.33531 17.664 5.99951 17.2498 5.99951Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_354_1362">
                                                <path d="M0 0H18C21.3137 0 24 2.68629 24 6V18C24 21.3137 21.3137 24 18 24H0V0Z" fill="white"></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="linkRef">https://skyline.com/image/b/200300.png</span>
                                <span class="copy">@lang('cabinet.partners.copy')</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('cabBlocked')

<link rel="stylesheet" href="/assets/css/index.css">
<div class="popup" style="display: block;">
    <div class="popupBg"></div>
    <div class="popupItem" style="display: block;">
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
            <p class="responseText">Ваш аккаунт был деактивирован</p>
            <p class="responseDesc">Для восстановления аккаунта необходимо</p>
            <p class="responseDesc">подтвердить вашу почту!</p>
            <div class="btnWrapper displayFlex spaceCenter">
                <a href="#" class="responseBtn">Подтвердить</a>
            </div>
    </div>
    <form class="popupItem" data-name="activator" id="activator" action="{{ route('register') }}">
        <svg class="popupCross" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 14L2 2M14 2L2 14" stroke="#353535" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        <h3 class="popupName">Восстановление доступа</h3>
        <p class="policeForm popDesc">На почту <a href="#" style="color: #20BF6B;"> {{ Auth::user()->email }} </a><br> был отправлен код восстановления доступа.</p>
        <p class="policeForm popDesc">У вас будет 24 часа на приобретение пакета.</p>
        <input type="text" name="name" placeholder="Код формата: 000000" class="formInput" readonly onfocus="this.removeAttribute('readonly')">
        <button class="formButton">Восстановить</button>
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
