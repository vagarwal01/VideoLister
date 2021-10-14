<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Lyrics</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script><script type="text/javascript">
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
	<link href="lyrics.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
    <div class="section">
        <div id="includeNavBar" style="position: absolute; width: 100%; z-index: 12;"></div>
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

<?php

    include('conn.php');
    $var_title = $_GET['var'];
    mysqli_set_charset($conn, 'utf8');
    $query = "select * from shadigeet where title2 = '$var_title'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
?>


<center>
    
<?php
    while($row = mysqli_fetch_array($data)) {
        echo '<div class="title">'.$row["title"].'</div>';

        if(strlen($row["tarz"])>1) {
            echo '<div class="tarz">'.$row["tarz"].'</div>';
        }

        echo '<table style="">
        <tr>
            <td valign="top" class="lyric1">'.$row["lyric1"].'</td>
            <td valign="top" class="lyric2">'.$row["lyric2"].'</td>
        </tr>
    </table><br><br>';
    
        echo '<div class="iframeContainer"><div class="iframeWrapper"><iframe src="'.$row["link"].'"></iframe></div></div>';
    }
?>
</center></div>

<br><br>

    <div id="includeFooter"></div>

</body>
</html>