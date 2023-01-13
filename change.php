<?php
    $user_name = $_GET["user_name"];
    $product_name = $_GET["product_name"];
    $price = $_GET["price"];
    $type_id = $_GET["type_id"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>情報更新</title>
</head>
<body>
    <form action='change_processing.php' method="get">
        <label name="product_name1">変更前商品名：</label>
        <input type="text" name="product_name1" value="<?php echo $product_name; ?>" maxlength=50 size=55 readonly>
        <p></p>

        <label for="price1">　変更前値段：</label>
        <input type="number" name="price1" value=<?php echo $price; ?> min=0 size=35 readonly>
        <p></p>

        <label for="type_id1">変更前種類ID：</label>
        <input type="number" name="type_id1" value=<?php echo $type_id; ?> min=1 max=13 readonly>
        <p></p>

        <label for="product_name2">変更後商品名：</libel>
        <input type="text" name="product_name2" maxlength=50 size=55 value="NONE">
        <p></p>

        <label for="price2">　変更後値段：</label>
        <input type="number" name="price2" value=0 min=0 size=35>
        <p></p>

        <label for="type_id2">変更後種類ID：</label>
        <input type="number" name="type_id2" value=1 min=1 max=13>
        <p></p>

        <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">

        <input type="submit" name="submitBtn" value="変更">
    </form>
</body>