<?php
/*--------------------------------------------------------------------------------------------
 * gallery_content.php
 *
 * Copyright 2015 2016 2017 2018 by John Gambini
 *
 ---------------------------------------------------------------------------------------------*/
global $dbObj;
global $contentObj;
global $sqlObject;
global $dataArrays;
global $dialogsObj;
global $userObj;

if($userObj->type > 1 ){
	$dialogsObj->functions['add-content'] = 'set_galleryAddContentDlg';
	$dialogsObj->functions['edit-content'] = 'set_galleryEditContentDlg';
}

//see if there is content for the right column
$modulus = 4;
$width = "25%";
$dataArrays->get_tabsArray($dbObj, $sqlObject, $contentObj->ID);
if( count($dataArrays->tabsArray) != 0) {
	$modulus = 3;
	$width = "33%";
}

?>

<div id="contentContainer" class="contentContainer" style="background-image:url(<?php echo WORKBENCH_FOLDER . "/images" . $contentObj->galleryImage ?>)">
<input id="tabCount" hidden="true" value="<?php echo count($dataArrays->tabsArray)?>"/>
<div id="content" class="content">
<?php get_contentMenu($contentObj) ?>
<div  id="mainContent" style="padding:0.5em 1.01em 0.5em 1em">
<?php get_rightbar($contentObj)?>
<?php 
foreach( $dataArrays->galleryItemsArray as $key => $value) {
	$linkSpec = substr($value['permalink'],0,4);
	$target = '_self';
	if($linkSpec == 'http') { 
		$linkSpec = $value['permalink'];
		$target = "_blank";
	}
	else
		$linkSpec = WEBAPP . "/" . htmlspecialchars($value['permalink']) . '?p=' . $contentObj->ID . "&gp=" .$contentObj->parentId;
		
?> 
<div class="topicblock fontSpecSmall">
<a class="menuItem" href="<?php echo $linkSpec ?>" target="<?php echo $target ?>">
<img class="menuItem"  src="<?php echo $contentObj->contentDir . "/" . $value['galleryImage']?>">
<?php echo $value['title']?></a>
</div>
<?php
}?>
</div> <!-- close main content -->
</div> <!-- close content -->
</div> <!-- close content container -->
<script>
function pagePreferences()
{
	var tabCount = document.getElementById('tabCount');
	if( tabCount && tabCount.value > 0 ) {
		var leftGallery = document.getElementById('leftGallery');
		var rightGallery = document.getElementById('rightGallery');
		if( leftGallery && rightGallery ) {
			leftGallery.style.width = "80%";
			rightGallery.style.width = "20%";
		}
	} 
}
</script>
