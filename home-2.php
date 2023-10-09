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
            <h1>โขนนั่งราว</h1>
            <p>
                โขนนั่งราว เป็นโขนโรงนอกเป็นโขนที่จัดแสดงบนโรง ไม่มีเตียงสำหรับตัวนายโรงนั่ง มีราวไม้กระบอกพาดตามส่วนยาวของโรง ตรงหน้าฉากออกมามีช่องทางให้ผู้แสดงเดินได้รอบราว 
                ตัวโรงมีหลังคา เมื่อตัวโขนแสดงบทของตนแล้วก็ไปประจำบนราวไม้กระบอก สมมติเป็นเตียงหรือที่นั่งประจำตำแหน่ง ลักษณะการนั่งจะนั่งตะแคงข้างมาหน้าเวที พับขาข้างหนึ่งไว้บนราว 
                อีกข้างหนึ่งเหยียบบนพื้น ผู้แสดงจะครอบหน้าหมดทั้งฝ่ายพลับพลา ( ฝ่ายพระราม ) และฝ่ายลงกา ( ฝ่ายทศกัณฐ์ )การแสดงโขนนั่งราวไม่มีบทขับร้อง มีแต่บทพากย์และบทเจรจา 
                ปี่พาทย์ก็บรรเลงแต่เพลงหน้าพาทย์ เพราะต้องบรรเลงเพลงหน้าพาทย์มากจึงใช้วงปี่พาทย์ 2 วง วงหนึ่งตั้งหัวโรง วงหนึ่งตั้งท้ายโรง หรือตั้งทางซ้ายและทางขวาของโรงจึงเรียกวงปี่พาทย์ 2 วงนี้ว่า วงหัว วงท้าย หรือวงซ้าย วงขวา 
                จากจดหมายเหตุลาลูแบร์ กล่าวถึงการละเล่นบนเวทีในสมัยสมเด็จพระนารายณ์มหาราช มีอยู่ 3 อย่าง คือ โขน ละคร และระบำ ทำให้สันนิษฐานได้ว่าโขนในสมัยนั้นดีมีการปลูกโรงให้เล่นแล้ว และน่าจะเป็นลักษณะของโขนโรงนอกหรือโขนนั่งราวนี้เอง
            </p>
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