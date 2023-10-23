<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Latihan 1C</title>
</head>

<body>
    <?php
    $a="A";
    $b="B";
    $c="C";
    ?>
        <div class="awal">
            <div class ="atas">
                <p><?php echo $a ?></p>
        </div>

        <div class="tengah">
                <p><?php echo $a ?></p>
                <p><?php echo $b ?></p>
        </div>

        <div class="bawah">
                <p><?php echo $a ?></p>
                <p><?php echo $b ?></p>
                <p><?php echo $c ?></p>
        </div>

    <style type="text/css">
        .awal{
            border: 1px solid black;
            width: 148px;
            height: 150px;
            margin-left: 600px;
            margin-top: 230px;
            display: table;
        }

        .atas{
            border: 2px solid black;
            width: 40px;
            height: 44px;
            margin-left: 4px;
            margin-top: 5px;
            padding-bottom: 3px;
            text-align: center;
        }

        .tengah{
            display: flex;
        }

        .tengah p{
            border: 2px solid black;
            width: 40px;
            height: 33px;
            margin-left: 4px;
            margin-top: 5px;
            padding-top: 13px;
            text-align: center;
        }

        .bawah{
            display: flex;
        }

        .bawah p{
            border: 2px solid black;
            width: 40px;
            height: 33px;
            margin-left: 4px;
            margin-top: 0px;
            padding-top: 13px;
            text-align: center;
            margin-bottom: 5px;
        }

    </style>
    </div>
 </body>
 </html>
