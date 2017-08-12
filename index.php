<?php include "type.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Testing.....</title>
<link href="css/settings.css" rel="stylesheet">
<link href="css/css.css" rel="stylesheet">
</head>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery.js"></script>
<script src="js/h.js"></script>
<body>
<div class="container heg2">
<div class="col-lg-8 col-lg-offset-2">
<pre class='pr'>
<?php
echo "============================
[+] Product Name =>  visa cards checker
[+] Coding By    =>   shad0w
[*] ";
?>
</pre>
<div id="timeval"></div>
<div class="panel panel-default ">

<div  class="panel-heading " style="text-align:center;font-size:20px; font-weight:bold;">startMagic
<div class="status"> </div>
</div>
<div id="m" style="padding:5px;">
<form  action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" id='table'>
<center><textarea id='num' class="form-control" rows="10" style="resize:none;text-align:;direction:ltr;" name="ports">
</textarea>
<span id="c"></span>
</center>
<center>
<button id ="t" onclick="haxjk()" type="submit" name="add" class="btn  btn-danger btn-lg text-center glyphicon glyphicon-off"
style="margin-bottom:5px; margin-top: 5px;">
</button>
</center>
</div>
<?php

if(isset($_POST['add'])){
echo'<pre  id="pre" style="direction:ltr;">' ;

		$msg   =array();
		$ports =$_POST['ports'];
		$finsih=array();

  if(empty($ports)){// || !is_numeric($ports)
	echo"[status]:Not Found ";
    die();
	}
     else{
       sleep(5);
		 echo '<script>
        window.setTimeout(function() {
        $("#m").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove();});}, 900);
        </script>';
          $text=explode("\r\n",$ports);
          foreach ($text as $key=>$num){
        	flush();
        	   ob_flush();
                    set_time_limit(360000);
			$e = new cc();
			$r = $e->getTypeForCard($num);
$files=fopen("info.txt", "a+");
$daa="".$r."\r\n==============================\r\n";
    fwrite($files,$daa);
            fclose($files);
                flush();
                  ob_flush();
                     echo "[status]-->[$r]->[".date("h:m:s")."]\r\n";
					 sleep(2);
	flush();
	      ob_flush();
	   }     //end forAll
      $finsih[]='<div style="direction:ltr;">######################################100%]>Done</div>';
	     }//end else
         	flush();
	                ob_flush();
	} //end if Big
    echo '</pre>'; // end project
?>
<?php if (isset($finsih)) foreach ($finsih as $errors){echo $errors;} ?>
</form>
</div>
</div>
</div>
</div>
<div class="text-center pr"> Created By: <a href:"https://twitter.com/ZEY4D_" > shad0w  </a></div>
</body>
</html>
