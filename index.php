<?php
    // おみくじリスト
    $omikuji_list = ["大大吉", "大吉", "吉", "中吉", "小吉", "末吉", "凶", "大凶"];

    // おみくじを引く
    $number = mt_rand(0, 7);
    $omikuji = "<span class='result".$number."'>".$omikuji_list[$number]."</span>";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>omikuji</title>
</head>
<body>
    <p>あなたの運勢は</p>
    <p class="omikuji"><?php echo $omikuji; ?></p>
    <p>です！</p>

    <style>
        * {
            text-align: center;
        }
        .omikuji {
            font-size: 200px;
        }
        .result0 {
            color: #ff1493;
        }
        .result1 {
            color: #ff1414;
        }
        .result2 {
            color: #14ff47;
        }
        .result3 {
            color: #ff8b14;
        }
        .result4 {
            color: #147dff;
        }
        .result5 {
            color: #5fa6ff;
        }
        .result6 {
            color: #747474;
        }
        .result7 {
            color: #444444;
        }
    </style>
</body>
</html>