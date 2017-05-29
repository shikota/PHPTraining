<html>
<meta><meta charset="UTF-8">
<head>
    <title>管理画面</title>
    <link rel="stylesheet" type = "text/css" href="style3.css">
</head>
    <body>
<h1>管理画面</h1>
        <table border = "1" class = "iro">
            <title>お問い合わせ一覧</title>
            <tr>
                <td>お問い合せ番号</td>
                <td>姓</td>
                <td>名</td>
                <td>性別</td>
                <td>住所</td>
                <td>電話番号</td>
                <td>メールアドレス</td>
                <td>どこで知ったか</td>
                <td>お問い合わせ項目</td>
                <td>お問い合わせ内容</td>
            </tr>
            <?php
                $file = "kannri.csv";
                $fp = fopen($file, 'r');
                while($s = fgetcsv($fp, 1000))
                {
                    print"<tr>";
                    $s[0] = ltrim($s[0], '0');
                    for($i = 0; $i < count($s); $i++){
                        mb_convert_variables("UTF-8", "SJIS-win", $s[$i]);
                        print"<td>{$s[$i]}\n</td>";
                    }
                    print"</tr>";
                }
                fclose($fp);
            ?>
        </table>
    </body>
</html>
