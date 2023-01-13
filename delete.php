<?php
    $user_name = $_GET["user_name"];
    $product_name = $_GET["product_name"];    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>データ削除確認</title>
</head>
<body>
    <p><?php echo $user_name; ?> さん、以下の情報データを削除しますか</p>
    <b><?php echo $product_name; ?><b>
    <form action="delete_processing.php" method="get">
        <input type="submit" name="submitBtn" value="はい">
        <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
        <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
    </form>
    <form action="login.html">
        <input type="submit" name="submitBtn" value="いいえ">
    </form>
</body>
</html>
