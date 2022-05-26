<?php 
    include('connect.php'); 
    class Data {
        // them bai viet
        public function addnew($name, $sex, $address, $phone, $email) {
            global $conn;
            $sql = "INSERT INTO `demo2`(`name`, `sex`, `address`, `phone`, `email`) VALUES ('$name', '$sex', '$address', '$phone', '$email')";
            $query = mysqli_query($conn, $sql);
            return $query;
        }
    }
?>


