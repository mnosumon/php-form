<?php 
    class crudApplication {
        private $connections;

        public function __construct() {
            $dbHost = 'localhost';
            $dbUser = 'root'; 
            $dbPassword = '';
            $dbName = 'product';

            $this->connections = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
            if (!$this->connections) {
                die('Connection error');
            }
        }
        public function writeData($data) {
            $Name = $data['name'];
            $Email = $data['email'];
            $Roll = $data['roll'];
            $hhhh = $_FILES['image'];
            print_r($hhhh);
            $ImgName = $_FILES['image']['name'];
            $ImgTmp = $_FILES['image']['tmp_name'];
            
            
            $query = "INSERT INTO product_details (Name, Email, Roll, Image)
            VALUES
            ('$Name', '$Email', '$Roll', '$ImgName')";

            if (mysqli_query($this->connections,$query)) {
                return "data add done";
                move_uploaded_file($ImgTmp,"upload/".$ImgName);
            }
        }

    }
?>


