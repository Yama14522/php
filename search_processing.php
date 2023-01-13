<?php
    $keyword = $_GET["keyword"];
    $keyword = "%".$keyword."%";
    $start = $_GET["start"];

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
        $query = 'SELECT * FROM products WHERE product_name LIKE :keyword';

        // SQL文をセット
        $stmt = $pdo->prepare($query);

        // バインド
        $stmt->bindParam(':keyword', $keyword);

        // SQL文の実行
        $stmt->execute();

        // 実行結果のフェッチ
        $result = $stmt->fetchAll();

        require_once 'search_result.php';
    
    }

    catch (PDOException $e) {
        // 例外が発生したら無視
        require_once 'exception_tpl.php';
        echo $e->getMessage();
        exit();
    }
?>