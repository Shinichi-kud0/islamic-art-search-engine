<?php require_once('Connections/saha.php'); ?>
<?php require_once('inc-main.php'); ?>
<?php require_once('inc.search.php'); ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Islartist | Islamic Arts Search Engine</title>
<link rel="shortcut icon" href="icon.png" type="image/png" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet">

      <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      
      <link href="css/islarts_cathegories.css" rel="stylesheet">
       <link href="css/my_eight_point_star.css" rel="stylesheet">
       <link href="css/Islartist_logo.css" rel="stylesheet">


       <link href="css/materialize.min.css" rel="stylesheet" />
    <link href="css/icon.css" rel="stylesheet" />
    <link href="css/jquery.mobile-git.css" rel="stylesheet" />
   </head>
   <style type="text/css">

  /*                                  .input_s {
    box-shadow: 10px 20px 10px -10px rgba(200, 200, 200, 200);
    display: inline-block;
    position: relative;
    margin: 0 auto;
    padding-left: 12px;
    padding-top: 6px;
}

.test {
    border: 0;
    outline: 0;
    line-height: 50px;
    font-size: 14px;
    padding: 0 18px;
    width: 584px;
    float: left;
    background: rgb(252, 255, 254);
    border: 1px solid #5AEED1;
    box-shadow: 1px 1px 2px rgba(255, 255, 255, 0.2);
    font-weight: 900;
    letter-spacing: 1px;
    transition: all 150ms linear;
}

.test:hover {
    background: rgb(252, 255, 254);
    box-shadow: 1px 1px 2px rgba(255, 255, 255, 0.2);
    transition: all 250ms linear;
    /* color: rgb(255, 196, 0);
    text-decoration: none;
    text-shadow: -1px -1px 0 rgb(255, 196, 0);*//*
}
.search_button {
    box-shadow: -10px 0 10px -5px rgba(90, 238, 209, 0.5);
    color: #fff;
    background-color: #5AEED1;
    width: 50px;
    line-height: 50px;
    text-align: center;
    border: 1px solid #5AEED1;
    padding: 0;
    cursor: pointer;
    outline: 0;
    transition: box-shadow .3s ease-out;
}

.search_button:active {
    box-shadow: -10px 0 10px -10px rgba(90, 238, 209, 0.5);
}

.fa.fa-search.search_button {
 left: 1px;
 width: 100px;
 height: 50px;
 position: relative;
 top: 0px;
}

.input_s {
 height: 61px;
 width: 704px;
 position: relative;
 left: 119px;
}

.input-group-btn {
 left: -1px;
 position: relative;
 top: 0px;
 width: 100px;
}

.panel.with-nav-tabs.panel-default {
 position: relative;
 left: 15px;
 width: 1524px;
 top: 1.4px;
 height: 498px;
}

.col-lg-12 {
 width: 1463px;
 height: 202px;
}
/*Here my add*/  /*
.inqbox-content {
 background-color: transparent;
 border: 0px none rgb(0, 0, 0);
 box-shadow: none;
 height: 600px;
 width: 1448px;
 display: grid;
 grid-template-columns: 4fr 4fr 4fr;
  grid-template-rows: 4fr 4fr;
    justify-items: stretch;
    align-items: stretch;
}

.panel-body {
 width: 1505px;
 height: 394px;
 background-color: transparent;
 background-blend-mode: normal;
}

.search-result {
 transform: matrix(1, 0, 0, 1, 0, 0);
 text-align: justify;
 line-height: 20px;
 word-spacing: 0px;
 font-family: "open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
 font-weight: 400;
 font-style: normal;
 color: rgb(0, 0, 0);
 font-size: 15px;
 text-decoration-line: none;
 text-transform: none;
 background-blend-mode: normal;
 background-color: transparent;
 letter-spacing: 0px;
 left: -1px;
 position: relative;
 top: -18px;
 width: 400px;
 height: 200px;
 border: 1px inset rgb(0, 0, 0);
 

}

#wrapper {
 height: 530px;
}

*/  </style>
<style>
body {
            background-color: #f1f1f1;
            font-family: Roboto;
            font-weight: 300;
        }
        
        h5 {
            text-align: center;
            color: rgba(12, 12, 12, 0.8);
            ;
            font-weight: 200;
            font-size: 4rem;
        }
        
        p.search_result {
            text-align: center;
            font-size: 1.3rem;
            color: #ef80b8;
            margin: 5px 0 10px;
        }
        .visit_date p{
    font-size: 8 px;
}
        
        .content {
            width: 900px;
            max-width: 900px;
            padding-top: 1rem;
        }
        
        .title {
            left: 145px;
            top: 25px;
        }
        
        .list {
            width: 100%;
            margin: auto;
            margin-bottom: -50px;

        }
        
        .list .btn-flat {
            float: right;
            width: 150px;
            padding: 0 10px;
            margin-top: 40px;
        }
        
        #sortable {
               list-style-type: none;
    margin: initial;
 /*   padding: 1px;*/
    width: 80%;
    cursor: move;
        }
        .search-result p{
            font-size: 10px;

        }
        
        #sortable li , li span , p.search_result {
    
    padding: 0.4em;
  /*  font-size: 1.4em;
    height: 253px;
    width: 84%;  */
    text-align: justify;
    color: #444242;
    margin: auto;
    margin-bottom: 45px;
    font-size:14px;
        }
        
        .collection-item.avatar .title {
    font-size: 18px;
}
.search_title{
    font-size: 20px;
}

        
      /*  #sortable li span {
            position: absolute;
            color: #555;
            font-weight: 500;
            top: 265px;
            left: 20px;
        }
        #sortable p {
            font-size: 0.8rem;
            color: #555;
            font-weight: 500;
            top: 284px;
            padding-left: 12px;
            position: absolute;
        } */
        
        #sortable .video-container iframe,
        .video-container object,
        .video-container embed {
            width: 25px;
            height: 25px;
            visibility: visible;
        }
        
        
        #sortable .video-container {
            position: relative;
            width: 25px;
            height: 25px;
            padding-bottom: 0;
        }
        
        
        
        .collection {
            border: none;
        }
        
        .collection .collection-item {
            background-color: #fff;
            margin-bottom: 45px;
        }
        /* heart button */
        
        .favorite-heart {
            position: absolute;
            bottom: 26px;
            right: 20px;
            cursor: pointer;
        }
        
        .unlike {
            color: #ccc;
        }
        
        .like {
            color: #f00650;
        }

        .input_s {
 left: 0px;
 width: 710px;
 position: relative;
 top: -1.4px;
 height: 48px;
}

.input-group-btn {
 height: 60px;
 width: 150px;
 left: 729px;
 position: relative;
 top: -62px;
}

h2:nth-child(2) {
    width: 172px;
    font-size: 10px;
    position: inherit;
    /* top: 27.6px; */
    /* height: 0px; */
}

small:nth-child(4) {
 left: 0px;
 position: relative;
 top: -129.975px;
 height: 14px;
 width: 255px;
 font-size: 10px;
}

.content {
 left: 0px;
 position: relative;
 top: -36.975px;
}

#sortable {
 position: relative;
 top: 0px;
}

.ui-input-text.ui-body-inherit.ui-corner-all.ui-shadow-inset {
 height: 49px;
}

.test {
 height: 47px;
}
form:nth-child(1) {
 height: 63px;
 width: 885px;
}
    .formbutton {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: 0;
    background-color: white;
    border: 0;
    padding: 10px 15px;
    color: #53e3a6;
    border-radius: 3px;
    width: 250px;
    cursor: pointer;
    font-size: 18px;
    -webkit-transition-duration: 0.25s;
    transition-duration: 0.25s;
}

  .formbutton:hover {
    background-color: #f5f7f9;
}
    </style>
                                    

   <body>

   <script src="css/jquery-1.12.4.js">
    </script>
    <script src="css/jquery-ui.js"></script>
    <script src="css/materialize.min.js"></script>
    <script src="css/jquery.mobile-git.js"></script>
    <script src="css/jquery-ui.min.js"></script>
    <script src="css/jquery.ui.touch-punch.min.js"></script>


      <div id="wrapper">
<div class="animated fadeIn">
               <div class="row">
                <!--  <div class="col-lg-12" style="padding-top:0px; background:url(logo2.png) 15px 10px no-repeat; height:50px;">
                  -->
              <!--    <a href="admin/" target="_blank" class="btn btn-sm btn-link pull-right"><i class="fa  fa-user-secret"></i> Admin</a>
                  <a href="all.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-search"></i> Latest Crawling</a>
                  <a href="search.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-search"></i> Full Page Search</a>
                  <a href="quicksearch.php" class="btn btn-sm btn-link pull-right"><i class="fa fa-search"></i> Page top Search</a> -->
                  <a href="submit.php" class="formbutton"> Submit URL</a>
                  <a href="index.php" class="formbutton">  Home</a>                  
                  <a href="index.php" class="formbutton"> For Business</a>  
                   
                  <a href="index.php" class="formbutton">  For Home</a>  
                   
                  <a href="index.php" class="formbutton">  MarketPlace</a>
                  <a href="index.php" class="formbutton"> Social </a>                  
                   

    </div>
               </div>
               
               <div class="row">
<div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="search.php?q=<?php echo @$_GET['q']; ?>" >Web</a></li>
                            <li><a href="search-images.php?q=<?php echo @$_GET['q']; ?>" >Images</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                        <div class="col-lg-12">
                     <div class="inqbox float-e-margins">
                        <div class="inqbox-content">
                           <div class="search-form">
                           
                             <form action="" method="get">
                                 <div class="input_s">
                                    <input type="text" placeholder="Search Web" name="q" class="test" value="<?php echo stripslashes(@$cid); ?>">
                                   
                                   <div class="input-group-btn">
                                       <button class="fa fa-search search_button" type="submit">
                                       Search
                                       </button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <small>
<?php if(@$totalRows_searchResults>0){?>                           
                           <?php if(@$cid==""){ ?>
                              <?php echo $totalRows_total; ?> all results found. 
                           <?php }else{?>
                          About    <?php echo $totalRows_total; ?> results : <span class="text-navy">“<?php echo stripslashes(@$cid); ?>”</span>.
                          <small> <!--Request time --> (<?php $time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo ''.$total_time.' seconds.'; ?>)
<!--YOU CAN SAY Page generated in Echo bla-->
   </small>
                          <?php }?>
                           
</small>
                          <div class="hr-line-dashed"></div>


                         
<?php }?>                           
<?php if(@$totalRows_imagesFound>0){?> 
<h3>
<?php if($totalRows_imagesFoundTotal>5){?>
<a href="search-images.php?q=<?php echo $_GET['q']; ?>">Images found for <?php echo $_GET['q']; ?></a>
<?php }else{?>
Images found for <?php echo $_GET['q']; ?>
<?php }?>
</h3>                          
<?php do{ ?>                           
<div style="width:150px; height:100px; overflow:hidden; float:left; margin-right:5px; border:1px solid #CCC;"><a href="<?php echo $row_imagesFound['image_url']; ?>" target="_blank"><img src="piccrop.php?w=150&img=<?php echo base64_encode($row_imagesFound['image_url']); ?>" class="image full-width full-height"></a></div>
<?php } while ($row_imagesFound = mysqli_fetch_assoc($imagesFound)); ?>
<div class="clearfix"></div>
<div class="hr-line-dashed"></div>
<?php }?>
<?php if(@$totalRows_searchResults>0){?>                           
<?php do{ ?>     
<!-- WIDGETTSSSSSSSSSSSS-->                      


<div class="content">
        <div class="search-result">
        <div class=" list">
            <ul id="sortable" class="ui-sortable collection">
                <li class="ui-state-default ui-sortable-handle collection-item avatar z-depth-3" id="list">
                    <div class="video-container">
                        <iframe frameborder="0" allowfullscreen>  <h3><a href="go.php?id=<?php echo $row_searchResults['id']; ?>"><?php echo $row_searchResults['title']; ?></a> <a class="btn" href="go.php?id=<?php echo $row_searchResults['id']; ?>" target="_blank"><i class="fa fa-external-link-square"></i> </a></h3></iframe>
                    </div>
                    <span class="title"><a href="go.php?id=<?php echo $row_searchResults['id']; ?>" class="search_title"><?php echo substr($row_searchResults['title'],0,50);if(strlen($row_searchResults['title'])>50){echo "...".substr($row_searchResults['title'],-30);} ?></a></span><br>
                    <span class="title"><a href="go.php?id=<?php echo $row_searchResults['id']; ?>" class="search-link"><?php echo substr($row_searchResults['current_url'],0,50);if(strlen($row_searchResults['current_url'])>50){echo "...".substr($row_searchResults['current_url'],-30);} ?></a></span>
                    <p class="search_result"> <?php echo searchedSample($database_saha, $saha,$_GET['q'],$row_searchResults['id']);?></p>
                                 <p class="visit_date">
                                 <strong>Visits</strong> : <?php echo $row_searchResults['visits']; ?> <strong>Last Update</strong> : <?php echo $row_searchResults['last_update']; ?>
                              </p>
                    <!-- favorite heart button -->
                    <div class="favorite-heart">
                        <icon class="image yellow_sahara yellow_gold"></icon></div>

                </li>
                <?php } while ($row_searchResults = mysqli_fetch_assoc($searchResults)); ?>
<?php }else if(@$totalRows_total==0 && @$_GET['q']!=""){?>
<?php echo @$totalRows_total; ?> results found for "<?php echo $_GET['q']; ?>". Please try again !
<?php }?>
<?php if(@$totalRows_total>@$lim){?>
                           <div class="text-center">
                              <div class="btn-group">
            </ul>
        </div>
</div>
    </div>



<!-- SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS-->
             <!-- -->



<?php 
$aa=0;
$totap= (($totalRows_total-($totalRows_total%$lim))/$lim);
		if(($totalRows_total%$lim)>0){
			$totap=$totap+1;
		}
		
$crrpage=(($stt/$lim)+1);
$lastpage=floor($totalRows_total/$lim)+1;
if($totap>=18){
	$allowedmin=$crrpage-9;
	if($allowedmin<1){
		$allowedmin=1;
	}
	$allowedmax=$crrpage+9;
	if($allowedmax<18){
	if($totalRows_total<18){	
	$allowedmax=$totalRows_total;
	}else{
	$allowedmax=18;	
	}
	}
	
}else{
	$allowedmin=1;
	$allowedmax=$totap;
}

if($allowedmax<100){
	$roudnoff=2;
}else if($allowedmax<1000){
	$roudnoff=3;
}else if($allowedmax<10000){
	$roudnoff=4;
}else if($allowedmax<100000){
	$roudnoff=5;
}else if($allowedmax<1000000){
	$roudnoff=6;
}

?>         
       
<a href="<?php if((($aa-1)*$lim)==$stt){?>javascript:void();<?php }else{?>http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo $_SERVER['PHP_SELF']; ?>?q=<?php echo (@$_GET['q']); ?>&stt=0<?php }?>">
                                 <button class="btn btn-white pull-left" type="button"><i class="fa fa-chevron-left"></i></button>
</a>                                 

  <?php 


	$aa=$allowedmin-1;
	for($s=$allowedmin;$s<=$allowedmax;$s++){
        $aa=$aa+1;

if($lastpage>=$aa){
		
	 ?><a href="<?php if((($aa-1)*$lim)==$stt){?>javascript:void();<?php }else{?>http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo $_SERVER['PHP_SELF']; ?>?q=<?php echo (@$_GET['q']); ?>&stt=<?php echo ($aa-1)*$lim; ?><?php }?>">
<?php }?>

                                 <button class="btn btn-white <?php  if((($aa-1)*$lim)==$stt){  ?>active<?php }?>"><?php echo  sprintf("%0".$roudnoff."s", $aa);  ?></button>
                                 </a>
<?php }?>
  
  <?php if($totap>0){?>        

<a href="<?php if((($aa-1)*$lim)==$stt){?>javascript:void();<?php }else{?>http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo $_SERVER['PHP_SELF']; ?>?q=<?php echo (@$_GET['q']); ?>&stt=<?php echo (floor(($totalRows_total/$lim)*$lim)-$lim); ?><?php }?>">
                               <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i> </button>
                               </a>
<?php }?>
                              </div>
                           </div>
<?php }?>   
<!--                        
<?php
/////////////////////////////////
//////Top Searched Terms/////////

 if(@$totalRows_total==0 && @$_GET['q']==""){?>
<?php 
mysqli_select_db($saha, $database_saha);$query_searchTerms = "SELECT * FROM log GROUP BY log.keyword ORDER BY SUM(log.count) DESC LIMIT 20";
$searchTerms = mysqli_query($saha, $query_searchTerms) or die(mysqli_error($saha));
$row_searchTerms = mysqli_fetch_assoc($searchTerms);
$totalRows_searchTerms = mysqli_num_rows($searchTerms);
?>
<?php if($totalRows_searchTerms>0){?>
    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Top Searched Terms</strong>
					</div>
					<div class="panel-body text-center">
<?php do{?>
                  <a href="search.php?q=<?php echo $row_searchTerms['keyword']; ?>" class="btn btn-link btn-cons"><?php echo $row_searchTerms['keyword']; ?></a>
<?php } while ($row_searchTerms = mysqli_fetch_assoc($searchTerms)); ?>
						
					</div>
                </div>
			</div>
		</div>
	</div>
<?php }?>
<?php }
//////End Top Searched Terms/////
/////////////////////////////////
?> -->
                        </div>
                     </div>
                  </div>
                        </div>
                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                    </div>
                </div>
            </div>               
                  
               </div>
            </div>
      </div>
     






<script>

var my_srt_list = document.getElementById("list"); // ul
var my_srt_items // li
var ids // li [data-sortable-id]
var sortable = document.getElementById("list");
// Get the sorted NodeList (array) of items
function getOrder() {
    my_srt_items = document.querySelectorAll("[data-sortable-id]");
    IDs = [].map.call(my_srt_items, function (el) {
                        return el.dataset.sortableId; // [data-sortable-id]
                    });
    console.log("IDs: " + IDs);
}
// Refresh the order everytime the item is dragged & dropped
my_srt_list.addEventListener("dragend", getOrder, false);


    
        $(function() {
            $("#sortable").sortable();
            $("#sortable").disableSelection();
        });

        //favorite heart like/unlike
        document.querySelectorAll(".material-icons")
            .forEach(function(el) {
                el.addEventListener("click",
                    function() {
                        if (this.classList.contains("unlike"))
                            this.classList.toggle("like");
                        else this.classList.toggle("unlike");
                    });
            });

  /*    <!--  // Simple list
        Sortable.create(simpleList, { /* options  
            
        });

        // List with handle
        Sortable.create(listWithHandle, {
            handle: '.glyphicon-move',
            animation: 150
        });  */
    </script>

   </body>
</html>




