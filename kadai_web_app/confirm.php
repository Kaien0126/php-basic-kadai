<?php
    // セッションを開始
    session_start();

    // POSTリクエストから入力データを取得
    $employee_name = $_POST['employee_name'];
    $age = $_POST['age'];
    $department = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP 社員情報入力フォーム</title>
    </head>

    <body>
        <h2>入力内容をご確認ください。</h2>
        <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

        <table border="1">
            <tr>
                <th>項目</th>
                <th>入力内容</th>
            </tr>
            <tr>
                <th>社員名</th>
                <th><?php echo $employee_name; ?></th>
            </tr>
            <tr>
                <th>年齢</th>
                <th><?php echo $age; ?></th>
            </tr>
            <tr>
                <th>所属部署</th>
                <th><?php echo $department; ?></th>
            </tr>
        </table>

        <p>
            <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
            <button id="cancel-btn" onclick="history.back();">キャンセル</button>
        </p>
    </body>
</html>