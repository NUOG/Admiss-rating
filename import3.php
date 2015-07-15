<?php



set_time_limit(10000);

$con = mysql_connect('127.0.0.1','entrant','entrant2014');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("nung_admiss-rating", $con);

$fp = fopen("/var/zpanel/hostdata/nung/public_html/nung_edu_ua/admiss-rating/upload/29_07_19-14-utf8", "r");

//while( !feof($fp) ) {
//  if( !$line = fgetcsv($fp, 1000, ';', '"')) {
//     continue;
//  }

//    $importSQL = "INSERT INTO `entrant2` VALUES('"
//	.$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."','".$line[8]."','".$line[9]."','"
//.$line[10]."','".$line[11]."','".$line[12]."','".$line[13]."','".$line[44]."','".$line[15]."','".$line[16]."','".$line[17]."','".$line[18]."','".$line[19]."','"
//.$line[20]."','".$line[21]."','".$line[22]."','".$line[23]."','".$line[44]."','".$line[25]."','".$line[26]."','".$line[27]."','".$line[28]."','".$line[29]."','"
//.$line[30]."','".$line[31]."','".$line[32]."','".$line[33]."','".$line[44]."','".$line[35]."','".$line[36]."','".$line[37]."','".$line[38]."','".$line[39]."','"
//.$line[40]."','".$line[41]."','".$line[42]."','".$line[43]."','".$line[44]."')";

//    mysql_query($importSQL) or die(mysql_error());  

//}

$importSQL = "";

mysql_query($importSQL) or die(mysql_error());


fclose($fp);
mysql_close($con);




?>
