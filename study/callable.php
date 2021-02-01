<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    class Greeting
    {
        public function greeting(callable $method): bool
        {
            if ($method) {
                print $method();
                return true;
            }
            return false;
        }

        static public function hello(): void
        {
            print 'HelloWorld';
        }
    }

    $gr = new Greeting();
    $gr->greeting('greeting::hello');

    ?>

</body>

</html>