<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $num = 0;

    while ($num <= 5) {
        print 'num = ' . $num . '<br />';
        $num_ = 0;

        while ($num_ <= 10) {
            print '&nbsp;&nbsp;&nbsp;num = ' . $num_ . '<br />';
            $num_++;
            if ($num_ === 3) {
                break 2;
            }
        }
        $num++;
    }

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    let num = 0;

    while (num <= 5) {
        console.log('num = ' + num);
        let num_ = 0;
        labelA:

        while (num_ <= 2) {
            console.log(' num_ = ' + num_);
            let num_2 = 0;

            while (num_2 <= 5) {
                console.log('   num_2 = ' + num_2);
                num_2++;
                if (num_2 === 2) {
                    break labelA;
                    // break;
                }
            }
            num_++;
        }
        num++;
    }
</script>

</html>