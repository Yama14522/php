<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>データ削除確認</title>
</head>
<body>
    <p><?php echo $user_name; ?> さん、以下の情報データを削除しました。</p>
    <b><?php echo $product_name; ?><b>
    <form action="login.html" method="get">
        <input type="submit" name="submitBtn" value="ログイン画面に戻る">
    </form>
</body>
</html>
