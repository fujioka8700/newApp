<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クラスの定義</title>
</head>
<body>

<h1>クラスの定義</h1>

<?php

//メンバ変数とメンバメソッド
/*
$tv = new Television();
$tv->channelNo = 8;
$tv->dispChannel();

class Television {
    public $channelNo;

    function dispChannel(){
        //クラス内でメンバ変数にアクセスするには、"this"を使う。
        print('現在のチャンネルは'.$this->channelNo);
    }
}

//引数があるメンバメソッド
$tv = new Television();
$tv->setChannel(5);

class Television {
    private $channelNo;

    private function dispChannel() {
        //クラス内でメンバ変数にアクセスするには、"this"を使う。
        print('現在のチャンネルは'.$this->channelNo);
    }

    public function setChannel($channel) {
        $this->channelNo = $channel;
        $this->dispChannel();
    }
}

//メンバ変数へのアクセスとメンバメソッドからの値の取得
$tv = new Television();
$tv->setChannel(20);
print('現在のチャンネルは'.$tv->getChannel().'<br>');

$tv->setChannel(10);
print('現在のチャンネルは'.$tv->getChannel().'<br>');

class Television {
    private $channelNo = 8;

    private function dispChannel() {
        //クラス内でメンバ変数にアクセスするには、"this"を使う。
        print('現在のチャンネルは'.$this->channelNo);
    }

    public function setChannel($channel) {
        if (($channel >= 1) and ($channel <= 12)) {
            $this->channelNo = $channel;
        } else {
            print('チャンネルは1から12の間で設定してください。<br>');
        }
    }

    public function getChannel() {
        return $this->channelNo;
    }
}

//クラス内の定数

$tv = new Television();
$tv->setChannel(20);
print('現在のチャンネルは'.$tv->getChannel().'<br>');

$tv->setChannel(10);
print('現在のチャンネルは'.$tv->getChannel().'<br>');

class Television {
    private $channelNo = 8;

    const MAX_CHANNEL = 12;
    const MIN_CHANNEL = 1;
    const ERROR_MSG = 'チャンネルは'.self::MIN_CHANNEL.'から'.self::MAX_CHANNEL.'の間で設定してください。<br>';

    private function dispChannel() {
        //クラス内でメンバ変数にアクセスするには、"this"を使う。
        print('現在のチャンネルは'.$this->channelNo);
    }

    public function setChannel($channel) {
        if (($channel >= self::MIN_CHANNEL) and ($channel <= self::MAX_CHANNEL)) {
            $this->channelNo = $channel;
        } else {
            print(self::ERROR_MSG);
        }
    }

    public function getChannel() {
        return $this->channelNo;
    }
}
*/
//コンストラクタ

$tv = new Television(5);
$tv->setChannel(20);
print('現在のチャンネルは'.$tv->getChannel().'<br>');

$tv->setChannel(10);
print('現在のチャンネルは'.$tv->getChannel().'<br>');

class Television {
    //メンバ変数
    private int $channelNo;

    //定数
    const MAX_CHANNEL = 12;
    const MIN_CHANNEL = 1;
    const ERROR_MSG = 'チャンネルは'.self::MIN_CHANNEL.'から'.self::MAX_CHANNEL.'の間で設定してください。<br>';

    //コンストラクタ
    public function __construct(int $channel = 8) {
        if (($channel >= self::MIN_CHANNEL) and ($channel <= self::MAX_CHANNEL)) {
            $this->channelNo = $channel;
        }
    }

    //メンバ関数
    private function dispChannel() {
        //クラス内でメンバ変数にアクセスするには、"this"を使う。
        print('現在のチャンネルは'.$this->channelNo);
    }

    public function setChannel(int $channel) {
        if (($channel >= self::MIN_CHANNEL) and ($channel <= self::MAX_CHANNEL)) {
            $this->channelNo = $channel;
        } else {
            print(self::ERROR_MSG);
        }
    }

    public function getChannel() : int {
        return $this->channelNo;
    }
}
?>

</body>
</html>