<?php
    $user_name = $_GET["user_name"];
    $product_name1 = $_GET["product_name1"];
    $price1 = $_GET["price1"];
    $type_id1 = $_GET["type_id1"];
    $product_name2 = $_GET["product_name2"];
    $price2 = $_GET["price2"];
    $type_id2 = $_GET["type_id2"];
    
    try {
        // データベースに接続
        $pdo = new PDO(
            // ホスト名、データベース名
            'mysql:host=localhost;dbname=order;charset=utf8',
            // ユーザー名
            'root',
            // パスワード
            '',
            // レコード列名をキーとして取得させる
            [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]
        );
        
        if ($product_name1 != $product_name2 and $price1 == $price2 and $type_id1 == $type_id2) {
            // SQLクエリ作成
            $query = 'UPDATE products SET product_name = :product_name2 WHERE product_name = :product_name1';
            // SQL文にセット
            $stmt = $pdo->prepare($query);
            // バインド
            $stmt->bindParam(':product_name1', $product_name1);
            $stmt->bindParam(':product_name2', $product_name2);
            // SQL文の実行
            $stmt->execute();
            require_once 'change_result.php';
        } elseif ($product_name1 == $product_name2 and $price1 != $price2 and $type_id1 == $type_id2) {
            $query = 'UPDATE products SET price = :price WHERE product_name = :product_name';
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':product_name', $product_name1);
            $stmt->bindParam(':price', $price2);
            $stmt->execute();
            require_once 'change_result.php';
        } elseif ($product_name1 == $product_name2 and $price1 == $price2 and $type_id1 != $type_id2) {
            $query = 'UPDATE products SET type_id = :type_id WHERE product_name = :product_name';
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':product_name', $product_name1);
            $stmt->bindParam(':type_id', $type_id2);
            $stmt->execute();
            require_once 'change_result.php';
        } elseif ($product_name1 != $product_name2 and $price1 != $price2 and $type_id1 == $type_id2) {
            $query = 'UPDATE products SET product_name = :product_name2, price = :price WHERE product_name = :product_name1';
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':product_name1', $product_name1);
            $stmt->bindParam(':product_name2', $product_name2);
            $stmt->bindParam(':price', $price2);
            $stmt->execute();
            require_once 'change_result.php';
        } elseif ($product_name1 != $product_name2 and $price1 == $price2 and $type_id1 != $type_id2) {
            $query = 'UPDATE products SET product_name= :product_name2, type_id = :type_id WHERE product_name = :product_name1';
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':product_name1', $product_name1);
            $stmt->bindParam(':product_name2', $product_name2);
            $stmt->bindParam(':type_id', $type_id2);
            $stmt->execute();
            require_once 'change_result.php';
        } elseif ($product_name1 == $product_name2 and $price1 != $price2 and $type_id1 != $type_id2) {
            $query = 'UPDATE products SET price = :price, type_id = :type_id WHERE product_name = :product_name';
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':product_name', $product_name1);
            $stmt->bindParam(':price', $price2);
            $stmt->bindParam(':type_id', $type_id2);
            $stmt->execute();
            require_once 'change_result.php';
        } elseif ($product_name1 != $product_name2 and $price1 != $price2 and $type_id1 != $type_id2) {
            $query = 'UPDATE products SET product_name = :product_name2, price = :price, type_id = :type_id WHERE product_name = :product_name1';
            $stmt->bindParam(':product_name1', $product_name1);
            $stmt->bindParam(':product_name2', $product_name2);
            $stmt->bindParam(':price', $price2);
            $stmt->bindParam(':type_id', $type_id2);
            $stmt->execute();
            require_once 'change_result.php';
        }
    }

    catch (PDOException $e) {
        // 例外が発生したら無視
        require_once 'exception_tpl.php';
        echo $e->getMessage();
        exit();
    }
?>