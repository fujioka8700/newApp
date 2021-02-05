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

        function dispChannel()
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
            this.dispChannel = function() { //最優先
                console.log('[コンストラクタ]現在のチャンネルは' + this.channelNo);
            }
        }

        dispChannel() { //3番目
            console.log('現在のチャンネルは' + this.channelNo);
        }
    }

    Television.prototype.dispChannel = function() { //2番目
        console.log('[プロトタイプ]現在のチャンネルは' + this.channelNo);
    }

    let tv = new Television();
    tv.channelNo = 8;
    tv.dispChannel();
</script>

</html>