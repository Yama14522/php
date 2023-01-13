<?php
    $user_name = $_GET["user_name"];
    $product_name = $_GET["product_name"];
    
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
        
        // SQLクエリ作成
        $query = 'DELETE FROM products WHERE product_name = :product_name';

        // SQL文にセット
        $stmt = $pdo->prepare($query);

        // バインド
        $stmt->bindParam(':product_name', $product_name);

        // SQL文の実行
        $stmt->execute();

        require_once 'delete_result.php';
    }

    catch (PDOException $e) {
        // 例外が発生したら無視
        require_once 'exception_tpl.php';
        echo $e->getMessage();
        exit();
    }
?>