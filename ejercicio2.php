<html>
<head>
<title>POO</title>
</head>
<body>
<?php

        abstract class Shape {
            protected $width;
            protected $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        abstract public function area();
        }

        class Rectangle extends Shape {
            
        public function area() {
            return $this->width * $this->height;
        }
        }

        class Triangle extends Shape {
        public function area() {
            return 0.5 * $this->width * $this->height;
        }
        }

?>
</body>
</html>