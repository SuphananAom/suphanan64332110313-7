<?php
include('server.php'); 
session_start(); 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $user_id = $_SESSION['user_id']; 

            $sql = "INSERT INTO posts (title, content, user_id) VALUES ('$title', '$content', '$user_id')";

        if ($conn->query($sql) === TRUE) {
            echo "ตั้งกระทู้สำเร็จ";
            header("Location: index1.php");
            exit;
        } else {
            echo "error: " . $sql . "<br>" . $conn->error;
        }
    }

$conn->close();
?>
