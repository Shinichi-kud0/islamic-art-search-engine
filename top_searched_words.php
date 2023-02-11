<?php
/////////////////////////////////
//////Top Searched Terms/////////
?>
<?php 
mysqli_select_db($saha, $database_saha);$query_searchTerms = "SELECT * FROM log GROUP BY log.keyword ORDER BY SUM(log.count) DESC LIMIT 20";
$searchTerms = mysqli_query($saha, $query_searchTerms) or die(mysqli_error($saha));
$row_searchTerms = mysqli_fetch_assoc($searchTerms);
$totalRows_searchTerms = mysqli_num_rows($searchTerms);

?>
<?php if($totalRows_searchTerms>0){?>
<div class="panel panel-default" style="border:none; margin-top:50px;">
<fieldset>
<legend style="text-align:center;">Top Searched Queries</legend>
<div class="panel-body text-center">
<?php do{?>
<a href="search.php?q=<?php echo $row_searchTerms['keyword']; ?>" class="btn btn-white btn-cons" style="margin:2px;"><?php echo $row_searchTerms['keyword']; ?></a>
<?php } while ($row_searchTerms = mysqli_fetch_assoc($searchTerms)); ?>
</div>
</fieldset>
</div>
<?php }?>
<?php 
//////End Top Searched Terms/////
/////////////////////////////////
?>