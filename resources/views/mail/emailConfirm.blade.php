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
</div>
<style>
    .popupItem{
        position: relative;
        z-index: 2;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-radius: 12px;
        background: #FFFFFF;
        max-width: 480px;
        padding: 24px;
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
