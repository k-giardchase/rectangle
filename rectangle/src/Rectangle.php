<?php

    class Rectangle
    {
        private $length;
        private $width;

        function __construct($length, $width)
        {
            $this->length = $length;
            $this->width = $width;
        }

        function isSquare()
        {
            if($this->length == $this->width) {
                return true;
            } else {
                return false;
            }
        }

        function getArea()
        {
            return $this->length * $this->width;
        }

        function setLength($new_length)
        {
            $this->length = (float) $new_length;
        }

        function getLength()
        {
            return $this->length;
        }

        function setWidth($new_width)
        {
            $this->length = (float) $new_width;
        }

        function getWidth()
        {
            return $this->width;
        }

    }

    $my_rectangle = new Rectangle();
    $my_rectangle->length = $_GET["length"];
    $my_rectangle->width = $_GET["width"];

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Make a rectangle!</title>
    </head>
    <body>
        <div class="container">
            <?php

                if ($my_rectangle->isSquare()) {
                    echo "<h1>Congratulations! You made a square!</h1>";
                } else {
                    echo "<h1>Sorry! This isn't a square.</h1>";
                }

            ?>
        </div>
    </body>
</html>
