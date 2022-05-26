<?php 
    include('connect.php'); 
    class Data {
        // them bai viet
        public function addnew($title, $author, $date, $Scontent, $Lcontent) {
            global $conn;
            $sql = "INSERT INTO `demo`(`title`, `author`, `date`, `shortContent`, `longContent`) VALUES ('$title', '$author', '$date', '$Scontent', '$Lcontent')";
            $query = mysqli_query($conn, $sql);
            return $query;
        }
    }
?>


