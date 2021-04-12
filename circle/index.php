<?php
    class Circle
    {
        private $radius;
        private $pi = 3.14159;

        public function __construct() {
            $this->radius = 0.0;
            $a = func_get_args();
            $b = func_num_args();
            if (method_exists($this, $function = '__construct'.$b)) {
                call_user_func_array(array($this, $function), $a);
            }
        }
        public function __construct1($radius) {
            $this->radius = $radius;
        }
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function getArea()
        {
            return $this->pi*$this->radius*$this->radius;
        }
        public function getDiameter()
        {
            return $this->radius*2;
        }
        public function getCircumference()
        {
            return 2*$this->pi*$this->radius;
        }
    }
    $ling1 = new Circle();
    $ling2 = new Circle(12);
    if(isset($_POST['r'])){
        $ling1->setRadius($_POST['r']);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hitung Lingkaran OOP</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm bg-info navbar-dark">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="index.php" class="navbar-brand">Dashboard</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>Hitung Lingkaran</h1>
                <p>menghitung lingkaran dengan prinsip OOP sederhana</p>
                <form class="form-inline" action="" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" id="radius" placeholder="masukan radius (cm)" name="r" required>                        
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container col-6">
            <div class="card">
                <div class="card-header bg-info text-white text-center">
                    <b>Report Circle</b>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <h5>Radius :</h5>
                        <li><?php echo $ling1->getRadius().' cm'; ?></li>
                    </ul>
                    <ul class="list-unstyled">
                        <h5>Diameter :</h5>
                        <li><?php echo $ling1->getDiameter().' cm'; ?></li>
                    </ul>
                    <ul class="list-unstyled">
                        <h5>Keliling :</h5>
                        <li><?php echo $ling1->getCircumference().' cm<sup>2</sup>'; ?></li>
                    </ul>
                    <ul class="list-unstyled">
                        <h5>Luas :</h5>
                        <li><?php echo $ling1->getArea().' cm<sup>3</sup>'; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        </br>
        <footer class="container-fluid bg-info">
            <div class="row p-4">
                <div class="col-md-12 p-4">
                    <p class="text-light text-center">&copy; 2021 Ahmad Fikri Husaini</p>
                </div>
            </div>
        </footer>
    </body>
</html>