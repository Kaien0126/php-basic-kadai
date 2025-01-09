<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way($array, $order) {
            if ($order == true) {
                echo '昇順にソートします。<br>';
                sort($array);
                foreach ($array as $val) {
                    echo $val . '<br>';
                }

            } else {
                echo '降順にソートします。<br>';
                rsort($array);
                foreach ($array as $val) {
                    echo $val . '<br>';
                }
                
            }

        }

        // 昇順ソート
        sort_2way($nums, true);

        // 降順ソート
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>