<?php
//フォームボタンが押されたら
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //フォームから送信されたデータを各変数に格納
    $name = $_POST["sei"];
    $mei = $_POST["mei"];
    if(isset($_POST["sex"]));{
        switch($_POST["sex"]){
            case 'man':
                $sex = "男性";
            case 'woman':
                $sex = "女性";
                break;
            case 'unkown':
                $sex = "不明";
                break;
        }
    }
    $address = $_POST["address"];
    $tel = $_POST["tel"];
    $tel1 = $_POST["tel1"];
    $tel2 = $_POST["tel2"];
    $tel5 = $tel."-".$tel1."-".$tel2;
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
    $email3 = $email."@".$email2;
    if(isset($_POST["information"][1])){
        $information="雑誌、新聞";
    }elseif(isset($_POST["information"][0])){
        switch ($_POST["information"][0]) {
            case 'magazine':
                $information = "雑誌";
                break;
            case 'newspaper':
                $information = "新聞";
                break;
            }
    }else {
        $information = "特になし";
    }
    $item = $_POST["item"];
    $content  = $_POST["content"];
}
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div id="wrap">
    <form action="kannryougamen.php" method="post">
            <input type="hidden" name="sei" value="<?php echo $name; ?>">
            <input type="hidden" name="mei" value="<?php echo $mei; ?>">
            <input type="hidden" name="sex" value="<?php echo $sex; ?>">
            <input type="hidden" name="address" value="<?php echo $address; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel5; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="information" value="<?php echo $information; ?>">
            <input type="hidden" name="item" value="<?php echo $item; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <center>
            <h1 class="contact-title">お問い合わせの内容確認</h1>
            </center>
            <div id = "table">
            <a class = "hei">お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ<span id = "sousin">「送信する」</span><a class = "hei">ボタンを押して下さい。</a></p>
            <div>
                <div class = "main">
                    <label class = "div1">姓</label>
                    <p class = "div2"><?php echo $name; ?></p>
                </div>
                <div class = "main">
                    <label class = "div1">名</label>
                    <p class = "div2"><?php echo $mei; ?></p>
                </div>
                <div class = "main">
                    <label class = "div1">性別</label>
                    <p class = "div2"><?php echo $sex; ?></p>
                </div>
                <div class = "main">
                    <label class = "div1">住所</label>
                    <p class = "div2"><?php echo $address; ?></p>
                </div>
                <div class = "main">
                    <label class = "div1">電話番号</label>
                    <p class = "div2"><?php echo $tel5;?></p>
                </div>
                <div class = "main">
                    <label class = "div1">メールアドレス</label>
                    <p class = "div2"><?php echo $email3;?></p>
                </div>
                <div class = "main">
                    <label class = "div1">どこで知ったか</label>
                    <p class = "div2"><?php echo $information; ?></p>
                </div>
                <div class = "main">
                    <label class = "div1">お問い合わせ項目</label>
                    <p class = "div2"><?php echo $item; ?></p>
                </div>
                <div class = "main">
                    <label class = "div1">お問い合わせ内容</label>
                    <p class = "div2"><?php echo $content; ?></p>
                </div>
            </div>
        <input class = "test" type="button" style = "widht : 70px; height : 40px" value="内容を修正する" onclick="history.back(-1)">
        <button class = "test1" type="submit" name="submit" style = "widht : 70px; height : 40px">送信する</button>
        <a href = "HTMLpage.php">未入力状態で書き直します</a>
    </div>
    </form>
</div>
</body>
</html>
