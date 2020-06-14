<!doctype html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="css/navi.css">
 <link rel="stylesheet" href="css/content.css">
 <link rel="stylesheet" href="css/news.css">
 <link rel="stylesheet" href="css/footer.css">
 <title>WSA | スライドショー</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>
    jQuery(function($){
    $('.tab-L').click(function(){
        $('.is-Active').removeClass('is-Active');
        $(this).addClass('is-Active');
        $('.is-Show').removeClass('is-Show');
        // クリックしたタブからインデックス番号を取得
        const index = $(this).index();
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $('.paneL').eq(index).addClass('is-Show');
      });
    });
  </script>

<script>
  $(document).ready(function(){
      $('.slider01').bxSlider({
        auto: true,
        pause: 5000,
      });
    });
    $(document).ready(function(){
      $('.slider02').bxSlider({
        auto: true,
        pause: 5000,
      });
    });
</script>

</head>
<body>
<?php include('head.php'); ?>
<!--タブ-->
<nav id="Gnav">
    <ul class="tab-G">
      <li class="tab-L is-Active"><a>国内線航空券</a></li>
      <li class="tab-L"><a>国際線航空券</a></li>
      <li class="travel"><a>Travel&nbsp;&amp;&nbsp;Life</a></li>
    </ul>
  </nav>

  <!--タブを切り替えて表示するコンテンツ-->
  <div class="panel-G">
    <div class="paneL is-Show">
    <div class="slider01">
        <div><img src="/WSA/images/tab1/PcMainVis_01.jpg" alt="Swiper01" ></div>
        <div><img src="/WSA/images/tab1/PcMainVis_02.jpg" alt="Swiper02" ></div>
    </div>
    
    <div id="content">
        <section class="tabinfo01">
            <div class="basic-inner">
                <header>
                    <h2 class="titleBlock01">国内線情報</h2>
                </header>

                <div id="tabibox">
                    <a href="#">
                        <div class="infoimg01"></div>
                        <div class="infotext">
                            <span class="text">東京(羽田)　⇄　札幌(千歳)</span>
                            <span class="price">22,400<span class="yen">円~</span></span>
                        </div>
                    </a>
                </div>
                <div id="tabibox">
                        <a href="#">
                            <div class="infoimg02"></div>
                            <div class="infotext">
                                <span class="text">東京(羽田)　⇄　福岡</span>
                                <span class="price">19,200<span class="yen">円~</span></span>
                            </div>
                        </a>
                    </div>
                    <div id="tabibox">
                        <a href="#">
                            <div class="infoimg03"></div>
                            <div class="infotext">
                                <span class="text">東京(羽田)　⇄　沖縄(那覇)</span>
                                <span class="price">17,800<span class="yen">円~</span></span>
                            </div>
                        </a>
                    </div>
                    <div id="tabibox">
                        <a href="#">
                            <div class="infoimg04"></div>
                            <div class="infotext">
                                <span class="text">東京(羽田)　⇄　大阪(関西)</span>
                                <span class="price">15,000<span class="yen">円~</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="textinner"><p class="note">※掲載運賃は、2020年4月7日時点の運賃額です。</p></div>

                    <div class="btnbox">
                        <p class="btn"><a href="#">おトクな運賃のご案内</a></p>
                    </div>
                </div>

                <div id="banerG" style="visibility: visible; display: block;">
                    <div id="bnrbox">
                        <ul>
                            <li>
                                <a href=""><p class="info">おトクに旅しよう◆地域限定の「WSA SUPER VALUE」が特別プライス</p></a>
                            </li>
                            <li>
                                <a href=""><p class="info">ビジネスに最適！ご搭乗3日前～前日まで予約可能な「WSA VALUE」がおススメ！</p></a>
                            </li>
                            <li>
                                <a href=""><p class="info">旅行のスタイルに合わせて航空券と宿泊を組み合わせて作るダイナミックパッケージ</p></a>
                            </li>
                        </ul>
                    </div>
                </div>
        </section>
    </div>

    <div id="content">
    <section class="tabinfo02">
            <div class="basic-inner">
                <ul class="tab_col">
                    <li class="tab-List activing"><a>WSAからのお知らせ(国内線)</a></li>
                    <li class="tab-List">トピックス</li>
                    <li class="tab-List last">ご案内・注意事項</li>
                </ul>

                <div class="panel-Group">
                    <div class="Panel showing">
                        <ul class="listinfo" style="list-style:none;">
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                        </ul>
                    </div>
                    <div class="Panel">
                        <ul class="listinfo" style="list-style:none;">
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                        </ul>
                    </div>
                    <div class="Panel last">
                        <ul class="listinfo" style="list-style:none;">
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                        </ul>
                    </div>
                </div>

            <script>
            jQuery(function($){
                $('.tab-List').click(function(){
                    $('.activing').removeClass('activing');
                    $(this).addClass('activing');
                    $('.showing').removeClass('showing');
                    // クリックしたタブからインデックス番号を取得
                    const index = $(this).index();
                    // クリックしたタブと同じインデックス番号をもつコンテンツを表示
                    $('.Panel').eq(index).addClass('showing');
                    });
                    });
                    </script>
                    
                    <div class="btn-info">
                        <ul style="list-style:none">
                            <li><a href="#">WSAからのお知らせ一覧へ</a></li>
                            <li><a href="#">システムメンテナンス情報別ウィンドウで開く<img src="/WSA/images/ico_newwin_003.png" style="margin-left: .3em;"></a></li>
                        </ul>
                    </div>
            </section>
    </div>

    </div>

    </div>
    <div class="paneL">
    <div class="slider02">
        <div><img src="/WSA/images/tab2/mainVis_01.jpg" alt="Swiper001" ></div>
        <div><img src="/WSA/images/tab2/mainVis_02.jpg" alt="Swiper002" ></div>
        <div><img src="/WSA/images/tab2/mainVis_03.jpg" alt="Swiper003" ></div>
    </div>

    <div id="content">
        <section class="tabinfo01">
            <div class="basic-inner">
                <header>
                    <h2 class="titleBlock01">国際線情報</h2>
                </header>

                <div id="tabibox">
                    <a href="#">
                        <div class="infoimg001"></div>
                        <div class="infotext">
                            <span class="text">東京　⇄　ホノルル</span>
                            <span class="price">71,000<span class="yen">円~</span></span>
                        </div>
                    </a>
                </div>
                <div id="tabibox">
                        <a href="#">
                            <div class="infoimg002"></div>
                            <div class="infotext">
                                <span class="text">東京　⇄　パリ</span>
                                <span class="price">120,000<span class="yen">円~</span></span>
                            </div>
                        </a>
                    </div>
                    <div id="tabibox">
                        <a href="#">
                            <div class="infoimg003"></div>
                            <div class="infotext">
                                <span class="text">東京　⇄　ウィーン</span>
                                <span class="price">115,000<span class="yen">円~</span></span>
                            </div>
                        </a>
                    </div>
                    <div id="tabibox">
                        <a href="#">
                            <div class="infoimg004"></div>
                            <div class="infotext">
                                <span class="text">東京　⇄　ロサンゼルス</span>
                                <span class="price">60,000<span class="yen">円~</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="textinner"><p class="note">※掲載運賃は、2020年4月7日時点の運賃額です。</p></div>

                    <div class="btnbox">
                        <p class="btn"><a href="#">おトクな運賃のご案内</a></p>
                    </div>
                </div>

                <div id="banerG" style="visibility: visible; display: block;">
                    <div id="bnrbox">
                        <ul>
                            <li>
                                <a href=""><p class="info">おトクに旅しよう◆地域限定の「WSA SUPER VALUE」が特別プライス</p></a>
                            </li>
                            <li>
                                <a href=""><p class="info">ビジネスに最適！ご搭乗3日前～前日まで予約可能な「WSA VALUE」がおススメ！</p></a>
                            </li>
                            <li>
                                <a href=""><p class="info">旅行のスタイルに合わせて航空券と宿泊を組み合わせて作るダイナミックパッケージ</p></a>
                            </li>
                        </ul>
                    </div>
                </div>
        </section>
    </div>

    <div id="content">
    <section class="tabinfo02">
            <div class="basic-inner">
                <ul class="tab_col">
                    <li class="tab-List Activing"><a>WSAからのお知らせ(国際線)</a></li>
                    <li class="tab-List">トピックス</li>
                    <li class="tab-List last">ご案内・注意事項</li>
                </ul>

                <div class="panel-Group">
                    <div class="PaneL Showing">
                        <ul class="listinfo" style="list-style:none;">
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">aaaaaa</span></a></li>
                        </ul>
                    </div>
                    <div class="PaneL">
                        <ul class="listinfo" style="list-style:none;">
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">bbbbbb</span></a></li>
                        </ul>
                    </div>
                    <div class="PaneL last">
                        <ul class="listinfo" style="list-style:none;">
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                            <li class="hasLink"><a href="#"><span class="info-wrap">cccccc</span></a></li>
                        </ul>
                    </div>
                </div>

            <script>
            jQuery(function($){
                $('.tab-List').click(function(){
                    $('.Activing').removeClass('Activing');
                    $(this).addClass('Activing');
                    $('.Showing').removeClass('Showing');
                    // クリックしたタブからインデックス番号を取得
                    const index = $(this).index();
                    // クリックしたタブと同じインデックス番号をもつコンテンツを表示
                    $('.PaneL').eq(index).addClass('Showing');
                    });
                    });
                    </script>
                    
                    <div class="btn-info">
                        <ul style="list-style:none">
                            <li><a href="#">WSAからのお知らせ一覧へ </a></li>
                            <li><a href="#">システムメンテナンス情報別ウィンドウで開く<img src="/WSA/images/ico_newwin_003.png" style="margin-left: .3em;"></a></li>
                        </ul>
                    </div>
            </section>
        </div>
    </div>
  </div>

    

    <div class="sns-inner">
        <div class="sns-list">
            <ul>
                <li class="sns-type"><a href="#"><img src="/WsA/images/ico-sns/ico_sns_001.png" name="Focebook"></a>
                    <img src="/WSA/images/ico_newwin_003.png" alt="別ウィンドウで開く" class="ico-blank-img"></li>
                <li class="sns-type"><a href="#"><img src="/WSA/images/ico-sns/ico_sns_002.png" name="twitter"></a>
                    <img src="/WSA/images/ico_newwin_003.png" alt="別ウィンドウで開く" class="ico-blank-img"></li>
                <li class="sns-type"><a href="#"><img src="/WSA/images/ico-sns/ico_sns_003.png" name="YouTubu"></a>
                    <img src="/WSA/images/ico_newwin_003.png" alt="別ウィンドウで開く" class="ico-blank-img"></li>
                <li class="sns-type"><a href="#"><img src="/WSA/images/ico-sns/ico_sns_004.png" name="LINE"></a>
                    <img src="/WSA/images/ico_newwin_003.png" alt="別ウィンドウで開く" class="ico-blank-img"></li>
                <li class="sns-type"><a href="#"><img src="/WSA/images/ico-sns/ico_sns_005.png" name="Instagram"></a>
                    <img src="/WSA/images/ico_newwin_003.png" alt="別ウィンドウで開く" class="ico-blank-img"></li>
            </ul>
            <p class="sns-txt">各種ソーシャルメディアで様々な情報をお届けしております。</p>
        </div>
    </div>

    <footer>
        <div class="foot-top">
            <div class="foot-left">
                <h2>
                    <a href="#" target="_blank" tabindex="0">
                        <span class="no-background">WSAグループ企業情報</span>
                        <img src="/WSA/images/ico_newwin_002.png" alt="別ウィンドウで開く" class="ico-blank-img">
                    </a>
                </h2>
                <ul>
                    <li>
                        <a href="#" target="_blank" tabindex="0">WSAグループについて
                            <img src="/WSA/images/ico_newwin_004.png" alt="別ウィンドウで開く" class="ico-blank-img">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" tabindex="0">グループ企業一覧別
                            <img src="/WSA/images/ico_newwin_004.png" alt="別ウィンドウで開く" class="ico-blank-img">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" tabindex="0">株主・投資家情報
                            <img src="/WSA/images/ico_newwin_004.png" alt="別ウィンドウで開く" class="ico-blank-img">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" tabindex="0">CSR
                            <img src="/WSA/images/ico_newwin_004.png" alt="別ウィンドウで開く" class="ico-blank-img">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" tabindex="0">カーボン・オフセットプログラム
                            <img src="/WSA/images/ico_newwin_004.png" alt="別ウィンドウで開く" class="ico-blank-img">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" tabindex="0">プレスリリース
                            <img src="/WSA/images/ico_newwin_004.png" alt="別ウィンドウで開く" class="ico-blank-img">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" tabindex="0">採用情報別
                            <img src="/WSA/images/ico_newwin_004.png" alt="別ウィンドウで開く" class="ico-blank-img">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>