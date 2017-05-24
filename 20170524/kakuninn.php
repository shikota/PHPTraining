<?php
//フォームボタンが押されたら
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //フォームから送信されたデータを各変数に格納
    $name = $_POST["sei"];
    $name = $_POST["mei"];
    if(isset($_POST["sex"]));{
        switch($_POST["sex"]){
            case 'man':
                $sex = "男性";
            case 'woman':
                $sex = "女性";
                break;
            case 'unkown':
                $sex = "その他";
                break;
        }
    }
    $address = $_POST["address"];
    $tel = $_POST["tel"];
    $tel2 = $_POST["tel1"];
    $tel3 = $_POST["tel2"];
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
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
<div>
    <form action="kannryougamen.php" method="post">
            <input type="hidden" name="sei" value="<?php echo $sei; ?>">
            <input type="hidden" name="mei" value="<?php echo $mei; ?>">
            <input type="hidden" name="sex" value="<?php echo $sex; ?>">
            <input type="hidden" name="address" value="<?php echo $address; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="tel1" value="<?php echo $tel1; ?>">
            <input type="hidden" name="tel2" value="<?php echo $tel2; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="information[]" value="<?php echo $information; ?>">
            <input type="hidden" name="item" value="<?php echo $item; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <h1 class="contact-title">お問い合わせの内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
                <div>
                    <label>姓</label>
                    <p><?php echo $name; ?></p>
                </div>
                <div>
                    <label>名</label>
                    <p><?php echo $name; ?></p>
                </div>
                <div>
                    <label>性別</label>
                    <p><?php echo $sex; ?></p>
                </div>
                <div>
                    <label>住所</label>
                    <p><?php echo $address; ?></p>
                </div>
                <div>
                    <label>電話番号</label>
                    <p><?php echo $tel; echo $tel2; echo $tel3;?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo $email; echo $email2;?></p>
                </div>
                <div>
                    <label>どこで知ったか</label>
                    <p><?php echo $information; ?></p>
                </div>
                <div>
                    <label>お問い合わせ項目</label>
                    <p><?php echo $item; ?></p>
                </div>
                <div>
                    <label>お問い合わせ内容</label>
                    <p><?php echo $content; ?></p>
                </div>
            </div>
        <input type="button" value="内容を修正する" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
        <a href = "HTMLpage.php">未入力状態で書き直します</a>
    </form>
</div>
</body>
</html>
