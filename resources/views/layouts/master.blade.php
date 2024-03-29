<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>MySkyline Company - @yield('title')</title>
    <link rel="stylesheet" href="/assets/css/index.css">
</head>
<body>
    <div class="mobileMenu">
        <div class="page">
            {{-- <div class="langChanger">
                <p class="changerItem"><a href="{{ route('locale', 'en') }}">en</a></p>
                <p class="changerItem"><a href="{{ route('locale', 'de') }}">de</a></p>
                <p class="changerItem"><a href="{{ route('locale', 'ru') }}">ru</a></p>
            </div> --}}
            <ul class="navigation">
                <li>
                    <a href="{{ route('index') }}"{{ Route::currentRouteName() == 'index' ? ' class=_active' : '' }}>@lang('mainPages.navigation.home')</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"{{ Route::currentRouteName() == 'about' ? ' class=_active' : '' }}>@lang('mainPages.navigation.about')</a>
                </li>
                <li>
                    <a href="{{ route('marketing') }}"{{ Route::currentRouteName() == 'marketing' ? ' class=_active' : '' }}>@lang('mainPages.navigation.marketing')</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"{{ Route::currentRouteName() == 'contact' ? ' class=_active' : '' }}>@lang('mainPages.navigation.contact')</a>
                </li>
            </ul>
            @if (Auth::check())
            <a href="{{ route('cabinet') }}" class="btn userBtn">{{Auth::user()->UserInfo->login}}</a>
            @else
            <a href="#" class="btn logBtn popupBtn" data-name="login">@lang('mainPages.header_btn.login')</a>
            <a href="#" class="btn regBtn popupBtn" data-name="register">@lang('mainPages.header_btn.register')</a>
            @endif
        </div>
    </div>
    <header class="header">
        <div class="page">
            <div class="headerInner">
                <a href="/" class="logotype">
                    <svg width="143" height="28" viewBox="0 0 143 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.92969 4.9375H5.55469L10.4883 18.0977L15.4102 4.9375H18.0352L11.5195 22H9.43359L2.92969 4.9375ZM1.73438 4.9375H4.23047L4.66406 16.3281V22H1.73438V4.9375ZM16.7344 4.9375H19.2422V22H16.3008V16.3281L16.7344 4.9375ZM24.0352 4.9375L27.9961 13.082L31.957 4.9375H35.2148L29.4727 15.7188V22H26.5078V15.7188L20.7656 4.9375H24.0352Z" fill="white"/>
                        <path d="M58.7109 17.6055C58.7109 17.2539 58.6562 16.9414 58.5469 16.668C58.4453 16.3945 58.2617 16.1445 57.9961 15.918C57.7305 15.6914 57.3555 15.4727 56.8711 15.2617C56.3945 15.043 55.7852 14.8203 55.043 14.5938C54.2305 14.3438 53.4805 14.0664 52.793 13.7617C52.1133 13.4492 51.5195 13.0898 51.0117 12.6836C50.5039 12.2695 50.1094 11.7969 49.8281 11.2656C49.5469 10.7266 49.4062 10.1055 49.4062 9.40234C49.4062 8.70703 49.5508 8.07422 49.8398 7.50391C50.1367 6.93359 50.5547 6.44141 51.0938 6.02734C51.6406 5.60547 52.2852 5.28125 53.0273 5.05469C53.7695 4.82031 54.5898 4.70312 55.4883 4.70312C56.7539 4.70312 57.8438 4.9375 58.7578 5.40625C59.6797 5.875 60.3867 6.50391 60.8789 7.29297C61.3789 8.08203 61.6289 8.95312 61.6289 9.90625H58.7109C58.7109 9.34375 58.5898 8.84766 58.3477 8.41797C58.1133 7.98047 57.7539 7.63672 57.2695 7.38672C56.793 7.13672 56.1875 7.01172 55.4531 7.01172C54.7578 7.01172 54.1797 7.11719 53.7188 7.32812C53.2578 7.53906 52.9141 7.82422 52.6875 8.18359C52.4609 8.54297 52.3477 8.94922 52.3477 9.40234C52.3477 9.72266 52.4219 10.0156 52.5703 10.2812C52.7188 10.5391 52.9453 10.7812 53.25 11.0078C53.5547 11.2266 53.9375 11.4336 54.3984 11.6289C54.8594 11.8242 55.4023 12.0117 56.0273 12.1914C56.9727 12.4727 57.7969 12.7852 58.5 13.1289C59.2031 13.4648 59.7891 13.8477 60.2578 14.2773C60.7266 14.707 61.0781 15.1953 61.3125 15.7422C61.5469 16.2812 61.6641 16.8945 61.6641 17.582C61.6641 18.3008 61.5195 18.9492 61.2305 19.5273C60.9414 20.0977 60.5273 20.5859 59.9883 20.9922C59.457 21.3906 58.8164 21.6992 58.0664 21.918C57.3242 22.1289 56.4961 22.2344 55.582 22.2344C54.7617 22.2344 53.9531 22.125 53.1562 21.9062C52.3672 21.6875 51.6484 21.3555 51 20.9102C50.3516 20.457 49.8359 19.8945 49.4531 19.2227C49.0703 18.543 48.8789 17.75 48.8789 16.8438H51.8203C51.8203 17.3984 51.9141 17.8711 52.1016 18.2617C52.2969 18.6523 52.5664 18.9727 52.9102 19.2227C53.2539 19.4648 53.6523 19.6445 54.1055 19.7617C54.5664 19.8789 55.0586 19.9375 55.582 19.9375C56.2695 19.9375 56.8438 19.8398 57.3047 19.6445C57.7734 19.4492 58.125 19.1758 58.3594 18.8242C58.5938 18.4727 58.7109 18.0664 58.7109 17.6055ZM67.207 4.9375V22H64.2656V4.9375H67.207ZM77.4609 4.9375L70.5469 13.1523L66.6094 17.3242L66.0938 14.4062L68.9062 10.9375L73.875 4.9375H77.4609ZM74.2969 22L68.6836 13.9141L70.7109 11.9102L77.7891 22H74.2969ZM81.0586 4.9375L85.0195 13.082L88.9805 4.9375H92.2383L86.4961 15.7188V22H83.5312V15.7188L77.7891 4.9375H81.0586ZM104.402 20.7695V22H95.5547V20.7695H104.402ZM95.9766 4.9375V22H94.5352V4.9375H95.9766ZM108.949 4.9375V22H107.508V4.9375H108.949ZM126.293 4.9375V22H124.84L115.031 7.42188V22H113.59V4.9375H115.031L124.863 19.5156V4.9375H126.293ZM141.258 20.7695V22H131.66V20.7695H141.258ZM132.094 4.9375V22H130.652V4.9375H132.094ZM140.062 12.5898V13.8203H131.66V12.5898H140.062ZM141.199 4.9375V6.17969H131.66V4.9375H141.199Z" fill="white"/>
                        <rect x="41" width="2" height="28" fill="white"/>
                        </svg>
                </a>
                <ul class="navigation">
                    <li>
                        <a href="{{ route('index') }}"{{ Route::currentRouteName() == 'index' ? ' class=_active' : '' }}>@lang('mainPages.navigation.home')</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"{{ Route::currentRouteName() == 'about' ? ' class=_active' : '' }}>@lang('mainPages.navigation.about')</a>
                    </li>
                    <li>
                        <a href="{{ route('marketing') }}"{{ Route::currentRouteName() == 'marketing' ? ' class=_active' : '' }}>@lang('mainPages.navigation.marketing')</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"{{ Route::currentRouteName() == 'contact' ? ' class=_active' : '' }}>@lang('mainPages.navigation.contact')</a>
                    </li>
                </ul>
                <div class="rightHeader">
                    {{-- <div class="langChanger">
                        <p class="changerItem"><a href="{{ route('locale', 'en') }}">en</a></p>
                        <p class="changerItem"><a href="{{ route('locale', 'de') }}">de</a></p>
                        <p class="changerItem"><a href="{{ route('locale', 'ru') }}">ru</a></p>
                    </div> --}}
                    @if (Auth::check())
                    <a href="{{ route('cabinet') }}" class="btn userBtn">{{Auth::user()->UserInfo->login}}</a>
                    @else
                    <a href="#" class="btn logBtn popupBtn" data-name="login">@lang('mainPages.header_btn.login')</a>
                    <a href="#" class="btn regBtn popupBtn" data-name="register">@lang('mainPages.header_btn.register')</a>
                    @endif
                    <div class="burgerBtn"></div>
                </div>

            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer">
        <div class="page">
            <div class="footerFlex">
                <div class="footerItem">
                    <div class="footerAbout">
                        <h3 class="footerTitle">@lang('mainPages.footer.aboutUs')</h2>
                        <p class="footerText">@lang('mainPages.footer.description')</p>
                    </div>
                    <p class="copyright">@lang('mainPages.footer.copy')</p>
                    <img src="/image/wewer.png" alt="platezhki">
                </div>
                <div class="footerItem">
                    <h3 class="footerTitle">@lang('mainPages.footer.contactUs')</h2>
                        <div class="footerLinks">
                            <a href="tel:@lang('mainPages.footer.phone')" class="footerLink">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.41333 7.19333C5.37333 9.08 6.92 10.62 8.80667 11.5867L10.2733 10.12C10.4533 9.94 10.72 9.88 10.9533 9.96C11.7 10.2067 12.5067 10.34 13.3333 10.34C13.7 10.34 14 10.64 14 11.0067V13.3333C14 13.7 13.7 14 13.3333 14C7.07333 14 2 8.92667 2 2.66667C2 2.3 2.3 2 2.66667 2H5C5.36667 2 5.66667 2.3 5.66667 2.66667C5.66667 3.5 5.8 4.3 6.04667 5.04667C6.12 5.28 6.06667 5.54 5.88 5.72667L4.41333 7.19333Z" fill="white"/>
                                    </svg>
                                <span>@lang('mainPages.footer.phone')</span>
                            </a>
                            <a href="mailto:@lang('mainPages.footer.mail')" class="footerLink">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.66659 13.3334C2.29992 13.3334 1.98614 13.203 1.72525 12.9421C1.46392 12.6807 1.33325 12.3667 1.33325 12.0001V4.00008C1.33325 3.63341 1.46392 3.31964 1.72525 3.05875C1.98614 2.79741 2.29992 2.66675 2.66659 2.66675H13.3333C13.6999 2.66675 14.0139 2.79741 14.2753 3.05875C14.5361 3.31964 14.6666 3.63341 14.6666 4.00008V12.0001C14.6666 12.3667 14.5361 12.6807 14.2753 12.9421C14.0139 13.203 13.6999 13.3334 13.3333 13.3334H2.66659ZM7.99992 8.55008C8.05547 8.55008 8.1137 8.54164 8.17458 8.52475C8.23592 8.5083 8.29436 8.48342 8.34992 8.45008L13.0666 5.50008C13.1555 5.44453 13.2221 5.37519 13.2666 5.29208C13.311 5.20853 13.3333 5.11675 13.3333 5.01675C13.3333 4.79453 13.2388 4.62786 13.0499 4.51675C12.861 4.40564 12.6666 4.41119 12.4666 4.53341L7.99992 7.33341L3.53325 4.53341C3.33325 4.41119 3.13881 4.4083 2.94992 4.52475C2.76103 4.64164 2.66659 4.80564 2.66659 5.01675C2.66659 5.12786 2.68881 5.22497 2.73325 5.30808C2.7777 5.39164 2.84436 5.45564 2.93325 5.50008L7.64992 8.45008C7.70547 8.48342 7.76392 8.5083 7.82525 8.52475C7.88614 8.54164 7.94436 8.55008 7.99992 8.55008V8.55008Z" fill="white"/>
                                    </svg>
                                <span>@lang('mainPages.footer.mail')</span>
                            </a>
                            <a href="@lang('mainPages.footer.footerLink1')" class="footerLink" target="_blank">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.6599 5.58066C12.1506 5.08526 12.6378 3.92933 10.5932 5.33296C8.68322 6.66002 6.7603 7.96799 4.82471 9.25667C4.52997 9.39123 4.21133 9.46425 3.88792 9.47134C3.56452 9.47843 3.24304 9.41946 2.94278 9.29796C1.71602 8.92641 0.283898 8.43101 0.283898 8.43101C0.283898 8.43101 -0.69396 7.81086 0.979955 7.15033C0.979955 7.15033 8.05698 4.21831 10.5114 3.18533C11.4519 2.7725 14.6424 1.45143 14.6424 1.45143C14.6424 1.45143 16.1154 0.872568 15.9927 2.2771C15.9518 2.85507 15.6247 4.87974 15.2976 7.06776C14.806 10.1649 14.2744 13.5519 14.2744 13.5519C14.2744 13.5519 14.1926 14.5015 13.4974 14.6666C12.7533 14.6539 12.0342 14.3925 11.4528 13.9235C11.2892 13.7996 8.38501 11.941 7.32092 11.0328C7.21268 10.9587 7.12474 10.8583 7.06529 10.7407C7.00583 10.6232 6.9768 10.4923 6.98088 10.3604C6.98496 10.2285 7.02202 10.0997 7.08863 9.98616C7.15523 9.87258 7.24921 9.77785 7.36181 9.71079C8.82127 8.36273 10.2543 6.98575 11.6599 5.58066V5.58066Z" fill="white"/>
                                </svg>
                                <span>@lang('mainPages.footer.footerLink0')</span>
                            </a>
                            <a href="@lang('mainPages.footer.footerLink11')" class="footerLink" target="_blank">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.7049 4.6301C14.6252 4.33412 14.4692 4.06425 14.2525 3.84752C14.0357 3.63078 13.7659 3.47477 13.4699 3.3951C12.3799 3.1001 7.99989 3.1001 7.99989 3.1001C7.99989 3.1001 3.61989 3.1001 2.52989 3.3951C2.23391 3.47477 1.96404 3.63078 1.74731 3.84752C1.53057 4.06425 1.37456 4.33412 1.29489 4.6301C1.09136 5.74173 0.992594 6.87001 0.999888 8.0001C0.992594 9.13019 1.09136 10.2585 1.29489 11.3701C1.37456 11.6661 1.53057 11.9359 1.74731 12.1527C1.96404 12.3694 2.23391 12.5254 2.52989 12.6051C3.61989 12.9001 7.99989 12.9001 7.99989 12.9001C7.99989 12.9001 12.3799 12.9001 13.4699 12.6051C13.7659 12.5254 14.0357 12.3694 14.2525 12.1527C14.4692 11.9359 14.6252 11.6661 14.7049 11.3701C14.9084 10.2585 15.0072 9.13019 14.9999 8.0001C15.0072 6.87001 14.9084 5.74173 14.7049 4.6301V4.6301ZM6.59989 10.1001V5.9001L10.2349 8.0001L6.59989 10.1001Z" fill="white"/>
                                    </svg>
                                <span>@lang('mainPages.footer.footerLink01')</span>
                            </a>
                            <a href="@lang('mainPages.footer.footerLink111')" class="footerLink" target="_blank">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.82822 12.6273H8.78422C8.78422 12.6273 9.07322 12.5945 9.22022 12.432C9.35622 12.2827 9.35122 12.0026 9.35122 12.0026C9.35122 12.0026 9.33222 10.6908 9.92822 10.4975C10.5152 10.3074 11.2692 11.7654 12.0682 12.3267C12.6722 12.751 13.1312 12.6579 13.1312 12.6579L15.2682 12.6273C15.2682 12.6273 16.3862 12.5567 15.8562 11.658C15.8132 11.5844 15.5472 10.9934 14.2672 9.77876C12.9272 8.50686 13.1072 8.71339 14.7212 6.51413C15.7042 5.17474 16.0972 4.3568 15.9742 4.00712C15.8572 3.67381 15.1342 3.76174 15.1342 3.76174L12.7302 3.77605C12.7302 3.77605 12.5522 3.75151 12.4192 3.83229C12.2902 3.91204 12.2072 4.09607 12.2072 4.09607C12.2072 4.09607 11.8262 5.13282 11.3182 6.01416C10.2472 7.87397 9.81822 7.97212 9.64322 7.85659C9.23622 7.58769 9.33822 6.77485 9.33822 6.1982C9.33822 4.39565 9.60522 3.64416 8.81722 3.4499C8.55522 3.38548 8.36322 3.34254 7.69422 3.33538C6.83622 3.32618 6.10922 3.33845 5.69822 3.54396C5.42422 3.68097 5.21322 3.98667 5.34222 4.00406C5.50122 4.02553 5.86122 4.10323 6.05222 4.36906C6.29922 4.71158 6.29022 5.4825 6.29022 5.4825C6.29022 5.4825 6.43222 7.60405 5.95922 7.86783C5.63422 8.0488 5.18922 7.67971 4.23422 5.99167C3.74522 5.12771 3.37522 4.17173 3.37522 4.17173C3.37522 4.17173 3.30422 3.99383 3.17722 3.89874C3.02322 3.78321 2.80722 3.7464 2.80722 3.7464L0.521223 3.76072C0.521223 3.76072 0.178223 3.77094 0.0522233 3.92328C-0.0597768 4.05927 0.0432233 4.33941 0.0432233 4.33941C0.0432233 4.33941 1.83322 8.62035 3.85922 10.7787C5.71822 12.7571 7.82822 12.6273 7.82822 12.6273V12.6273Z" fill="white"/>
                                    </svg>
                                <span>@lang('mainPages.footer.footerLink011')</span>
                            </a>
                            <a href="@lang('mainPages.footer.personal-link')" class="footerLink _police" target="_blank">@lang('mainPages.footer.personal')</a>
                            <a href="@lang('mainPages.footer.policy-link')" class="footerLink _police" target="_blank">@lang('mainPages.footer.policy')</a>
                            <a href="@lang('mainPages.footer.taker-link')" class="footerLink _police" target="_blank">@lang('mainPages.footer.taker')</a>
                        </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="popup"
        @if (session()->has('warning') || session()->has('paysuccess') || session()->has('payfail'))
            style="display: block;"
        @endif>
        <div class="popupBg"></div>
        @if (session()->has('warning'))
            <div class="popupItem" data-name="access" style="display: block;">
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
                    <p class="responseText">{{ session()->get('warning') }}</p>
                    <div class="btnWrapper displayFlex spaceCenter">
                        <a href="#" class="responseBtn">@lang('popups.close')</a>
                    </div>
            </div>
        @endif
        @if (session()->has('payfail'))
            <div class="popupItem" data-name="access" style="display: block;">
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
                    <p class="responseText">{{ session()->get('payfail') }}</p>
                    <div class="btnWrapper displayFlex spaceCenter">
                        <a href="{{ route('cabinet') }}" class="responseBtn noreload">@lang('popups.close')</a>
                    </div>
            </div>
        @endif
        @if (session()->has('paysuccess'))
            <div class="popupItem" data-name="access" style="display: block;">
                <svg class="responseIcon" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_53_728)">
                        <path opacity="0.12" d="M45 90C69.5965 90 89.536 69.8528 89.536 45C89.536 20.1472 69.5965 0 45 0C20.4034 0 0.463867 20.1472 0.463867 45C0.463867 69.8528 20.4034 90 45 90Z" fill="#20BF6B"/>
                        <path d="M34.3155 46.0004C33.7432 45.5221 32.9975 45.2626 32.2278 45.2739C31.4583 45.2853 30.7219 45.5666 30.1661 46.0614C29.6104 46.5563 29.2767 47.2282 29.2318 47.9422C29.1869 48.6562 29.4341 49.3597 29.924 49.9114L36.6942 56.5147C36.9776 56.791 37.3182 57.0113 37.6955 57.1623C38.0728 57.3132 38.479 57.3918 38.8899 57.3933C39.2985 57.3954 39.7034 57.3214 40.0806 57.1753C40.4577 57.0292 40.7995 56.8142 41.0856 56.5431L61.7619 36.7047C62.0423 36.4368 62.2631 36.1201 62.4117 35.7728C62.5604 35.4256 62.634 35.0545 62.6283 34.6808C62.6227 34.3072 62.5379 33.9382 62.3788 33.5949C62.2196 33.2516 61.9893 32.9409 61.701 32.6804C61.4126 32.4199 61.0719 32.2147 60.6982 32.0766C60.3245 31.9384 59.9252 31.87 59.5231 31.8753C59.1209 31.8805 58.7239 31.9594 58.3546 32.1072C57.9853 32.2551 57.6509 32.4691 57.3705 32.7371L38.9203 50.4782L34.3155 46.0004Z" fill="#20BF6B"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_53_728">
                            <rect width="90" height="90" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <p class="responseText">{{ session()->get('paysuccess') }}</p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="{{ route('cabinet') }}" class="responseBtn noreload">@lang('popups.close')</a>
                </div>
            </div>
        @endif
        <div class="popupItem" data-name="success">
            <svg class="responseIcon" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_53_728)">
                    <path opacity="0.12" d="M45 90C69.5965 90 89.536 69.8528 89.536 45C89.536 20.1472 69.5965 0 45 0C20.4034 0 0.463867 20.1472 0.463867 45C0.463867 69.8528 20.4034 90 45 90Z" fill="#20BF6B"/>
                    <path d="M34.3155 46.0004C33.7432 45.5221 32.9975 45.2626 32.2278 45.2739C31.4583 45.2853 30.7219 45.5666 30.1661 46.0614C29.6104 46.5563 29.2767 47.2282 29.2318 47.9422C29.1869 48.6562 29.4341 49.3597 29.924 49.9114L36.6942 56.5147C36.9776 56.791 37.3182 57.0113 37.6955 57.1623C38.0728 57.3132 38.479 57.3918 38.8899 57.3933C39.2985 57.3954 39.7034 57.3214 40.0806 57.1753C40.4577 57.0292 40.7995 56.8142 41.0856 56.5431L61.7619 36.7047C62.0423 36.4368 62.2631 36.1201 62.4117 35.7728C62.5604 35.4256 62.634 35.0545 62.6283 34.6808C62.6227 34.3072 62.5379 33.9382 62.3788 33.5949C62.2196 33.2516 61.9893 32.9409 61.701 32.6804C61.4126 32.4199 61.0719 32.2147 60.6982 32.0766C60.3245 31.9384 59.9252 31.87 59.5231 31.8753C59.1209 31.8805 58.7239 31.9594 58.3546 32.1072C57.9853 32.2551 57.6509 32.4691 57.3705 32.7371L38.9203 50.4782L34.3155 46.0004Z" fill="#20BF6B"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_53_728">
                    <rect width="90" height="90" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                <p class="responseText">@lang('popups.changer')</p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="#" class="responseBtn _greened">@lang('popups.close')</a>
                </div>
        </div>
        <div class="popupItem" data-name="error">
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
                <p class="responseText">@lang('popups.error')</p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="#" class="responseBtn">@lang('popups.close')</a>
                </div>
        </div>
        <form class="popupItem" data-name="register" id="register" action="{{ route('register') }}">
            <svg class="popupCross" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 14L2 2M14 2L2 14" stroke="#353535" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <h3 class="popupName">Регистрация</h3>
            <input type="text" name="name" placeholder="Имя Фамилия *" class="formInput" readonly onfocus="this.removeAttribute('readonly')">
            <input type="email" name="email" placeholder="E-Mail почта *" class="formInput" readonly onfocus="this.removeAttribute('readonly')">
            <input type="password" name="password" placeholder="Придумайте пароль *" class="formInput" readonly onfocus="this.removeAttribute('readonly')">
            <input type="password" name="password_confirmation" placeholder="Повторите пароль *" class="formInput" readonly onfocus="this.removeAttribute('readonly')">
            <input type="hidden" name="sponsor" value="{{ session('sponsor') }}">
            @if ( session('sponsor') )
                <p class="partnerParent">Вас пригласил:&nbsp;<span>{{ session('sponsor') }}</span></p>
            @endif
            <button class="formButton">Зарегистрироваться</button>
            <p class="policeForm">Нажимая кнопку, Вы принимаете условия<br><a href="/police">Пользовательского соглашения</a></p>
        </form>
        <form class="popupItem" data-name="login" id="login" action="{{ route('login') }}">
            <svg class="popupCross" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 14L2 2M14 2L2 14" stroke="#353535" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <h3 class="popupName">Авторизация</h3>
            <input type="email" name="email" placeholder="Ваш E-Mail *" class="formInput">
            <input type="password" name="password" placeholder="Ваш пароль *" class="formInput">
            <button class="formButton">Авторизоваться</button>
            <p class="policeForm">Забыли пароль?<br><a href="#" class="popupBtn" data-name="repair">Восстановить</a></p>
        </form>
        <form class="popupItem" data-name="repair" id="passwordRepair" action="{{ route('lostPassword') }}">
            <svg class="popupCross" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 14L2 2M14 2L2 14" stroke="#353535" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <h3 class="popupName">Восстановление</h3>
            <input type="email" name="mail" placeholder="Ваш E-Mail *" class="formInput">
            <button class="formButton">Отправить ссылку</button>
            <p class="policeForm">Вспомнили пароль?<br><a href="#" class="popupBtn" data-name="login">Авторизоваться</a></p>
        </form>
    </div>

    <script src="/assets/js/jquery-3.6.1.min.js"></script>
    <script src="/assets/js/lang.js"></script>
    <script src="/assets/js/index.js"></script>
    <script src="/assets/js/ajax.js"></script>
</body>
</html>
