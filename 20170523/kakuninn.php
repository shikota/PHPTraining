<?php
//フォームボタンが押されたら
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //フォームから送信されたデータを各変数に格納
    $name = $_POST["sei"];
    $name = $_POST["mei"];
    $sex = $_POST["sex"];
    $name = $_POST["address"];
    $tel = $_POST["tel"];
    $tel2 = $_POST["tel2"];
    $tel3 = $_POST["tel3"];
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
    $information = $_POST["information"];
    $item = $_POST["item"];
    $content  = $_POST["content"];
}
//送信ボタンが押されたら
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div><h1>Company Name</h1></div>
<div><h2>お問い合わせ</h2></div>
<div>
    <form action="confirm.php" method="post">
            <input type="hidden" name="sei" value="<?php echo $sei; ?>">
            <input type="hidden" name="mei" value="<?php echo $mei; ?>">
            <input type="hidden" name="sex" value="<?php echo $sex; ?>">
            <input type="hidden" name="address" value="<?php echo $address; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="information" value="<?php echo $information; ?>">
            <input type="hidden" name="item" value="<?php echo $item; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
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
    </form>
</div>
</body>
</html>
