CREATE TABLE products (
    product_name  varchar(40)  NOT NULL PRIMARY KEY,
    price         int          NOT NULL,
    type_id       int          NOT NULL,
    FOREIGN KEY type_id REFERENCES type(id)
);

INSERT INTO products(product_Name, price, type_id) VALUES('USBメモリ 64GB', 900, 1);
INSERT INTO products(product_Name, price, type_id) VALUES('WEBカメラ 4K対応', 27400, 1);
INSERT INTO products(product_Name, price, type_id) VALUES('2022年度 基本情報技術者試験問題集', 2500, 2);
INSERT INTO products(product_Name, price, type_id) VALUES('Apple 11インチiPad Pro (Wi-Fi, 256GB)', 106800, 3);
INSERT INTO products(product_Name, price, type_id) VALUES('オフィスデスク', 8499, 4);
INSERT INTO products(product_Name, price, type_id) VALUES('NEC ノートPC', 19800, 3);
INSERT INTO products(product_Name, price, type_id) VALUES('ルンバ i7+', 129887, 5);
INSERT INTO products(product_Name, price, type_id) VALUES('日立 冷蔵庫', 187200, 6);
INSERT INTO products(product_Name, price, type_id) VALUES('会話AIロボット Romi ロミィ', 49280, 5);
INSERT INTO products(product_Name, price, type_id) VALUES('TCL 32型 フルハイビジョンテレビ', 29600, 6);
INSERT INTO products(product_Name, price, type_id) VALUES('コカ・コーラ 500ml×24本', 1915, 7);
INSERT INTO products(product_Name, price, type_id) VALUES('ポカリスエット 900ml×12本', 1745, 7);
INSERT INTO products(product_Name, price, type_id) VALUES('Apple iPhone 11 64GB', 52400, 3);
INSERT INTO products(product_Name, price, type_id) VALUES('MP3プレーヤー Bluetooth5.2内臓スピーカー', 3999, 6);
INSERT INTO products(product_Name, price, type_id) VALUES('プログラミング言語大全', 1980, 2);

CREATE TABLE type (
    id         int          NOT NULL  PRIMARY KEY, 
    type_name  varchar(20)  NOT NULL
);

INSERT INTO type(id, type_name) VALUES(1, '補助記憶装置・周辺機器');
INSERT INTO type(id, type_name) VALUES(2, '本・書籍');
INSERT INTO type(id, type_name) VALUES(3, '電子機器');
INSERT INTO type(id, type_name) VALUES(4, '家具');
INSERT INTO type(id, type_name) VALUES(5, 'ロボット・AI');
INSERT INTO type(id, type_name) VALUES(6, '家電機器');
INSERT INTO type(id, type_name) VALUES(7, '食品・飲料水');
INSERT INTO type(id, type_name) VALUES(8, '機械・電子工具');
INSERT INTO type(id, type_name) VALUES(9, 'ゲーム機');
INSERT INTO type(id, type_name) VALUES(10, 'ゲームソフト');
INSERT INTO type(id, type_name) VALUES(11, '漫画・娯楽');
INSERT INTO type(id, type_name) VALUES(12, 'DVD・CD');
INSERT INTO type(id, type_name) VALUES(13, '玩具');

CREATE TABLE users (
    user_id     varchar(10)  NOT NULL PRIMARY KEY,
    name        varchar(20)  NOT NULL,
    password    varchar(8)   NOT NULL,
    email       varchar(25)  NOT NULL,
    permission  int(11)      NOT NULL
)
INSERT INTO type(user_id, name, password, email, permission) VALUES('hoge', '山口太郎', 'P@ssw0rd', 'hoge@yic.ac.jp', 1);
