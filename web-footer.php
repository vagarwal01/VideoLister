<?php
    include('conn.php');
    mysqli_set_charset($conn, 'utf8');

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $message = $_POST['message'];
        $query = "INSERT INTO sujhav(name, message, date) VALUES('".$name."', '".$message."', CURDATE())";
        $data = mysqli_query($conn, $query);
        header('Location: https://bhajnokikitab.com/');
    }   
?>

<!DOCTYPE html>
<html>
<head>
	<title>footer</title>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<style type="text/css">
		body {
			padding: 0px;
			margin: 0px;
		}
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
            text-decoration: none;
            transition: 0.5s;
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


		.footer {
		    z-index: 20;
			background-image: url('footerbg.jpg');
			color: #fff;
			height: 320px;
			background-size: cover;
			position: relative;
			overflow: hidden;
		}
		.footer .f-content {
			border-top: 1px solid yellow;
			height: 280px;
			width: 100%;
			display: flex;
			flex-direction: row;
		}
		.about-us {
			width: 80%;
			height: 85%;
			align-items: center;
			justify-content: center;
			align-items: center;
		}
		.about-us .au-content {
			display: flex;
            position: relative;
			width: 100%;
			height: 100%;
			align-items: center;
			justify-content: center;
		}
		.about-us .au-content .me {
		    display: flex;
		}
		.about-us .au-content h1 {
		    font-size: 25px;
		}
		.about-us .au-content h2 {
		    font-size: 17px;
		}
		.about-us .au-content .created {
		    margin-right: 2%;
		    padding-top: 30px;
	        text-align: center;
		    
        }
        .social {
		    margin-top: 0px;
            display: block;
			width: 20%;
			z-index: 2;
		}
		.footer .copyright {
			text-align: center;
			position: absolute;
			height: 22px;
			padding-bottom: 5px;
			font-size: 20px;
			font-weight: bold;
			background: #FF5733;
			width: 100%;
			bottom: 0px;
			left: 0px;
		}
		
		
		ul.socialIcons {
		  padding: 0;
		  text-align: center;
		}
		.socialIcons li {
		  background-color: yellow;
		  list-style: none;
		  display: inline-block;
		  margin: 4px;
		  border-radius: 2em;
		  overflow: hidden;
		}
		.socialIcons li a {
		  display: block;
		  padding: 0.5em;
		  min-width: 20px;
		  max-width: 20px;
		  height: 20px;
		  white-space: nowrap;
		  line-height: 1.5em; /*it's working only when you write text with icon*/
		  transition: 0.5s;
		  text-decoration: none;
		  font-family: comic sans MS;
		  color: #fff;
		}
		.socialIcons li i {
		  margin-right: 0.5em;
		}
		.socialIcons li:hover a {
		  max-width: 200px;
		  padding-right: 1em;
		}
		.socialIcons .youtube {
		  background-color: #ff0000;
		  box-shadow: 0 0 16px #c92228;
		  border: 1px solid white;
		}
		.socialIcons .facebook {
		  background-color: #3b5998;
		  box-shadow: 0 0 16px #3b5998;
		  border: 1px solid white;
		}
		.socialIcons .instagram {
		  background-color: #cd486b;
		  box-shadow: 0 0 16px #cd486b;
		  border: 1px solid white;
		}
		.socialIcons .pinterest {
		  background-color: #c92228;
		  box-shadow: 0 0 16px #c92228;
		  border: 1px solid white;
		}
		.socialIcons .twitter {
		  background-color: #5DADE2;
		  box-shadow: 0 0 16px #5DADE2;
		  border: 1px solid white;
		}


.review{
    position: absolute;
    bottom: 12%;
    right: 40%;
    width: 150px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    color: #000;
    font-weight: bold;
    font-size: 20px;
    text-transform: uppercase;
    text-decoration: none;
    font-family: sans-serif;
    box-sizing: border-box;
    background: linear-gradient(90deg,#ffff00,#00ff00,#ff0000,#ffc300);
    background-size: 400%;
    border-radius: 30px;
    z-index: 1;
}

.review:hover{
    animation: animate 8s linear infinite;
}
@keyframes animate{
    0%{
        background-position: 0%;
    }
    100%{
        background-position: 400%;
    }
}
.review:before
{
    content: '';
    position: absolute;
    top:-5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    z-index:-1;
    background: linear-gradient(90deg,#ffff00,#00ff00,#ff0000,#ffc300);
    background-size: 400%;
    border-radius: 40px;
    opacity: 0;
    transition: 0.5s;
}

.review:hover:before{
    filter: blur(20px);
    opacity: 1;
    animation: animate 8s linear infinite;
}






/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 20; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  margin: auto;
  padding: 0;
  border: 2px solid yellow;
  width: 30%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: red;
  color: white;
  font-family: comic sans MS;
  font-weight: bold;
}

.modal-body {
    padding: 2px 16px;
    background-color: orange;
}

.field {
  font-size: 15px;
  margin: 10px;
  padding: 10px;
  width: 90%;
  border-radius: 10px;
  border: 1px solid black;
  font-family: comic sans MS;

}
.submit {
    font-family: comic sans MS;
    font-size: 20px;    
    padding: 10px;
    border: 1px solid black;
    border-radius: 30px;
    color: white;
    background-color: red;
}
.submit:hover {
    background-color: black;
    transition: 0.5s;
    cursor: pointer;
}

        @media only screen and (min-width: 1300px) {
    		.about-us .au-content h1 {
    		    font-size: 30px;
    		}
    		.about-us .au-content h2 {
    		    font-size: 22px;
    		}        
        }
        @media only screen and (max-width: 880px) {
            .modal-content {
                width: 40%;
            }
        }

        @media only screen and (max-width: 750px) { 
    		.footer {
                margin-top: 50px;    		}
    		.about-us .au-content h1 {
    		    font-size: 17px;
    		}
    		.about-us .au-content h2 {
    		    font-size: 12px;
    		}
    		.review{
                right: 50%;
            }
            .modal-content {
                width: 50%;
            }
        }
        
        @media only screen and (max-width: 600px) {
            .about-us .au-content h2 {
    		    font-size: 15px;
    		}
    		.review{
                right: 45%;
            }
            .modal-content {
                width: 60%;
            }            
        }


		@media only screen and (max-device-width: 700px) {
		    .footer {
		        height: 640px;
		    }
		    .social {
		        width: 30%;
		    }
		    .about-us {
		        margin-top: 0px;
		        width: 70%;
		        height: 100%;
		    }
		    .about-us .au-content .me {
		        flex-direction: column;
		        position: relative;
		    }
		    .about-us .au-content .created {
		        position: absolute;
		        padding-top: 0px;
		        margin-top: -40px;
		        right: 5px;
		    }
    		.about-us .au-content h1 {
    		    font-size: 30px;
    		}
    		.about-us .au-content h2 {
    		    margin-top: -2%;
    		    font-size: 28px;
    		}
    		.socialIcons li a {
    		    min-width: 45px;
    		    max-width: 45px;
    		    min-height: 45px;
    		}
    		ul.socialIcons {
    		  font-size: 35px;
    		}
    		.about-us .au-content {
    		    top: 30px;
    			display: flex;
    			align-items: start;
    			justify-content: start;
    		}
            .review{
                bottom: 13%;
                right: 3%;
                width: 200px;
                height: 60px;
                line-height: 60px;
                font-size: 35px;
            }
    		.footer .copyright {
    			height: 50px;
    			padding-top: 10px;
    			font-size: 28px;
    			font-weight: bold;
    		}
            .modal-content {
              width: 60%;
              border: 4px solid yellow;
            }
            .close {
                font-size: 70px;
            }
            .modal-header  h2 {
                font-size: 35px;
            }
            .field {
                font-size: 28px;
            }
            .submit {
                font-size: 30px;
                padding: 20px;
            }
		}
		
		@media only screen and (min-device-width: 700px) and (max-device-width: 1200px) {
		    .modal-content {
              width: 40%;
            }
    		.about-us .au-content h1 {
    		    font-size: 20px;
    		}
    		.about-us .au-content h2 {
    		    margin-top: -2%;
    		    font-size: 20px;
    		}
    		.submit {
    		    font-weight: bold;
    		    background: black;
    		}

		}
		
	</style>
</head>
<body>

    <center>
        <div class="sujhavCont">
            <div class="head">
                <h1>Comments</h1>
                <a id="vicharBtn" class="btn-vichar" href="#">अपने विचार दें</a>
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
                        ';
                        if($row['reply']!='') {
                    echo '
                    <hr>
                    <div class="reply">
                        <img src="va.png" class="pic">
                        <div class="msg">
                            <span class="msg1">Vibha Agarwal</span><br>
                            <span class="msg2">'.$row['reply'].'</span>
                        </div>
                    </div>
                        ';
                        }
                    echo '</div>';
                    }
                ?>
            </div>
        </div>
    </center>

<br><br>

	<div class="footer">
		<div class="f-content">
			<div class="social">
				<ul class="socialIcons">
					<li class="youtube" style="margin-right: 20px;"><a href="https://www.youtube.com/channel/UCjr1t8zx3nZrkDNZJRNH_WQ" target="_blank"><i class="fab fa-youtube"></i>YouTube</a></li><br>
					<li class="facebook" style="margin-right: 20px;"><a href="https://www.facebook.com/vibha.agarwal.355" target="_blank"><i class="fa fa-fw fa-facebook"></i>Facebook</a></li><br>
				  	<li class="instagram" style="margin-right: 20px;"><a href="https://www.instagram.com/vibha_ki_kitab/" target="_blank"><i class="fa fa-fw fa-instagram"></i>Instagram</a></li><br>
				  	<li class="pinterest" style="margin-right: 20px;"><a href="https://www.pinterest.ca/jaimatadivibha/" target="_blank"><i class="fa fa-fw fa-pinterest-p"></i>Pinterest</a></li><br>
					<li class="twitter" style="margin-right: 20px;"><a href="https://twitter.com/BhajnoK" target="_blank"><i class="fa fa-fw fa-twitter"></i>Twitter</a></li>
				</ul>
			</div>
			<div class="about-us">
				<div class="au-content">
				    <div class="me">
    					<img style="border-radius: 50%; margin-top: 20px; width: 200px; height: 200px;" src="va.png">
    					<div style="padding-left: 10px; padding-right: 10px">
    					    <h1>! जय माता दी !</h1>
    					    <h2>"भजनों की किताब" में आप सभी का स्वागत है | <br><br>
    					    मै आशा करती हूँ कि "भजनो की किताब" आपको पसंद आ रही होगी | यदि आपके पास कोई सुझाव है तो आप अपने सुझाव हमें दे सकते हैं |
    					    <br><br><span style="color: yellow; background: black;">[ jaimatadivibha@gmail.com ]</span>
    					    </h2>
    				    </div>
				    </div>
				    <div class="created" style="color: yellow">
				        <h1>Created By My Daughter</h1>
				        <h2>Vedangi Agarwal</h2>
				        <img style="border-radius: 50%; width: 150px; height: 150px;" src="vedu.jpg">
				        
				    </div>
				</div>
			</div>
			    <a id="myBtn" class="review" href="#">सुझाव दें</a>
		</div>
		<div class="copyright">
			All rights reserved © 2020 Vibha Agarwal
		</div>
	</div>
	
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>सुझाव</h2>
    </div>
    <div class="modal-body">
      <form method="POST" action="web-footer">
          <br><input class="field" type="text" autocomplete="off" placeholder="Name/नाम" name="name" required autofocus><br>
          <textarea class="field" placeholder="Message/सुझाव" name="message" rows="5" required></textarea>
          <center><input class="submit" type="submit" value="SUBMIT" onclick="alert('सुझाव देने के लिए धन्यवाद !');" name="submit"></center><br>
      </form>          
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btnV = document.getElementById("vicharBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

btnV.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
	
</body>
</html>