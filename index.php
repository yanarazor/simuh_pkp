<?php
// get contents of composer.json
//$composer_json = json_decode(file_get_contents("composer.json"), true);
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Selamat Datang di Sistem Informasi Usulan Hibah</title>
        <base target="_blank">
        <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap-responsive.min.css" media="screen" />
        <style>
            body {
                font-family:sans-serif;
            }
            #intro {
                width:700px;
                margin-left:-390px;
                position:fixed;
                left:50%;
                top:60px;
                padding:10px 30px;
            }
            h1 {
                text-align:center;
            }
            .continue {
                padding:10px 0;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <div id="intro" class="well">
            <h1>Selamat Datang di<br>Sistem Informasi Usulan Hibah</h1>

<?php $uri = $_SERVER['REQUEST_URI'];
// Outputs: URI ?>

<script type="text/javascript">
var count = 5;

var redirect = "<?php echo $uri ;?>public/" ;
 
function countDown(){
    var timer = document.getElementById("timer");
    if(count > 0){
        count--;
        timer.innerHTML = "Anda akan di redirect dalam  "+count+" detik.";
        setTimeout("countDown()", 1000);
    }else{
        window.location.href = redirect;
    }
}
</script>
		<div align="center" style="font-weight:600;">
		<br>
		<br>
			<span id="timer">
				<script type="text/javascript">countDown();</script>
			</span>
		<br>

		<br>
		

		<br>
		<br>
		
		<p>BIRO KEUANGAN DAN BMN <br>KEMENTERIAN DESA, PEMBANGUNAN DAERAH TERTINGGAL DAN TRANSMIGRASI</p></div>
		
		<br>
		<br>
		<br>
		
		</div>
    </body>
</html>