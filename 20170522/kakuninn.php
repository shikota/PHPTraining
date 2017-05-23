<?php
//フォームボタンが押されたら
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //フォームから送信されたデータを各変数に格納
    $name = $_POST["sei"];
    $name = $_POST["mei"];
    $sex = $_POST["sex"];
    $name = $_POST["address"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $information = $_POST["information"];
    $item = $_POST["item"];
    $content  = $_POST["content"];
}
//送信ボタンが押されたら

?>
