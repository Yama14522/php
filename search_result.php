<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>検索結果</title>
</head>
<body>
    <p>検索結果の内容です</p>

    <?php
        $count = $start + 1;
        foreach($result as $row) {
            echo "<p>";
            echo $count;
            echo "　";
            echo $row["product_name"];
            echo "　\\";
            echo $row["price"];
            echo "</p>";
            $count++;
        }
    ?>

    <form action="login.html" method="get">
        <input type="submit" name="submitBtn" value="ログイン画面に戻る">
    </form>
</body>
</html>
