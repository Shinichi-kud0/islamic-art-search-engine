<?php require_once('../Connections/saha.php'); ?>
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

if ((isset($_GET['id'])) && ($_GET['id'] != "")) {

	
$id=$_GET['id'];

mysqli_select_db($saha, $database_saha);$query_selected = "SELECT * FROM settings WHERE settings.id= '$id'";
$selected = mysqli_query($saha, $query_selected) or die(mysqli_error($saha));
$row_selected = mysqli_fetch_assoc($selected);
$totalRows_selected = mysqli_num_rows($selected);


//Deleting Crawled Data

  $updateSQL = sprintf("UPDATE settings SET spider_mode=%s WHERE id=%s",
                       GetSQLValueString($_GET['spider_mode'], "text"),
                       GetSQLValueString($_GET['id'], "int"));

  mysqli_select_db($saha, $database_saha);$Result1 = mysqli_query($saha, $updateSQL) or die(mysqli_error($saha));





  header("Location: ".$_SERVER['HTTP_REFERER']);
}
?>
