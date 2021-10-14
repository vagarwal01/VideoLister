<?php
    include('conn.php');
    mysqli_set_charset($conn, 'utf8');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bhajno Ki Kitab</title>
    <link rel="stylesheet" href="indexS.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

	<script type="text/javascript">
	    $(function(){
	      $("#includeNavBar").load("webHeader.html"); 
	      $("#includeFooter").load("web-footer.php"); 
	    });
    </script>
    
    <style>
        .head {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .btn-vichar {
            padding: 1% 3%;
            font-size: 120%;
            font-weight: bold;
            border-radius: 30px;
            border: 2px solid black;
            color: white;
            background: linear-gradient(90deg,#ffc300,#ff0000,#ff0000,#ffc300);
        }
        .btn-vichar:hover{
            border: 2px solid black;
            color: black;
            box-shadow: 3px 3px 7px red;
            background: linear-gradient(90deg,#ff0000,#ffff00,#ffff00,#ff0000);
            
        }
        .sujhavCont {
            width: 70%;
            padding: 1%;
            background: rgba(255,255,255, 0.3);
            border-radius: 5%;
        }
        .cr-main {
            border: 2px solid black;
            margin: 1%;
        }
        .commMain {
            text-align: left;
        }
        .comm {
            display: flex;
            align-items: center;
            padding: 1%;
        }
        .pic {
            border-radius: 50%;
            width: 6%;
            height: 6%;
            border: 2px solid black;
            background-color: red;
        }
        .msg {
            text-align: left;
            margin-left: 2%;
        }
        .msg1 {
            font-size: 130%; 
            font-weight: bold;
        }
        .msg2 {
            font-size: 100%; 
        }
        .reply {
            display: flex;
            margin-left: 10%;
            align-items: center;
            padding: 1%;
        }
    </style>

  </head>

  <body>


    <div class="section2">
		<div id="includeNavBar" style="position: absolute; width: 100%; z-index: 12;"></div>
        <img class="header-image" src="indexBG.png" style="width:100%">
        <div class="rotator">
            <center>
            <h3 id="text">
                हमारी प्रस्तुति: 
                <span style="display: initial;">भजन</span>
                <span>बन्ना - बन्नी गीत</span>
                <span>बधाई गीत</span>
                <span>त्योहार गीत</span>
                <span>सामाजिक गीत</span>
                <span>अन्य गीत</span>
            </h3>
            </center>
        </div>
		<form action="search" method="POST">
		<div class="search-box">
		    <input class="search-txt" type="text" name="search" autocomplete="off" placeholder="अपना मनपसंद भजन खोजें ">
		    <input type="submit" value="खोजें" class="search-btn">
		</div>
		</form>
        <script type="text/javascript">
            var text = document.getElementById('text');
            var word = text.getElementsByTagName('span');
            var i=0;
            function rotator(){
                word[i].style.display = 'none';
                i=(i+1)% word.length;
                word[i].style.display ='initial';
            }
            setInterval(rotator,1200);
        </script>
    </div>

<?php
    $q1 = "select * from matabhajan
    union select * from krishnabhajan
    union select * from shivbhajan
    union select * from ganeshbhajan
    union select * from hanumanbhajan
    union select * from langurbhajan
    union select * from shanibhajan
    union select * from saibhajan
    union select * from lokgeet
    union select * from badhaigeet
    union select * from shadigeet
    union select * from karvachauthgeet
    union select * from diwaligeet
    union select * from holigeet
    union select * from visheshgeet
    ";
    $d1 = mysqli_query($conn, $q1);
    $total = mysqli_num_rows($d1);

    $q = "स्वरचित";
    $q2 = "select * from matabhajan where tarz like '%$q%'
    union select * from krishnabhajan where tarz like '%$q%'
    union select * from shivbhajan where tarz like '%$q%'
    union select * from ganeshbhajan where tarz like '%$q%'
    union select * from hanumanbhajan where tarz like '%$q%'
    union select * from langurbhajan where tarz like '%$q%'
    union select * from shanibhajan where tarz like '%$q%'
    union select * from saibhajan where tarz like '%$q%'
    union select * from lokgeet where tarz like '%$q%'
    union select * from badhaigeet where tarz like '%$q%'
    union select * from shadigeet where tarz like '%$q%'
    union select * from karvachauthgeet where tarz like '%$q%'
    union select * from diwaligeet where tarz like '%$q%'
    union select * from holigeet where tarz like '%$q%'
    union select * from visheshgeet where tarz like '%$q%'
    ";
    $d2 = mysqli_query($conn, $q2);
    $swarachit = mysqli_num_rows($d2);
    
    $qq = "bhajan";
    $q3 = "select * from matabhajan where tags like '%$qq%'
    union select * from krishnabhajan where tags like '%$qq%'
    union select * from shivbhajan where tags like '%$qq%'
    union select * from ganeshbhajan where tags like '%$qq%'
    union select * from hanumanbhajan where tags like '%$qq%'
    union select * from langurbhajan where tags like '%$qq%'
    union select * from shanibhajan where tags like '%$qq%'
    union select * from saibhajan where tags like '%$qq%'
    union select * from lokgeet where tags like '%$qq%'
    union select * from badhaigeet where tags like '%$qq%'
    union select * from shadigeet where tags like '%$qq%'
    union select * from karvachauthgeet where tags like '%$qq%'
    union select * from diwaligeet where tags like '%$qq%'
    union select * from holigeet where tags like '%$qq%'
    union select * from visheshgeet where tags like '%$qq%'
    ";
    $d3 = mysqli_query($conn, $q3);
    $bhajan = mysqli_num_rows($d3);

    $qqq = "geet";
    $q4 = "select * from matabhajan where tags like '%$qqq%'
    union select * from krishnabhajan where tags like '%$qqq%'
    union select * from shivbhajan where tags like '%$qqq%'
    union select * from ganeshbhajan where tags like '%$qqq%'
    union select * from hanumanbhajan where tags like '%$qqq%'
    union select * from langurbhajan where tags like '%$qqq%'
    union select * from shanibhajan where tags like '%$qqq%'
    union select * from saibhajan where tags like '%$qqq%'
    union select * from lokgeet where tags like '%$qqq%'
    union select * from badhaigeet where tags like '%$qqq%'
    union select * from shadigeet where tags like '%$qqq%'
    union select * from karvachauthgeet where tags like '%$qqq%'
    union select * from diwaligeet where tags like '%$qqq%'
    union select * from holigeet where tags like '%$qqq%'
    union select * from visheshgeet where tags like '%$qqq%'
    ";
    $d4 = mysqli_query($conn, $q4);
    $geet = mysqli_num_rows($d4);
    
    
?>

    <br>
    

    <div class="youtube2">
        <div class="text">
            हमारे YouTube Channel पर जाने के लिए यहाँ click करें <span style="color: blue;"><i class="fas fa-hand-point-right"></i> <i class="fas fa-hand-point-right"></i></span>
        </div>
        <a href="https://www.youtube.com/channel/UCjr1t8zx3nZrkDNZJRNH_WQ" target="_blank" style="color: transparent;">
            <div class="channel">
                
                <img src="youtube_logo.png">
                <i class="fas fa-caret-right"></i>
                <span class="name">Vibha Ki<br>Kitab</span>
            </div>
        </a>    
    </div>
    
    

    <div class="counter">
        <div class="cont">
        	<img src="1.png">
        	<div class="pos"><?php echo $total;?></div>
        </div>
        <div class="cont">
        	<img src="2.png">
        	<div class="pos"><?php echo $swarachit;?></div>
        </div>
        <div class="cont">
        	<img src="3.png">
        	<div class="pos"><?php echo $bhajan;?></div>
        </div>
        <div class="cont">
        	<img src="4.png">
        	<div class="pos"><?php echo $geet;?></div>
        </div>
    </div>
    
<br><br>

    <center>
        <div class="sujhavCont">
            <div class="head">
                <h1>Comments</h1>
                <a id="vicharBtn" class="btn-vichar" href="#">सुझाव दें</a>
            </div>
            <div class="commMain">
                <?php
                    $q = "select * from sujhav order by date desc";
                    $d = mysqli_query($conn, $q);
                    while($row = mysqli_fetch_array($d)) {
                        echo '
                <div class="cr-main">
                    <div class="comm">
                        <img src="comments.png" class="pic">
                        <div class="msg">
                            <span class="msg1">'.$row['name'].'</span><br>
                            <span class="msg2">'.$row['message'].'</span>
                        </div>
                    </div>
                    <hr>
                    <div class="reply">
                        <img src="va.png" class="pic">
                        <div class="msg">
                            <span class="msg1">Vibha Agarwal</span><br>
                            <span class="msg2">Thankyou</span>
                        </div>
                    </div>
                </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </center>

<br><br>

<div id="includeFooter"></div>

  </body>
</html>
