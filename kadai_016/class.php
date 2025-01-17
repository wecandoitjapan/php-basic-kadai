<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
        <p>
            <?php

    class Food {
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッドを定義する
      public function showprice() {
        // priceメソッドにアクセスして実行
        echo $this->price . '<br>';
      }
    }

    $food_caterogy = new Food('potato', 250);
    print_r($food_caterogy);

            echo'<br>';

    class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct (string $name, int $height, int $weight) {
                    $this -> name = $name;
                    $this -> height = $height;
                    $this -> weight = $weight;
                }
        public function show_height () {
            // heightメソッドにアクセスして実行
            echo $this->height . '<br>';
        }
            }

        $animal_inf = new Animal ('dog', 60, 5000);
        print_r($animal_inf);

            echo'<br>';
        // オブジェクトにアクセスしてshowpricenの値を代入するーこの場合price
        $food_caterogy->showprice();
        // オブジェクトにアクセスしてshowheightの値を代入するーこの場合height
        $animal_inf->show_height();
            ?>
        </p>
</body>

</html>