<?php
$fp = fopen( "count.txt", "r+" ); // ファイル開く
$count = fgets( $fp, 10 ); // 9桁分値読み取り
$count++; // 値+1（カウントアップ）
rewind( $fp ); // ファイルポインタを先頭に戻す
fputs( $fp, $count ); // 値書き込み
fclose( $fp ); // ファイル閉じる
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
    <div>
        <h1>お問い合わせ 送信完了</h1>
        <h2><?php echo 'お問い合わせNo.'.$count; ?></h2>
        <p>
        お問い合わせありがとうございました。<br>
        内容を確認のうえ、回答させて頂きます。<br>
        しばらくお待ちください。
        </p>
    </div>
</div>
</body>
</html>
