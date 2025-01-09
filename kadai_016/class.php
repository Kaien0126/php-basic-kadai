<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題016</title>
</head>

<body>
    <p>
        <?php
        // クラス：Food
        class Food {
            // プロパティ
            private $name;
            private $price;

            // コンストラクタ
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
            // メソッド
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        // クラス：Animal
        class Animal {
            // プロパティ
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッド
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // インスタンス化と出力
        echo '作成したインスタンス内容<br>';
        $food = new Food('唐揚げ', 500);
        print_r($food) ;
        echo '<br>';

        $animal = new Animal('馬', 160, 490);
        print_r($animal);
        echo '<br>';

        // メソッドへのアクセス
        echo '<br>';
        echo '各メソッドへのアクセス<br>';
        $food->show_price();
        $animal->show_height();

        ?>
    </p>
</body>

</html>