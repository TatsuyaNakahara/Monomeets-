<?php
    // Define a function
    function sum() {
        $result = 0;
        for ($i = 1; $i <= 9; $i++) {
            $result = $result + $i;
        }
        print $result . PHP_EOL;
    }

     // Call the function
    sum();            // The function is run, printing the result of adding the numbers 1~9
?>

<?php
    // Define a function
    function sum($a, $b) {
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result = $result + $i;
        }
        print $result . PHP_EOL;
    }
    sum(1, 9);
    sum(1, 1000);
    sum(1000, 9999);
?>

<?php
    // Define a function
    function sum($a, $b) {
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result = $result + $i;
        }
        return $result;
    }

    // Call the function
    $sum1 = sum(1, 9);
    $sum2 = sum(1, 1000);
    $sum3 = sum(1000, 9999);
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p><?php print 'ここにPHPコードを埋め込む。'; ?></p>
    </body>
</html>