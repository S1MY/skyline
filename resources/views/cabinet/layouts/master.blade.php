<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Кабинет пользователя - MySkyLine</title>
    <link rel="stylesheet" href="/assets/css/cabinet.css">
</head>

<body>
    @php
        $stop_date = Auth::user()->created_at;
        $stop_date = date('Y-m-d H:i:s', strtotime($stop_date . ' +2 day'));

        function downcounter($date){
            $check_time = strtotime($date) - time();
            if($check_time <= 0){
                return false;
            }

            $days = floor($check_time/86400);
            $hours = floor(($check_time%86400)/3600);
            $minutes = floor(($check_time%3600)/60);
            $seconds = $check_time%60;

            $str = '';

            if( $days >= 1 ){
                $hours = $hours + 24;
            }

            $str .= $hours.':';
            $str .= $minutes.':';
            $str .= $seconds;

            return $str;
        }
    @endphp

    @if ( strtotime($stop_date) < strtotime(date('Y-m-d H:i:s')) &&  Auth::user()->UserInfo->login < 1)
        @yield('cabBlocked')
    @else
        <header class="header">
            <div class="headerWrapper displayFlex alignItemsCenter">
                <div class="headerLogo displayFlex alignItemsCenter spaceCenter">
                    <a href="{{ route('cabinet') }}" class="logotype">
                        <svg width="138" height="56" viewBox="0 0 138 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M56.4414 0.78125H58.6289L62.7402 11.748L66.8418 0.78125H69.0293L63.5996 15H61.8613L56.4414 0.78125ZM55.4453 0.78125H57.5254L57.8867 10.2734V15H55.4453V0.78125ZM67.9453 0.78125H70.0352V15H67.584V10.2734L67.9453 0.78125ZM74.0293 0.78125L77.3301 7.56836L80.6309 0.78125H83.3457L78.5605 9.76562V15H76.0898V9.76562L71.3047 0.78125H74.0293Z"
                                fill="white" />
                            <path
                                d="M33.0742 35.6875C33.0742 35.2891 33.0117 34.9375 32.8867 34.6328C32.7695 34.3203 32.5586 34.0391 32.2539 33.7891C31.957 33.5391 31.543 33.3008 31.0117 33.0742C30.4883 32.8477 29.8242 32.6172 29.0195 32.3828C28.1758 32.1328 27.4141 31.8555 26.7344 31.5508C26.0547 31.2383 25.4727 30.8828 24.9883 30.4844C24.5039 30.0859 24.1328 29.6289 23.875 29.1133C23.6172 28.5977 23.4883 28.0078 23.4883 27.3438C23.4883 26.6797 23.625 26.0664 23.8984 25.5039C24.1719 24.9414 24.5625 24.4531 25.0703 24.0391C25.5859 23.6172 26.1992 23.2891 26.9102 23.0547C27.6211 22.8203 28.4141 22.7031 29.2891 22.7031C30.5703 22.7031 31.6562 22.9492 32.5469 23.4414C33.4453 23.9258 34.1289 24.5625 34.5977 25.3516C35.0664 26.1328 35.3008 26.9688 35.3008 27.8594H33.0508C33.0508 27.2188 32.9141 26.6523 32.6406 26.1602C32.3672 25.6602 31.9531 25.2695 31.3984 24.9883C30.8438 24.6992 30.1406 24.5547 29.2891 24.5547C28.4844 24.5547 27.8203 24.6758 27.2969 24.918C26.7734 25.1602 26.3828 25.4883 26.125 25.9023C25.875 26.3164 25.75 26.7891 25.75 27.3203C25.75 27.6797 25.8242 28.0078 25.9727 28.3047C26.1289 28.5938 26.3672 28.8633 26.6875 29.1133C27.0156 29.3633 27.4297 29.5938 27.9297 29.8047C28.4375 30.0156 29.043 30.2188 29.7461 30.4141C30.7148 30.6875 31.5508 30.9922 32.2539 31.3281C32.957 31.6641 33.5352 32.043 33.9883 32.4648C34.4492 32.8789 34.7891 33.3516 35.0078 33.8828C35.2344 34.4062 35.3477 35 35.3477 35.6641C35.3477 36.3594 35.207 36.9883 34.9258 37.5508C34.6445 38.1133 34.2422 38.5938 33.7188 38.9922C33.1953 39.3906 32.5664 39.6992 31.832 39.918C31.1055 40.1289 30.293 40.2344 29.3945 40.2344C28.6055 40.2344 27.8281 40.125 27.0625 39.9062C26.3047 39.6875 25.6133 39.3594 24.9883 38.9219C24.3711 38.4844 23.875 37.9453 23.5 37.3047C23.1328 36.6562 22.9492 35.9062 22.9492 35.0547H25.1992C25.1992 35.6406 25.3125 36.1445 25.5391 36.5664C25.7656 36.9805 26.0742 37.3242 26.4648 37.5977C26.8633 37.8711 27.3125 38.0742 27.8125 38.207C28.3203 38.332 28.8477 38.3945 29.3945 38.3945C30.1836 38.3945 30.8516 38.2852 31.3984 38.0664C31.9453 37.8477 32.3594 37.5352 32.6406 37.1289C32.9297 36.7227 33.0742 36.2422 33.0742 35.6875ZM40.4922 22.9375V40H38.2305V22.9375H40.4922ZM50.793 22.9375L43.7031 30.8945L39.7188 35.0312L39.3438 32.6172L42.3438 29.3125L48.0742 22.9375H50.793ZM48.6133 40L42.2969 31.6797L43.6445 29.8867L51.3086 40H48.6133ZM54.0859 22.9375L58.5156 31.5039L62.957 22.9375H65.5234L59.6406 33.625V40H57.3789V33.625L51.4961 22.9375H54.0859Z"
                                fill="#EB3B5A" />
                            <path
                                d="M78.0625 38.1602V40H69.5312V38.1602H78.0625ZM69.9766 22.9375V40H67.7148V22.9375H69.9766ZM83.0781 22.9375V40H80.8164V22.9375H83.0781ZM100.316 22.9375V40H98.043L89.4531 26.8398V40H87.1914V22.9375H89.4531L98.0781 36.1328V22.9375H100.316ZM115.164 38.1602V40H106.129V38.1602H115.164ZM106.586 22.9375V40H104.324V22.9375H106.586ZM113.969 30.2734V32.1133H106.129V30.2734H113.969ZM115.047 22.9375V24.7891H106.129V22.9375H115.047Z"
                                fill="#3867D6" />
                            <rect x="2" y="7" width="44" height="2" fill="white" />
                            <rect x="92" y="7" width="44" height="2" fill="white" />
                            <rect x="2" y="54" width="134" height="2" fill="white" />
                            <rect y="7" width="2" height="49" fill="white" />
                            <rect x="136" y="7" width="2" height="49" fill="white" />
                        </svg>
                    </a>
                </div>
                <p class="langChanger">
                    <span class="currentLang">@lang('cabinet.header_btn.language'): <span class="lang">RU</span></span>
                    <span class="changer">
                        <a href="{{ route('locale', 'ru') }}" class="langLink _active" data-lang="ru"><svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_56_740)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H42V42H0V0Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 14.0027H42V42H0V14.0027Z" fill="#0039A6"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 27.9973H42V42H0V27.9973Z" fill="#D52B1E"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_56_740">
                            <rect width="42" height="42" rx="4" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg></a>
                        <a href="{{ route('locale', 'en') }}" class="langLink" data-lang="en"><svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_56_720)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H79.8V3.23203H0V0ZM0 6.46406H79.8V9.69609H0V6.46406ZM0 12.9199H79.8V16.1602H0V12.9199ZM0 19.384H79.8V22.616H0V19.384ZM0 25.848H79.8V29.0801H0V25.848ZM0 32.3039H79.8V35.5359H0V32.3039ZM0 38.768H79.8V42H0V38.768Z" fill="#BD3D44"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.23206H79.8V6.46409H0V3.23206ZM0 9.69612H79.8V12.9199H0V9.69612ZM0 16.152H79.8V19.384H0V16.152ZM0 22.616H79.8V25.8399H0V22.616ZM0 29.0801H79.8V32.3039H0V29.0801ZM0 35.536H79.8V38.768H0V35.536Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H31.9184V22.616H0V0Z" fill="#192F5D"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.64962 0.968018L2.97775 1.87036H3.88009L3.13361 2.41997L3.42072 3.29771L2.64962 2.7481L1.93595 3.29771L2.23126 2.41997L1.45197 1.87036H2.41993L2.64962 0.968018ZM7.98165 0.968018L8.26876 1.87036H9.20392L8.43283 2.41997L8.76095 3.29771L7.98165 2.7481L7.20236 3.29771L7.53048 2.41997L6.75118 1.87036H7.68634L7.98165 0.968018ZM13.3137 0.968018L13.6008 1.87036H14.5359L13.7649 2.41997L14.093 3.29771L13.3137 2.7481L12.5344 3.29771L12.8625 2.41997L12.0832 1.87036H13.0184L13.3137 0.968018ZM18.6129 0.968018L18.9328 1.87036H19.8352L19.0969 2.41997L19.384 3.29771L18.6129 2.7481L17.8664 3.29771L18.1535 2.41997L17.3824 1.87036H18.3504L18.6129 0.968018ZM23.9449 0.968018L24.232 1.87036H25.1672L24.3961 2.41997L24.716 3.29771L23.9039 2.7481L23.1656 3.29771L23.4527 2.41997L22.6817 1.87036H23.6168L23.9449 0.968018ZM29.277 0.968018L29.5641 1.87036H30.4992L29.7199 2.41997L30.0481 3.29771L29.2688 2.7481L28.4977 3.29771L28.8258 2.41997L28.0465 1.87036H28.9817L29.277 0.968018ZM5.32384 3.23208L5.61915 4.13442H6.56251L5.78322 4.68403L6.11134 5.55356L5.33204 5.00396L4.55275 5.55356L4.88087 4.68403L4.10157 4.13442H5.03673L5.32384 3.23208ZM10.6313 3.23208L10.9594 4.13442H11.8617L11.1152 4.68403L11.4024 5.55356L10.6313 5.00396L9.89298 5.55356L10.1801 4.68403L9.40079 4.13442H10.3688L10.6313 3.23208ZM15.9633 3.23208L16.2504 4.13442H17.1856L16.4145 4.68403L16.7426 5.55356L15.9633 5.00396L15.184 5.55356L15.5121 4.68403L14.7328 4.13442H15.668L15.9633 3.23208ZM21.2953 3.23208L21.5824 4.13442H22.5176L21.7465 4.68403L22.0664 5.55356L21.2871 5.00396L20.516 5.55356L20.8442 4.68403L20.0649 4.13442H21L21.2953 3.23208ZM26.5863 3.23208L26.9145 4.13442H27.784L27.0457 4.68403L27.3328 5.55356L26.5535 5.00396L25.8152 5.55356L26.1024 4.68403L25.3313 4.13442H26.2992L26.5863 3.23208ZM2.68243 5.49614L2.93673 6.39849H3.9129L3.13361 6.9481L3.42072 7.81763L2.64962 7.26802L1.93595 7.81763L2.23126 6.9481L1.45197 6.39849H2.41993L2.68243 5.49614ZM7.98165 5.49614L8.26876 6.39849H9.20392L8.46564 6.9481L8.75275 7.81763L7.98165 7.26802L7.24337 7.81763L7.53048 6.9481L6.75118 6.39849H7.68634L7.98165 5.49614ZM13.3137 5.49614L13.6008 6.39849H14.5359L13.7649 6.9481L14.093 7.81763L13.3137 7.26802L12.5344 7.81763L12.8625 6.9481L12.0832 6.39849H13.0184L13.3137 5.49614ZM18.6129 5.49614L18.9328 6.39849H19.8352L19.0969 6.9481L19.384 7.81763L18.6129 7.26802L17.8664 7.81763L18.1535 6.9481L17.3906 6.39849H18.3586L18.6129 5.49614ZM23.9449 5.49614L24.232 6.39849H25.1672L24.4289 6.9481L24.716 7.81763L23.9367 7.26802L23.1984 7.81763L23.4856 6.9481L22.7227 6.39849H23.6578L23.9449 5.49614ZM29.277 5.49614L29.5641 6.39849H30.4992L29.7199 6.9481L30.0481 7.81763L29.2688 7.26802L28.4977 7.81763L28.8258 6.9481L28.0465 6.39849H28.9817L29.277 5.49614ZM5.32384 7.752L5.61915 8.65435H6.56251L5.78322 9.20395L6.11134 10.0817L5.33204 9.53208L4.55275 10.0817L4.88087 9.20395L4.10157 8.66255H5.03673L5.32384 7.752ZM10.6313 7.752L10.9594 8.65435H11.8617L11.1152 9.20395L11.4024 10.0899L10.6313 9.54028L9.89298 10.0899L10.1801 9.21216L9.40079 8.67075H10.3688L10.6313 7.752ZM15.9633 7.752L16.2504 8.65435H17.1856L16.4473 9.20395L16.7344 10.0899L15.9633 9.54028L15.2168 10.0899L15.5039 9.21216L14.7328 8.67075H15.668L15.9633 7.752ZM21.2953 7.752L21.5824 8.65435H22.5176L21.7465 9.20395L22.0664 10.0899L21.2871 9.54028L20.516 10.0899L20.8442 9.21216L20.0649 8.67075H21L21.2953 7.752ZM26.5863 7.752L26.9145 8.65435H27.784L27.0457 9.20395L27.3328 10.0817L26.5535 9.53208L25.8152 10.0817L26.1024 9.20395L25.3313 8.66255H26.2992L26.5863 7.752ZM2.68243 10.0161L2.93673 10.9184H3.9129L3.13361 11.468L3.42072 12.3458L2.64962 11.7961L1.93595 12.3458L2.23126 11.468L1.45197 10.9184H2.41993L2.68243 10.0161ZM7.98165 10.0161L8.26876 10.9184H9.20392L8.46564 11.468L8.75275 12.3458L7.98165 11.7961L7.24337 12.3458L7.53048 11.468L6.75118 10.9184H7.68634L7.98165 10.0161ZM13.3137 10.0161L13.6008 10.9184H14.5359L13.7649 11.468L14.093 12.3458L13.3137 11.7961L12.5344 12.3458L12.8625 11.468L12.0832 10.9184H13.0184L13.3137 10.0161ZM18.6129 10.0161L18.9328 10.9184H19.8352L19.0969 11.468L19.384 12.3458L18.6129 11.7961L17.8664 12.3458L18.1535 11.468L17.3824 10.9184H18.3504L18.6129 10.0161ZM23.9449 10.0161L24.232 10.9184H25.1672L24.4289 11.468L24.716 12.3458L23.9367 11.7961L23.1984 12.3458L23.4856 11.468L22.7145 10.9184H23.6496L23.9449 10.0161ZM29.277 10.0161L29.5641 10.9184H30.4992L29.7199 11.468L30.0481 12.3458L29.2688 11.7961L28.4977 12.3458L28.8258 11.468L28.0465 10.9184H28.9817L29.277 10.0161ZM5.32384 12.2801L5.61915 13.1825H6.56251L5.78322 13.7321L6.11134 14.6016L5.33204 14.052L4.55275 14.6016L4.88087 13.7321L4.10157 13.1825H5.03673L5.32384 12.2801ZM10.6313 12.2801L10.9594 13.1825H11.8617L11.1152 13.7321L11.4024 14.6016L10.6313 14.052L9.89298 14.6016L10.1801 13.7321L9.40079 13.1825H10.3688L10.6313 12.2801ZM15.9633 12.2801L16.2504 13.1825H17.1856L16.4473 13.7321L16.7344 14.6016L15.9633 14.052L15.2168 14.6016L15.5039 13.7321L14.7328 13.1825H15.668L15.9633 12.2801ZM21.2953 12.2801L21.5824 13.1825H22.5176L21.7465 13.7321L22.0664 14.6016L21.2871 14.052L20.516 14.6016L20.8442 13.7321L20.0649 13.1825H21L21.2953 12.2801ZM26.5863 12.2801L26.9145 13.1825H27.784L27.0457 13.7321L27.3328 14.6016L26.5535 14.052L25.8152 14.6016L26.1024 13.7321L25.3313 13.1825H26.2992L26.5863 12.2801ZM2.68243 14.536L2.93673 15.4383H3.9129L3.13361 15.9961L3.42072 16.8657L2.64962 16.3161L1.93595 16.8657L2.23126 15.9961L1.45197 15.4465H2.41993L2.68243 14.536ZM7.98165 14.536L8.26876 15.4383H9.20392L8.46564 15.9961L8.75275 16.8657L7.98165 16.3161L7.24337 16.8657L7.53048 15.9961L6.75118 15.4465H7.68634L7.98165 14.536ZM13.3137 14.536L13.6008 15.4383H14.5359L13.7649 15.9961L14.093 16.8657L13.3137 16.3161L12.5344 16.8657L12.8625 15.9961L12.0832 15.4465H13.0184L13.3137 14.536ZM18.6129 14.536L18.9328 15.4383H19.8352L19.0969 15.9961L19.384 16.8657L18.6129 16.3161L17.8664 16.8657L18.1535 15.9961L17.3824 15.4465H18.3504L18.6129 14.536ZM23.9449 14.536L24.232 15.4383H25.1672L24.4289 15.9961L24.716 16.8657L23.9367 16.3161L23.1984 16.8657L23.4856 15.9961L22.7145 15.4465H23.6496L23.9449 14.536ZM29.277 14.536L29.5641 15.4383H30.4992L29.7199 15.9961L30.0481 16.8657L29.2688 16.3161L28.4977 16.8657L28.8258 15.9961L28.0465 15.4465H28.9817L29.277 14.536ZM5.32384 16.8L5.61915 17.7024H6.56251L5.78322 18.252L6.11134 19.1297L5.33204 18.5801L4.55275 19.1297L4.88087 18.252L4.10157 17.7024H5.03673L5.32384 16.8ZM10.6313 16.8L10.9594 17.7024H11.8617L11.1152 18.252L11.4024 19.1297L10.6313 18.5801L9.89298 19.1297L10.1801 18.252L9.40079 17.7024H10.3688L10.6313 16.8ZM15.9633 16.8L16.2504 17.7024H17.1856L16.4473 18.252L16.7344 19.1297L15.9633 18.5801L15.2168 19.1297L15.5039 18.252L14.7328 17.7024H15.668L15.9633 16.8ZM21.2953 16.8L21.5824 17.7024H22.5176L21.7465 18.252L22.0664 19.1297L21.2871 18.5801L20.516 19.1297L20.8442 18.252L20.0649 17.7024H21L21.2953 16.8ZM26.5863 16.8L26.9145 17.7024H27.784L27.0457 18.252L27.3328 19.1297L26.5535 18.5801L25.8152 19.1297L26.1024 18.252L25.3313 17.7024H26.2992L26.5863 16.8ZM2.68243 19.0641L2.93673 19.9665H3.9129L3.13361 20.5161L3.42072 21.3856L2.64962 20.836L1.93595 21.3856L2.23126 20.5161L1.45197 19.9665H2.41993L2.68243 19.0641ZM7.98165 19.0641L8.26876 19.9665H9.20392L8.46564 20.5161L8.75275 21.3856L7.98165 20.836L7.24337 21.3856L7.53048 20.5161L6.75118 19.9665H7.68634L7.98165 19.0641ZM13.3137 19.0641L13.6008 19.9665H14.5359L13.7649 20.5161L14.093 21.3856L13.3137 20.836L12.5344 21.3856L12.8625 20.5161L12.0832 19.9665H13.0184L13.3137 19.0641ZM18.6129 19.0641L18.9328 19.9665H19.8352L19.0969 20.5161L19.384 21.3856L18.6129 20.836L17.8664 21.3856L18.1535 20.5161L17.3824 19.9665H18.3504L18.6129 19.0641ZM23.9449 19.0641L24.232 19.9665H25.1672L24.4289 20.5161L24.716 21.3856L23.9367 20.836L23.1984 21.3856L23.4856 20.5161L22.7145 19.9665H23.6496L23.9449 19.0641ZM29.277 19.0641L29.5641 19.9665H30.4992L29.7199 20.5161L30.0481 21.3856L29.2688 20.836L28.4977 21.3856L28.8258 20.5161L28.0465 19.9665H28.9817L29.277 19.0641Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_56_720">
                            <rect width="42" height="42" rx="4" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg></a>
                        <a href="{{ route('locale', 'de') }}" class="langLink" data-lang="de"><svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_56_731)">
                            <path d="M0 27.9973H42V42.0001H0V27.9973Z" fill="#FFCE00"/>
                            <path d="M0 0H42V14.0027H0V0Z" fill="black"/>
                            <path d="M0 14.0027H42V27.9972H0V14.0027Z" fill="#DD0000"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_56_731">
                            <rect width="42" height="42" rx="4" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg></a>
                    </span>
                </p>
                <a href="{{ route('messages') }}" class="headerLink">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.8571 2H2.14286C1.57454 2 1.02949 2.22987 0.627628 2.63904C0.225765 3.04821 0 3.60316 0 4.18182V4.47273L9.74286 9.80364C9.83099 9.84164 9.92572 9.86123 10.0214 9.86123C10.1171 9.86123 10.2119 9.84164 10.3 9.80364L20 4.47273V4.18182C20 3.60316 19.7742 3.04821 19.3724 2.63904C18.9705 2.22987 18.4255 2 17.8571 2ZM19.7714 16.7782C19.9187 16.4802 19.9969 16.1518 20 15.8182V6.12364L13.5 9.68L19.7714 16.7782ZM0 6.12364V15.8182C0.00310737 16.1518 0.0813017 16.4802 0.228571 16.7782L6.5 9.68L0 6.12364ZM10.9357 11.0836C10.6384 11.2259 10.3142 11.3003 9.98571 11.3018C9.6801 11.3014 9.37811 11.2345 9.1 11.1055L7.79286 10.3782L1.25714 17.7964C1.5347 17.9279 1.83672 17.9973 2.14286 18H17.8571C18.1657 17.9984 18.4703 17.9289 18.75 17.7964L12.2 10.3927L10.9357 11.0836Z" fill="#202020"/>
                        </svg>
                    <span>@lang('cabinet.header_btn.messages') <span class="messageCount">(1)</span></span>
                </a>
                @php
                $notactive = '';
                if( Auth::user()->UserInfo->user_status != 1 ){
                    $notactive = ' _notactive';
                }
                if(Auth::user()->UserInfo->user_show_id){
                    $userId = Auth::user()->UserInfo->user_show_id;
                }else{
                    $userId = '00000';
                }
                @endphp
                <p class="headerInfo{{$notactive}}">ID: {{ $userId }}</p>
                <a href="{{ route('partners') }}" class="headerLink _blueed{{$notactive}}">
                    <span>@lang('cabinet.header_btn.partners')</span>
                </a>
                <a href="{{ route('bonus') }}" class="headerLink _reded{{$notactive}}">
                    <span>@lang('cabinet.header_btn.bonus')</span>
                </a>

                <div class="burgerBtn"></div>

                @php
                    $class = '';
                    if( Auth::user()->UserInfo->user_status == 1 ){
                        $class = ' disabled';
                    }
                // Если аккаунт не активирован
                    $stop_date = Auth::user()->created_at;
                    $stop_date = date('Y-m-d H:i:s', strtotime($stop_date . ' +2 day'));
                @endphp

                <p class="headerTimer{{$class}}" title="@lang('cabinet.account_stop')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0038 0.998047C5.94056 0.998047 0.996102 5.93472 0.996094 11.9979C0.996079 18.0611 5.94055 23.0036 12.0038 23.0036C18.067 23.0036 23.0017 18.0611 23.0017 11.9979C23.0017 5.93472 18.067 0.998047 12.0038 0.998047ZM12.0038 2.99802C16.9861 2.99802 21.0017 7.01557 21.0017 11.9979C21.0017 16.9802 16.9861 21.0037 12.0038 21.0037C7.02141 21.0037 2.99606 16.9802 2.99607 11.9979C2.99608 7.01557 7.02143 2.99802 12.0038 2.99802ZM11.9881 4.98432C11.856 4.9856 11.7254 5.01306 11.6039 5.06511C11.4825 5.11717 11.3725 5.19278 11.2804 5.28758C11.1883 5.38238 11.116 5.49449 11.0675 5.61744C11.019 5.74038 10.9953 5.87171 10.9979 6.00384V11.9979C10.9985 12.1295 11.025 12.2597 11.0759 12.381C11.1268 12.5023 11.2012 12.6124 11.2948 12.7049L15.2947 16.7068C15.3872 16.8025 15.4977 16.8788 15.62 16.9312C15.7423 16.9837 15.8738 17.0112 16.0068 17.0121C16.1398 17.0131 16.2717 16.9875 16.3947 16.9369C16.5177 16.8863 16.6294 16.8116 16.7232 16.7173C16.817 16.623 16.8911 16.5109 16.941 16.3876C16.991 16.2643 17.0158 16.1322 17.0141 15.9992C17.0124 15.8662 16.9842 15.7349 16.9311 15.6129C16.878 15.4909 16.8011 15.3808 16.7049 15.2889L12.9998 11.5839V6.00384C13.0025 5.8699 12.9781 5.7368 12.9283 5.61244C12.8785 5.48808 12.8042 5.37499 12.7098 5.2799C12.6155 5.18481 12.503 5.10964 12.379 5.05887C12.255 5.00809 12.1221 4.98274 11.9881 4.98432Z" fill="#202020"></path>
                    </svg>
                    <span>{{ downcounter($stop_date) }}</span>
                </p>
            </div>
        </header>
        <div class="mobileBody"></div>
        @yield('cabContent')
    @endif

    <div class="popup"
        @if (session()->has('warning'))
            style="display: block;"
        @endif
    >
        <div class="popupBg"></div>
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
        <div class="popupItem" data-name="notactive">
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
                <p class="responseText">@lang('popups.econom')</p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="#" class="responseBtn">@lang('popups.close')</a>
                </div>
        </div>
        <div class="popupItem" data-name="development">
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
                <p class="responseText">@lang('popups.develop')</p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="#" class="responseBtn">@lang('popups.close')</a>
                </div>
        </div>
        <div class="popupItem" data-name="deactivate">
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
                <p class="responseText">@lang('popups.dorabotka')</p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="#" class="responseBtn">@lang('popups.close')</a>
                </div>
        </div>
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
        <div class="popupItem" data-name="access">
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
                <p class="responseText">@lang('popups.page_closed')</p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="#" class="responseBtn">@lang('popups.close')</a>
                </div>
        </div>
        <div class="popupItem" data-name="timer">
            <svg class="responseIcon" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_101_2)">
                    <mask id="mask0_101_2" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="90" height="90">
                    <path d="M90 0H0V90H90V0Z" fill="white"/>
                    </mask>
                    <g mask="url(#mask0_101_2)">
                    <path opacity="0.12" d="M45 90C69.5965 90 89.536 69.8528 89.536 45C89.536 20.1472 69.5965 0 45 0C20.4034 0 0.463867 20.1472 0.463867 45C0.463867 69.8528 20.4034 90 45 90Z" fill="#3867D6"/>
                    </g>
                    <path d="M33 25V37L41 45L33 53V65H57V53L49 45L57 37V25H33Z" fill="#3867D6"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_101_2">
                    <rect width="90" height="90" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            <p class="responseText">@lang('popups.account_deactivated'):<br> <span class="_time">{{ downcounter($stop_date) }}</span></p>
            <div class="btnWrapper displayFlex spaceCenter">
                <a href="#" class="responseBtn _blueed">@lang('popups.close')</a>
            </div>
        </div>
        <div class="popupItem" data-name="econom">
                <p class="popupName">@lang('popups.purchase_package') <span class="_econom">ECONOM</span></p>
                <p class="priceCount">@lang('popups.paid'): <span>100€</span></p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="#" class="btnPopup buy" data-action="{{ route('buy') }}" data-name="ECONOM">@lang('popups.firstbuy')</a>
                </div>
        </div>
        <div class="popupItem" data-name="standard">
                <p class="popupName">@lang('popups.purchase_package') <span class="_standard">STANDARD</span></p>
                <p class="priceCount">@lang('popups.accrued'): <span>{{ Auth::user()->UserWallets->capital }}€</span></p>
                <p class="priceCount">@lang('popups.paid'): <span>{{ 1000 - Auth::user()->UserWallets->capital }}€</span></p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="#" class="btnPopup buy" data-action="{{ route('buy') }}" data-name="STANDARD">@lang('popups.hand_upgrade')</a>
                </div>
        </div>
        <div class="popupItem" data-name="premium">
            <p class="popupName">@lang('popups.purchase_package') <span class="_premium">PREMIUM</span></p>
            <p class="priceCount">@lang('popups.accrued'): <span>{{ Auth::user()->UserWallets->capital }}€</span></p>
            <p class="priceCount">@lang('popups.paid'): <span>{{ 10000 - Auth::user()->UserWallets->capital }}€</span></p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="#" class="btnPopup buy" data-action="{{ route('buy') }}" data-name="PREMIUM">@lang('popups.hand_upgrade')</a>
                </div>
        </div>
        <div class="popupItem" data-name="vip">
            <p class="popupName">@lang('popups.purchase_package') <span class="_vip">VIP</span></p>
            <p class="priceCount">@lang('popups.accrued'): <span>{{ Auth::user()->UserWallets->capital }}€</span></p>
            <p class="priceCount">@lang('popups.paid'): <span>{{ 100000 - Auth::user()->UserWallets->capital }}€</span></p>
                <div class="btnWrapper displayFlex spaceCenter">
                    <a href="#" class="btnPopup buy" data-action="{{ route('buy') }}" data-name="VIP">@lang('popups.hand_upgrade')</a>
                </div>
        </div>
        <form class="popupItem" data-name="adminAuth">
            <div class="userPopup">
                <div class="popupAvatar" style="background: url(/image/users/user.png);"></div>
                <p class="userPopupName">Иван Иванов</p>
                <p class="userPopupText">ID: 00021</p>
                <p class="userPopupText">examle@example.ru</p>
            </div>
            <div class="btnWrapper displayFlex spaceCenter">
                <button class="btn _blueed">@lang('popups.autorization')</button>
            </div>
            <div class="btnWrapper displayFlex spaceCenter">
                <a href="#" class="responseBtn _w100">@lang('popups.close')</a>
            </div>
        </form>
        <form class="popupItem" data-name="adminEdit">
            <div class="userPopup">
                <div class="popupAvatar" style="background: url(/image/users/user.png);"></div>
                <p class="userPopupName">Иван Иванов</p>
                <p class="userPopupText">Реферер: 00032</p>
            </div>
            <input type="text" class="contentInput" name="refid" placeholder="@lang('popups.newref')" required>
            <div class="btnWrapper displayFlex spaceCenter">
                <button class="btn _blueed">@lang('popups.change')</button>
            </div>
            <div class="btnWrapper displayFlex spaceCenter">
                <a href="#" class="responseBtn _w100">@lang('popups.close')</a>
            </div>
        </form>
    </div>
    <script src="/assets/js/jquery-3.6.1.min.js"></script>
    <script src="/assets/js/lang.js"></script>
    <script src="/assets/js/cabinet.js"></script>
    <script src="/assets/js/ajax.js"></script>
    <script src="/assets/js/admin.js"></script>
</body>

</html>
