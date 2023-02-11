<?php require_once('Connections/saha.php'); ?>
<?php require_once('inc-main.php'); ?>
<?php 
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
      <title>Islartist | Islamic Arts Search Engine</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="Search_Bar/css/style.css">
      <link rel="shortcut icon" href="icon.png" type="image/png" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="css/calm_form.css">
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
   /* background-color: #eaedf2; */
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
	background:#eaedf2;
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

</style>      
</head>
<body>
<div id="wrapper">
<div class="animated fadeIn">
               <div class="row bg-primary">
                  <div class="col-lg-12" style="padding-top:0px;">
                  <a href="submit.php" class="btn btn-sm btn-link pull-left"><i class="fa fa-edit"></i> Submit URL</a>
               <!-- <a href="admin/" target="_blank" class="btn btn-sm btn-link pull-right"><i class="fa  fa-user-secret"></i> Admin</a>
                  <a href="all.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-search"></i> Latest Crawling</a>
                  <a href="search.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-search"></i> Full Page Search</a>
                  <a href="quicksearch.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-search"></i> Page top Search</a> -->
                  </div>
               </div>
                  


<div class="wrapper">
        <div class="container">
      <!-- <h1>Welcome</h1> -->

  <!--
<div class="container">
    <div class="row row-centered">
        <div class="col-xs-6 col-centered col-min">
        <div class="content"> -->
        <form action="search.php" method="get" class="form">
        <h1><img src="image/islartist.png" width="128" height="128" alt="Islamic Art Search" title="Islartist | Islamic Art Search Engine"><br>
  </h1>
        <div class="search">
            
                                    <input placeholder="Search Web" name="q" class="search__input" value="<?php echo stripslashes(@$cid); ?>" >
                                       <button class="fa fa-search search__button" type="submit" ></button> 
                                    </div>
      </form>
     <!-- </div>
        </div>
        </div>
        </div>
    </div>
</div> -->



        </div>

        <ul class="image">
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
        </ul>
    </div>
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->

    <div class="row row-centered">
    <div class="col-xs-6 col-centered col-min circle-border">

    
    
    
    <!-- <?php // require_once('top_searched_words.php')  ?>  -->
    

</div>
    </div>

</div>
</div>   

<script src='css/jquery.min.js'></script>

<script src="js/calm_form_index.js"></script>
</body>
</html>