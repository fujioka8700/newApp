<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $tv = new Television();
    $tv->channelNo = 8;
    $tv->dispChannel();

    class Television
    {
        public $channelNo;

        public function dispChannel()
        {
            //クラス内でメンバ変数にアクセスするには、"this"を使う。
            print('現在のチャンネルは' . $this->channelNo);
        }
    }

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    class Television {
        constructor() {
            this.channelNo;
        }

        _dispChannel()
        {
            console.log('現在のチャンネルは' + this.channelNo);
        }
    }

    let tv = new Television();
    tv.channelNo = 8;
    tv._dispChannel();

    function Television2() {
        this.channelNo;

        this._dispChannel = function() {
            console.log('現在のチャンネルは' + this.channelNo);
        }
    }

    let tv2 = new Television2();
    tv2.channelNo = 10;
    tv2._dispChannel();
</script>

</html>