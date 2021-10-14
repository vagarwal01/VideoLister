<?php
    include('conn.php');
    mysqli_set_charset($conn, 'utf8');

    if (isset($_POST['share'])) {
        $n = $_POST['n'];
        $title = $_POST['title'];
        $tarz = $_POST['tarz'];
        $lyrics = $_POST['lyrics'];
        $query = "INSERT INTO shares(name, title, tarz, lyrics) VALUES('".$n."', '".$title."', '".$tarz."', '".$lyrics."')";
        $data = mysqli_query($conn, $query);

        header('Location: https://bhajnokikitab.com/');
    }
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
	<script type="text/javascript">
	    $(function(){
	      $("#includeNavBar").load("webHeader.html"); 
	      $("#includeFooter").load("web-footer.php"); 
	    });
    </script>
  </head>

  <body>


    <div class="section2">
		<div id="includeNavBar" style="position: absolute; width: 100%; z-index: 20;"></div>
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


    <center>
    
    <div class="main">
<?php

    if(isset($_POST['search'])) {
        $q = $_POST['search'];
        if(strlen($q)<=2) {
            echo '<div class="result">Invalid Search</div>';
            echo '<div class="blank"></div>';
        }
        else {
            $qt = explode(" ", $q);
            $q1 = "select * from matabhajan where tags like '%$q%'
            union select * from krishnabhajan where tags like '%$q%'
            union select * from shivbhajan where tags like '%$q%'
            union select * from ganeshbhajan where tags like '%$q%'
            union select * from hanumanbhajan where tags like '%$q%'
            union select * from langurbhajan where tags like '%$q%'
            union select * from shanibhajan where tags like '%$q%'
            union select * from saibhajan where tags like '%$q%'
            union select * from lokgeet where tags like '%$q%'
            union select * from badhaigeet where tags like '%$q%'
            union select * from shadigeet where tags like '%$q%'
            union select * from kartikbhajan where tags like '%$q%'
            union select * from karvachauthgeet where tags like '%$q%'
            union select * from diwaligeet where tags like '%$q%'
            union select * from holigeet where tags like '%$q%'
            union select * from visheshgeet where tags like '%$q%'
            ";
            for($i=0;$i<count($qt);$i=$i+1) {
                $x = $qt[$i];
                if($x=="") {
                    break;
                }
                $q1 = $q1."union select * from matabhajan where tags like '%$x%'
                union select * from krishnabhajan where tags like '%$x%'
                union select * from shivbhajan where tags like '%$x%'
                union select * from ganeshbhajan where tags like '%$x%'
                union select * from hanumanbhajan where tags like '%$x%'
                union select * from langurbhajan where tags like '%$x%'
                union select * from shanibhajan where tags like '%$x%'
                union select * from saibhajan where tags like '%$x%'
                union select * from lokgeet where tags like '%$x%'
                union select * from badhaigeet where tags like '%$x%'
                union select * from shadigeet where tags like '%$x%'
                union select * from kartikbhajan where tags like '%$x%'
                union select * from karvachauthgeet where tags like '%$x%'
                union select * from diwaligeet where tags like '%$x%'
                union select * from holigeet where tags like '%$x%'
                union select * from visheshgeet where tags like '%$x%'
                ";
            }
            $d1 = mysqli_query($conn, $q1);
            $t1 = mysqli_num_rows($d1);
            if($t1 == 0) {
            echo '<br><br><br><div class="result">क्षमा कीजिए, यह भजन/गीत हमारी वेबसाइट में नहीं है | <br><br><br>
            अगर आपको इस भजन/गीत के पूरे बोल याद हैं और आप चाहते है कि हम ये भजन/गीत आपको प्रस्तुत करें, तो कृपया नीचे दिए गए form में अपने भजन/गीत के बोल हमारे साथ शेयर करें ।</div><br>';
            echo '  <!-- Modal content -->
              <div class="modal-content">
                <div class="modal-header">
                  <h2>भजन</h2>
                </div>
                <div class="modal-body">
                  <form method="POST" action="search">
                      <br><input class="field" type="text" required autocomplete="off" placeholder="Name (नाम)" name="n"><br>
                      <input class="field" type="text" required autocomplete="off" placeholder="Bhajan/Geet Title (भजन/गीत का नाम)" name="title"><br>
                      <input class="field" type="text" autocomplete="off" placeholder="Bhajan/Geet Tarz (भजन/गीत का तर्ज़)" name="tarz"><br>
                      <textarea class="field" required placeholder="Bhajan/Geet Lyrics (भजन के बोल)" name="lyrics" rows="5"></textarea>
                      <center><input class="submit" type="submit" name="share" value="SUBMIT" onclick="alert(\'भजन/गीत शेयर करने के लिए धन्यवाद !\');"></center><br>
                  </form>          
                </div>
              </div><br><br><br>
            ';
            } 
            else {
                echo '<div class="result">\''.$q.'\' के लिए '.$t1.' परिणाम</div>';
            }
            while($row = mysqli_fetch_array($d1)) {
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
        			    echo '<h1>(स्वरचित गीत)</h1>';
        			}
        				echo '<h1>'.$row["title"].'</h1>
        				<p>'.$row["des"].'</p>
        			</div>
        			<a href="'.$row['page'].'?var='.$var_title.'"><button>Play...</button></a>
        		</div>';        
            }
        }
    }
?>
    </div>
    </center>
    

<div id="includeFooter"></div>

  </body>
</html>
