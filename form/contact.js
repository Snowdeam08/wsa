var validate = function() {

	var flag = true;

	removeElementsByClass("error");
	removeClass("error-form");

	// 漢字氏名
	// 姓の入力をチェック
	if(document.form.seiKanji.value == ""){
		errorElement(document.form.seiKanji, "姓が入力されていません");
		flag = false;
	}

	// 名の入力をチェック
	if(document.form.meiKanji.value == ""){
		errorElement(document.form.meiKanji, "名が入力されていません");
		flag = false;
	}

	// カタカナ氏名
	// セイの入力をチェック
	if(document.form.seiKana.value == ""){
		errorElement(document.form.seiKana, "セイが入力されていません");
		flag = false;
	} else {
		// カタカナの形式をチェック
		if(!validateSeikana(document.form.seiKana.value)){
			errorElement(document.form.seiKana, "カタカナ以外もしくは半角カタカナの文字が入っています");
			flag = false;
		}
	}

	// メイの入力をチェック
	if(document.form.meiKana.value == ""){
		errorElement(document.form.meiKana, "メイが入力されていません");
			flag = false;
	} else {
		// カタカナの形式をチェック
		if(!validateMeikana(document.form.meiKana.value)){
			errorElement(document.form.meiKana, "カタカナ以外もしくは半角カタカナの文字が入っています");
			flag = false;
		}
	}
	
	// 英字氏名
	// 英字姓の入力をチェック
	if(document.form.seiEng.value == ""){
		errorElement(document.form.seiEng, "英字姓が入力されていません");
		flag = false;
	} else {
		// 英字の形式をチェック
		if(!validateSeieng(document.form.seiEng.value)){
			errorElement(document.form.seiEng, "英字以外の文字が入っています");
			flag = false;
		}
	}

	// 英字名の入力をチェック
	if(document.form.meiEng.value == ""){
		errorElement(document.form.meiEng, "英字名が入力されていません");
		flag = false;
	} else {
		// 英字の形式をチェック
		if(!validateMeieng(document.form.meiEng.value)){
			errorElement(document.form.meiEng, "英字以外の文字が入っています");
			flag = false;
		}
	}

	// 生年月日
	// 年の選択をチェック
	if(document.form.year.value == ""){
		errorElement(document.form.year, "年が選択されていません");
		flag = false;
	}

	// 月の選択をチェック
	if(document.form.month.value == ""){
		errorElement(document.form.month, "月が選択されていません");
		flag = false;
	}

	// 日の選択をチェック
	if(document.form.day.value == ""){
		errorElement(document.form.day, "日が選択されていません");
		flag = false;
	}

	// 郵便番号
	// 郵便番号01の入力をチェック
	if(document.form.postalcode_01.value == ""){
		errorElement(document.form.postalcode_01, "郵便番号3桁が入力されていません");
		flag = false;
	} else {
		// 郵便番号の形式をチェック
		if(!validatePostalcode01(document.form.postalcode_01.value)){
			errorElement(document.form.postalcode_01, "半角数字のみを入力してください");
			flag = false;
		} else {
			if(!validatePostalcode_01(document.form.postalcode_01.value)){
				errorElement(document.form.postalcode_01, "郵便番号が正しくありません");
				flag = false;
			}
		}
	}
	// 郵便番号02の入力をチェック
	if(document.form.postalcode_02.value == ""){
		errorElement(document.form.postalcode_02, "郵便番号4桁が入力されていません");
		flag = false;
	} else {
		// 郵便番号の形式をチェック
		if(!validatePostalcode02(document.form.postalcode_02.value)){
			errorElement(document.form.postalcode_02, "半角数字のみを入力してください");
			flag = false;
		} else {
			if(!validatePostalcode_02(document.form.postalcode_02.value)){
				errorElement(document.form.postalcode_02, "郵便番号が正しくありません");
				flag = false;
			}
		}
	}

	// 住所
	// 都道府県の入力をチェック
	if(document.form.address_01.value == ""){
		errorElement(document.form.address_01, "都道府県が選択されていません");
		flag = false;
	}

	// 市区郡の入力をチェック
	if(document.form.address_02.value == ""){
		errorElement(document.form.address_02, "市区郡が入力されていません");
		flag = false;
	}

	// 町名の入力をチェック
	if(document.form.address_03.value == ""){
		errorElement(document.form.address_03, "町名が入力されていません");
		flag = false;
	}

	// 番地の入力をチェック
	if(document.form.address_04.value == ""){
		errorElement(document.form.address_04, "番地が入力されていません");
		flag = false;
	}

	// 電話番号
	// 市外局番の入力をチェック
	if(document.form.tellnum_01.value == ""){
		errorElement(document.form.tellnum_01, "市外局番が入力されていません");
		flag = false;
	} else {
		// 電話番号の形式をチェック
		if(!validateTellnum01(document.form.tellnum_01.value)){
			errorElement(document.form.tellnum_01, "半角数字のみを入力してください");
			flag = false;
		} else {
			if(!validateTellnum_01(document.form.tellnum_01.value)){
				errorElement(document.form.tellnum_01, "市外局番が正しくありません");
				flag = false;
			}
		}
	}

	// 市内局番の入力をチェック
	if(document.form.tellnum_02.value == ""){
		errorElement(document.form.tellnum_02, "市内局番が入力されていません");
		flag = false;
	} else {
		// 市内局番の形式をチェック
		if(!validateTellnum02(document.form.tellnum_02.value)){
			errorElement(document.form.tellnum_02, "半角数字のみを入力してください");
			flag = false;
		} else {
			if(!validateTellnum_02(document.form.tellnum_02.value)){
				errorElement(document.form.tellnum_02, "市内局番が正しくありません");
				flag = false;
			}
		}
	}

	// 加入者番号の入力をチェック
	if(document.form.tellnum_03.value == ""){
		errorElement(document.form.tellnum_03, "加入者番号が入力されていません");
		flag = false;
	} else {
		// 加入者番号の形式をチェック
		if(!validateTellnum03(document.form.tellnum_03.value)){
			errorElement(document.form.tellnum_03, "半角数字のみを入力してください");
			flag = false;
		} else {
			if(!validateTellnum_03(document.form.tellnum_03.value)){
				errorElement(document.form.tellnum_03, "加入者番号が正しくありません");
				flag = false;
			}
		}
	}

	// 携帯電話番号
	// 携帯電話番号の入力をチェック
	if(!validateNumber(document.form.tell.value)){
			errorElement(document.form.tell, "半角数字のみを入力してください");
			flag = false;
		} 

	// メールアドレスの入力をチェック
	if(document.form.email.value == ""){
		errorElement(document.form.email, "メールアドレスが入力されていません");
		flag = false;
	} else {
		// メールアドレスの形式をチェック
		if(!validateMail(document.form.email.value)){
			errorElement(document.form.email, "メールアドレスが正しくありません");
			flag = false;
		} else {
			// メールアドレスの一致をチェック
			if(document.form.email.value != document.form.email02.value){ 
				errorElement(document.form.email, "メールアドレスが一致していません");
				flag = false;
			}
		}
	}

	// メールアドレスの再入力をチェック
	if(document.form.email02.value == ""){
		errorElement(document.form.email02, "メールアドレスが入力されていません");
		flag = false;
	} else {
		// メールアドレスの形式をチェック
		if(!validateMail02(document.form.email02.value)){
			errorElement(document.form.email02, "メールアドレスが正しくありません");
			flag = false;
		} else {
			// メールアドレスの一致をチェック
			if(document.form.email02.value != document.form.email.value){ 
				errorElement(document.form.email02, "メールアドレスが一致していません");
				flag = false;
			}
		}
	}

	// Webパスワードの入力をチェック
	if(document.form.webpassword.value == ""){
		errorElement(document.form.webpassword, "Webパスワードが入力されていません");
		flag = false;
	} else {
		// Webパスワードの形式をチェック
		if(!validateWebpassword(document.form.webpassword.value)){
			errorElement(document.form.webpassword, "Webパスワードが正しくありません");
			flag = false;
		} else {
			if(document.form.webpassword.value != document.form.webpassword02.value){ //もしパスワード1とパスワード2の値が異なるなら
				errorElement(document.form.webpassword, "Webパスワードが一致していません");
				flag = false;
			}
		}
	}

	// Webパスワードの再入力をチェック
	if(document.form.webpassword02.value == ""){
		errorElement(document.form.webpassword02, "Webパスワードが入力されていません");
		flag = false;
	} else {
		// Webパスワードの形式をチェック
		if(!validateWebpassword02(document.form.webpassword02.value)){
			errorElement(document.form.webpassword02, "Webパスワードが正しくありません");
			flag = false;
		} else {
			if(document.form.webpassword02.value != document.form.webpassword.value){ //もしパスワード1とパスワード2の値が異なるなら
				errorElement(document.form.webpassword02, "Webパスワードが一致していません");
				flag = false;
			}
		}
	}


	return flag;
}



var errorElement = function(form, msg) {
	form.className = "error-form";
	var newElement = document.createElement("div");
	newElement.className = "error";
	var newText = document.createTextNode(msg);
	newElement.appendChild(newText);
	form.parentNode.insertBefore(newElement, form.nextSibling);
}

var removeElementsByClass = function(className){
	var elements = document.getElementsByClassName(className);
	while (elements.length > 0){ 
		elements[0].parentNode.removeChild(elements[0]);
	}
}

var removeClass = function(className){
	var elements = document.getElementsByClassName(className);
	while (elements.length > 0) {
		elements[0].className = "";
	}
}

var validateSeikana = function (val){
	if (val.match(/^[ァ-ヶー]+$/) == null) {
		return false;
	} else {
		return true;
	}
}

var validateMeikana = function (val){
	if (val.match(/^[ァ-ヶー]+$/) == null) {
		return false;
	} else {
		return true;
	}
}

var validateSeieng = function (val){
	if (val.match(/^[a-zA-Z]+$/) == null) {
		return false;
	} else {
		return true;
	}
}

var validateMeieng = function (val){
	if (val.match(/^[a-zA-Z]+$/) == null) {
		return false;
	} else {
		return true;
	}
}


var validatePostalcode01 = function (val){
	if (val.match(/[^0-9]+/)) {
		return false;
	} else {
		return true;
	}
}

var validatePostalcode02 = function (val){
	if (val.match(/[^0-9]+/)) {
		return false;
	} else {
		return true;
	}
}

var validatePostalcode_01 = function (val){
	if (val.match(/^[0-9-]+$/) == null) {
		return false;
	} else {
		return true;
	}
}

var validatePostalcode_02 = function (val){
	if (val.match(/^[0-9-]+$/) == null) {
		return false;
	} else {
		return true;
	}
}

var validateTellnum01 = function (val){
	if (val.match(/[^0-9]+/)) {
		return false;
	} else {
		return true;
	}
}

var validateTellnum02 = function (val){
	if (val.match(/[^0-9]+/)) {
		return false;
	} else {
		return true;
	}
}

var validateTellnum03 = function (val){
	if (val.match(/[^0-9]+/)) {
		return false;
	} else {
		return true;
	}
}

var validateTellnum_01 = function (val){
	if (val.match(/^[0-9-]+$/) == null) {
		return false;
	} else {
		return true;
	}
}

var validateTellnum_02 = function (val){
	if (val.match(/^[0-9-]+$/) == null) {
		return false;
	} else {
		return true;
	}
}

var validateTellnum_03 = function (val){
	if (val.match(/^[0-9-]+$/) == null) {
		return false;
	} else {
		return true;
	}
}

var validateMail = function (val){
	if (val.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)==null) {
		return false;
	} else {
		return true;
	}
}

var validateMail02 = function (val){
	if (val.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)==null) {
		return false;
	} else {
		return true;
	}
}


var validateWebpassword = function (val){
	if (val.match(/^[a-zA-Z0-9]+$/) == null) {
		return false;
	} else {
		return true;
	}
}

var validateWebpassword02 = function (val){
	if (val.match(/^[a-zA-Z0-9]+$/) == null) {
		return false;
	} else {
		return true;
	}
}


var validateNumber = function (val){
	if (val.match(/[^0-9]+/)) {
		return false;
	} else {
		return true;
	}
}


var validateTel = function (val){
	if (val.match(/^[0-9-]{6,13}$/) == null) {
		return false;
	} else {
		return true;
	}
}

