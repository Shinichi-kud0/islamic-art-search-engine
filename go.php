<?php require_once('Connections/saha.php'); ?>
<?php require_once('inc-main.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  // $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($saha,$theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$id=$_GET['id'];


mysqli_select_db($saha, $database_saha);$query_selectedCrawl = "SELECT * FROM crawl WHERE crawl.id='$id'";
$selectedCrawl = mysqli_query($saha, $query_selectedCrawl) or die(mysqli_error($saha));
$row_selectedCrawl = mysqli_fetch_assoc($selectedCrawl);
$totalRows_selectedCrawl = mysqli_num_rows($selectedCrawl);



  $updateSQL = sprintf("UPDATE crawl SET visits=%s WHERE id=%s",
                       GetSQLValueString($row_selectedCrawl['visits']+1, "int"),
                       GetSQLValueString($_GET['id'], "int"));

  mysqli_select_db($saha, $database_saha);$Result1 = mysqli_query($saha, $updateSQL) or die(mysqli_error($saha));

$actual_url=$row_selectedCrawl['actual_url'];

mysqli_select_db($saha, $database_saha);$query_selectedCrawlT = "SELECT SUM(crawl.visits) FROM crawl WHERE crawl.actual_url='$actual_url'";
$selectedCrawlT = mysqli_query($saha, $query_selectedCrawlT) or die(mysqli_error($saha));
$row_selectedCrawlT = mysqli_fetch_assoc($selectedCrawlT);
$totalRows_selectedCrawlT = mysqli_num_rows($selectedCrawlT);

  $updateSQL = sprintf("UPDATE settings SET visits=%s WHERE base_url=%s",
                       GetSQLValueString($row_selectedCrawlT['SUM(crawl.visits)'], "int"),
                       GetSQLValueString($row_selectedCrawl['actual_url'], "text"));

  mysqli_select_db($saha, $database_saha);$Result1 = mysqli_query($saha, $updateSQL) or die(mysqli_error($saha));
  

if($row_selectedCrawl['block_update']=="N" && $row_selectedCrawl['pdf']=="N"){
mysqli_select_db($saha, $database_saha);$query_settings = "SELECT * FROM crawl_settings";
$settings = mysqli_query($saha, $query_settings) or die(mysqli_error($saha));
$row_settings = mysqli_fetch_assoc($settings);
$totalRows_settings = mysqli_num_rows($settings);

if($totalRows_settings==0){
	echo "Crawl Settings Error !";
	exit;
}

$BatchCount=$row_settings['batch'];
$BodyLengh=$row_settings['body_lengh'];
$ImageHeight=$row_settings['image_height'];
$ImageWidth=$row_settings['image_width'];

	
require("admin/inc.crawl.php");

list($metaTitle,$metaDescription,$metaKeywords,$plainText) =CrawlData($row_selectedCrawl['current_url'],$BodyLengh); 


$updateSQL = sprintf("UPDATE crawl SET last_update=%s, keywords=%s, content=%s,  description=%s, title=%s WHERE id=%s",
                       GetSQLValueString(date("Y-m-d H:i:s"), "text"),
                       GetSQLValueString($metaKeywords, "text"),
                       GetSQLValueString($plainText, "text"),
                       GetSQLValueString($metaDescription, "text"),
                       GetSQLValueString($metaTitle, "text"),
                       GetSQLValueString($row_selectedCrawl['id'], "int"));

  mysqli_select_db($saha, $database_saha);$Result1 = mysqli_query($saha, $updateSQL) or die(mysqli_error($saha));

}
header("Location: ".stripslashes($row_selectedCrawl['current_url']));
exit;


?>