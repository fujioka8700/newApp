<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php
    function f(...$params)
    {
        print "要素数:". count($params). "<br>";
        $i = 0;
        while ($i < count($params)) {
            print $params[$i]. "<br>";
            $i++;
        }
    }

    f("星の", "カービィ", "丸々ピンク",);

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    function f(...params) {
        console.log("要素数:" + params.length);

        let i = 0;
        while (i < params.length) {
            console.log(params[i]);
            i++;
        }
    }

    f("星の", "カービィ", "丸々ピンク", );
</script>

</html>