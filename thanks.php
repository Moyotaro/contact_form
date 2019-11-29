<?php
// 入力内容の取得
require_once('function.php');

$nickname = $_POST['nickname'];
$email = $_POST['email'];
$content = $_POST['content'];

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>お問い合わせありがとうございました！</h1>
    <p><?php echo h($nickname); ?></p>
    <p><?php echo h($email); ?></p>
    <p><?php echo h($content); ?></p>
</body>

</html>