<?php
include('server.php'); 
session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php'); 
        exit;
    }


    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM users WHERE id = $user_id";
    $userResult = $conn->query($sql);

    if ($userResult->num_rows > 0) {
        $userRow = $userResult->fetch_assoc();
        $username = $userRow['username'];
    }

    $sql = "SELECT * FROM posts WHERE user_id = $user_id";
    $result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>

    <link rel="stylesheet" href="pro.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="box">
    <div class="logo">
        <h2><i class="fa-solid fa-user"></i></h2>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index1.php">WEBBORD</a></li>
            <li><a href="homepage.php">HOMEPAGE</a></li>
            <li><a href="logout.php" id="logoutBtn">LOGOUT</a></li>
        </ul>
    </div>
    </div>

    <div class="main-content">
        <header>
            <p>Username:<?= isset($username) ? $username : 'N/A' ?></p>
            <a>UserID:<?= $user_id ?></a>
        </header>
        
        <main>
            <div class="profile">
                <h2>รายการกระทู้ของคุณ</h2>
           
                <?php while ($row = $result->fetch_assoc()): ?>
                    
                    <p><?= $row['content'] ?></p>
                    <div class="hg">
                        <a href="edit_post.php?id=<?= $row['id'] ?>" class="edit"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="delete_post.php?post_id=<?= $row['id'] ?>" class="delete"><i class="fa-solid fa-trash-can"></i></a> <!-- เพิ่มปุ่มลบ -->
                    </div>
                <?php endwhile; ?>
            </div>
            <a href="create_post.php" class="add-post-link"><i class="fa-solid fa-plus"></i></a>
        </main>
    </div>
</body>
</html>

