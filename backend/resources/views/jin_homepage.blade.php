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

    <div class="main_img fadeIn wow">
        <img src="/jin_homepage_img/index/main_img.png" alt="メインビジュアル">
    </div>

    <div id="contents">
        <section id="start_text_block" class="fadeIn wow">
            <div class="contents_inner">
                <p>
                    こちらは、2021年6月1日に株式会社NIXEへ入社した<br class="sp">神 孝太の自己紹介ページになります。<br>
                    画像の編集をする環境が無かったため<br class="sp_450px">サイズ感が不自然だったり、<br class="ipad">ぼやけていたりしていると思いますが<br>
                    何卒ご了承くださいませ。<br>
                    <br>
                    主に経歴・趣味などを掲載していきたいと思います。
                </p>
            </div>
        </section>
        <section id="profile_block" class="fadeIn wow">
            <div class="contents_inner">
                <h2 class="h2_style fadeIn wow"><span>Profile</span>プロフィール</h2>
                <div class="profile_box clearfix">
                    <div class="jin_img right">
                        <img src="/jin_homepage_img/index/jin_img.png" alt="神 孝太">
                    </div>
                    <div class="jin_profile left">
                        <table>
                            <tr>
                                <th>名前</th>
                                <td>神 孝太</td>
                            </tr>
                            <tr>
                                <th>生年月日</th>
                                <td>1990年12月09日</td>
                            </tr>
                            <tr>
                                <th>出来る事</th>
                                <td>
                                    <ul>
                                        <li>Photoshop</li>
                                        <li>Illustrator</li>
                                        <li>イラスト作成</li>
                                        <li>HTMLコーディング</li>
                                        <li>JavaScript</li>
                                        <li>PHP</li>
                                    </ul>
                                <p class="mgn_top">...など。詳しくは下記の「経歴」を参照</p>
                                </td>
                            </tr>
                            <tr>
                                <th>趣味</th>
                                <td>
                                    <ul>
                                        <li>ゲーム</li>
                                        <li>アニメ</li>
                                        <li>ネットサーフィン</li>
                                        <li>イラスト制作</li>
                                    </ul>
                                <p class="mgn_top">...など。</p>
                                </td>
                            </tr>
                            <tr>
                                <th>備考</th>
                                <td>
                                    
                                    <p>
                                        写真は20才の時のものです。実際はもっとオッサンです。<br>
                                        <br>
                                        私には以下の障がいがあるため、月に1回主治医の診察を受けております。<br>
                                        <br>
                                        <span class="bold">・身体表現性障がい</span><br>
                                        不安を感じると胃腸が強く痛み出すことがあります(主治医から頂いている抗不安剤を飲むと症状が和らぐ)<br>
                                        <br>
                                        <span class="bold">・発達障がいの手前</span><br>
                                        話の内容を違う方向に解釈してしまう・1度で理解出来ない事が多いため、重要な指示の連絡を必要とする仕事(営業など)に大きな支障が出てしまいます(文章上のやり取りだとそういったリスクは少なめ)。
                                    </p>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </section>
        <section id="detail_block" class="fadeIn wow">
            <div class="contents_inner">
                <h2 class="h2_style fadeIn wow"><span>Detail</span>詳しく</h2>
                <p class="detail_text">
                    趣味に関する詳しいことを載せていますが、分かる人にしか分からない事ばかり書いておりますので、時間のある方のみご覧ください。
                </p>
                <div class="slide_btn_box">
                    <div class="slide_btn">
                        見る<span>(クリップ・タップしてください)</span>
                    </div> 
                </div>
                <div class="slide_contents">
                    <table class="detail_table">
                        <tr>
                            <th>
                                音楽ゲーム
                            </th>
                            <td>
                                <span class="bold">・ダンスダンスレボリューション</span><br>
                                今一番プレーしている音楽ゲームです。体を動かす事が好きなので、身体表現性障がいの辛さを一番和らげる事が出来る唯一の気晴らしコンテンツです。<br>
                                <br>
                                ○シングルプレー<br>
                                最高AAA難易度：足17<br>
                                最高PFC難易度：足16<br>
                                最高MFC難易度：足7<br>
                                最高ノンバーAAA難易度：足16<br>
                                <br>
                                ○ダブルプレー<br>
                                最高AAA難易度：足16<br>
                                最高PFC難易度：足13<br>
                                最高MFC難易度：出した事ないです<br>
                                最高ノンバーAAA難易度：足15<br>
                                備考：基本的に足14弱まではノンバーだけど足13すらAAA出せない事が多い<br>
                                <br>
                                <br>
                                <span class="bold">・DJMAX RESPECT</span><br>
                                いちおうPS4版とSteam版両方やります。<br>
                                PS4版の某国内大会でベスト4になった事もありますが、Steam版が出てからPCキーボードのキーストロークの深さに苦戦したり、高難易度譜面が一気に増えたりしたのでなかなか上位勢について行く事が困難になってきました。<br>
                                8ボタンメインですが、全ボタンやってます。<br>
                                <br>
                                <br>
                                <span class="bold">・EZ2ON REBOOT:R</span><br>
                                8Kメインでやってます。<br>
                                LV13くらいの曲でRATE99%越えを目指したり、LV20でRATE90%越えを狙ったりしています。<br>
                                2021年6月現在このゲームはまだベータ状態なので気楽にやってます。<br>
                                <br>
                                <br>
                                <span class="bold">・beatmania ⅡDX</span><br>
                                正直もうほとんどやっていません。<br>
                                気まぐれでダブルプレイをやる程度になりました。シングルプレイは完全引退状態です。<br>
                                段位はシングル皆伝・ダブル中伝。<br>
                                シングルは天空の夜明け(A)でAAA出したりしてました。<br>
                                ダブルはColorful Cookie(A)あたりAAA出てました。
                            </td>
                        </tr>
                        <tr>
                            <th>
                                その他の<br>ゲーム
                            </th>
                            <td>
                                <span class="bold">・COTTON REBOOT！</span><br>
                                「30年前に発売されたプレミア付きシューティングゲームのリメイク」という知識だけで購入。<br>
                                気軽に1周プレー出来るという点が癖になり、それなりにやり込んだ結果、全モード全難易度のランキング全て10位以内にランクインしました。<br>
                                <br>
                                その後VITAのゲームアーカイブスで配信されている「コットンオリジナル」と「コットン100%」を購入。どちらもNORMAL難易度でノーコンティニュークリアするくらいまでやりました。<br>
                                <br>
                                余談ですが、「俺意外とシューティング向いてるんじゃね？」って思ってPS4版ゲーム天国を購入してプレーしたら難しすぎて心が折れました。<br>
                                <br>
                                <br>
                                <span class="bold">・Among Us</span><br>
                                このゲームをやっている知り合いがほとんど居ないので、1回しかやったことないです。野良でやる度胸もありません。
                            </td>
                        </tr>
                        <tr>
                            <th>
                                アニメ
                            </th>
                            <td>
                                とは言っても身体表現性障がいと前職の業務で無気力状態だったため1年半くらいアニメ見てないです。徐々に元のモチベに戻していきたいと思っています。<br>
                                <br>
                                ↓主に見ていたアニメ
                                <ul class="anime_list clearfix">
                                    <li>上野さんは不器用</li>
                                    <li>うちのメイドがウザすぎる！</li>
                                    <li>エロマンガ先生</li>
                                    <li>キルミーベイベー</li>
                                    <li>少年メイド</li>
                                    <li>瀬戸の花嫁</li>
                                    <li>NEW GAME！</li>
                                    <li>僕のヒーローアカデミア</li>
                                    <li>ハッカドール THE あにめ〜しょん</li>
                                    <li>ひだまりスケッチ</li>
                                    <li>響け！ユーフォニアム</li>
                                    <li>弱虫ペダル</li>
                                    <li>WORKING！！</li>
                                </ul>
                                <br>
                                ...など。

                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </section>
        <section id="career_block" class="fadeIn wow">
            <div class="contents_inner">
                <h2 class="h2_style fadeIn wow"><span>Career</span>経歴</h2>
                <table class="career_table">
                    <tr>
                        <th>
                            2011年4月<br>
                            |<br>
                            2013年3月
                        </th>
                        <td>
                            専門学校デジタルアーツ仙台 デザイン科 イラストコースに入学。イラストだけでなくグラフィックデザインやウェブデザインの基礎も学んでいた。
                        </td>
                    </tr>
                    <tr>
                        <th>
                            2014年3月<br>
                            |<br>
                            2019年7月
                        </th>
                        <td>
                            東北大学情報科学研究科 木下・大林・西研究室のスタッフとして勤務。生命医薬に関するイベント用のサイトをデザイン・コーディング、アイコン作成、Python等の言語でWebアプリケーションの制作および遺伝子データの解析、Excelでデータ入力などを行っていた。
                        </td>
                    </tr>
                    <tr>
                        <th>
                            2020年2月<br>
                            |<br>
                            2021年1月
                        </th>
                        <td>
                            株式会社アド・エータイプの制作部で勤務。主にWeb制作とエンジニアの中間あたりを担当。HTMLコーディング、PHPでお問い合わせフォームの追加、らくうるカートというツールでECサイト制作(静的サイトを動的化・商品情報の追加など)、ページ更新・修正作業、Webデザインなどを行っていた。<br>
                            この頃から「自分はグラフィックデザイン・WEBデザイン業務は向いていない」と自覚し始め、<br>さらに自分には障がい(上記参照)を患っている事が分かり退職。
                        </td>
                    </tr>
                    <tr>
                        <th>
                            2020年1月<br>
                            |<br>
                            2021年5月
                        </th>
                        <td>
                            manaby WORKSという障がい者向けの施設でWEB関連の基礎を勉強し直したり、体調や就労に関するカウンセリングを受けていた。<br>
                            また、専門学校時にイラストを勉強していた頃は人体の構造を勉強しておらず、人間を描く時は資料に頼ってばかりであったため、人体デッサンの基礎も勉強していた。
                        </td>
                    </tr>
                    <tr>
                        <th>
                            2021年6月<br>
                            |<br>
                            現在
                        </th>
                        <td>
                            株式会社NIXEへ入社。WEBプログラマー・フロントエンジニア・HTMLコーダー・WEBオペレーター、かつパート雇用希望で応募。余裕があれば別途でイラストのお仕事と掛け持ちする事を視野している。
                        </td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="performance_block" class="fadeIn wow">
            <div class="contents_inner">
                <h2 class="h2_style fadeIn wow"><span>Performance</span>実績</h2>
                <p class="performance_text">
                    今まで携わってきた実績を掲載致します。画像をクリックすると原寸で見る事が出来ます。<br><br>
                    本当は画像クリック時に同ページに大きく表示される仕様にしたかったのですが、プラグインを探したり使い方を調べるのに時間が掛かりそうなので妥協しました。
                </p>
                <ul class="performance_list">
                    <li>
                        <div>
                            <a href="/jin_homepage_img/index/illust_01.png"><img src="/jin_homepage_img/index/illust_01.png" alt="ガス灯フラッグデザインコンテスト"></a>
                        </div>
                        <p>ガス灯フラッグデザインコンテスト<br><span class="red">審査員特別賞受賞</span></p>
                    </li>
                </ul>
            </div>
        </section>
        <section id="bbs_block" class="fadeIn wow">
            <div class="contents_inner">
                <h2 class="h2_style fadeIn wow"><span>BBS</span>掲示板</h2>
                <article class="add_list">
                    <table>
                        <tr>
                            <th>名前</th>
                            <th>内容</th>
                        </tr>
                        <tr>
                            <td>名前テスト</td>
                            <td>内容が入ります内容が入ります内容が入ります内容が入ります内容が入ります</td>
                        </tr>
                        <tr>
                            <td>名前テスト</td>
                            <td>内容が入ります内容が入ります内容が入ります内容が入ります内容が入ります</td>
                        </tr>
                        <tr>
                            <td>名前テスト</td>
                            <td>内容が入ります内容が入ります内容が入ります内容が入ります内容が入ります</td>
                        </tr>
                    </table>
                </article>
                <form action="{{route('jin_homepage_check')}}" method="post">
                    @csrf
                    <dl>
                        <dt>名前</dt>
                        <dd><input type="string" name="name"></dd>
                    </dl>
                    <dl>
                        <dt>パスワード</dt>
                        <dd><input type="integer" name="password"></dd>
                    </dl>
                    <dl>
                        <dt>内容</dt>
                        <dd><input type="text" name="message"></dd>
                    </dl>
                    <dl>
                        <dd><input type="submit" name="submit" value="送信"></dd>
                    </dl>
                </form>
                
            </div>
        </section>


        
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