<?php
    include('conn.php');
    mysqli_set_charset($conn, 'utf8');
    
    if(isset($_POST['submit'])) {
        $table = $_POST['category'];
        $swarachit = $_POST['swarachit'];
        $link = $_POST['link'];
        $title = $_POST['title'];
        $title2 = $_POST['title2'];
        $tarz = $_POST['tarz'];
        $lyric1 = $_POST['lyric1'];
        $lyric2 = $_POST['lyric2'];
        $des = $_POST['des'];
        $tags = $_POST['tags'];
        $page = $_POST['page'];
        $views = $_POST['views'];
        $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));

        if($swarachit == "no") {
            $swarachit = "";
        }
        $query = "insert into ".$table." (title, title2, tarz, swarachit, lyric1, lyric2, link, des, tags, page, views, img) values ('".$title."', '".$title2."', '".$tarz."', '".$swarachit."', '".$lyric1."', '".$lyric2."', '".$link."', '".$des."', '".$tags."', '".$page."', '".$views."', '".$img."')";
        $data = mysqli_query($conn, $query);
    }
    
    if(isset($_POST['reply'])) {
        $rep = $_POST['reply-msg'];
        $id = $_POST['id'];
        $q = "update sujhav set reply='".$rep."' where no=".$id;
        $d = mysqli_query($conn, $q);
        
    }
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<style type="text/css">
  		body {
  			margin: 2%;
            background-image: url('bg.jpg');
        	background-repeat: no-repeat;
        	background-size: cover;
  		}
  		.form-cont {
  			display: none;
  		}
  		.reply-cont {
  		    display: none;
  		    background: rgba(255,255,0,0.7);
  		}
  		.heading {
  			font-size: 30px;
  			font-weight: bold;
  		}
  		.cont {
  		    background-color: red;
  			width: 90%;
  			padding: 5%;
  			border: 3px solid yellow;
  			border-radius: 10%;
  			text-align: left;
  		}
  		label {
  		    font-size: 17px;
  		    color: yellow;
  		}
  		.swar {
  			display: inline-block;
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
        .input-reply {
            margin-left: 5%;
            margin-right: 5%;
        }

  	</style>
</head>
<body>

<center>

<form class="form-inline" method="POST">
  <div class="form-group mx-sm-3 mb-2">
    <label for="username" class="sr-only">Username</label>
    <input type="text" class="form-control" placeholder="admin" id="user" required>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="password" class="sr-only">Password</label>
    <input type="password" class="form-control" placeholder="password" id="pass" required>
  </div>
  <button type="button" class="btn btn-primary mb-2" id="btnform">Confirm Identity</button>
</form>

<br>
<div class="form-cont" id="addform">
<div class="heading">Add New Bhajan or Geet</div>
<form class="cont" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-3">
			<label for="category">Bhajan Category</label>
			<select class="form-control" name="category" id="cat" required>
				<option value="" selected hidden>choose here</option>
				<option value="badhaigeet">badhai geet</option>
				<option value="diwaligeet">diwali geet</option>
				<option value="ganeshbhajan">ganesh bhajan</option>
				<option value="hanumanbhajan">hanuman bhajan</option>
				<option value="holigeet">holi geet</option>
				<option value="karvachauthgeet">karvachauth geet</option>
				<option value="krishnabhajan">krishna bhajan</option>
				<option value="langurbhajan">langur bhajan</option>
				<option value="lokgeet">lokgeet</option>
				<option value="matabhajan">mata bhajan</option>
				<option value="saibhajan">sai bhajan</option>            
				<option value="shadigeet">shadi geet</option>
				<option value="shanibhajan">shani bhajan</option>
				<option value="shivbhajan">shiv bhajan</option>
				<option value="visheshgeet">vishesh geet</option>	  
			</select>
		</div>

		<div class="form-group col-md-3">
			<label for="Swarachit">Swarachit&nbsp; &nbsp; &nbsp;</label><br>
			<div class="form-check swar">
				<input class="form-check-input" type="radio" name="swarachit"  value="yes" required>
				<label class="form-check-label" for="yes">yes&nbsp; &nbsp;</label>
			</div>
			<div class="form-check swar">
				<input class="form-check-input" type="radio" name="swarachit" value="geet" required>
				<label class="form-check-label" for="geet">geet&nbsp; &nbsp;</label>
			</div>
			<div class="form-check swar">
				<input class="form-check-input" type="radio" name="swarachit" value="no" required>
				<label class="form-check-label" for="no">no</label>
			</div>
		</div>

		<div class="form-group col-md-6">
			<label for="Tarz">Tarz</label>
			<input type="text" class="form-control" name="tarz" value="" id="tarz" required>
		</div>

	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="Title">Title</label>
			<input type="text" class="form-control" name="title" required>
		</div>	

		<div class="form-group col-md-4">
			<label for="Title2">Title2 (eng)</label>
			<input type="text" class="form-control" name="title2" required>
		</div>	

		<div class="form-group col-md-4">
			<label for="Link">Link</label>
			<input type="text" class="form-control" name="link" required>
		</div>

	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="lyric1">Lyric 1</label>
			<textarea class="form-control" name="lyric1" rows="3" required></textarea>
		</div>

		<div class="form-group col-md-6">
			<label for="lyric2">Lyric 2</label>
			<textarea class="form-control" name="lyric2" rows="3" required></textarea>
		</div>		
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="description">Description</label>
			<textarea class="form-control" name="des" rows="3"></textarea>
		</div>

		<div class="form-group col-md-6">
			<label for="tags">Tags</label>
			<textarea class="form-control" name="tags" id="tags" rows="3" required></textarea>
		</div>		
	</div>

	<div class="form-row">
		<div class="form-group col-md-7">
			<label for="page">Page</label>
			<input type="text" class="form-control" name="page" value="" id="page" required>
		</div>

		<div class="form-group col-md-2">
			<label for="views">Views</label>
			<input type="text" class="form-control" name="views" required>
		</div>

  		<div class="form-group col-md-2">
		    <label for="thumbnail">Thumbnail</label>
		    <input type="file" class="form-control-file" name="img" required>
 		</div>		
	</div>

	<button type="submit" name="submit" class="btn btn-primary">Save</button>

</form>
</div>

<div class="reply-cont" id="givereply">
                    <?php
                    $q = "select * from sujhav where reply = '' order by date desc";
                    $d = mysqli_query($conn, $q);
                    while($row = mysqli_fetch_array($d)) {
                        echo '
                    <form method="POST">
                    <div class="comm">
                        <img src="comments.png" class="pic">
                        <div class="msg">
                            <span class="msg1">'.$row['name'].'</span><br>
                            <span class="msg2">'.$row['message'].'</span>
                        </div>
                        <div class="input-reply">
                            <input type="hidden" name="id" value="'.$row['no'].'">
                            <input type="text" placeholder="reply" name="reply-msg">
                        </div>
                        <button type="submit" name="reply" class="btn btn-primary">Reply</button>
                    </div>
                    </form>
                        ';
                    }
                    ?>
    
</div>


</center>

<script>
    var user = document.getElementById("user");
    var pass = document.getElementById("pass");
    var btn = document.getElementById("btnform");
    var add = document.getElementById("addform");
    var reply = document.getElementById("givereply");
    btn.onclick = function() {
        if(pass.value == "BKKvibha") {
            add.style.display = "block";  
            reply.style.display = "block";
        }
    }

    $(function() {
       $("#cat").on("change", function(e) {
           var page = document.getElementById("page");
           var tags = document.getElementById("tags");
           var opt = this.value;
           if(opt == "badhaigeet") {
               page.value = "kirtanbadhai_lyrics";
               tags.value = "kirtan badhai geet, badhayi geet, badhayi bhajan, badhayi geet, कीर्तन बधाई गीत, बधाई गीत, बधाई भजन, "
           }
           else if(opt == "diwaligeet") {
               page.value = "diwali_lyrics";
               tags.value = "diwali geet, laxmi bhajan, ganesh bhajan, laxmi ganesh bhajan, दिवाली गीत, लक्ष्मी भजन, गणेश भजन, लक्ष्मी गणेश भजन , ";
           }
           else if(opt == "ganeshbhajan") {
               page.value = "ganesh_lyrics";
               tags.value = "ganesh bhajan, ganpati, gajanan, shiv ke lal, गणेश भजन, गणपति , गजानन, शिव के लाल, ";
           }
           else if(opt == "hanumanbhajan") {
               page.value = "hanuman_lyrics";
               tags.value = "hanuman bhajan, ram hanuman, ram bhajan, हनुमान भजन, राम भजन, राम हनुमान भजन, ";
           }
           else if(opt == "holigeet") {
               page.value = "holi_lyrics";
               tags.value = "holi geet, होली गीत, ";
           }
           else if(opt == "karvachauthgeet") {
               page.value = "karvachauth_lyrics";
               tags.value = "karvachauth geet, karwachauth geet, करवाचौथ गीत, ";
           }
           else if(opt == "krishnabhajan") {
               page.value = "krishna_lyrics janmashtmi_lyrics";
               tags.value = "janmashtmi, krishna bhajan, radha krishna bhajan, radha bhajan, कृष्णा भजन, राधा कृष्णा भजन, राधा भजन, ";
           }
           else if(opt == "langurbhajan") {
               page.value = "langur_lyrics";
               tags.value = "langur bhajan, mata bhajan, लांगुर भजन, मत भजन, ";
           }
           else if(opt == "lokgeet") {
               page.value = "lokgeet_lyrics";
               tags.value = "lok geet, hasi mazak ke geet, लोक गीत, हसी मज़ाक के गीत , ";
           }
           else if(opt == "matabhajan") {
               page.value = "mata_lyrics navratri_lyrics";
               tags.value = "navratri, mata bhajan, mata rani ke bhajan, durga, ambe, vaishno devi, माता भजन, माता रानी के भजन, दुर्गा, अम्बे, वैष्णो देवी, ";
           }
           else if(opt == "saibhajan") {
               page.value = "sai_lyrics";
               tags.value = "sai bhajan, साई भजन, ";
           }
           else if(opt == "shadigeet") {
               page.value = "bannabanni_lyrics shadibadhai_lyrics jaccha_lyrics vidayi_lyrics";
               tags.value = "bannabannigeet, vidayigeet, jacchageet, badhaigeet, banna banni geet, shadi geet, vidayi geet, vidai geet, badhayi geet, बन्ना बन्नी गीत, शादी गीत, विदाई गीत, बधाई गीत,";
           }
           else if(opt == "shanibhajan") {
               page.value = "shani_lyrics";
               tags.value = "shani bhajan, shani dev bhajan, शनि भजन, शनि देव भजन, ";
           }
           else if(opt == "shivbhajan") {
               page.value = "shiv_lyrics shivratri_lyrics";
               tags.value = "shivratri, shiv bhajan, shiv parvati bhajan, bhole bhajan, शिव भजन, शिव पार्वती भजन, भोले भजन, ";
           }
           else if(opt == "visheshgeet") {
               page.value = "vishesh_lyrics";
               tags.value = "vishesh geet, vishesh bhajan, विशेष गीत, विशेष भजन, ";
           }
       });
    });

    $(function() {
        $("input[name$='swarachit']").click(function() {
            var tarz = document.getElementById("tarz");
            var tags = document.getElementById("tags");
            var x = $(this).val();
            if(x == "yes") {
                tarz.value="<br>स्वरचित भजन<br>तर्ज़ - ";
                tags.value="swarachit " + tags.value + "स्वरचित भजन ";
            }
            else if(x == "geet") {
                tarz.value="<br>स्वरचित गीत<br>तर्ज़ - ";
                tags.value="swarachit " + tags.value + "स्वरचित गीत ";
            }
            else {
                tarz.value="<br>तर्ज़ - ";
            }
        });
    });
</script>

</body>
</html>
