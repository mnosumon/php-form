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
            $ImgName = $_FILES['image']['name'];
            $ImgTmp = $_FILES['image']['tmp_name'];
            
            
            $query = "INSERT INTO product_details (Name, Email, Image)
            VALUES
            ('$Name', '$Email', '$ImgName')";

            if (mysqli_query($this->connections,$query)) {
                move_uploaded_file($ImgTmp,"upload/".$ImgName);
                return "data add done";
            }
        }

        public function readData() {
            $query = "SELECT * FROM product_details";
            if (mysqli_query($this->connections, $query)) {
              $results = mysqli_query($this->connections, $query);
              return $results;
            }
        }

        public function readDataById($id) {
            $query = "SELECT * FROM product_details WHERE ID = $id";
            if (mysqli_query($this->connections, $query)) {
              $results = mysqli_query($this->connections, $query);
              $fetchDataReadId = mysqli_fetch_assoc($results);
              return $fetchDataReadId;
            }
        }
        
        public function updateData($data) {
            $updateName = $data['updateName'];
            $updateEmail = $data['updateEmail'];
            $updateID = $data['updateID'];
            $updateImage = $_FILES['updateImage']['name'];
            $updateTmp = $_FILES['updateImage']['tmp_name'];

            $query = "UPDATE product_details SET Name='$updateName', Email='$updateEmail', Image='$updateImage' WHERE ID = '$updateID'";
            if (mysqli_query($this->connections, $query)) {
                $returndata = mysqli_query($this->connections, $query);
                move_uploaded_file($updateTmp,'upload/'.$updateImage);
                return $returndata;
            }
        }
    }
?>


