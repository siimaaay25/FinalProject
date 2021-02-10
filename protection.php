<?php 
$gelenpostlar='';
foreach ($_POST as $key => $value) {
$gelenpostlar=$gelenpostlar.' '.strtolower(htmlspecialchars($key)).' '.strtolower(htmlspecialchars($value));	
}
if (strstr($gelenpostlar,'union select')) {
header("location:http://cse.akdeniz.edu.tr/");
exit;
}

if (strstr($gelenpostlar,'_schema')) {
header("location:http://cse.akdeniz.edu.tr/");
exit;
}

if (strstr($gelenpostlar,'dues')) {
header("location:http://cse.akdeniz.edu.tr/");
exit;
}
if (strstr($gelenpostlar,'payment')) {
header("location:http://cse.akdeniz.edu.tr/");
exit;
}

if (strstr($gelenpostlar,'expenses')) {
header("location:http://cse.akdeniz.edu.tr/");
exit;
}
if (strstr($gelenpostlar,'tbladmin')) {
header("location:http://cse.akdeniz.edu.tr/");
exit;
}
if (strstr($gelenpostlar,'tblvisitor')) {
header("location:http://www.beybut.com/hackerbey.jpg");
exit;
}
if (strstr($gelenpostlar,'flat')) {
header("location:http://www.beybut.com/hackerbey.jpg");
exit;
}

$parametreler = strtolower($_SERVER['QUERY_STRING']); //Adres satırından gelen tüm sorguları aldık.
$yasaklar="%¿¿'¿¿'¿¿insert¿¿concat¿¿delete¿¿join¿¿update¿¿select¿¿\"¿¿\\¿¿<¿¿>¿¿dues¿¿payment¿¿tbladmin¿¿expenses¿¿flat"; 
$yasakla=explode('¿¿',$yasaklar);
$sayi=substr_count($yasaklar,'¿¿');
$i=0;
while ($i<=$sayi) {
if (strstr($parametreler,$yasakla[$i])) {
header("location:http://www.beybut.com/hackerbey.jpg"); //Sql injection girişimi yakalandığında yönlendiriyoruz.
exit;
}

$i++;	
}

if (strlen($parametreler)>=90) {  
header("location:http://www.beybut.com/hackerbey.jpg");
exit;	
}
?>