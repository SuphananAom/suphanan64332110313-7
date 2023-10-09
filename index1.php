<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBBOARD</title>

    <link rel="stylesheet" href="index1.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="box">
        <div class="logo">
            <h2>WEBBOARD</h2>  
        </div>
    </div>
    <div class="ytr">
    <div class="main">
        <ul>
            <li><a href="login.php">LOGIN<i class="fa-solid fa-arrow-left"></i></a></li>
            <li><a href="homepage.php">HOMEPAGE<i class="fa-solid fa-house"></i></a></li>
            <li><a href="profile.php">PROFIEL<i class="fa-solid fa-user"></i></a></li>
            <li><a href="logout.php" id="logoutBtn">LOGOUT<i class="fa-solid fa-arrow-right"></i></a></li>
        </ul>
    </div>
    
    
    <main class="man">
        <?php
            include('server.php');
            $sql = "SELECT * FROM posts ";
            $result = $conn->query($sql);
            $totalPosts = $result->num_rows;

            echo "<div class='post-1'>";
                echo "<i class='fa-solid fa-pen'></i><p>โพสต์ทั้งหมด: " . $totalPosts . " โพสต์</p>";
            echo "</div>";

            $commentSql = "SELECT * FROM replies ";
            $commentResult = $conn->query($commentSql);
            $totalComments = $commentResult->num_rows;

            echo "<div class='post-2'>";
                echo "<i class='fa-solid fa-comment'></i><p>การตอบกลับทั้งหมด: " . $totalComments . " ความคิดเห็น</p>";
                echo"</div>";
                echo"<footer>";
                echo"<a href='create_post.php'><i class='fa-solid fa-plus'></i></a>";
            echo"</footer>";

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='post'>";
                        echo "<p>" . $row['title'] . "</p>";
                        echo "<button><a href='reply.php?post_id=" . $row['id'] . "'><i class='fa-solid fa-comments'></i></a></button>"; 
                    echo "</div>";
                }
            } else {
                echo "ไม่พบกระทู้";
            }

            $conn->close();
        ?>
    </main>
</div>


<div class="tail">  
    <h1>About Us</h1>
    <div class="hail1">
        <div class="hail2">
            <i class="fa-solid fa-envelope"></i>
        <h4>: suphanan.ou@rmuti.ac.th</h4>
        </div>
        <div class="hail3">
            <i class="fa-solid fa-envelope"></i>
        <h4>: suphanan.ou@rmuti.ac.th</h4>
        </div>
        <div class="hail4">
        <i class="fa-brands fa-facebook"></i>
        <h4>: I'mAom suphanan</h4>
        </div>
        <div class="hail5">
        <i class="fa-brands fa-line"></i>
        <h4>: I'mAom suphanan</h4>
        </div>
    </div>
</div>
    
</body>
</html>
