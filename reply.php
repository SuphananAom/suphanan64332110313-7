<?php
include('server.php'); 


    if (isset($_GET['post_id'])) {
        $post_id = $_GET['post_id'];

        $sql = "SELECT * FROM posts WHERE id = $post_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $post_title = $row['title'];
            $post_content = $row['content'];
            $post_user_id = $row['user_id'];
            $post_created_at = $row['created_at'];
        } else {
            echo "Topic not found";
            exit;
        }

        $sql = "SELECT * FROM replies WHERE post_id = $post_id";
        $result = $conn->query($sql);

        $replies = array();
        while ($row = $result->fetch_assoc()) {
            $replies[] = $row;
        }
    } else {
        echo "Thread ID not specified";
        exit;
    }

    $conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPLY</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="reply.css">
</head>
<body>
    <div class="box">
        <h2 class="logo">REPLY</h2>
        <div class="menu">
            <ul>
                <li> <a href="profile.php"><li>PROFILE</a>
                <li><a href="homepage.php">HOMEPAGE</a></li>
                <li><a href="index1.php">WEBBORD</a></li>
                <li><a href="logout.php" id="logoutBtn">LOGOUT</a></li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <main>
        <div class="post">
            <h2><?= $post_title ?></h2>
            <p><?= $post_content ?></p>
            <a>User_ID: <?= $post_user_id ?></a>
            <a>เวลา: <?= $post_created_at ?></a>
        </div>

        <ul class="replies">
            <?php foreach ($replies as $reply): ?>
                <li>
                    <div class="reply">
                        <?php if (isset($reply['reply_content'])): ?>
                            <p><?= $reply['reply_content'] ?></p>
                        <?php endif; ?>
                        <i class="fa-solid fa-user"></i><a>User_ID: <?= $reply['user_id'] ?></a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <form action="post_reply.php" method="POST">
            <input type="hidden" name="post_id" value="<?= $post_id ?>">
            <div class="form-group">
                <label for="reply_content">แสดงความคิดเห็น</label>
                <textarea id="reply_content" name="reply_content" required></textarea>
            </div>
            <div class="form-group1">
                <button type="submit"><i class="fa-solid fa-reply"></i></button>
            </div>
        </form>
        </main>
    </div>
    
    
</body>
</html>
