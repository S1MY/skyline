@extends('cabinet.layouts.master')

@section('cabContent')
    <div class="page">

        @include('cabinet.layouts.sidebar')

        <div class="content">
            <div class="contentWrapper">
                <h1 class="pageTitle">Маркетинг план</h1>
                <div class="myRamka">
                    <p class="pageText">Партнёрская программа, ориентированная на заработок каждого пользователя системы.</p>
                    <p class="pageText">Имеет,<span class="_premium">четыре пакета</span> каждый из которых имеет свои фишки.</p>
                    <p class="pageText">В каждом пакете <span class="_premium">4</span> линии партнёров с доходом <span class="_premium">40/20/5/15</span> процентов с линий.</p>
                    <p class="pageText">На каждой из этих линий нет ограничений по количеству участников, поэтому Вы можете атывать бесконечно</p>
                    <p class="pageText">Как только на пакете <span class="_econom">"ECONOM"</span>, <span class="_standard">"STANDARD"</span> или <span class="_premium">"PREMIUM"</span> на накопительном счёте достаточно средств, Вы автоматически перейдёте на следующий пакет с ещё им доходом.</p>
                    <p class="pageText">Начните с пакета <span class="_econom">"ECONOM"</span> и достигните самой вершины нашей системы!</p>
                </div>
                <div class="packageFlex displayFlex spaceBetween alignBaseline">
                    <div class="packageItem">
                        <p class="packageTitle">Econom</p>
                        <p class="packageInfo _noborder">Стоимость пакета <span>100€</span></p>
                        <p class="packageCourse">Курс "Продвижение"</p>
                        <p class="packageInfo">1 линия <span>40%</span></p>
                        <p class="packageInfo">2 линия <span>20%</span></p>
                        <p class="packageInfo">3 линия <span>5%</span></p>
                        <p class="packageInfo">4 линия <span>15%</span></p>
                        <p class="packageInfo">Общий счёт <span>100%</span></p>
                        <p class="packageInfo">Вывод денег <span>40%</span></p>
                        <p class="packageInfo">Накопительный счёт <span>60%</span></p>
                        <p class="packageInfo _disabled">БОК <span>5€ в месяц</span></p>
                        <p class="packageInfo _disabled">БОК <span>РП 10%-5%-3%-2%</span></p>
                        <p class="packageInfo _disabled">Online Shop <span>РП 10%-5%-3%-2%</span></p>
                        <p class="packageAccumulation">1000€ для перехода на 2 пакет</p>
                        @if ( Auth::user()->UserInfo->user_pacage < 1 )
                            <a href="#" class="btnBuy" data-name="econom">Приобрести</a>
                        @endif
                    </div>
                    <div class="packageItem _standard">
                        <p class="packageTitle">Standard</p>
                        <p class="packageInfo _noborder">Стоимость пакета <span>1000€</span></p>
                        <p class="packageCourse">Курс "Позитивное мышление"</p>
                        <p class="packageInfo">1 линия <span>40%</span></p>
                        <p class="packageInfo">2 линия <span>20%</span></p>
                        <p class="packageInfo">3 линия <span>5%</span></p>
                        <p class="packageInfo">4 линия <span>15%</span></p>
                        <p class="packageInfo">Общий счёт <span>100%</span></p>
                        <p class="packageInfo">Вывод денег <span>40%</span></p>
                        <p class="packageInfo">Накопительный счёт <span>60%</span></p>
                        <p class="packageInfo _disabled">БОК <span>20€ в месяц</span></p>
                        <p class="packageInfo _disabled">БОК <span>РП 10%-5%-3%-2%</span></p>
                        <p class="packageInfo _disabled">Online Shop <span>РП 10%-5%-3%-2%</span></p>
                        <p class="packageInfo _disabled">Автомобильная(НК 10%) <span>до 20.000€</span></p>
                        <p class="packageInfo _disabled">Жилищная(НК 20%) <span>до 100.000€</span></p>
                        <p class="packageAccumulation">10000€ для перехода на 3 пакет</p>
                        @if ( Auth::user()->UserInfo->user_pacage < 2 )
                            <a href="#" class="btnBuy{{ Auth::user()->UserInfo->user_pacage < 1 ? ' _disabled' : '' }}" data-name="standard">Апгрейд</a>
                        @endif
                    </div>
                    <div class="packageItem _premium">
                        <p class="packageTitle">Premium</p>
                        <p class="packageInfo _noborder">Стоимость пакета <span>10000€</span></p>
                        <p class="packageCourse">Курс "Инвестиции"</p>
                        <p class="packageInfo">1 линия <span>40%</span></p>
                        <p class="packageInfo">2 линия <span>20%</span></p>
                        <p class="packageInfo">3 линия <span>5%</span></p>
                        <p class="packageInfo">4 линия <span>15%</span></p>
                        <p class="packageInfo">Общий счёт <span>100%</span></p>
                        <p class="packageInfo">Вывод денег <span>40%</span></p>
                        <p class="packageInfo">Накопительный счёт <span>60%</span></p>
                        <p class="packageInfo _disabled">БОК <span>30€ в месяц</span></p>
                        <p class="packageInfo _disabled">БОК <span>РП 10%-5%-3%-2%</span></p>
                        <p class="packageInfo _disabled">Online Shop <span>РП 10%-5%-3%-2%</span></p>
                        <p class="packageInfo _disabled">Автомобильная(НК 10%) <span>до 20.000€</span></p>
                        <p class="packageInfo _disabled">Автомобильная(НК 10%) <span>до 20.000€</span></p>
                        <p class="packageInfo _disabled">Жилищная(НК 20%) <span>до 100.000€</span></p>
                        <p class="packageInfo _disabled">Инвестиционная(НК 30%) <span>до 300.000€</span></p>
                        <p class="packageAccumulation">100000€ для перехода на 4 пакет</p>
                        @if ( Auth::user()->UserInfo->user_pacage < 3 )
                            <a href="#" class="btnBuy{{ Auth::user()->UserInfo->user_pacage < 2 ? ' _disabled' : '' }}" data-name="premium">Апгрейд</a>
                        @endif
                    </div>
                    <div class="packageItem _vip">
                        <p class="packageTitle">VIP</p>
                        <p class="packageInfo _noborder">Стоимость пакета <span>100000€</span></p>
                        <p class="packageCourse">Курс "Инвестиции +"</p>
                        <p class="packageInfo">1 линия <span>40%</span></p>
                        <p class="packageInfo">2 линия <span>20%</span></p>
                        <p class="packageInfo">3 линия <span>5%</span></p>
                        <p class="packageInfo">4 линия <span>15%</span></p>
                        <p class="packageInfo">Общий счёт <span>100%</span></p>
                        <p class="packageInfo">Вывод денег <span>40%</span></p>
                        <p class="packageInfo _disabled">БОК <span>50€ в месяц</span></p>
                        <p class="packageInfo _disabled">БОК <span>РП 10%-5%-3%-2%</span></p>
                        <p class="packageInfo _disabled">Online Shop <span>РП 10%-5%-3%-2%</span></p>
                        <p class="packageAccumulation">Дальше дело за вами</p>
                        @if ( Auth::user()->UserInfo->user_pacage < 4 )
                            <a href="#" class="btnBuy{{ Auth::user()->UserInfo->user_pacage < 3 ? ' _disabled' : '' }}" data-name="premium">Апгрейд</a>
                        @endif
                    </div>
                </div>
                <div class="myRamka">
                    <p class="pageText _rammer">* Каждый желающий может приобрести любой из четырех пакетов. В случае покупки большего пакета, меньший открывается автоматически бесплатно.</p>
                    <p class="pageText _rammer">1 БОК (Библиотека Образовательных Курсов) для партнеров компании открыты все курсы, предусмотренные для каждого пакета</p>
                    <p class="pageText _rammer">2 РП - Реферальная Программа для партнеров компании</p>
                    <p class="pageText _rammer">3 НК – Накопительная Сумма для Авто программы и Жилищной программы</p>
                    <p class="pageText _rammer">4 Пассивный доход выплачивается партнерам после выполнения квалификации. Полная информация на официальном ресурсе компании.</p>
                </div>
                <div class="myRamka">
                    <p class="myBonusName"><span>Bonus "Travel"</span><span>пакет "Econom"</span></p>
                    <p class="pageText">20 партнеров в первую линию за 6 месяцев + 200 €</p>
                    <p class="pageText">Отсчет начинается с первого зарегистрированного партнера в пакете Econom.</p>
                    <p class="myBonusName"><span>Bonus "Start"</span><span>пакет "Standard"</span></p>
                    <p class="pageText">20 партнеров в первую линию за 6 месяцев + 2 000 € на путешествие.</p>
                    <p class="pageText">Отсчет начинается с первого зарегистрированного партнера в пакете a.</p>
                    <p class="myBonusName"><span>Bonus "Passive Income"</span><span>пакет "Standard"</span></p>
                    <p class="pageText">50 партнеров в первую линию 2% пассивный доход.</p>
                    <p class="pageText">Выплаты один раз в квартал. Квалификация – 2 партнера в первую линию в течении трех месяцев со дня первой выплаты в пакете a.</p>
                    <p class="myBonusName"><span>Bonus "Passive Income"</span><span>пакет "Premium"</span></p>
                    <p class="pageText">50 партнеров в первую линию 3% пассивный доход.</p>
                    <p class="pageText">Выплаты один раз в квартал. Квалификация – 1 партнера в первую линию в течении трех месяцев со дня первой выплаты в пакете Premium.</p>
                    <p class="myBonusName"><span>Bonus "Passive Partners"</span><span>пакет "Premium"</span></p>
                    <p class="pageText">60 партнеров, из них 30 партнеров в первую линию и 30 партнеров в остальные линии за 12 месяцев + 50 000 €</p>
                    <p class="pageText">Отсчет начинается с первого зарегистрированного партнера в пакете Premium.</p>
                    <p class="myBonusName"><span>Bonus "Passive Income"</span><span>пакет "VIP"</span></p>
                    <p class="pageText">10 партнеров в первую линию 5% пассивный доход.</p>
                    <p class="pageText">Выплаты один раз в квартал. Квалификация – 1 партнер в первую линию в течении 6 месяцев со дня первой выплаты в пакете VIP.</p>
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
