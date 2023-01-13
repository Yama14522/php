<?php
    $product_name = $_GET["product_name"];
    $price = $_GET["price"];
    $type_id = $_GET["type_id"];

    try{
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

        // SQLクエリ作成
        $query = 'INSERT INTO products(product_name, price, type_id) VALUES(:product_name, :price, :type_id)';

        // SQL文をセット
        $stmt = $pdo->prepare($query);

        // バインド
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':type_id', $type_id);

        // SQL文の実行
        $stmt->execute();

        require_once 'login.html';
    
    }

    catch (PDOException $e) {
        // 例外が発生したら無視
        require_once 'exception_tpl.php';
        echo $e->getMessage();
        exit();
    }
?>
