<?php
if(isset($_POST['comment'])){
    $comment = $_POST['comment'];
    echo $comment;
}
 ?>
 <!DOCTYPE html>
 <html lang = “ja”>
 <head>
 <meta charset = “UFT-8”>
 <title>お問い合わせフォーム</title>
 <link rel = "stylesheet" href = "style.css">
 </head>
 <body>
<center>
 <h1>お問い合わせ</h1>
</center>
 <tl>

        <div id="wrap">
            <form action = "kakuninn.php" method = "post" name = "form" onsubmit="return validate()">
            <div id="table">
                <table>
                    <tr>
                        <td>姓</td>
                        <td><input type = "text" name = "sei" placeholder = "例）山田" value = "" required></td>
                    </tr>
                    <tr>
                        <td>名</td>
                        <td><input type = "text" name = "mei" placeholder = "例）太郎" value = "" required></td>
                    </tr>
                    <tr>
                        <td>性別</td>
                        <td><input type = "radio" name = "sex" value = "man" required>男性
                        <input type = "radio" name = "sex" value = "woman" required>女性
                        <input type = "radio" name = "sex" value = "unkown" required>不明</td>
                    </tr>
                    <tr>
                        <td>住所</td>
                        <td><input type = "text" name = "address" placeholder = "例）東京都〇〇" value = ""></td>
                    </tr>
                    <tr>
                        <td>電話番号</td>
                        <td><input type="text" name = "tel" required size = "4" pattern="^[0-9]+$"/>
                        <label for "tel1">-</label>
                        <input type="text" name = "tel1" required size = "4" pattern="^[0-9]+$"/>
                        <label for "tel2">-</label>
                        <input type="text" name = "tel2" required size = "4" pattern="^[0-9]+$"/></td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td><input type = "text" name = "email" placeholder = "例）guest" required pattern="^[a-zA-Z]{1}[0-9a-zA-Z]+[\w\.-]+$"/>@<input type ="text" name = "email2" placeholder = "例exapmle.com" required pattern="^[\w\.-]+\.\w{2,}+$"> </td>
                    </tr>
                    <tr>
                        <td>どこで知ったか</td>
                        <td><input type = "checkbox" name = "information[]" value = "magazine">雑誌
                        <input type = "checkbox" name = "information[]" value = "newspaper">新聞</td>
                    </tr>
                    <tr>
                        <td>質問カテゴリ</td>
                        <td><select name = "item">
                        <option value = "">お問い合わせ項目を選択してください</option>
                        <option value="ご意見・お問い合わせ">ご意見・お問い合わせ</option>
                        <option value="感想">感想</option>
                        <option value="改善点">改善点</option>
                        <option value="その他">その他</option></td>
                    </tr>
                    <tr>
                        <td>質問内容</td>
                        <td><textarea name = "content" rows = "4" cols = "40" maxlength = "20" widht = "200px" heght = "80px" placeholder = "お問い合わせ内容を入力"></textarea></td>
                    </tr>
                </table>
                <tr>
                    <button type = "submit">確認画面へ</button>
                    <button type = "reset">クリア</button>
                </tr>
            </div>
    </form>
    </div>
</tl>
 </body>
 </html>
