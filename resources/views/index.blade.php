<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="_token" content="{!! csrf_token() !!}" />
    <title></title>
    {!! HTML::style('css/frozen.css') !!}
    {!! HTML::style('css/ad.css') !!}
</head>
<body>
<input type='hidden' name='tokenKey' value="{{ $tokenKey }}"></input>
<input type='hidden' name='sponsorUrl' value="{{ $sponsorUrl }}"></input>
<section class="ui-container">
   <section class="zl-ad">
       <div class="zl-ad-contain">
           <img src="{{url()}}/images/b201206132330300836.jpg" class="warp">
           <img src="{{url()}}/images/free.png" class="free">
           <img src="{{url()}}/images/insure.png" class="insure">
           <img src="{{url()}}/images/info.png" class="info">
           <div class="zl-ad-touch"  id="clickWarp">
               <!-- 修改部分-->
               <div class="zl-ad-touch-warp">
                   <span class="zl-ad-title">点击</span>
                   <img src="{{ $sponsorLogo }}" id="touch">
                   <span class="zl-ad-title">领取</span>
               </div>
               <!-- 修改部分-->
           </div>
           <div class="success-get">
              <span class="advers">广告还有<span class="time"> 30 </span>秒</span>
              <img src="{{url()}}/images/close.png"  class="close-iframe" >
              <div class="clickLayer"></div>
              <iframe src=""  style="width:100%;height:100%;">
              </iframe>
           </div>
       </div>
   </section>
</section>
{!! HTML::script('js/lib/jquery-2.2.1.min.js') !!}
{!! HTML::script('js/lib/hammer.min.js') !!}
{!! HTML::script('js/lib/hammer-time.js') !!}
{!! HTML::script('js/driveCareAD.js') !!}
</body>
</html>