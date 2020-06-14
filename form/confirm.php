<?php 
	// フォームのボタンが押されたら
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// フォームから送信されたデータを各変数に格納
        $seikanji = $_POST["seiKanji"];
        $meikanji = $_POST["meiKanji"];
        $seikana = $_POST["seiKana"];
        $meikana = $_POST["meiKana"];
        $seieng = $_POST["seiEng"];
        $meieng = $_POST["meiEng"];
        $sex = $_POST["sex"];
        $year = $_POST["year"];
        $month = $_POST["month"];
        $day = $_POST["day"];
        $postalcode_01 = $_POST["postalcode_01"];
        $postalcode_02 = $_POST["postalcode_02"];
        $address_01 = $_POST["address_01"];
        $address_02 = $_POST["address_02"];
        $address_03 = $_POST["address_03"];
        $address_04 = $_POST["address_04"];
        $address_05 = $_POST["address_05"];
        $tellnum_01 = $_POST["tellnum_01"];
        $tellnum_02 = $_POST["tellnum_02"];
        $tellnum_03 = $_POST["tellnum_03"];
        $tell = $_POST["tell"];
        $officename_01 = $_POST["officename_01"];
        $officename_02 = $_POST["officename_02"];
        $officename_03 = $_POST["officename_03"];
        $email = $_POST["email"];
        $webpassword = $_POST["webpassword"];
    }

    if (!empty($_POST)) {
        // 登録処理をする
        $statement = $db->prepare(
            'INSERT INTO members SET member_id=?, seikanji=?, meikanji=?, seikana=?, meikana=?, seieng=?, meieng=?, email=?, webpassword=?, created=NOW()'
        );
            echo $ret = $statement->execute(array(
                $_SESSION['join']['seikanji'],
                $_SESSION['join']['meikanji'],
                $_SESSION['join']['seikana'],
                $_SESSION['join']['meikana'],
                $_SESSION['join']['seieng'],
                $_SESSION['join']['meieng'],
                $_SESSION['join']['email'],
                sha1($_SESSION['join']['webpassword']),
            ));
            unset($_SESSION['join']);
            header('Location: thanks.php');
            exit();
        }
    
/*
INSERT INTO members SET member_id=0, seikanji="野宮", meikanji="汐稀", seikana="ノミヤ", meikana="ユウキ", seieng="Nomiya", meieng="Yuki", email="nomiya@ezweb.co.jp", webpassword="yuki", created=NOW()
*/
	// 送信ボタンが押されたら
	if (isset($_POST["submit"])) {
		// 送信ボタンが押された時に動作する処理をここに記述する
        	
		// 日本語をメールで送る場合のおまじない
        	mb_language("ja");
		mb_internal_encoding("UTF-8");
		
		//mb_send_mail("kanda.it.school.trial@gmail.com", "メール送信テスト", "メール本文");

        	// 件名を変数subjectに格納
        	$subject = "［自動送信］お問い合わせ内容の確認";

        	// メール本文を変数bodyに格納
		$body = <<< EOM
{$name}　様

ご登録ありがとうございます。
以下の入力内容を、メールにて確認させていただきました。

===================================================
【 姓 】 
{$seikanji}

【 名 】 
{$meikanji}

【 セイ 】 
{$seikana}

【 メイ 】 
{$meikana}

【 英字姓 】 
{$seieng}

【 英字名 】 
{$meieng}

【 性別 】 
{$sex}

【 年 】 
{$year}

【 月 】 
{$month}

【 日 】 
{$day}

【 郵便番号 】
{$postalcode_01}
{$postalcode_02}

【 住所 】
{$address_01}
{$address_02}
{$address_03}
{$address_04}
{$address_05}

【 電話番号 】 
{$tellnum_01}
{$tellnum_02}
{$tellnum_03}

【 携帯電話番号 】 
{$tell}

【 お勤め先 】
{$officename_01}
{$officename_02}
{$officename_03}

【 メール 】 
{$email}

【 Webパスワード 】 
{$webpassword}

【 電話番号 】 
{$tel}

【 項目 】 
{$item}

【 内容 】 
{$content}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;
        
		// 送信元のメールアドレスを変数fromEmailに格納
		$fromEmail = "contact@dream-php-seminar.com";

		// 送信元の名前を変数fromNameに格納
		$fromName = "お問い合わせテスト";

		// ヘッダ情報を変数headerに格納する		
		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

		// メール送信を行う
		mb_send_mail($email, $subject, $body, $header);

 		// サンクスページに画面遷移させる
		header("Location: http://testapp.hippy.jp/contact/thanks.php");
		exit;
	}
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>WSAマイレージクラブ会員登録フォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div><h1>Company Name</h1></div>
<div><h2>WSAマイレージクラブ会員登録</h2></div>
<div>
	<form action="confirm.php" method="post">
            <input type="hidden" name="seiKanji" value="<?php echo $seikanji; ?>">
            <input type="hidden" name="meiKanji" value="<?php echo $meikanji; ?>">
            <input type="hidden" name="seiKana" value="<?php echo $seikana; ?>">
            <input type="hidden" name="meiKana" value="<?php echo $meikana; ?>">
            <input type="hidden" name="seiEng" value="<?php echo $seieng; ?>">
            <input type="hidden" name="meiEng" value="<?php echo $meieng; ?>">
            <input type="hidden" name="sex" value="<?php echo $sex; ?>">
            <input type="hidden" name="year" value="<?php echo $year; ?>">
            <input type="hidden" name="month" value="<?php echo $month; ?>">
            <input type="hidden" name="day" value="<?php echo $day; ?>">
            <input type="hidden" name="postalcode_01" value="<?php echo $postalcode_01; ?>">
            <input type="hidden" name="postalcode_02" value="<?php echo $postalcode_02; ?>">
            <input type="hidden" name="address_01" value="<?php echo $address_01; ?>">
            <input type="hidden" name="address_02" value="<?php echo $address_02; ?>">
            <input type="hidden" name="address_03" value="<?php echo $address_03; ?>">
            <input type="hidden" name="address_04" value="<?php echo $address_04; ?>">
            <input type="hidden" name="address_05" value="<?php echo $address_05; ?>">
            <input type="hidden" name="tellnum_01" value="<?php echo $tellnum_01; ?>">
            <input type="hidden" name="tellnum_02" value="<?php echo $tellnum_02; ?>">
            <input type="hidden" name="tellnum_03" value="<?php echo $tellnum_03; ?>">
            <input type="hidden" name="tell" value="<?php echo $tell; ?>">
            <input type="hidden" name="officename_01" value="<?php echo $officename_01; ?>">
            <input type="hidden" name="officename_02" value="<?php echo $officename_02; ?>">
            <input type="hidden" name="officename_03" value="<?php echo $officename_03; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="webpassword" value="<?php echo $webpassword; ?>">
            <input type="hidden" name="webpassword02" value="<?php echo $webpassword02; ?>">
            <h1 class="contact-title">WSAマイレージクラブ会員登録 内容確認</h1>
            <p>登録内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
                <div>
                    <label>漢字氏名</label>
                    <p><?php echo $seikanji; ?> <?php echo $meikanji; ?></p>
                </div>
                <div>
                    <label>カタカナ氏名</label>
                    <p><?php echo $seikana; ?> <?php echo $meikana; ?></p>
                </div>
                <div>
                    <label>英字氏名</label>
                    <p><?php echo $seieng; ?> <?php echo $meieng; ?></p>
                </div>
                <div>
                    <label>性別</label>
                    <p><?php echo $sex ?></p>
                </div>
                <div>
                    <label>生年月日</label>
                    <p><?php echo $year ?>年<?php echo $month ?>月<?php echo $day ?>日</p>
                </div>
                <div>
                    <label>郵便番号</label>
                    <p><?php echo $postalcode_01; ?> - <?php echo $postalcode_02; ?></p>
                </div>
                <div>
                    <label>住所</label>
                    <p><?php echo $address_01; ?>
                    <?php echo $address_02; ?>
                    <?php echo $address_03; ?>
                    <?php echo $address_04; ?>
                    <?php echo $address_05; ?>
                    </p>
                </div>
                <div>
                    <label>電話番号</label>
                    <p><?php echo $tellnum_01; ?>-<?php echo $tellnum_02; ?>-<?php echo $tellnum_03; ?></p>
                </div>
                <div>
                    <label>携帯電話番号</label>
                    <p><?php echo $tell; ?></p>
                </div>
                <div>
                    <label>お勤め先</label>
                    <p><?php echo $officename_01; ?>
                    <?php echo $officename_02; ?>
                    <?php echo $officename_03; ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo $email; ?></p>
                </div>
                <div>
                    <label>Webパスワード</label>
                    <p><?php echo $webpassword; ?></p>
                </div>
            </div>
		<input type="button" value="内容を修正する" onclick="history.back(-1)">
		<button type="submit" name="submit">送信する</button>
	</form>
</div>
</body>
</html>