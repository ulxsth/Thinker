<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Thinker/assets/stylesheets/quiz/created.css">
    <title>クイズ作成成功画面</title>
</head>

<body>
    <?php include("../../../assets/components/header-login.html"); ?>
    <div class="contents-container">
        <img src="/Thinker/assets/images/check.png" class="check-img">
        <h1>クイズが作成されました</h1>
        <div class="button">
            <button class="answer-button" onclick="location.href='answer.php'">問題へ</button>
            <button class="top-button" onclick="location.href='top.php'">TOPに戻る</button>
        </div>
    </div>
</body>

</html>