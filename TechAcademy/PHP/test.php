<?php
    print 'こんにちは';
?>

<?php
    print 'これだけ動く';
?>

<?php
    $hensuu = "何らかのデータ";
    print $hensuu;
?>

<?php
    $x = 86400;
    
    print $ichiniti_no_byousuu;
?>

<?php
    $ichiniti_no_byousuu = 24 * 60 * 60;    // * is the multiplication operator

    print $ichiniti_no_byousuu;
?>

<?php
    $ichiniti_no_zikan = 24;
    $ichizikan_no_hun = 60;
    $ippun_no_byou = 60;

    $ichiniti_no_byousuu = $ichiniti_no_zikan * $ichizikan_no_hun * $ippun_no_byou;

    print $ichiniti_no_byousuu;
?>

<?php
    $ichiniti_no_byousuu = 24 * 60 * 60;
    $hensuu = "何らかのデータ";
?>

<?php
    $result = 1 < 2;
    var_dump($result);

    $result = 1 == 2;
    var_dump($result);
?>

<?php
    $num = 10 + "20";
    $str = 10 . "です。";
?>

<?php
    // 10 > 5 is true, so this becomes if (true), and {...} is run
    if (10 > 5) {
        print 'ここだけ表示される' . PHP_EOL;
    }

    // 10 <= 5 is false, so this becomes if (false), and {...} is not run
    if (10 <= 5) {
        print 'ここには絶対来ない' . PHP_EOL;
    }
?>

<?php
    $number = mt_rand() % 10;

    if ($number < 5) {
        print $number . 'は5より小さい数' . PHP_EOL;
    }
    else {
        print $number . 'は5以上の数' . PHP_EOL;
    }
?>

<?php
    $number = mt_rand() % 10;

    if ($number < 3) {
        print $number . 'は3より小さい数' . PHP_EOL;
    }
    elseif ($number < 6) {
        print $number . 'は3以上で6より小さい数' . PHP_EOL;
    }
    elseif ($number < 8) {
        print $number . 'は6以上で8より小さい数' . PHP_EOL;
    }
    else {
        print $number . 'は8か9しか来ません' . PHP_EOL;
    }
?>

<?php
    // Initialize the variable
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
    }
?>

<?php
    $count = 0;
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
        $count++;
    }

    print '9が出るまで' . $count . '回かかった。' . PHP_EOL;
?>

<?php
    for ($i = 0; $i < 10; $i++) {
        print $i . '回目' . PHP_EOL;
    }
?>

<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    $count = count($fruits);         // assign the number of items in the array to $count
    for ($i = 0; $i < $count; $i++) {
        print $i . '回目: ' . $fruits[$i] . PHP_EOL;
    }
?>
