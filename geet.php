<?php
    include('conn.php');
    mysqli_set_charset($conn, 'utf8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Banna Banni Geet</title>
    
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
	    $(function(){
	      $("#includeNavBar").load("webHeader.html"); 
	      $("#includeFooter").load("web-footer.php"); 
            window.onorientationchange = function () {
                var orient = window.orientation;
                switch(orient) {
                    case 0:
                    case 90:
                    case -90: window.location.reload();
                    break;
                }
            };

	    });
	</script>

	<link rel="stylesheet" type="text/css" href="bhajanList.css">

</head>
<body>

	<div class="section">
		<div id="includeNavBar" style="position: absolute; width: 100%; z-index: 20;"></div>
		<div class="vide-container">
			<video id="videoclip" autoplay loop muted>
				<source id="mp4video" src="videos/bannabanni.mp4" type="video/mp4">
			</video>
			<form action="search" method="POST">
			<div class="search-box">
			    <input class="search-txt" type="text" name="search" autocomplete="off" placeholder="अपना मनपसंद भजन खोजें">
			    <input type="submit" value="खोजें" class="search-btn">
			</div>
			</form>
			<div class="god-name" style="bottom: 120px;">Banna Banni<br>Geet</div>
			<img class="god-image" src="videos/bannabanni.png">
		</div>
	</div>
    
    <center>
	<div class="main">

<?php

        $tag = "bannabannigeet";
        $query = "select * from shadigeet where tags like '%$tag%' order by views desc";
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
    			    echo '<h1>(स्वरचित गीत)</h1>';
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