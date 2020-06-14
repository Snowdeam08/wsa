<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>WSAマイレージクラブ会員登録フォーム</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="reg_form.css">
<script type="text/javascript" src="contact.js"></script>
</head>
<body id="contact">
	<div id="container">
        <header><div class="midashi"><h1>WSAマイレージクラブ会員登録</h1></div></header>

        <h2 class="tabletitle">お客様情報・住所・eメール・パスワード情報</h2>
        <p class="infoadd" style="padding-bottom: 5px; font-size:80%;">下記の項目を入力し、[確認画面へ]を押してください。<br>
        なお、<a href="/WSA/invalid.html" target="_blank">ご登録いただけない文字や記号があります。詳細はこちら</a></p>
        
		<div class="tableform">
		<form action="confirm.php" method="post" name="form" onsubmit="return validate()">
		<div>
			<div>
			<h3 class="tablename">お客様情報</h3>
				<h4 class="title"><span class="item">必須</span>氏名を入力してください。</h4>
				<div class="form_line">
					<p class="form_item">漢字氏名</p>
				<div class="form_cont">
					<label>姓</label><p class="formp">（全角19文字以内）</p>
						<input type="text" name="seiKanji" placeholder="例）山田" value="" maxlength="19" style="width:270px;">
					<label>名</label><p class="formp">（全角19文字以内）</p>
						<input type="text" name="meiKanji" placeholder="例）太郎" value="" maxlength="19" style="width:270px;">
					<span class="example">例）空野 太郎</span>
				</div>
				</div>
				<div class="form_line">
					<p class="form_item">カタカナ氏名</p>
				<div class="form_cont">
					<label>セイ</label><p class="formp">（全角カタカナ15文字以内）</p>
						<input type="text" name="seiKana" placeholder="例）ヤマダ" value="" maxlength="15" style="width: 270px;">
					<label>メイ</label><p class="formp">（全角カタカナ15文字以内）</p>
						<input type="text" name="meiKana" placeholder="例）タロウ" value="" maxlength="15" style="width: 270px;">
					<span class="example">例）ソラノ タロウ</span>
				</div>
				</div>
				<div class="form_line">
					<p class="form_item">英字氏名(パスポート名)</p>
				<div class="form_cont">
					<label>英字姓</label><p class="formp">（半角英字23文字以内）</p>
						<input type="text" name="seiEng" placeholder="例）YAMADA" value="" maxlength="23" style="width: 270px;">
					<label>英字名</label><p class="formp">（半角英字23文字以内）</p>
						<input type="text" name="meiEng" placeholder="例）TAROU" value="" maxlength="23" style="width: 270px;">
                    <ul class="note">
                        <li>パスポート記載のとおり入力してください。<br>
                        <a href="/WSA/hebon.html" target="_blank">パスポートをお持ちでない場合はこちら</a>に従って入力してください。</li>
                        <li>国際線予約に使用します。</li>
                        <li>ミドルネームの登録につきましては、「名」の欄にスペースを空けずにご入力ください。<br>例）SORANO　TAROMICHAEL</li>
                    </ul>
                    <span class="example">例）SORANO　TARO</span>
				</div>
				</div>
				<div>
				<h4 class="title"><span class="item">必須</span>性別を指定してください。</h4>
				<div class="form_line">
                <p class="form_item">性別</p>
				<div class="form_cont">
					<input type="radio" name="sex" value="男性" checked> 男性
					<input type="radio" name="sex" value="女性"> 女性
				</div>
				</div>
				<div>
				<h4 class="title"><span class="item">必須</span>生年月日を西暦で入力してください。</h4>
				<div class="form_line">
					<p class="form_item">生年月日</p>
                <div class="form_cont">
                    <span class="formyear"><label for="Year">年</label></span>
                    <select name="year">
                        <option value="">-</option>
                        <option value="1930">1930</option>
                        <option value="1931">1931</option>
                        <option value="1932">1932</option>
                        <option value="1933">1933</option>
                        <option value="1934">1934</option>
                        <option value="1935">1935</option>
                        <option value="1936">1936</option>
                        <option value="1937">1937</option>
                        <option value="1938">1938</option>
                        <option value="1939">1939</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
					</select>

					<span class="formmonth"><label for="Month">月</label></span>
                    <select name="month">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>

					<span class="formday"><label for="Day">日</label></span>
                    <select name="day">日
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
				</div>
				</div>

			<h3 class="tablename">住所</h3>
			<h4 class="title"><span class="item">必須</span>ご自宅の郵便番号を入力し、「検索」ボタンをクリックしてください。都道府県および市区町村を検索して表示します。</h4>
				<div class="form_line">
					<p class="form_item">郵便番号</p>
				<div class="form_cont">
					<label>〒</label>
					<input type="text" id="postcode_01" name="postalcode_01" placeholder="123" value="" maxlength="3" style="width:55px;"> - 
                    <input id="postcode_02" type="text" name="postalcode_02" placeholder="4567" value="" maxlength="4" style="width:55px;">
                    <input id="btn" type="button" value="検索">
                    <span class="example">例）123-4567</span>
				</div>
                <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.min.js"></script>
            <script type="text/javascript" src="//jpostal-1006.appspot.com/jquery.jpostal.js"></script>
            <script type="text/javascript">
            $(window).ready( function() {
                $('#postcode_01').jpostal({
                    click : '#btn',
                    postcode : [
                        '#postcode_01',
                        '#postcode_02'
                        ],
                        address : {
                            '#address_01'  : '%3',
                            '#address_02'  : '%4',
                            '#address_03'  : '%5'
                            }
                            });
                            });
                </script>
                </div>

            <h4 class="title"><span class="item">必須</span>ご自宅の住所を建物名・部屋番号まで入力してください。</h4>
            <div class="form_line">
                <p class="form_item">都道府県</p>
                <div class="form_cont">
                    <select id="address_01" name="address_01">
                    <option value="">-- 都道府県 --</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value= "沖縄県">沖縄県</option>
                    </select>
                </div>
            </div>
            <div class="form_line">
                <p class="form_item">市区郡</p>
                <div class="form_cont">
                    <input id="address_02" type="text" size="20" name="address_02" maxlength="10">
                    <span class="example">（全角10文字以内）<br>例）大田区</span>
                </div>
            </div>
            <div class="form_line">
                <p class="form_item">町名</p>
                <div class="form_cont">
                    <input id="address_03" type="text" size="40" name="address_03" maxlength="20">
                    <span class="example">（全角20文字以内）<br>例）羽田空港</span>
                </div>
            </div>
            <div class="form_line">
                <p class="form_item">番地</p>
                <div class="form_cont">
                    <input id="address_04" type="text" size="40" name="address_04" maxlength="20">
                    <span class="example">（全角20文字以内）<br>例）３ー５ー１０</span>
                </div>
            </div>
            <div class="form_line">
                <p class="form_item">建物名・部屋番号</p>
                <div class="form_cont"> 
                    <input id="address5" type="text" size="40" name="address5" maxlength="20">
                    <span class="example">（全角20文字以内）<br>例）青空マンション１０１号</span>
                </div>
            </div>
			</div>

			<h4 class="title"><span class="item">必須</span>ご自宅の電話番号を入力してください。携帯電話番号も登録可能です。</h4>
				<div class="form_line">
					<p class="form_item">電話番号</p>
				<div class="form_cont">
                    <input type="text" name="tellnum_01" placeholder="03" value="" style="width:55px;">-
                    <input type="text" name="tellnum_02" placeholder="1234" value="" style="width:55px;">-
                    <input type="text" name="tellnum_03" placeholder="5678" value="" style="width:55px;">
                    <span class="example">例）03−1234−5678</span>
                </div>
                </div>
            <h4 class="notitle"><span class="noitem">任意</span>携帯電話番号を入力してください。※日本国内の携帯電話番号に限ります。</h4>
            <div class="form_line">
                <p class="form_item">携帯電話番号</p>
                <div class="form_cont">
                    <input type="text" name="tell" placeholder="例）0000000000" value="">
                    <span class="example">（半角数字11桁）例）09011112222</span>
                </div>
            </div>
            <h4 class="notitle"><span class="noitem">任意</span>お勤め先の情報を入力してください。</h4>
            <div class="form_line">
                <p class="form_item">会社名</p>
                <div class="form_cont">
                    <input type="text" size="30" name="officename_01" maxlength="25">
                    <span class="example">（全角25文字以内）<br>例）全日本空輸株式会社</span>
                </div>
            </div>
            <div class="form_line">
                <p class="form_item">部署名</p>
                <div class="form_cont">
                    <input type="text" size="30" name="officename_02" maxlength="25">
                    <span class="example">（全角25文字以内）<br>例）○○支店××部</span>
                </div>
            </div>
            <div class="form_line">
                <p class="form_item">役職名</p>
                <div class="form_cont">
                    <input type="text" size="30" name="officename_03" maxlength="25">
                    <span class="example">（全角12文字以内）<br>例）部長</span>
                </div>
            </div>

			<h3 class="tablename">eメールアドレス</h3>
			<h4 class="title"><span class="item">必須</span>eメールアドレスを入力してください。</h4>
				<div class="form_line">
					<p class="form_item">メールアドレス</p>
				<div class="form_cont">
					<div class="form_cont_in">
                        <label>入力</label>
                        <input type="text" name="email" placeholder="例）guest@example.com" value="" style="width:270px;">
                    </div>
                    <div class="form_cont_in">
                        <label>再入力</label>
                        <input type="text" name="email02" placeholder="例）guest@example.com" value="" style="width:270px;">
                        <p style="display: table-cell; vertical-align: top; float: none; width:190px;">（英数字半角）</p>
                    </div>
                </div>
			</div>

            <h3 class="tablename">パスワード</h3>
                <h4 class="title"><span class="item">必須</span>Webパスワード</h4>
            <div class="form_line">
					<p class="form_item">Webパスワード</p>
				<div class="form_cont">
					<label>入力</label>
					<input type="text" class="form-control" name="webpassword" value="" id="webpassword01" style="width:270px;">
				</div>
			</div>
            <div class="form_line">
					<p class="form_item">Webパスワード再入力</p>
				<div class="form_cont">
					<label>入力</label>
                    <input type="text" class="form-control" name="webpassword02" value="" style="width:270px;">
				</div>
            </div>
		</div>
		<button type="submit">確認画面へ</button>
	</form>
</div>
</div>
</body>
</html>