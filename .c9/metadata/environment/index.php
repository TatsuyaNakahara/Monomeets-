{"filter":false,"title":"index.php","tooltip":"/index.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"insert","lines":["<?php","    date_default_timezone_set('Asia/Tokyo');","    $now_hour =  (int)date(\"H\");","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>タイトル</title>","    </head>","    <body>","        <p>今は<?php print $now_hour; ?>時です。</p>","        <?php if (6 <= $now_hour && $now_hour < 12) { ?>","            <p>おはよう、太郎さん</p>","        <?php } elseif (12 <= $now_hour && $now_hour < 18) { ?>","            <p>こんにちは、太郎さん</p>","        <?php } else { ?>","            <p>こんばんは、太郎さん</p>","        <?php } ?>","    </body>","</html>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"remove","lines":["<?php","    date_default_timezone_set('Asia/Tokyo');","    $now_hour =  (int)date(\"H\");","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>タイトル</title>","    </head>","    <body>","        <p>今は<?php print $now_hour; ?>時です。</p>","        <?php if (6 <= $now_hour && $now_hour < 12) { ?>","            <p>おはよう、太郎さん</p>","        <?php } elseif (12 <= $now_hour && $now_hour < 18) { ?>","            <p>こんにちは、太郎さん</p>","        <?php } else { ?>","            <p>こんばんは、太郎さん</p>","        <?php } ?>","    </body>","</html>"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":30,"column":7},"action":"insert","lines":["<?php","    date_default_timezone_set('Asia/Tokyo');","    $now_hour =  (int)date(\"H\");","","    function greeting($hour) {","        $result = \"\";","","        if (6 <= $hour && $hour < 12) {","            $result = \"おはよう\";","        }","        elseif (12 <= $hour && $hour < 18) {","            $result = \"こんにちは\";","        }","        else {","            $result = \"こんばんは\";","        }","","        return $result;","    }","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>タイトル</title>","    </head>","    <body>","        <p>今は<?php print $now_hour; ?>時です。</p>","        <p><?php print greeting($now_hour); ?>、太郎さん</p>","    </body>","</html>"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":29,"column":7},"end":{"row":29,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526362150812,"hash":"b5455f5966e577f76619808e24d6a12441e9ca9d"}