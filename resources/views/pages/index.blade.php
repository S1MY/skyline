@extends('layouts.master')

@section('title', __('pagesTitle.navigation.home'))

@section('content')
    <div class="headerP"></div>
    <section class="heroParent">
        <div class="hero" style="background: url(/image/home/slide1.jpg);">
            <div class="page heroTopper">
                <h1 class="heroTitle">@lang('mainPages.main_first_screen.title')</h1>
                <p class="heroText">@lang('mainPages.main_first_screen.subtitle')</p>
                <a href="#" class="btn heroBtn popupBtn" data-name="register">@lang('mainPages.main_first_screen.btn')</a>
            </div>
        </div>
        <div class="page heroAbsolute">
            <div class="absoluteItem">
                <img src="/image/home/1.png" alt="1">
                <h3 class="absTitle">@lang('mainPages.main_first_screen_abs_element.first_title')</h3>
                <p class="absText">@lang('mainPages.main_first_screen_abs_element.first_desc')</p>
                <a href="{{ route('marketing') }}" class="absLink"><img src="/image/home/cross.png" alt="cross"></a>
            </div>
            <div class="absoluteItem">
                <img src="/image/home/2.png" alt="2">
                <h3 class="absTitle">@lang('mainPages.main_first_screen_abs_element.second_title')</h3>
                <p class="absText">@lang('mainPages.main_first_screen_abs_element.second_desc')</p>
                <a href="{{ route('marketing') }}" class="absLink"><img src="/image/home/cross.png" alt="cross"></a>
            </div>
            <div class="absoluteItem">
                <img src="/image/home/3.png" alt="3">
                <h3 class="absTitle">@lang('mainPages.main_first_screen_abs_element.third_title')</h3>
                <p class="absText">@lang('mainPages.main_first_screen_abs_element.third_desc')</p>
                <a href="{{ route('marketing') }}" class="absLink"><img src="/image/home/cross.png" alt="cross"></a>
            </div>
        </div>
    </section>
    <section class="section _expert">
        <div class="page">
            <h2 class="title">@lang('mainPages.main_second_screen.title')</h2>
            <p class="subText">@lang('mainPages.main_second_screen.subtitle')</p>
            <div class="mediaFlex">
                <div class="mediaItem">
                    <p class="mediaText">@lang('mainPages.main_second_screen.description')</p>
                    <div class="mediaLib">
                        <div class="mediaLibItem">
                            <div class="mediaLibIcon"><img src="/image/home/m1.png" alt="mediaLibIcon"></div>
                            <p class="mediaLibName">@lang('mainPages.main_second_screen.tabs.first')</p>
                        </div>
                        <div class="mediaLibItem">
                            <div class="mediaLibIcon"><img src="/image/home/m2.png" alt="mediaLibIcon"></div>
                            <p class="mediaLibName">@lang('mainPages.main_second_screen.tabs.second')</p>
                        </div>
                        <div class="mediaLibItem">
                            <div class="mediaLibIcon"><img src="/image/home/m3.png" alt="mediaLibIcon"></div>
                            <p class="mediaLibName">@lang('mainPages.main_second_screen.tabs.third')</p>
                        </div>
                        <div class="mediaLibItem">
                            <div class="mediaLibIcon"><img src="/image/home/m4.png" alt="mediaLibIcon"></div>
                            <p class="mediaLibName">@lang('mainPages.main_second_screen.tabs.fourth')</p>
                        </div>
                    </div>
                </div>
                <div class="mediaItem">
                    <div class="noteWrapper">
                        <iframe class="noteVideo" width="560" height="315" src="@lang('mainPages.main_second_screen.videolink')" title="@lang('mainPages.main_second_screen.videoName')" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="page">
            <h2 class="title">@lang('mainPages.main_third_screen.title')</h2>
            <p class="subText">@lang('mainPages.main_third_screen.subtitle')</p>
            <div class="servicesFlex">
                <div class="serviceItem">
                    <div class="serviceIcon"><img src="/image/home/s1.png" alt="serviceIcon"></div>
                    <h3 class="serviceTitle">@lang('mainPages.main_third_screen.cards.first_title')</h3>
                    <p class="serviceText">@lang('mainPages.main_third_screen.cards.first_description')</p>
                    {{-- <a href="#" class="serviceBtn">@lang('mainPages.main_third_screen.cards.first_btn')</a> --}}
                </div>
                <div class="serviceItem">
                    <div class="serviceIcon"><img src="/image/home/s2.png" alt="serviceIcon"></div>
                    <h3 class="serviceTitle">@lang('mainPages.main_third_screen.cards.second_title')</h3>
                    <p class="serviceText">@lang('mainPages.main_third_screen.cards.second_description')</p>
                    {{-- <a href="#" class="serviceBtn">@lang('mainPages.main_third_screen.cards.second_btn')</a> --}}
                </div>
                <div class="serviceItem">
                    <div class="serviceIcon"><img src="/image/home/s3.png" alt="serviceIcon"></div>
                    <h3 class="serviceTitle">@lang('mainPages.main_third_screen.cards.third_title')</h3>
                    <p class="serviceText">@lang('mainPages.main_third_screen.cards.third_description')</p>
                    {{-- <a href="#" class="serviceBtn">@lang('mainPages.main_third_screen.cards.third_btn')</a> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="section _expert">
        <div class="page">
            <h2 class="title">@lang('mainPages.main_fourth_screen.title')</h2>
            <p class="subText">@lang('mainPages.main_fourth_screen.subtitle')</p>
            <div class="grabFlex">
                <div class="grabItem">
                    <div class="grabIcon"><img src="/image/home/g1.png" alt="grabIcon"></div>
                    <h3 class="serviceTitle">@lang('mainPages.main_fourth_screen.card.first_title')</h3>
                    <p class="serviceText">@lang('mainPages.main_fourth_screen.card.first_description')</p>
                </div>
                <div class="grabItem">
                    <div class="grabIcon"><img src="/image/home/g2.png" alt="grabIcon"></div>
                    <h3 class="serviceTitle">@lang('mainPages.main_fourth_screen.card.second_title')</h3>
                    <p class="serviceText">@lang('mainPages.main_fourth_screen.card.second_description')</p>
                </div>
                <div class="grabItem">
                    <div class="grabIcon"><img src="/image/home/g3.png" alt="grabIcon"></div>
                    <h3 class="serviceTitle">@lang('mainPages.main_fourth_screen.card.third_title')</h3>
                    <p class="serviceText">@lang('mainPages.main_fourth_screen.card.third_description')</p>
                </div>
                <div class="grabItem">
                    <div class="grabIcon"><img src="/image/home/g4.png" alt="grabIcon"></div>
                    <h3 class="serviceTitle">@lang('mainPages.main_fourth_screen.card.fourth_title')</h3>
                    <p class="serviceText">@lang('mainPages.main_fourth_screen.card.fourth_description')</p>
                </div>
                <div class="grabItem">
                    <div class="grabIcon"><img src="/image/home/g5.png" alt="grabIcon"></div>
                    <h3 class="serviceTitle">@lang('mainPages.main_fourth_screen.card.fifth_title')</h3>
                    <p class="serviceText">@lang('mainPages.main_fourth_screen.card.fifth_description')</p>
                </div>
                <div class="grabItem">
                    <div class="grabIcon"><img src="/image/home/g6.png" alt="grabIcon"></div>
                    <h3 class="serviceTitle">@lang('mainPages.main_fourth_screen.card.sixth_title')</h3>
                    <p class="serviceText">@lang('mainPages.main_fourth_screen.card.sixth_description')</p>
                </div>
            </div>
            <div class="btnCenter">
                <a href="#" class="btn heroBtn popupBtn" data-name="register">@lang('mainPages.main_fourth_screen.btn')</a>
            </div>
        </div>
    </section>
    <section class="section _greened">
        <div class="page">
            <h2 class="title">@lang('mainPages.main_fifth_screen.title')</h2>
            <p class="subText">@lang('mainPages.main_fifth_screen.subtitle')</p>
            <div class="rotateFlex">
                <div class="rotateItem">
                    <div class="rotateChild">
                        <div class="rotateImg"><img src="/image/home/l1.jpg" alt="rotateImg"></div>
                        <svg class="rotateLogo" width="183" height="52" viewBox="0 0 183 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="183" height="52" rx="6" fill="white"/>
                            <path d="M22.9297 16.9375H25.5547L30.4883 30.0977L35.4102 16.9375H38.0352L31.5195 34H29.4336L22.9297 16.9375ZM21.7344 16.9375H24.2305L24.6641 28.3281V34H21.7344V16.9375ZM36.7344 16.9375H39.2422V34H36.3008V28.3281L36.7344 16.9375ZM44.0352 16.9375L47.9961 25.082L51.957 16.9375H55.2148L49.4727 27.7188V34H46.5078V27.7188L40.7656 16.9375H44.0352Z" fill="#202020"/>
                            <path d="M78.7109 29.6055C78.7109 29.2539 78.6562 28.9414 78.5469 28.668C78.4453 28.3945 78.2617 28.1445 77.9961 27.918C77.7305 27.6914 77.3555 27.4727 76.8711 27.2617C76.3945 27.043 75.7852 26.8203 75.043 26.5938C74.2305 26.3438 73.4805 26.0664 72.793 25.7617C72.1133 25.4492 71.5195 25.0898 71.0117 24.6836C70.5039 24.2695 70.1094 23.7969 69.8281 23.2656C69.5469 22.7266 69.4062 22.1055 69.4062 21.4023C69.4062 20.707 69.5508 20.0742 69.8398 19.5039C70.1367 18.9336 70.5547 18.4414 71.0938 18.0273C71.6406 17.6055 72.2852 17.2812 73.0273 17.0547C73.7695 16.8203 74.5898 16.7031 75.4883 16.7031C76.7539 16.7031 77.8438 16.9375 78.7578 17.4062C79.6797 17.875 80.3867 18.5039 80.8789 19.293C81.3789 20.082 81.6289 20.9531 81.6289 21.9062H78.7109C78.7109 21.3438 78.5898 20.8477 78.3477 20.418C78.1133 19.9805 77.7539 19.6367 77.2695 19.3867C76.793 19.1367 76.1875 19.0117 75.4531 19.0117C74.7578 19.0117 74.1797 19.1172 73.7188 19.3281C73.2578 19.5391 72.9141 19.8242 72.6875 20.1836C72.4609 20.543 72.3477 20.9492 72.3477 21.4023C72.3477 21.7227 72.4219 22.0156 72.5703 22.2812C72.7188 22.5391 72.9453 22.7812 73.25 23.0078C73.5547 23.2266 73.9375 23.4336 74.3984 23.6289C74.8594 23.8242 75.4023 24.0117 76.0273 24.1914C76.9727 24.4727 77.7969 24.7852 78.5 25.1289C79.2031 25.4648 79.7891 25.8477 80.2578 26.2773C80.7266 26.707 81.0781 27.1953 81.3125 27.7422C81.5469 28.2812 81.6641 28.8945 81.6641 29.582C81.6641 30.3008 81.5195 30.9492 81.2305 31.5273C80.9414 32.0977 80.5273 32.5859 79.9883 32.9922C79.457 33.3906 78.8164 33.6992 78.0664 33.918C77.3242 34.1289 76.4961 34.2344 75.582 34.2344C74.7617 34.2344 73.9531 34.125 73.1562 33.9062C72.3672 33.6875 71.6484 33.3555 71 32.9102C70.3516 32.457 69.8359 31.8945 69.4531 31.2227C69.0703 30.543 68.8789 29.75 68.8789 28.8438H71.8203C71.8203 29.3984 71.9141 29.8711 72.1016 30.2617C72.2969 30.6523 72.5664 30.9727 72.9102 31.2227C73.2539 31.4648 73.6523 31.6445 74.1055 31.7617C74.5664 31.8789 75.0586 31.9375 75.582 31.9375C76.2695 31.9375 76.8438 31.8398 77.3047 31.6445C77.7734 31.4492 78.125 31.1758 78.3594 30.8242C78.5938 30.4727 78.7109 30.0664 78.7109 29.6055ZM87.207 16.9375V34H84.2656V16.9375H87.207ZM97.4609 16.9375L90.5469 25.1523L86.6094 29.3242L86.0938 26.4062L88.9062 22.9375L93.875 16.9375H97.4609ZM94.2969 34L88.6836 25.9141L90.7109 23.9102L97.7891 34H94.2969ZM101.059 16.9375L105.02 25.082L108.98 16.9375H112.238L106.496 27.7188V34H103.531V27.7188L97.7891 16.9375H101.059Z" fill="#EB3B5A"/>
                            <path d="M124.789 31.668V34H116.223V31.668H124.789ZM117.043 16.9375V34H114.102V16.9375H117.043ZM130.203 16.9375V34H127.262V16.9375H130.203ZM147.395 16.9375V34H144.453L136.801 21.7773V34H133.859V16.9375H136.801L144.477 29.1836V16.9375H147.395ZM162.066 31.668V34H153.008V31.668H162.066ZM153.84 16.9375V34H150.898V16.9375H153.84ZM160.883 24.0625V26.3594H153.008V24.0625H160.883ZM162.008 16.9375V19.2812H153.008V16.9375H162.008Z" fill="#3867D6"/>
                            <rect x="61" y="12" width="2" height="28" fill="#202020"/>
                        </svg>
                        <p class="rotateText">@lang('mainPages.main_fifth_screen.cards.first')</p>
                    </div>
                </div>
                <div class="rotateItem">
                    <div class="rotateChild">
                        <div class="rotateImg"><img src="/image/home/l2.jpg" alt="rotateImg"></div>
                        <svg class="rotateLogo" width="183" height="52" viewBox="0 0 183 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="183" height="52" rx="6" fill="white"/>
                            <path d="M22.9297 16.9375H25.5547L30.4883 30.0977L35.4102 16.9375H38.0352L31.5195 34H29.4336L22.9297 16.9375ZM21.7344 16.9375H24.2305L24.6641 28.3281V34H21.7344V16.9375ZM36.7344 16.9375H39.2422V34H36.3008V28.3281L36.7344 16.9375ZM44.0352 16.9375L47.9961 25.082L51.957 16.9375H55.2148L49.4727 27.7188V34H46.5078V27.7188L40.7656 16.9375H44.0352Z" fill="#202020"/>
                            <path d="M78.7109 29.6055C78.7109 29.2539 78.6562 28.9414 78.5469 28.668C78.4453 28.3945 78.2617 28.1445 77.9961 27.918C77.7305 27.6914 77.3555 27.4727 76.8711 27.2617C76.3945 27.043 75.7852 26.8203 75.043 26.5938C74.2305 26.3438 73.4805 26.0664 72.793 25.7617C72.1133 25.4492 71.5195 25.0898 71.0117 24.6836C70.5039 24.2695 70.1094 23.7969 69.8281 23.2656C69.5469 22.7266 69.4062 22.1055 69.4062 21.4023C69.4062 20.707 69.5508 20.0742 69.8398 19.5039C70.1367 18.9336 70.5547 18.4414 71.0938 18.0273C71.6406 17.6055 72.2852 17.2812 73.0273 17.0547C73.7695 16.8203 74.5898 16.7031 75.4883 16.7031C76.7539 16.7031 77.8438 16.9375 78.7578 17.4062C79.6797 17.875 80.3867 18.5039 80.8789 19.293C81.3789 20.082 81.6289 20.9531 81.6289 21.9062H78.7109C78.7109 21.3438 78.5898 20.8477 78.3477 20.418C78.1133 19.9805 77.7539 19.6367 77.2695 19.3867C76.793 19.1367 76.1875 19.0117 75.4531 19.0117C74.7578 19.0117 74.1797 19.1172 73.7188 19.3281C73.2578 19.5391 72.9141 19.8242 72.6875 20.1836C72.4609 20.543 72.3477 20.9492 72.3477 21.4023C72.3477 21.7227 72.4219 22.0156 72.5703 22.2812C72.7188 22.5391 72.9453 22.7812 73.25 23.0078C73.5547 23.2266 73.9375 23.4336 74.3984 23.6289C74.8594 23.8242 75.4023 24.0117 76.0273 24.1914C76.9727 24.4727 77.7969 24.7852 78.5 25.1289C79.2031 25.4648 79.7891 25.8477 80.2578 26.2773C80.7266 26.707 81.0781 27.1953 81.3125 27.7422C81.5469 28.2812 81.6641 28.8945 81.6641 29.582C81.6641 30.3008 81.5195 30.9492 81.2305 31.5273C80.9414 32.0977 80.5273 32.5859 79.9883 32.9922C79.457 33.3906 78.8164 33.6992 78.0664 33.918C77.3242 34.1289 76.4961 34.2344 75.582 34.2344C74.7617 34.2344 73.9531 34.125 73.1562 33.9062C72.3672 33.6875 71.6484 33.3555 71 32.9102C70.3516 32.457 69.8359 31.8945 69.4531 31.2227C69.0703 30.543 68.8789 29.75 68.8789 28.8438H71.8203C71.8203 29.3984 71.9141 29.8711 72.1016 30.2617C72.2969 30.6523 72.5664 30.9727 72.9102 31.2227C73.2539 31.4648 73.6523 31.6445 74.1055 31.7617C74.5664 31.8789 75.0586 31.9375 75.582 31.9375C76.2695 31.9375 76.8438 31.8398 77.3047 31.6445C77.7734 31.4492 78.125 31.1758 78.3594 30.8242C78.5938 30.4727 78.7109 30.0664 78.7109 29.6055ZM87.207 16.9375V34H84.2656V16.9375H87.207ZM97.4609 16.9375L90.5469 25.1523L86.6094 29.3242L86.0938 26.4062L88.9062 22.9375L93.875 16.9375H97.4609ZM94.2969 34L88.6836 25.9141L90.7109 23.9102L97.7891 34H94.2969ZM101.059 16.9375L105.02 25.082L108.98 16.9375H112.238L106.496 27.7188V34H103.531V27.7188L97.7891 16.9375H101.059Z" fill="#EB3B5A"/>
                            <path d="M124.789 31.668V34H116.223V31.668H124.789ZM117.043 16.9375V34H114.102V16.9375H117.043ZM130.203 16.9375V34H127.262V16.9375H130.203ZM147.395 16.9375V34H144.453L136.801 21.7773V34H133.859V16.9375H136.801L144.477 29.1836V16.9375H147.395ZM162.066 31.668V34H153.008V31.668H162.066ZM153.84 16.9375V34H150.898V16.9375H153.84ZM160.883 24.0625V26.3594H153.008V24.0625H160.883ZM162.008 16.9375V19.2812H153.008V16.9375H162.008Z" fill="#3867D6"/>
                            <rect x="61" y="12" width="2" height="28" fill="#202020"/>
                        </svg>
                        <p class="rotateText">@lang('mainPages.main_fifth_screen.cards.second')</p>
                    </div>
                </div>
                <div class="rotateItem">
                    <div class="rotateChild">
                        <div class="rotateImg"><img src="/image/home/l3.jpg" alt="rotateImg"></div>
                        <svg class="rotateLogo" width="183" height="52" viewBox="0 0 183 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="183" height="52" rx="6" fill="white"/>
                            <path d="M22.9297 16.9375H25.5547L30.4883 30.0977L35.4102 16.9375H38.0352L31.5195 34H29.4336L22.9297 16.9375ZM21.7344 16.9375H24.2305L24.6641 28.3281V34H21.7344V16.9375ZM36.7344 16.9375H39.2422V34H36.3008V28.3281L36.7344 16.9375ZM44.0352 16.9375L47.9961 25.082L51.957 16.9375H55.2148L49.4727 27.7188V34H46.5078V27.7188L40.7656 16.9375H44.0352Z" fill="#202020"/>
                            <path d="M78.7109 29.6055C78.7109 29.2539 78.6562 28.9414 78.5469 28.668C78.4453 28.3945 78.2617 28.1445 77.9961 27.918C77.7305 27.6914 77.3555 27.4727 76.8711 27.2617C76.3945 27.043 75.7852 26.8203 75.043 26.5938C74.2305 26.3438 73.4805 26.0664 72.793 25.7617C72.1133 25.4492 71.5195 25.0898 71.0117 24.6836C70.5039 24.2695 70.1094 23.7969 69.8281 23.2656C69.5469 22.7266 69.4062 22.1055 69.4062 21.4023C69.4062 20.707 69.5508 20.0742 69.8398 19.5039C70.1367 18.9336 70.5547 18.4414 71.0938 18.0273C71.6406 17.6055 72.2852 17.2812 73.0273 17.0547C73.7695 16.8203 74.5898 16.7031 75.4883 16.7031C76.7539 16.7031 77.8438 16.9375 78.7578 17.4062C79.6797 17.875 80.3867 18.5039 80.8789 19.293C81.3789 20.082 81.6289 20.9531 81.6289 21.9062H78.7109C78.7109 21.3438 78.5898 20.8477 78.3477 20.418C78.1133 19.9805 77.7539 19.6367 77.2695 19.3867C76.793 19.1367 76.1875 19.0117 75.4531 19.0117C74.7578 19.0117 74.1797 19.1172 73.7188 19.3281C73.2578 19.5391 72.9141 19.8242 72.6875 20.1836C72.4609 20.543 72.3477 20.9492 72.3477 21.4023C72.3477 21.7227 72.4219 22.0156 72.5703 22.2812C72.7188 22.5391 72.9453 22.7812 73.25 23.0078C73.5547 23.2266 73.9375 23.4336 74.3984 23.6289C74.8594 23.8242 75.4023 24.0117 76.0273 24.1914C76.9727 24.4727 77.7969 24.7852 78.5 25.1289C79.2031 25.4648 79.7891 25.8477 80.2578 26.2773C80.7266 26.707 81.0781 27.1953 81.3125 27.7422C81.5469 28.2812 81.6641 28.8945 81.6641 29.582C81.6641 30.3008 81.5195 30.9492 81.2305 31.5273C80.9414 32.0977 80.5273 32.5859 79.9883 32.9922C79.457 33.3906 78.8164 33.6992 78.0664 33.918C77.3242 34.1289 76.4961 34.2344 75.582 34.2344C74.7617 34.2344 73.9531 34.125 73.1562 33.9062C72.3672 33.6875 71.6484 33.3555 71 32.9102C70.3516 32.457 69.8359 31.8945 69.4531 31.2227C69.0703 30.543 68.8789 29.75 68.8789 28.8438H71.8203C71.8203 29.3984 71.9141 29.8711 72.1016 30.2617C72.2969 30.6523 72.5664 30.9727 72.9102 31.2227C73.2539 31.4648 73.6523 31.6445 74.1055 31.7617C74.5664 31.8789 75.0586 31.9375 75.582 31.9375C76.2695 31.9375 76.8438 31.8398 77.3047 31.6445C77.7734 31.4492 78.125 31.1758 78.3594 30.8242C78.5938 30.4727 78.7109 30.0664 78.7109 29.6055ZM87.207 16.9375V34H84.2656V16.9375H87.207ZM97.4609 16.9375L90.5469 25.1523L86.6094 29.3242L86.0938 26.4062L88.9062 22.9375L93.875 16.9375H97.4609ZM94.2969 34L88.6836 25.9141L90.7109 23.9102L97.7891 34H94.2969ZM101.059 16.9375L105.02 25.082L108.98 16.9375H112.238L106.496 27.7188V34H103.531V27.7188L97.7891 16.9375H101.059Z" fill="#EB3B5A"/>
                            <path d="M124.789 31.668V34H116.223V31.668H124.789ZM117.043 16.9375V34H114.102V16.9375H117.043ZM130.203 16.9375V34H127.262V16.9375H130.203ZM147.395 16.9375V34H144.453L136.801 21.7773V34H133.859V16.9375H136.801L144.477 29.1836V16.9375H147.395ZM162.066 31.668V34H153.008V31.668H162.066ZM153.84 16.9375V34H150.898V16.9375H153.84ZM160.883 24.0625V26.3594H153.008V24.0625H160.883ZM162.008 16.9375V19.2812H153.008V16.9375H162.008Z" fill="#3867D6"/>
                            <rect x="61" y="12" width="2" height="28" fill="#202020"/>
                        </svg>
                        <p class="rotateText">@lang('mainPages.main_fifth_screen.cards.third')</p>
                    </div>
                </div>
                <div class="rotateItem">
                    <div class="rotateChild">
                        <div class="rotateImg"><img src="/image/home/l4.jpg" alt="rotateImg"></div>
                        <svg class="rotateLogo" width="183" height="52" viewBox="0 0 183 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="183" height="52" rx="6" fill="white"/>
                            <path d="M22.9297 16.9375H25.5547L30.4883 30.0977L35.4102 16.9375H38.0352L31.5195 34H29.4336L22.9297 16.9375ZM21.7344 16.9375H24.2305L24.6641 28.3281V34H21.7344V16.9375ZM36.7344 16.9375H39.2422V34H36.3008V28.3281L36.7344 16.9375ZM44.0352 16.9375L47.9961 25.082L51.957 16.9375H55.2148L49.4727 27.7188V34H46.5078V27.7188L40.7656 16.9375H44.0352Z" fill="#202020"/>
                            <path d="M78.7109 29.6055C78.7109 29.2539 78.6562 28.9414 78.5469 28.668C78.4453 28.3945 78.2617 28.1445 77.9961 27.918C77.7305 27.6914 77.3555 27.4727 76.8711 27.2617C76.3945 27.043 75.7852 26.8203 75.043 26.5938C74.2305 26.3438 73.4805 26.0664 72.793 25.7617C72.1133 25.4492 71.5195 25.0898 71.0117 24.6836C70.5039 24.2695 70.1094 23.7969 69.8281 23.2656C69.5469 22.7266 69.4062 22.1055 69.4062 21.4023C69.4062 20.707 69.5508 20.0742 69.8398 19.5039C70.1367 18.9336 70.5547 18.4414 71.0938 18.0273C71.6406 17.6055 72.2852 17.2812 73.0273 17.0547C73.7695 16.8203 74.5898 16.7031 75.4883 16.7031C76.7539 16.7031 77.8438 16.9375 78.7578 17.4062C79.6797 17.875 80.3867 18.5039 80.8789 19.293C81.3789 20.082 81.6289 20.9531 81.6289 21.9062H78.7109C78.7109 21.3438 78.5898 20.8477 78.3477 20.418C78.1133 19.9805 77.7539 19.6367 77.2695 19.3867C76.793 19.1367 76.1875 19.0117 75.4531 19.0117C74.7578 19.0117 74.1797 19.1172 73.7188 19.3281C73.2578 19.5391 72.9141 19.8242 72.6875 20.1836C72.4609 20.543 72.3477 20.9492 72.3477 21.4023C72.3477 21.7227 72.4219 22.0156 72.5703 22.2812C72.7188 22.5391 72.9453 22.7812 73.25 23.0078C73.5547 23.2266 73.9375 23.4336 74.3984 23.6289C74.8594 23.8242 75.4023 24.0117 76.0273 24.1914C76.9727 24.4727 77.7969 24.7852 78.5 25.1289C79.2031 25.4648 79.7891 25.8477 80.2578 26.2773C80.7266 26.707 81.0781 27.1953 81.3125 27.7422C81.5469 28.2812 81.6641 28.8945 81.6641 29.582C81.6641 30.3008 81.5195 30.9492 81.2305 31.5273C80.9414 32.0977 80.5273 32.5859 79.9883 32.9922C79.457 33.3906 78.8164 33.6992 78.0664 33.918C77.3242 34.1289 76.4961 34.2344 75.582 34.2344C74.7617 34.2344 73.9531 34.125 73.1562 33.9062C72.3672 33.6875 71.6484 33.3555 71 32.9102C70.3516 32.457 69.8359 31.8945 69.4531 31.2227C69.0703 30.543 68.8789 29.75 68.8789 28.8438H71.8203C71.8203 29.3984 71.9141 29.8711 72.1016 30.2617C72.2969 30.6523 72.5664 30.9727 72.9102 31.2227C73.2539 31.4648 73.6523 31.6445 74.1055 31.7617C74.5664 31.8789 75.0586 31.9375 75.582 31.9375C76.2695 31.9375 76.8438 31.8398 77.3047 31.6445C77.7734 31.4492 78.125 31.1758 78.3594 30.8242C78.5938 30.4727 78.7109 30.0664 78.7109 29.6055ZM87.207 16.9375V34H84.2656V16.9375H87.207ZM97.4609 16.9375L90.5469 25.1523L86.6094 29.3242L86.0938 26.4062L88.9062 22.9375L93.875 16.9375H97.4609ZM94.2969 34L88.6836 25.9141L90.7109 23.9102L97.7891 34H94.2969ZM101.059 16.9375L105.02 25.082L108.98 16.9375H112.238L106.496 27.7188V34H103.531V27.7188L97.7891 16.9375H101.059Z" fill="#EB3B5A"/>
                            <path d="M124.789 31.668V34H116.223V31.668H124.789ZM117.043 16.9375V34H114.102V16.9375H117.043ZM130.203 16.9375V34H127.262V16.9375H130.203ZM147.395 16.9375V34H144.453L136.801 21.7773V34H133.859V16.9375H136.801L144.477 29.1836V16.9375H147.395ZM162.066 31.668V34H153.008V31.668H162.066ZM153.84 16.9375V34H150.898V16.9375H153.84ZM160.883 24.0625V26.3594H153.008V24.0625H160.883ZM162.008 16.9375V19.2812H153.008V16.9375H162.008Z" fill="#3867D6"/>
                            <rect x="61" y="12" width="2" height="28" fill="#202020"/>
                        </svg>
                        <p class="rotateText">@lang('mainPages.main_fifth_screen.cards.fourth')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section _puted">
        <div class="page">
            <h2 class="title">@lang('mainPages.main_sixth_screen.title')</h2>
            <p class="subText">@lang('mainPages.main_sixth_screen.subtitle')</p>
            <div class="putedFlex">
                <div class="putedItem">
                    <img src="/image/partners/1.png" alt="1">
                </div>
                <div class="putedItem">
                    <img src="/image/partners/2.png" alt="2">
                </div>
                <div class="putedItem">
                    <img src="/image/partners/3.png" alt="3">
                </div>
                <div class="putedItem">
                    <img src="/image/partners/4.png" alt="4">
                </div>
                <div class="putedItem">
                    <img src="/image/partners/5.png" alt="5">
                </div>
            </div>
        </div>
    </section>
@endsection
