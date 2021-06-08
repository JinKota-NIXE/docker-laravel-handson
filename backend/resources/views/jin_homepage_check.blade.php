<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="神 孝太の自己紹介ページです。">
<meta name="format-detection" content="telephone=no">
<!--
<link rel="shortcut icon" href="/jin_homepage_img/common/favicon.ico">
<link rel="icon" href="/jin_homepage_img/common/favicon.ico">
<link rel="canonical" href="http://www">
-->

<title>神 孝太 | Jin's Profile</title>

<link rel="stylesheet" href="/jin_homepage_css/reset.css">
<link rel="stylesheet" href="/jin_homepage_css/common.css">
<link rel="stylesheet" href="/jin_homepage_css/index.css">
<link rel="stylesheet" href="/jin_homepage_css/swiper.css">
<link rel="stylesheet" href="/jin_homepage_css/animate.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,900|Noto+Serif+JP:400,600&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.js"></script> <!-- object-fit: 〇〇をIEでも認識するようにする(CSS側でも「font-family: 'object-fit: 〇〇'」を追加する) -->
<!--[if lt IE 9]><script src="/jin_homepage_js/html5shiv.js"></script><![endif]-->
<!-- <script type="text/javascript" src="/jin_homepage_js/respond.js"></script> -->
<script src="/jin_homepage_js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script type="text/javascript">
    
	$(window).on('load', function () {
        
        // ipad・スマホ用ヘッダーを上部に固定し追従
        var navTypeAOffsetTop = $('header').offset().top;
        $(window).on('scroll', function () {
            if($(this).scrollTop() > navTypeAOffsetTop) {
                $('header').addClass('is_fixed');
            } else {
                $('header').removeClass('is_fixed');
            }
        });
        
        // headerの高さが変わってもスマホメニューのレイアウト崩れを防止・スクロールバーの底辺位置を固定
        $('#nav_sp').css('top', $('header').outerHeight());
        $('#nav_sp').css('height', 'calc(100vh - ' + $('header').outerHeight() + 'px)');
        $('#nav_sp').css('min-height', 'calc(100vh - ' + $('header').outerHeight() + 'px)');
        $(window).resize(function() {
            $('#nav_sp').css('top', $('header').outerHeight());
            $('#nav_sp').css('height', 'calc(100vh - ' + $('header').outerHeight() + 'px)');
            $('#nav_sp').css('min-height', 'calc(100vh - ' + $('header').outerHeight() + 'px)');
        });

        // アコーディオン
        $(function(){
            $(".slide_contents").hide();
            $(".slide_btn").on("click",function(){
                $(".slide_contents").slideToggle();
                $(this).toggleClass("slide_open");
            });  
        });
        
        // 商品カテゴリ一覧をアコーディオンで表示
        //$(".submenu > .sub_category").hide();
        //$(".submenu").on("click",function(){
        //    $(this).children(".sub_category").slideToggle();
        //});
        
	});
</script>
</head>
<body>
    <header>
        <div class="top_message">
            神 孝太のプロフィールページ
        </div>
        <div class="clearfix">
            <div class="logo_area">
                <h1>Jin's Profile</h1>
            </div>
            <div class="navbar-mobile-menu right tab sp">
                <div class="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            
  
        <div id="nav_sp" class="tab sp">
            <div class="menu_sp">
                <p>ipadまたはスマホで見てくれた人ごめん...何もないんだ...。</p>
            </div>
        </div>
            
        
    </header>

    <div id="contents">
        <div class="form_message">
            <p>{{$name}}さんが「{{$message}}」と書き込みました。</p>
        </div>
        <form action="{{route('jin_homepage_complete')}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="put">
            <p>上記のように書き込みますか？</p>
            <input type="hidden" name="name" value="{{$name}}">
            <input type="hidden" name="password" value="{{$password}}">
            <input type="hidden" name="message" value="{{$message}}">
            <div class="button_area">
                <a href="{{route('jin_homepage')}}">
                    <div class="home_btn">
                        TOPへ戻る
                    </div>
                </a>
                <div class="button_submit"><input type="submit" value="送信する" name="send"></div>
            </div>
        </form>
    </div>

    </div>
    <div id="pagetop">
        <div class="decoration_1"></div>
        <div class="decoration_2"></div>
        <span>TOP</span>
    </div>
    <div id="pagetop_sp">
        <div class="decoration_1"></div>
        <div class="decoration_2"></div>    
    </div>
	<footer>
        <div class="contents_inner">
            <div class="logo_area">
                <h1>Jin's Profile</h1>
            </div>
        </div>
        <div id="footer_copy"><small>&copy; 2021 Jin's Profile.</small></div>
	</footer>
    <script type="text/javascript" src="/jin_homepage_js/common.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          loop: true,
        });
    </script>
    <script> objectFitImages(); </script>
</body>
</html>