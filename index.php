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
	<link rel="stylesheet" type="text/css" href="bhajanList.css">    
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
    
    <div class="aboutUs">
    <section>
        <div class="circle circle1">
            <img src="logo.png">
        </div>
        <div class="circle circle2">
            <img src="va.png">
        </div>
        <div>
            <center><h2>
                | जय माता दी | &nbsp;&nbsp;&nbsp;&nbsp; | जय सिया राम | 
            </h2></center>
            <p>सर्वप्रथम "भजनो की किताब" में आपका स्वागत है | मै हूँ <i>विभा अग्रवाल</i>, इस वेबसाइट की सम्पादक | जैसा कि वेबसाइट के नाम से ही विदित हो रहा है कि हम अपने सब भजनों को "भजनो की किताब" रुपी माला में पिरोकर आपके समक्ष प्रस्तुत कर रहे हैं | हमारी इस किताब में आपको भजन के अतिरिक्त <u>बन्ना बन्नी गीत, बधाई गीत, त्यौहार गीत, सामाजिक गीत आदि</u> भी सुनने को मिलेंगे | हमारा उद्देश्य सभी भक्तों और भजन प्रेमियों, भजन गायक और अन्य कलाकार मित्रों तक भगवान के भजनों व गीतों को पहुँचाना है | 

हिन्दू सनातन धर्म में भजन का अत्यंत महत्व है | भजन को भगवान का स्मरण करने का बहुत ही उत्तम और सरल साधन माना गया है | प्रभु के भजन को किसी भी समय सच्ची श्रद्धा के साथ भगवान के समीप बैठकर अथवा कहीं भी गाया जा सकता है | यदि हम महसूस करें तो ईश्वर तो हमारे हृदय में भी विराजमान हैं | तुलसी दास जी ने लिखा है कि जो साधक भगवान का विश्वास पाने का भजन करता है प्रभु अपनी असीम कृपा से उसे अपना विश्वास प्रदान करके उसके जीवन को सफल और सुखमय बना देते है |<br> <br><br></p>

<center><div class="vishesh">ऊपर दिए गए नेविगेशन बार (navigation bar) के माध्यम से आप हमारे भजनों व गीतों को वर्ग (category) के अनुसार भी देख सकते है | "भजनो की किताब" में आपको कुछ <u>स्वरचित भजन व गीत</u> भी सुनने को मिलेंगे जिनका copyright हमारे पास सुरक्षित है | हमने भजनों व गीतों के बोल के साथ साथ उनका वीडियो भी पोस्ट किया है | कुछ भजन व गीत फिल्मी गीतों पर आधारित है जिसकी तर्ज़ को हमने भजन व गीत के साथ ही प्रत्येक पोस्ट के शीर्ष पे दर्शाया है | </div></center>
        </div>
    </section>
    </div>

<br><br>
    <center>
    
    <div class="heading">हमारे कुछ प्रसिद्ध भजन व गीत:</div>
    <div class="main">
<?php

    $tg = "specialsong";
    $query = "select * from matabhajan where tags like '%$tg%'
    union select * from krishnabhajan where tags like '%$tg%'
    union select * from shivbhajan where tags like '%$tg%'
    union select * from ganeshbhajan where tags like '%$tg%'
    union select * from hanumanbhajan where tags like '%$tg%'
    union select * from langurbhajan where tags like '%$tg%'
    union select * from shanibhajan where tags like '%$tg%'
    union select * from saibhajan where tags like '%$tg%'
    union select * from lokgeet where tags like '%$tg%'
    union select * from badhaigeet where tags like '%$tg%'
    union select * from shadigeet where tags like '%$tg%'
    union select * from karvachauthgeet where tags like '%$tg%'
    union select * from diwaligeet where tags like '%$tg%'
    union select * from holigeet where tags like '%$tg%'
    union select * from visheshgeet where tags like '%$tg%'
    ";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    while($row = mysqli_fetch_array($data)) {
        $var_title = $row['title2'];
        echo '<div class="card">
			<a href="'.$row['page'].'?var='.$var_title.'">
			<div id="image">
				<img src="data:image/jpeg;base64,'.base64_encode($row['img']).'">
				<div class="triangle"></div>
			</div>
			</a>
    			<div class="title">';
    			if($row['swarachit']) {
    			    if($row['swarachit']=='geet')
    			        echo '<h1>(स्वरचित गीत)</h1>';
    			    else 
    			        echo '<h1>(स्वरचित भजन)</h1>';
    			}
    				echo '<h1>'.$row["title"].'</h1>
				<p>'.$row["des"].'</p>
			</div>
			<a href="'.$row['page'].'?var='.$var_title.'"><button>Play...</button></a>
		</div>';        
    }
?>
    </div>
    </center>

<div id="includeFooter"></div>

  </body>
</html>
