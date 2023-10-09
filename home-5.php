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
            <h1>โขนฉาก</h1>
            <p>
            โขนฉากเป็นการแสดงโขนที่ถือกำเนิดขึ้นครั้งแรก ในสมัยของพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว รัชกาลที่ 5 โปรดให้มีการจัดฉากในการแสดงแบบละครดึกดำบรรพ์ประกอบตามท้องเรื่อง 
            แบ่งเป็นฉากเป็นองก์ เข้ากับเหตุการณ์และสถานที่ จึงเรียกว่าโขนฉาก ปัจจุบันการแสดงโขนของกรมศิลปากร นอกจากจะแสดงโขนโรงในแล้ว ยังจัดแสดงโขนฉากควบคู่กันอีกด้วยเช่น ชุดปราบกากนาสูร 
            ชุดมัยราพณ์สะกดทัพ ชุดนางลอย ชุดนาคบาศ ชุดพรหมาสตร์ ชุดศึกวิรุญจำบัง ชุดทำลายพิธีหุงน้ำทิพย์ ชุดสีดาลุยไฟและปราบบรรลัยกัลป์ ชุดหนุมานอาสา ชุดพระรามเดินดงและชุดพระรามครองเมือง 
            ซึ่งในการแสดงโขนทุกประเภท มีวิวัฒนาการมายาวนานตั้งแต่สมัยอยุธยาจนถึงปัจจุบัน รูปแบบและวิธีการแสดงของโขนได้มีการปรับเปลี่ยนไปตามยุคตามสมัย แต่คงรูปแบบและเอกลักษณ์เฉพาะของการแสดงเอาไว้
            </p>
        </div>
        <div class="imgs">
            <img src="https://s.isanook.com/ca/0/ud/278/1391797/istock-903659150.jpg?ip/resize/w728/q80/jpg">
            <img src="https://f.ptcdn.info/751/012/000/1385743079-p6412-o.jpg">
            <img src="https://www.prachachat.net/wp-content/uploads/2018/12/47682731_2095227534104348_7679293201877827584_n.jpg">
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