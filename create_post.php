<?php

include('server.php'); 
session_start();

    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php'); 
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
        $title = $_POST['title'];
        $content = $_POST['content'];
        $user_id = $_SESSION['user_id'];


        $sql = "INSERT INTO posts (title, content, user_id) VALUES ('$title', '$content', $user_id)";

            if ($conn->query($sql) === TRUE) {
                header('Location: profile.php');
                exit;
            } else {
                echo 'Error: ' . $sql . '<br>' . $conn->error;
            }

        $conn->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>

    <link rel="stylesheet" href="create.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="box">
    <div class="logo">
        <h2>POST</h2>
</div>
    <div class="manu">
        <ul>
            <li><a href="index1.php">WEBBORD</a></li>
            <li><a href="homepage.php">HOMEPAGE</a></li>
            <li><a href="profile.php">PROFIEL</a></li>
            <li><a href="logout.php" id="logoutBtn">LOGOUT</a></li>
        </ul>
    </div>
    </div>


    <main>
        <form action="create_post_process.php" method="POST">
            <div class="form-group">
                <label for="title">หัวข้อ:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group1">
                <label for="content">เรื่อง:</label>
                <input type="text" id="content" name="content" required>
            </div>
            <div class="form-group2">
                <button  n type="submit"><i class="fa-regular fa-pen-to-square"></i></button>
            </div>
        </form>
    </main>
</body>
</html>

