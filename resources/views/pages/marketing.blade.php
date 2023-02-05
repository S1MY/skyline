@extends('layouts.master')

@section('content')
    <div class="headerP"></div>
    <section class="section _hero">
        <div class="page">
            <h1 class="title">@lang('mainPages.marketing_first_screen.title')</h1>
            <p class="subText">@lang('mainPages.marketing_first_screen.subtitle')</p>
            <p class="myText">@lang('mainPages.marketing_first_screen.description')</p>
        </div>
    </section>
    <section class="section _expert">
        <div class="page">
            <h2 class="title">@lang('mainPages.marketing_second_screen.title')</h2>
            <p class="subText">@lang('mainPages.marketing_second_screen.subtitle')</p>
            <div class="mediaFlex">
                <div class="mediaItem">
                    <p class="mediaHead">@lang('mainPages.marketing_second_screen.head')</p>
                    <p class="mediaText">@lang('mainPages.marketing_second_screen.description')</p>
                </div>
                <div class="mediaItem">
                    <div class="noteWrapper">
                        <iframe class="noteVideo" width="560" height="315" src="@lang('mainPages.marketing_second_screen.videolink')" title="@lang('mainPages.marketing_second_screen.title')" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section _b">
        <div class="page">
            <div class="bItem">
                <img src="/image/marketing/1.png" alt="1">
                <p class="bItemNumber">87</p>
                <p class="bItemText">Webdesign<br> Projects</p>
            </div>
            <div class="bItem">
                <img src="/image/marketing/2.png" alt="2">
                <p class="bItemNumber">62</p>
                <p class="bItemText">Logo design<br> Projects</p>
            </div>
            <div class="bItem">
                <img src="/image/marketing/3.png" alt="3">
                <p class="bItemNumber">36</p>
                <p class="bItemText">Application design<br> Projects</p>
            </div>
            <div class="bItem">
                <img src="/image/marketing/4.png" alt="4">
                <p class="bItemNumber">25</p>
                <p class="bItemText">Print media<br> Projects</p>
            </div>
        </div>
    </section> -->
    <section class="section _marketing">
        <div class="page">
            <h2 class="title">@lang('mainPages.marketing_third_screen.title')</h2>
            <p class="subText">@lang('mainPages.marketing_third_screen.subtitle')</p>
            <div class="packageFlex displayFlex spaceBetween">
                <div class="packageItem">
                    <div class="packageTop">
                        <p class="packageTitle">@lang('mainPages.marketing_third_screen.packages.econom.packageTitle')</p>
                        <p class="packageInfo _noborder">@lang('mainPages.marketing_third_screen.packages.econom.packageInfo0')</p>
                        <p class="packageCourse">@lang('mainPages.marketing_third_screen.packages.econom.packageCourse')</p>
                        <p class="packageInfo">@lang('mainPages.marketing_third_screen.packageInfo0')</p>
                        <p class="packageInfo">@lang('mainPages.marketing_third_screen.packageInfo1')</p>
                        <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packages.econom.packageInfo1')</p>
                        <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packageInfo2')</p>
                        <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packageInfo3')</p>
                    </div>
                    <p class="packageAccumulation">@lang('mainPages.marketing_third_screen.packages.econom.packageAccumulation')</p>
                    <a href="#" class="btnBuy popupBtn" data-name="register">@lang('mainPages.marketing_third_screen.btnBuy')</a>
                </div>
                <div class="packageItem _standard">
                    <div class="packageTop">
                    <p class="packageTitle">@lang('mainPages.marketing_third_screen.packages.standard.packageTitle')</p>
                    <p class="packageInfo _noborder">@lang('mainPages.marketing_third_screen.packages.standard.packageInfo0')</p>
                    <p class="packageCourse">@lang('mainPages.marketing_third_screen.packages.standard.packageCourse')</p>
                    <p class="packageInfo">@lang('mainPages.marketing_third_screen.packageInfo0')</p>
                    <p class="packageInfo">@lang('mainPages.marketing_third_screen.packageInfo1')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packages.standard.packageInfo1')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packageInfo2')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packageInfo3')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packages.standard.packageInfo2')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packages.standard.packageInfo3')</p>
                    </div>
                    <p class="packageAccumulation">@lang('mainPages.marketing_third_screen.packages.standard.packageAccumulation')</p>
                    <a href="#" class="btnBuy popupBtn" data-name="register">@lang('mainPages.marketing_third_screen.btnBuy')</a>
                </div>
                <div class="packageItem _premium">
                    <div class="packageTop">
                    <p class="packageTitle">@lang('mainPages.marketing_third_screen.packages.premium.packageTitle')</p>
                    <p class="packageInfo _noborder">@lang('mainPages.marketing_third_screen.packages.premium.packageInfo0')</p>
                    <p class="packageCourse">@lang('mainPages.marketing_third_screen.packages.premium.packageCourse')</p>
                    <p class="packageInfo">@lang('mainPages.marketing_third_screen.packageInfo0')</p>
                    <p class="packageInfo">@lang('mainPages.marketing_third_screen.packageInfo1')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packages.premium.packageInfo1')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packageInfo2')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packageInfo3')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packages.premium.packageInfo2')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packages.premium.packageInfo3')</p>
                    <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packages.premium.packageInfo4')</p>
                    </div>
                    <p class="packageAccumulation">@lang('mainPages.marketing_third_screen.packages.premium.packageAccumulation')</p>
                    <a href="#" class="btnBuy popupBtn" data-name="register">@lang('mainPages.marketing_third_screen.btnBuy')</a>
                </div>
                <div class="packageItem _vip">
                    <div class="packageTop">
                        <p class="packageTitle">@lang('mainPages.marketing_third_screen.packages.vip.packageTitle')</p>
                        <p class="packageInfo _noborder">@lang('mainPages.marketing_third_screen.packages.vip.packageInfo0')</p>
                        <p class="packageCourse">@lang('mainPages.marketing_third_screen.packages.vip.packageCourse')</p>
                        <p class="packageInfo">@lang('mainPages.marketing_third_screen.packageInfo0')</p>
                        <p class="packageInfo">@lang('mainPages.marketing_third_screen.packageInfo1')</p>
                        <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packages.vip.packageInfo1')</p>
                        <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packageInfo2')</p>
                        <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packageInfo3')</p>
                        <p class="packageInfo _disabled">@lang('mainPages.marketing_third_screen.packageInfo4')</p>
                    <p class="packageGroover">@lang('mainPages.marketing_third_screen.packages.vip.packageGroover0')</p>
                    <p class="packageGroover">@lang('mainPages.marketing_third_screen.packages.vip.packageGroover1')</p>
                    <p class="packageGroover">@lang('mainPages.marketing_third_screen.packages.vip.packageGroover2')</p>
                    <p class="packageGroover">@lang('mainPages.marketing_third_screen.packages.vip.packageGroover3')</p>
                    </div>
                    <p class="packageAccumulation">@lang('mainPages.marketing_third_screen.packages.vip.packageAccumulation')</p>
                    <a href="#" class="btnBuy popupBtn" data-name="register">@lang('mainPages.marketing_third_screen.btnBuy')</a>
                </div>
                <div class="myRamka">
                    <p class="pageText _rammer">@lang('mainPages.marketing_third_screen.packages_text.text0')</p>
                    <p class="pageText _rammer">@lang('mainPages.marketing_third_screen.packages_text.text1')</p>
                    <p class="pageText _rammer">@lang('mainPages.marketing_third_screen.packages_text.text2')</p>
                    <p class="pageText _rammer">@lang('mainPages.marketing_third_screen.packages_text.text3')</p>
                    <p class="pageText _rammer">@lang('mainPages.marketing_third_screen.packages_text.text4')</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section _case">
        <div class="page">
            <h2 class="title">@lang('mainPages.marketing_fourth_screen.title')</h2>
            <p class="subText">@lang('mainPages.marketing_fourth_screen.subtitle')</p>
            <div class="markFlex">
                <div class="markItem">
                    <h2 class="markName">@lang('mainPages.marketing_fourth_screen.bonuses.one.markName')</h2>
                    <h2 class="markEblo">@lang('mainPages.marketing_fourth_screen.bonuses.one.markEblo')</h2>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.one.markText0')</p>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.one.markText1')</p>
                </div>
                <div class="markItem">
                    <h2 class="markName">@lang('mainPages.marketing_fourth_screen.bonuses.two.markName')</h2>
                    <h2 class="markEblo">@lang('mainPages.marketing_fourth_screen.bonuses.two.markEblo')</h2>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.two.markText0')</p>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.two.markText1')</p>
                </div>
                <div class="markItem">
                    <h2 class="markName">@lang('mainPages.marketing_fourth_screen.bonuses.three.markName')</h2>
                    <h2 class="markEblo">@lang('mainPages.marketing_fourth_screen.bonuses.three.markEblo')</h2>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.three.markText0')</p>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.three.markText1')</p>
                </div>
                <div class="markItem">
                    <h2 class="markName">@lang('mainPages.marketing_fourth_screen.bonuses.four.markName')</h2>
                    <h2 class="markEblo">@lang('mainPages.marketing_fourth_screen.bonuses.four.markEblo')</h2>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.four.markText0')</p>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.four.markText1')</p>
                </div>
                <div class="markItem">
                    <h2 class="markName">@lang('mainPages.marketing_fourth_screen.bonuses.five.markName')</h2>
                    <h2 class="markEblo">@lang('mainPages.marketing_fourth_screen.bonuses.five.markEblo')</h2>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.five.markText0')</p>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.five.markText1')</p>
                </div>
                <div class="markItem">
                    <h2 class="markName">@lang('mainPages.marketing_fourth_screen.bonuses.six.markName')</h2>
                    <h2 class="markEblo">@lang('mainPages.marketing_fourth_screen.bonuses.six.markEblo')</h2>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.six.markText0')</p>
                    <p class="markText">@lang('mainPages.marketing_fourth_screen.bonuses.six.markText1')</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section _blued">
        <div class="page">
            <h2 class="title">@lang('mainPages.marketing_question.title')</h2>
            <div class="answerWrapper">
                <div class="answerItem">
                    <p class="answerHeader">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#3867D6"/>
                            <path d="M4.01465 7.75781H5.43652L8.10889 14.8862L10.7749 7.75781H12.1968L8.66748 17H7.5376L4.01465 7.75781ZM3.36719 7.75781H4.71924L4.9541 13.9277V17H3.36719V7.75781ZM11.4922 7.75781H12.8506V17H11.2573V13.9277L11.4922 7.75781ZM15.4468 7.75781L17.5923 12.1694L19.7378 7.75781H21.5024L18.3921 13.5977V17H16.7861V13.5977L13.6758 7.75781H15.4468Z" fill="white"/>
                        </svg>
                        <span>@lang('mainPages.marketing_question.questions.quest0.q')</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="answerIcon">
                            <path d="M9.98715 11.8612L15.9161 5.42491C16.024 5.29628 16.1545 5.19245 16.3001 5.11958C16.4456 5.04671 16.6031 5.00628 16.7633 5.00068C16.9235 4.99507 17.0831 5.02441 17.2326 5.08696C17.3822 5.1495 17.5186 5.24398 17.6339 5.36481C17.7493 5.48563 17.8411 5.63034 17.9039 5.79037C17.9668 5.9504 17.9995 6.1225 18 6.29648C18.0005 6.47045 17.9689 6.64277 17.9069 6.80324C17.845 6.9637 17.754 7.10905 17.6395 7.23067L17.6103 7.26235L10.8351 14.6191C10.6104 14.863 10.3057 15 9.98796 15C9.67024 15 9.36554 14.863 9.14086 14.6191L2.36565 7.26411C2.25249 7.14543 2.16197 7.00371 2.09927 6.84705C2.03656 6.69039 2.00289 6.52186 2.00018 6.35107C1.99747 6.18029 2.02577 6.01059 2.08347 5.85168C2.14117 5.69277 2.22714 5.54776 2.33647 5.42491C2.4458 5.30207 2.57634 5.2038 2.72065 5.13573C2.86496 5.06766 3.02021 5.0311 3.17753 5.02816C3.33485 5.02522 3.49116 5.05595 3.63755 5.11858C3.78393 5.18122 3.91752 5.27455 4.03067 5.39323L4.05986 5.42491L9.98715 11.8612Z" fill="#3867D6"></path>
                        </svg>
                    </p>
                    <div class="answerContent">@lang('mainPages.marketing_question.questions.quest0.a')</div>
                </div>
                <div class="answerItem">
                    <p class="answerHeader">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#3867D6"/>
                            <path d="M4.01465 7.75781H5.43652L8.10889 14.8862L10.7749 7.75781H12.1968L8.66748 17H7.5376L4.01465 7.75781ZM3.36719 7.75781H4.71924L4.9541 13.9277V17H3.36719V7.75781ZM11.4922 7.75781H12.8506V17H11.2573V13.9277L11.4922 7.75781ZM15.4468 7.75781L17.5923 12.1694L19.7378 7.75781H21.5024L18.3921 13.5977V17H16.7861V13.5977L13.6758 7.75781H15.4468Z" fill="white"/>
                        </svg>
                        <span>@lang('mainPages.marketing_question.questions.quest1.q')</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="answerIcon">
                            <path d="M9.98715 11.8612L15.9161 5.42491C16.024 5.29628 16.1545 5.19245 16.3001 5.11958C16.4456 5.04671 16.6031 5.00628 16.7633 5.00068C16.9235 4.99507 17.0831 5.02441 17.2326 5.08696C17.3822 5.1495 17.5186 5.24398 17.6339 5.36481C17.7493 5.48563 17.8411 5.63034 17.9039 5.79037C17.9668 5.9504 17.9995 6.1225 18 6.29648C18.0005 6.47045 17.9689 6.64277 17.9069 6.80324C17.845 6.9637 17.754 7.10905 17.6395 7.23067L17.6103 7.26235L10.8351 14.6191C10.6104 14.863 10.3057 15 9.98796 15C9.67024 15 9.36554 14.863 9.14086 14.6191L2.36565 7.26411C2.25249 7.14543 2.16197 7.00371 2.09927 6.84705C2.03656 6.69039 2.00289 6.52186 2.00018 6.35107C1.99747 6.18029 2.02577 6.01059 2.08347 5.85168C2.14117 5.69277 2.22714 5.54776 2.33647 5.42491C2.4458 5.30207 2.57634 5.2038 2.72065 5.13573C2.86496 5.06766 3.02021 5.0311 3.17753 5.02816C3.33485 5.02522 3.49116 5.05595 3.63755 5.11858C3.78393 5.18122 3.91752 5.27455 4.03067 5.39323L4.05986 5.42491L9.98715 11.8612Z" fill="#3867D6"></path>
                        </svg>
                    </p>
                    <div class="answerContent">@lang('mainPages.marketing_question.questions.quest1.a')</div>
                </div>
                <div class="answerItem">
                    <p class="answerHeader">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#3867D6"/>
                            <path d="M4.01465 7.75781H5.43652L8.10889 14.8862L10.7749 7.75781H12.1968L8.66748 17H7.5376L4.01465 7.75781ZM3.36719 7.75781H4.71924L4.9541 13.9277V17H3.36719V7.75781ZM11.4922 7.75781H12.8506V17H11.2573V13.9277L11.4922 7.75781ZM15.4468 7.75781L17.5923 12.1694L19.7378 7.75781H21.5024L18.3921 13.5977V17H16.7861V13.5977L13.6758 7.75781H15.4468Z" fill="white"/>
                        </svg>
                        <span>@lang('mainPages.marketing_question.questions.quest2.q')</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="answerIcon">
                            <path d="M9.98715 11.8612L15.9161 5.42491C16.024 5.29628 16.1545 5.19245 16.3001 5.11958C16.4456 5.04671 16.6031 5.00628 16.7633 5.00068C16.9235 4.99507 17.0831 5.02441 17.2326 5.08696C17.3822 5.1495 17.5186 5.24398 17.6339 5.36481C17.7493 5.48563 17.8411 5.63034 17.9039 5.79037C17.9668 5.9504 17.9995 6.1225 18 6.29648C18.0005 6.47045 17.9689 6.64277 17.9069 6.80324C17.845 6.9637 17.754 7.10905 17.6395 7.23067L17.6103 7.26235L10.8351 14.6191C10.6104 14.863 10.3057 15 9.98796 15C9.67024 15 9.36554 14.863 9.14086 14.6191L2.36565 7.26411C2.25249 7.14543 2.16197 7.00371 2.09927 6.84705C2.03656 6.69039 2.00289 6.52186 2.00018 6.35107C1.99747 6.18029 2.02577 6.01059 2.08347 5.85168C2.14117 5.69277 2.22714 5.54776 2.33647 5.42491C2.4458 5.30207 2.57634 5.2038 2.72065 5.13573C2.86496 5.06766 3.02021 5.0311 3.17753 5.02816C3.33485 5.02522 3.49116 5.05595 3.63755 5.11858C3.78393 5.18122 3.91752 5.27455 4.03067 5.39323L4.05986 5.42491L9.98715 11.8612Z" fill="#3867D6"></path>
                        </svg>
                    </p>
                    <div class="answerContent">@lang('mainPages.marketing_question.questions.quest2.a')</div>
                </div>
                <div class="answerItem">
                    <p class="answerHeader">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#3867D6"/>
                            <path d="M4.01465 7.75781H5.43652L8.10889 14.8862L10.7749 7.75781H12.1968L8.66748 17H7.5376L4.01465 7.75781ZM3.36719 7.75781H4.71924L4.9541 13.9277V17H3.36719V7.75781ZM11.4922 7.75781H12.8506V17H11.2573V13.9277L11.4922 7.75781ZM15.4468 7.75781L17.5923 12.1694L19.7378 7.75781H21.5024L18.3921 13.5977V17H16.7861V13.5977L13.6758 7.75781H15.4468Z" fill="white"/>
                        </svg>
                        <span>@lang('mainPages.marketing_question.questions.quest3.q')</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="answerIcon">
                            <path d="M9.98715 11.8612L15.9161 5.42491C16.024 5.29628 16.1545 5.19245 16.3001 5.11958C16.4456 5.04671 16.6031 5.00628 16.7633 5.00068C16.9235 4.99507 17.0831 5.02441 17.2326 5.08696C17.3822 5.1495 17.5186 5.24398 17.6339 5.36481C17.7493 5.48563 17.8411 5.63034 17.9039 5.79037C17.9668 5.9504 17.9995 6.1225 18 6.29648C18.0005 6.47045 17.9689 6.64277 17.9069 6.80324C17.845 6.9637 17.754 7.10905 17.6395 7.23067L17.6103 7.26235L10.8351 14.6191C10.6104 14.863 10.3057 15 9.98796 15C9.67024 15 9.36554 14.863 9.14086 14.6191L2.36565 7.26411C2.25249 7.14543 2.16197 7.00371 2.09927 6.84705C2.03656 6.69039 2.00289 6.52186 2.00018 6.35107C1.99747 6.18029 2.02577 6.01059 2.08347 5.85168C2.14117 5.69277 2.22714 5.54776 2.33647 5.42491C2.4458 5.30207 2.57634 5.2038 2.72065 5.13573C2.86496 5.06766 3.02021 5.0311 3.17753 5.02816C3.33485 5.02522 3.49116 5.05595 3.63755 5.11858C3.78393 5.18122 3.91752 5.27455 4.03067 5.39323L4.05986 5.42491L9.98715 11.8612Z" fill="#3867D6"></path>
                        </svg>
                    </p>
                    <div class="answerContent">@lang('mainPages.marketing_question.questions.quest3.a')</div>
                </div>
                <div class="answerItem">
                    <p class="answerHeader">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#3867D6"/>
                            <path d="M4.01465 7.75781H5.43652L8.10889 14.8862L10.7749 7.75781H12.1968L8.66748 17H7.5376L4.01465 7.75781ZM3.36719 7.75781H4.71924L4.9541 13.9277V17H3.36719V7.75781ZM11.4922 7.75781H12.8506V17H11.2573V13.9277L11.4922 7.75781ZM15.4468 7.75781L17.5923 12.1694L19.7378 7.75781H21.5024L18.3921 13.5977V17H16.7861V13.5977L13.6758 7.75781H15.4468Z" fill="white"/>
                        </svg>
                        <span>@lang('mainPages.marketing_question.questions.quest4.q')</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="answerIcon">
                            <path d="M9.98715 11.8612L15.9161 5.42491C16.024 5.29628 16.1545 5.19245 16.3001 5.11958C16.4456 5.04671 16.6031 5.00628 16.7633 5.00068C16.9235 4.99507 17.0831 5.02441 17.2326 5.08696C17.3822 5.1495 17.5186 5.24398 17.6339 5.36481C17.7493 5.48563 17.8411 5.63034 17.9039 5.79037C17.9668 5.9504 17.9995 6.1225 18 6.29648C18.0005 6.47045 17.9689 6.64277 17.9069 6.80324C17.845 6.9637 17.754 7.10905 17.6395 7.23067L17.6103 7.26235L10.8351 14.6191C10.6104 14.863 10.3057 15 9.98796 15C9.67024 15 9.36554 14.863 9.14086 14.6191L2.36565 7.26411C2.25249 7.14543 2.16197 7.00371 2.09927 6.84705C2.03656 6.69039 2.00289 6.52186 2.00018 6.35107C1.99747 6.18029 2.02577 6.01059 2.08347 5.85168C2.14117 5.69277 2.22714 5.54776 2.33647 5.42491C2.4458 5.30207 2.57634 5.2038 2.72065 5.13573C2.86496 5.06766 3.02021 5.0311 3.17753 5.02816C3.33485 5.02522 3.49116 5.05595 3.63755 5.11858C3.78393 5.18122 3.91752 5.27455 4.03067 5.39323L4.05986 5.42491L9.98715 11.8612Z" fill="#3867D6"></path>
                        </svg>
                    </p>
                    <div class="answerContent">@lang('mainPages.marketing_question.questions.quest4.a')</div>
                </div>
                <div class="answerItem">
                    <p class="answerHeader">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#3867D6"/>
                            <path d="M4.01465 7.75781H5.43652L8.10889 14.8862L10.7749 7.75781H12.1968L8.66748 17H7.5376L4.01465 7.75781ZM3.36719 7.75781H4.71924L4.9541 13.9277V17H3.36719V7.75781ZM11.4922 7.75781H12.8506V17H11.2573V13.9277L11.4922 7.75781ZM15.4468 7.75781L17.5923 12.1694L19.7378 7.75781H21.5024L18.3921 13.5977V17H16.7861V13.5977L13.6758 7.75781H15.4468Z" fill="white"/>
                        </svg>
                        <span>@lang('mainPages.marketing_question.questions.quest5.q')</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="answerIcon">
                            <path d="M9.98715 11.8612L15.9161 5.42491C16.024 5.29628 16.1545 5.19245 16.3001 5.11958C16.4456 5.04671 16.6031 5.00628 16.7633 5.00068C16.9235 4.99507 17.0831 5.02441 17.2326 5.08696C17.3822 5.1495 17.5186 5.24398 17.6339 5.36481C17.7493 5.48563 17.8411 5.63034 17.9039 5.79037C17.9668 5.9504 17.9995 6.1225 18 6.29648C18.0005 6.47045 17.9689 6.64277 17.9069 6.80324C17.845 6.9637 17.754 7.10905 17.6395 7.23067L17.6103 7.26235L10.8351 14.6191C10.6104 14.863 10.3057 15 9.98796 15C9.67024 15 9.36554 14.863 9.14086 14.6191L2.36565 7.26411C2.25249 7.14543 2.16197 7.00371 2.09927 6.84705C2.03656 6.69039 2.00289 6.52186 2.00018 6.35107C1.99747 6.18029 2.02577 6.01059 2.08347 5.85168C2.14117 5.69277 2.22714 5.54776 2.33647 5.42491C2.4458 5.30207 2.57634 5.2038 2.72065 5.13573C2.86496 5.06766 3.02021 5.0311 3.17753 5.02816C3.33485 5.02522 3.49116 5.05595 3.63755 5.11858C3.78393 5.18122 3.91752 5.27455 4.03067 5.39323L4.05986 5.42491L9.98715 11.8612Z" fill="#3867D6"></path>
                        </svg>
                    </p>
                    <div class="answerContent">@lang('mainPages.marketing_question.questions.quest5.a')</div>
                </div>
                <div class="answerItem">
                    <p class="answerHeader">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#3867D6"/>
                            <path d="M4.01465 7.75781H5.43652L8.10889 14.8862L10.7749 7.75781H12.1968L8.66748 17H7.5376L4.01465 7.75781ZM3.36719 7.75781H4.71924L4.9541 13.9277V17H3.36719V7.75781ZM11.4922 7.75781H12.8506V17H11.2573V13.9277L11.4922 7.75781ZM15.4468 7.75781L17.5923 12.1694L19.7378 7.75781H21.5024L18.3921 13.5977V17H16.7861V13.5977L13.6758 7.75781H15.4468Z" fill="white"/>
                        </svg>
                        <span>@lang('mainPages.marketing_question.questions.quest6.q')</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="answerIcon">
                            <path d="M9.98715 11.8612L15.9161 5.42491C16.024 5.29628 16.1545 5.19245 16.3001 5.11958C16.4456 5.04671 16.6031 5.00628 16.7633 5.00068C16.9235 4.99507 17.0831 5.02441 17.2326 5.08696C17.3822 5.1495 17.5186 5.24398 17.6339 5.36481C17.7493 5.48563 17.8411 5.63034 17.9039 5.79037C17.9668 5.9504 17.9995 6.1225 18 6.29648C18.0005 6.47045 17.9689 6.64277 17.9069 6.80324C17.845 6.9637 17.754 7.10905 17.6395 7.23067L17.6103 7.26235L10.8351 14.6191C10.6104 14.863 10.3057 15 9.98796 15C9.67024 15 9.36554 14.863 9.14086 14.6191L2.36565 7.26411C2.25249 7.14543 2.16197 7.00371 2.09927 6.84705C2.03656 6.69039 2.00289 6.52186 2.00018 6.35107C1.99747 6.18029 2.02577 6.01059 2.08347 5.85168C2.14117 5.69277 2.22714 5.54776 2.33647 5.42491C2.4458 5.30207 2.57634 5.2038 2.72065 5.13573C2.86496 5.06766 3.02021 5.0311 3.17753 5.02816C3.33485 5.02522 3.49116 5.05595 3.63755 5.11858C3.78393 5.18122 3.91752 5.27455 4.03067 5.39323L4.05986 5.42491L9.98715 11.8612Z" fill="#3867D6"></path>
                        </svg>
                    </p>
                    <div class="answerContent">@lang('mainPages.marketing_question.questions.quest6.a')</div>
                </div>
                <div class="answerItem">
                    <p class="answerHeader">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#3867D6"/>
                            <path d="M4.01465 7.75781H5.43652L8.10889 14.8862L10.7749 7.75781H12.1968L8.66748 17H7.5376L4.01465 7.75781ZM3.36719 7.75781H4.71924L4.9541 13.9277V17H3.36719V7.75781ZM11.4922 7.75781H12.8506V17H11.2573V13.9277L11.4922 7.75781ZM15.4468 7.75781L17.5923 12.1694L19.7378 7.75781H21.5024L18.3921 13.5977V17H16.7861V13.5977L13.6758 7.75781H15.4468Z" fill="white"/>
                        </svg>
                        <span>@lang('mainPages.marketing_question.questions.quest7.q')</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="answerIcon">
                            <path d="M9.98715 11.8612L15.9161 5.42491C16.024 5.29628 16.1545 5.19245 16.3001 5.11958C16.4456 5.04671 16.6031 5.00628 16.7633 5.00068C16.9235 4.99507 17.0831 5.02441 17.2326 5.08696C17.3822 5.1495 17.5186 5.24398 17.6339 5.36481C17.7493 5.48563 17.8411 5.63034 17.9039 5.79037C17.9668 5.9504 17.9995 6.1225 18 6.29648C18.0005 6.47045 17.9689 6.64277 17.9069 6.80324C17.845 6.9637 17.754 7.10905 17.6395 7.23067L17.6103 7.26235L10.8351 14.6191C10.6104 14.863 10.3057 15 9.98796 15C9.67024 15 9.36554 14.863 9.14086 14.6191L2.36565 7.26411C2.25249 7.14543 2.16197 7.00371 2.09927 6.84705C2.03656 6.69039 2.00289 6.52186 2.00018 6.35107C1.99747 6.18029 2.02577 6.01059 2.08347 5.85168C2.14117 5.69277 2.22714 5.54776 2.33647 5.42491C2.4458 5.30207 2.57634 5.2038 2.72065 5.13573C2.86496 5.06766 3.02021 5.0311 3.17753 5.02816C3.33485 5.02522 3.49116 5.05595 3.63755 5.11858C3.78393 5.18122 3.91752 5.27455 4.03067 5.39323L4.05986 5.42491L9.98715 11.8612Z" fill="#3867D6"></path>
                        </svg>
                    </p>
                    <div class="answerContent">@lang('mainPages.marketing_question.questions.quest7.a')</div>
                </div>
                <div class="answerItem">
                    <p class="answerHeader">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#3867D6"/>
                            <path d="M4.01465 7.75781H5.43652L8.10889 14.8862L10.7749 7.75781H12.1968L8.66748 17H7.5376L4.01465 7.75781ZM3.36719 7.75781H4.71924L4.9541 13.9277V17H3.36719V7.75781ZM11.4922 7.75781H12.8506V17H11.2573V13.9277L11.4922 7.75781ZM15.4468 7.75781L17.5923 12.1694L19.7378 7.75781H21.5024L18.3921 13.5977V17H16.7861V13.5977L13.6758 7.75781H15.4468Z" fill="white"/>
                        </svg>
                        <span>@lang('mainPages.marketing_question.questions.quest8.q')</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="answerIcon">
                            <path d="M9.98715 11.8612L15.9161 5.42491C16.024 5.29628 16.1545 5.19245 16.3001 5.11958C16.4456 5.04671 16.6031 5.00628 16.7633 5.00068C16.9235 4.99507 17.0831 5.02441 17.2326 5.08696C17.3822 5.1495 17.5186 5.24398 17.6339 5.36481C17.7493 5.48563 17.8411 5.63034 17.9039 5.79037C17.9668 5.9504 17.9995 6.1225 18 6.29648C18.0005 6.47045 17.9689 6.64277 17.9069 6.80324C17.845 6.9637 17.754 7.10905 17.6395 7.23067L17.6103 7.26235L10.8351 14.6191C10.6104 14.863 10.3057 15 9.98796 15C9.67024 15 9.36554 14.863 9.14086 14.6191L2.36565 7.26411C2.25249 7.14543 2.16197 7.00371 2.09927 6.84705C2.03656 6.69039 2.00289 6.52186 2.00018 6.35107C1.99747 6.18029 2.02577 6.01059 2.08347 5.85168C2.14117 5.69277 2.22714 5.54776 2.33647 5.42491C2.4458 5.30207 2.57634 5.2038 2.72065 5.13573C2.86496 5.06766 3.02021 5.0311 3.17753 5.02816C3.33485 5.02522 3.49116 5.05595 3.63755 5.11858C3.78393 5.18122 3.91752 5.27455 4.03067 5.39323L4.05986 5.42491L9.98715 11.8612Z" fill="#3867D6"></path>
                        </svg>
                    </p>
                    <div class="answerContent">@lang('mainPages.marketing_question.questions.quest8.a')</div>
                </div>
            </div>
        </div>
    </section>
@endsection
