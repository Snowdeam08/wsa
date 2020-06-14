<!doctype html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="css/head.css">
      <title>ANA | 航空券 予約・空席照会・運賃案内・国内線</title>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    </head>

<body>
<div id="Wrap">
<!--ここからヘッダー-->
<header id="HeadOpen" class="first">
    <div class="head-top">
        <div class="basic-inner">
            <h1><a href="#"><img src="/WSA/images/head_logo00.png" alt="WSA" width="350"></a></h1>

            <div class="head-right-wrap">
                <div class="inner">
                <div class="top">
                    <ul>
                        <li class="language-language"><a href="#">JAPAN</a></li>
                        <li class="language-open" onclick="showLang()">日本語</li>
                        <div class="selectLang" id="makeEng">
                            <h1>
                                <span class="small-cont" lang="en">Select language</span>
                                言語を選択してください
                                <span class="sup-close" tabindex="0"><a href="JavaScript:window.close();" >×</a></span>
                            </h1>
                                <div class="SelectInfo"><a href=""> > English</a></div>
                        </div>
                    </ul>
                    <script type="text/javascript">
                        function showLang(){
                            var wObjballoon	= document.getElementById("makeEng");
                            if (wObjballoon.className == "selectLang"){
                                wObjballoon.className = "Fukidashi";
                                }else{
                                    wObjballoon.className = "selectLang";
                                    }
                                }
                        </script>

                          <div class="serch-box">
                            <form id="form1" action="自分のサイトURL" method="get">
                                <p class="search-text">
                                    <input aria-haspopup="true" aria-autocomplete="list" role="textbox" id="search" name="query" size="32" maxlength="250" class="textform ui-autocomplete-input" autocomplete="off" type="text" placeholder="サイト内検索はこちらから" title="サイト内検索" aria-controls="search_listbox">
                                    <input id="search_btn" name="search_btn" src="/WSA/images/ico_search_001.png" alt="検索" type="image">
                                </p>
                            </form>
                          </div>
                </div>

                <div class="btm">
                    <ul>
                        <li class="support-assist"><a href="#" target="_blank" tabindex="0">おからだの不自由なお客さまへ<img src="/WSA/images/ico_newwin_003.png" alt="別ウィンドウで開く" class="ico-blank-img"></a></li>
                        <li class="support-faq"><a href="/other/faq_atena/meta/0058.html" target="_blank" tabindex="0">よくあるご質問<img src="/WSA/images/ico_newwin_003.png" alt="別ウィンドウで開く" class="ico-blank-img"></a></li>
                        <li class="support-support" onclick="showSupport()"><span tabindex="0">お問い合わせ・サポート</span>
                        <div class="selectSup" id="makeSup">
                            <h1>お問い合わせ・サポート</h1>
                            <div class="SelectInfo">
                                <span class="infosuplist"><a href="#">ご意見・ご要望</a></span>
                                <span class="infosuplist"><a href="#">お問い合わせ</a></span>
                            </div>
                        </li>
                    </ul>
                    <script type="text/javascript">
                        function showSupport(){
                            var wObjballoon	= document.getElementById("makeSup");
                            if (wObjballoon.className == "selectSup"){
                                wObjballoon.className = "infoSup";
                                }else{
                                    wObjballoon.className = "selectSup";
                                    }
                                }
                        </script>
                </div>
                </div>
                
                <div class="btn.inner_btn">
                    <div id="link_view" onclick="toggle_view();return false;" style="display: none;">
                    <span><a href="#">ログイン</a></span>
                </div>
                <div id="link_hidden" onclick="toggle_hidden();return false;" style="">
                <span><a href="#">閉じる</a></span></div>
            </div>
            </div>
            
            <!--// 折り畳み展開ポインタ -->
            <div id="login-area">
            <div class="basic-inner">
                <div id="head-bnr-amc">
                    <a href="form/input.php"><img src="/WSA/images/bnr_top.png" alt="WSAマイレージクラブに入会する" width="315"></a>
                    </div>
                    <div class="top">
                        <form action="#" method="post" name="loginform">
                        <ul class="login-input">
                                <li>
                                    <p class="input-box">
                                    <input type="text" name="name">
                                    <span class="cus-place" >お客様番号</span></p>
                                </li>
                                <li>
                                    <p class="input-box">
                                        <input type="text" name="mail">
                                        <span class="cus-place">Webパスワード</span>
                                    </p>
                                </li>
                                <li class="btn-parts">
                                    <button type="submit" class="btn-login">
                                    <span>ログイン</span>
                                </li>
                                <li class="btn-parts">
                                    <div class="btn-other">
                                        <a href="#" target="_blank">ログインでお困りの方
                                            <img src="/WSA/images/ico_newwin_004.png" alt="別ウィンドウで開く" class="ico-blank-img">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
            </div>
            </div>
                    
                    <script language="JavaScript" type="text/javascript">
                    <!--
                    var elem1_1 = document.getElementById("login-area");
                    var elem1_2 = document.getElementById("link_view");
                    var elem1_3 = document.getElementById("link_hidden");
                    function toggle_view() {
                      elem1_1.style.display = "";
                      elem1_2.style.display = "none";
                      elem1_3.style.display = "";
                    }
                    function toggle_hidden() {
                      elem1_1.style.display = "none";
                      elem1_2.style.display = "";
                      elem1_3.style.display = "none";
                    }
                    -->
                    </script>
            </div>
        </div>
    </header>
    <!--ヘッダーここまで-->
</div>
</body>
</html>