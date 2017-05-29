<?php
$fp = "kannri.csv"; // ファイル開く
$name = $_POST["sei"];
$mei = $_POST["mei"];
$sex = $_POST["sex"];
$address = $_POST["address"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$information = $_POST["information"];
$item = $_POST["item"];
$content  = $_POST["content"];
if(isset($name)){
        $data = file('kannri.csv', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if(!empty($data[count($data)-1])){
            $last_row = $data[count($data)-1];
            $list = explode(',', $last_row);
            $count=$list[0];
            $count=ltrim($count, '0');
            $count+= 1;
            $count=sprintf("%06d",$count);
        }else{
            $count=1;
            $count=sprintf("%06d",$count);
        }
        $datas = array('cnt'=>$count,'sei'=> $name,'mei'=> $mei,'sex'=>$sex,'address'=>$address,'tel'=> $tel,'email'=> $email,'information'=>$information,'item'=> $item, 'content'=>$content);
        mb_convert_variables("SJIS-win", "UTF-8", $datas);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $fpa = fopen($fp , 'a');
            if($fpa){
                fputcsv($fpa,$datas);
            }
            fclose($fpa);
        }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div>
    <div id = "bbb">
    <div id = "table">
        <center>
        <h1>お問い合わせ 送信完了</h1>
        <h2><?php echo 'お問い合わせNo.'.$count; ?></h2>
        </center>
        <p id = "iii">
        お問い合わせありがとうございました。<br>
        内容を確認のうえ、回答させて頂きます。<br>
        しばらくお待ちください。
        </p>
    </div>
    <center>
    <a href="HTMLpage.php">
            <button class = "aaa" type="button">入力画面に戻る</button>
        </a>
    </center>
</div>
</div>
</body>
</html>
