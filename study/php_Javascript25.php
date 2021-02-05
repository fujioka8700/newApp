<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php


    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
// 関数オブジェクトを変数に入れてから
/*function Hello(word) {
    this.name = word;
    this.func = function() {
        console.log(this.name);
    }
}
Hello.prototype.func = function() {
    console.log("プロトタイプです");
}
Hello.prototype.name = "なまえ";
let aisatsu = new Hello("hello world");
// console.log(hello.constructor.toString()); // -> "function Hello() {}"
// console.log(hello.constructor);
aisatsu.func();*/
function Animal() {
    this.cry = "meow";
}
Animal.prototype.shout = function() {
    console.log(this.cry);
}

function Bird() {
    this.cry = "sing";
}

// Bird.prototype = new Animal(); // 継承
Bird.prototype = Object.create(Animal.prototype) // 継承(推奨)

var niwatori = new Bird();
niwatori.shout();  // -> "sing"
</script>

</html>