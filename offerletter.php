<?php
require('vendor/autoload.php');

include "connection.php";

$res=mysqli_query($conn,"select * from crud");
if(mysqli_num_rows($res)>0){
	$html='<style></style><table class="table">';
		$html.='<tr><td>ID</td><td>Name</td><td>Email</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['ST_ID'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'D');

?>