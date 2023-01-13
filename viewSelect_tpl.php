<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>商品一覧</title>
</head>
<body>
    <p>ようこそ <?php echo $user_name; ?> さん</p>

    <p>
        <form action="addition.html" method="get">
            <input type="submit" name="submitBtn" value="新規追加">
        </form>
        <form action="search.html" method="get">
            <input type="submit" name="submitBtn" value="検索">
        </form>
    </p>

    <?php
        $count = $start + 1;
        foreach($result2 as $row) {
            $product_name = $row["product_name"];
            $price = $row["price"];
            $type_id = $row["type_id"];
            echo "<p>";
            echo $count;
            echo "　";
            echo $row["product_name"];
            echo "　";
            echo $row["price"];
            echo "</p>";
            $count++;
            echo "<form action='change.php' method='get'>";
            echo "    <input type='hidden' name='user_name' value='$user_name'>";
            echo "    <input type='hidden' name='product_name' value='$product_name'>";
            echo "    <input type='hidden' name='price' value=$price>";
            echo "    <input type='hidden' name='type_id' value=$type_id>";
            echo "    <input type='submit' name='submitBtn' value='変更'>";
            echo "</form>";
            echo "<form action='delete.php' method='get'>";
            echo "    <input type='hidden' name='user_name' value='$user_name'>";
            echo "    <input type='hidden' name='product_name' value='$product_name'>";
            echo "    <input type='submit' name='submitBtn' value='削除'>";
            echo '</form>';
        }
    ?>

    <form action="select.php" method="get">
        <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <input type="hidden" name="start" value="<?php $next = $start - 5; if ($next < 0){$next = 0;} echo $next; ?>">
        <input type="hidden" name="size" value="<?php echo $size; ?>">
        <input type="submit" name="submitBtn" value="前へ">
    </form>

    <form action="select.php" method="get">
        <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <input type="hidden" name="start" value="<?php $next = $start + 5; echo $next; ?>">
        <input type="hidden" name="size" value="<?php echo $size; ?>">
        <input type="submit" name="submitBtn" value="次へ">
    </form>
</body>
</html>