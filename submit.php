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


$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {

$verif_box = $_POST["verif_box"];

if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
  
$CURL= mysqli_real_escape_string($saha,$_POST["q"]);

$urlBase=parse_url($CURL,PHP_URL_HOST);
  
mysqli_select_db($saha, $database_saha);$query_selectedCrawl = "SELECT * FROM settings WHERE settings.actual_url= '$CURL'";
$selectedCrawl = mysqli_query($saha, $query_selectedCrawl) or die(mysqli_error($saha));
$row_selectedCrawl = mysqli_fetch_assoc($selectedCrawl);
$totalRows_selectedCrawl = mysqli_num_rows($selectedCrawl);

if($totalRows_selectedCrawl==0 && $urlBase!=""  && $CURL!=""){
	    $insertSQL = sprintf("INSERT INTO settings (user, time, spider_mode, actual_url, base_url) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString("WebUser", "text"),
                       GetSQLValueString(time(), "int"),
                       GetSQLValueString("N", "text"),
                       GetSQLValueString($CURL, "text"),
                       GetSQLValueString($urlBase, "text"));

  mysqli_select_db($saha, $database_saha);$Result1 = mysqli_query($saha, $insertSQL) or die(mysqli_error($saha));
	
header("Location: submit.php?submit=true&url="); //
exit;
}else{
header("Location: submit.php?submit=exists&url=".base64_encode($_POST["q"]));
}
}else{
	
header("Location: submit.php?submit=verify&url=".base64_encode($_POST["q"]));
exit;
}


}

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
      <title>Islartist | Islamic Arts Search Engine</title>
      <link rel="shortcut icon" href="icon.png" type="image/png" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
<style type="text/css">
/* centered columns styles */
.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
}
.col-fixed {
    /* custom width */
    width:320px;
}
.col-min {
    /* custom min width */
    min-width:320px;
}
.col-max {
    /* custom max width */
    max-width:320px;
}

/* visual styles */
body {
    padding-bottom:40px;
}
h1 {
    margin:40px 0px 20px 0px;
	color:#95c500;
    font-size:28px;
    line-height:34px;
    text-align:center;
}

.item {
    width:100%;
    height:100%;
	border:1px solid #cecece;
    padding:28px;
	background:#ededed;
	background:-webkit-gradient(linear, left top, left bottom,color-stop(0%, #f4f4f4), color-stop(100%, #ededed));
	background:-moz-linear-gradient(top, #f4f4f4 0%, #ededed 100%);
	background:-ms-linear-gradient(top, #f4f4f4 0%, #ededed 100%);
	border-radius: 15px;
}

/* content styles */
.item {
	display:table;
}
.content {
	display:table-cell;
	vertical-align:middle;
	text-align:center;
}

/* centering styles for jsbin */
html,
body {
    width:100%;
    height:100%;
}
html {
    display:table;
}
body {
    display:table-cell;
}
</style>      
</head>
<body>
<div id="wrapper">
<div class="animated fadeIn">
               <div class="row">
                 <!-- <div class="col-lg-12" style="padding-top:90px; background:url(logo2.png) 15px 10px no-repeat; height:50px;"> -->
                  
            <!--      <a href="admin/" target="_blank" class="btn btn-sm btn-link pull-right"><i class="fa  fa-user-secret"></i> Admin</a>
                  <a href="all.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-search"></i> Latest Crawling</a>
                  <a href="search.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-search"></i> Full Page Search</a>
                  <a href="submit.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-edit"></i> Submit URL</a>
                  <a href="quicksearch.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-search"></i> Page top Search</a>  -->
                  <a href="index.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-home"></i>  Home</a>                  
                  </div>
               </div>
               
                  

<h1><img src="logo.png" width="182" height="197" alt="Islartist"><br>
  </h1>

<h2 style="text-align:center;"></h2>  

<?php if(@$_GET['submit']=="true"){?>
<p class=" text-primary" style="text-align:center;">URL Submitted Successfully !</p>
<?php }else if(@$_GET['submit']=="exists"){?>
<p class=" text-info" style="text-align:center;">URL Already Submitted !</p>
<?php }else if(@$_GET['submit']=="verify"){?>
<p class="text-warning" style="text-align:center;">Human Verification  Error !</p>
<?php }?>

  
<div class="container">
    <div class="row row-centered">
        <div class="col-xs-6 col-centered col-min">
        <div class="item">&nbsp;
        <div class="content">
        <div>
        <form  method="post" action="<?php echo $editFormAction; ?>">
        <div class="input-group full-width">
        <label>URL
        <input type="text" placeholder="http://www" name="q" id="q" class="form-control full-width" value="<?php echo base64_decode(@$_GET["url"]); ?>" required style="width:400px;">
        </label>
        
        <label>Verification:
        <img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" align="absbottom" /><br>
        <input type="text" placeholder="Code" name="verif_box" id="verif_box" class="form-control" value="" required>
        </label>
        </div>
        <div class="input-group full-width">
        <button class="btn btn-primary" type="submit">Submit URL</button>
        </div>
        <input type="hidden" name="MM_insert" value="form">
        </form>
      </div>
        </div>
        </div>
        </div>
    </div>
</div>

    <div class="row row-centered">
    <div class="col-xs-6 col-centered col-min circle-border">
<div class="panel panel-default" style="border:none; margin-top:50px;">
<fieldset>
<legend style="text-align:center;">Notice</legend>
<div class="panel-body text-center">
Only Islamic Arts Related Websites will be Submitted.
</div>
</fieldset>
</div>
    </div>
    </div>

</div>
</div>      
</body>
</html>