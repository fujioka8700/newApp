<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    //メンバ変数へのアクセスとメンバメソッドからの値の取得
    $tv = new Television();
    $tv->setChannel(6);
    print('現在のチャンネルは' . $tv->getChannel() . '<br>');

    $tv->setChannel(20);
    print('現在のチャンネルは' . $tv->getChannel() . '<br>');

    class Television
    {
        private int $channelNo;
        const MAX_CHANNEL = 12;
        const MIN_CHANNEL =  1;
        const ERROR_MSG = 'チャンネルは' . self::MIN_CHANNEL . 'から' . self::MAX_CHANNEL . 'の間で設定してください。<br>';

        public function __construct(int $channel = 8)
        {
            if (($channel >= self::MIN_CHANNEL) and ($channel <= self::MAX_CHANNEL)) {
                $this->channelNo = $channel;
            }
        }
        private function dispChannel(): void
        {
            //クラス内でメンバ変数にアクセスするには、"this"を使う。
            print('現在のチャンネルは' . $this->channelNo);
        }

        public function setChannel($channel): void
        {
            if (($channel >= self::MIN_CHANNEL) and ($channel <= self::MAX_CHANNEL)) {
                $this->channelNo = $channel;
            } else {
                print self::ERROR_MSG;
            }
        }

        public function getChannel(): int
        {
            return $this->channelNo;
        }
    }

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    //クラスオブジェクト
    class Television {
        constructor() {
            this.channelNo = 5;
        }
    }

    //関数オブジェクト
    /*function Television() {
        this.channelNo = 8;
    }*/

    //関数オブジェクトを変数に入れてから。
    /*let Television = function() {
        this.channelNo = 8;
    }*/

    Television.prototype.getChannel = function() {
        return this.channelNo;
    }

    Television.prototype.setChannel = function(channel) {
        if ((channel >= 1) && (channel <= 12)) {
            this.channelNo = channel;
        } else {
            console.log('チャンネルは1から12の間で設定してください。');
        }
    }

    let tv = new Television();
    tv.setChannel(30);
    console.log('現在のチャンネルは' + tv.getChannel());

    tv.setChannel(3);
    console.log('現在のチャンネルは' + tv.getChannel());

    //関数オブジェクトを直接。
    let tv2 = new function() {
        this.channelNo = 8;
        this.setChannel = function(channel) {
            if ((channel >= 1) && (channel <= 12)) {
                this.channelNo = channel;
            } else {
                console.log('チャンネルは1から12の間で設定してください。');
            }
        }
        this.getChannel = function() {
            return this.channelNo;
        }
    }()

    // let tv = new Television();
    tv2.setChannel(20);
    console.log('現在のチャンネルは' + tv2.getChannel());

    tv2.setChannel(10);
    console.log('現在のチャンネルは' + tv2.getChannel());
</script>

</html>