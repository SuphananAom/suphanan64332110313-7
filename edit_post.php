<?php
include('server.php'); 

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); 
    exit;
}

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $post_id = $_POST['post_id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $user_id = $_SESSION['user_id'];


        $sql = "UPDATE posts SET title = '$title', content = '$content' WHERE id = $post_id AND user_id = $user_id";

            if ($conn->query($sql) === TRUE) {
                header('Location: profile.php');
                exit;
            } else {
                echo 'Error: ' . $sql . '<br>' . $conn->error;
            }

        $conn->close();
    } else {

        if (isset($_GET['id'])) {
            $post_id = $_GET['id'];
            $user_id = $_SESSION['user_id'];


            $sql = "SELECT * FROM posts WHERE id = $post_id AND user_id = $user_id";
            $result = $conn->query($sql);

                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $title = $row['title'];
                    $content = $row['content'];
                } else {
                    echo 'ไม่พบกระทู้ที่ต้องการแก้ไข';
                    exit;
                }

            $conn->close();
        } else {
            echo 'ไม่ระบุ ID ของกระทู้ที่ต้องการแก้ไข';
            exit;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>

    <link rel="stylesheet" href="edit.css">

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
        <form action="edit_post.php" method="POST">
            <input type="hidden" name="post_id" value="<?= $post_id ?>">
            <div class="form-group">
                <label for="title">หัวข้อ:</label>
                <input type="text" id="title" name="title" value="<?= $title ?>" required>
            </div>
            <div class="form-group1">
                <label for="content">เนื้อหา:</label>
                <textarea type="text" id="content" name="content" required><?= $content ?></textarea>
            </div>
            <div class="form-group2">
                <button type="submit"><i class="fa-regular fa-pen-to-square"></i></button>
            </div>
        </form>
    </main>
</body>
</html>
