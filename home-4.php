<?php 
      session_start();
      include('server.php'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types of Khon</title>

    <link rel="stylesheet" href="style5.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container">
        <div class="container-1">
        <div class="name">
            <li><a href="#">KHON</a></li>
            </div> 
            <div class="menu">    
                <button class ="nb">
                        <li><a href="homepage.php">Home</a></li>
                </button>
                <button class ="nb">
                    <li><a href="record.php">History of Khon</a></li>    
                </button>        
                <div class="dropdown">
                <button class="dropbtn">Types of Khon</button>
                        <div class="dropdown-content">
                            <a href="home-1.php">โขนกลางแปลง</a>
                            <a href="home-2.php">ขนโรงนอก</a>
                            <a href="home-3.php">โขนหน้าจอ</a>
                            <a href="home-4.php">โขนโรงใน</a>
                            <a href="home-5.php">โขนฉาก</a>
                            
                        </div>
                </div>
                <button class ="nb">
                    <li><a href="home-6.php">Untraditional Khon</a> </li>
                </button>
                <button class ="nb">
                    <li><a href="index1.php">Topic</a></li>
                </button>
            </div> 
        </div>
        <div class="khon-1">
            <h1>โขนโรงใน</h1>
            <p>
                โขนโรงในเป็นโขนที่นำศิลปะการแสดงของละครใน เข้ามาผสมผสานระหว่างโขนกับละครใน ในรัชสมัยพระบาทสมเด็จพระพุทธยอดฟ้าจุฬาโลกมหาราช รัชกาลที่ 1 และพระบาทสมเด็จพระพุทธเลิศหล้านภาลัย 
                รัชกาลที่ 2 รวมทั้งมีราชกวีภายในราชสำนัก ช่วยปรับปรุงขัดเกลาและประพันธ์บทพากย์ บทเจรจาให้มีความคล้องจอง ไพเราะสละสลวยมากยิ่งขึ้น โดยนำท่ารำท่าเต้น และบทพากย์เจรจาตามแบบโขนมาผสมกับการขับร้อง 
                เป็นการปรับปรุงวิวัฒนาการของโขน ในการแสดงโขนโรงใน ผู้แสดงเป็นตัวพระ ตัวนางและเทวดา เริ่มที่จะไม่ต้องสวมหัวโขนในการแสดง มีการพากย์และเจรจาตามแบบฉบับของการแสดงโขน 
                นำเพลงขับร้องประกอบอากัปกิริยาอาการของตัวละคร และเปลี่ยนมาแสดงภายในโรงแบบละครในจึงเรียกว่าโขนโรงใน มีปี่พาทย์บรรเลงสองวง ปัจจุบันโขนที่กรมศิลปากรนำออกแสดงนั้น ใช้ศิลปะการแสดงแบบโขนโรงในซึ่งเป็นการแสดงระหว่างโขนกลางแปลงและโขนหน้าจอ
            </p>
        </div>
        <div class="imgs">
            <img src="https://salachalermkrung.com/file_upload/news/photo/20190212062132.jpg">
            <img src="https://khonsite.files.wordpress.com/2016/04/e0b982e0b882e0b899e0b889e0b8b2e0b881.jpg">
            <img src="https://www.matichon.co.th/wp-content/uploads/2019/11/%E0%B8%AB%E0%B8%99%E0%B8%B8%E0%B8%A1%E0%B8%B2%E0%B8%99%E0%B9%80%E0%B8%9C%E0%B8%B2%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B8%A5%E0%B8%87%E0%B8%81%E0%B8%B2.jpg">
        </div>  
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