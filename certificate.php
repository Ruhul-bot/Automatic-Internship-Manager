<?php

include "connection.php";

$res=mysqli_query($conn,"select * from crud where status=0 limit 1");
if(mysqli_num_rows($res)>0){
	header('content-type:image/jpeg');
	$font="BRUSHSCI.TTF";
	$image=imagecreatefromjpeg("certificate.jpg");
	$color=imagecolorallocate($image,19,21,22);
	while($row=mysqli_fetch_assoc($res)){
		$name=$row['name'];
		imagettftext($image,50,0,365,420,$color,$font,$name);
		$date="6th march 2024";
		imagettftext($image,20,0,450,595,$color,"AGENCYR.TTF",$date);
		$file=time().'_'.$row['id'];
		imagejpeg($image,"certificate/".$file.".jpg");
		imagedestroy($image);
		mysqli_query($conn,"update crud set status=1 where id='".$row['id']."'");
	}
}
?>