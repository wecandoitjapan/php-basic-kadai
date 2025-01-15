<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
        <?php
        // 関数の定義
        function sort_2way($nums, $order) {   
            if($order) {
                echo "昇順にソートします。<br>";
                sort($nums);
                foreach($nums as $num) {
                    echo $num . '<br>';
                }
            }else {
                echo "降順にソートします。<br>";
                rsort($nums);
                foreach($nums as $num) {
                    echo $num . '<br>';
                }
            }
        }

        // 関数の呼び出し
        $nums = [15, 4, 8, 23, 10];
        sort_2way($nums, true);
        sort_2way($nums, false);

        ?>
        </p>
</body>
</html>