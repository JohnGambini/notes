<?php
/*--------------------------------------------------------------------------------------------
 * default_contentMenu.php
 *
 * Copyright 2015 2016 2017 2018 by John Gambini
 *
 ---------------------------------------------------------------------------------------------*/
global $contentObj;
global $userObj;
?>
<div id="contentMenu" class="contentMenu">
	<div style="flex:1 0 30%; padding-left: 1.85em">
	<div style="border: 1px solid #222266"><?php set_searchBarWidget() ?></div>
	</div>
	
	<div class="fontSpecTitle" style="flex:1 0 40%;text-align:center">
	<?php if($contentObj->parentId > 0 ) { ?>
		<a class="icon icon-arrow-up2 menuItem fontSpecTitle" style="text-decoration:none" href="<?php echo SITE_NAME . SUBSITE_NAME . $contentObj->parentPermalink . "?p=" . $contentObj->grandParentId ?>">
			<span id="pageTitle" class="fontSpecTitle"><?php echo $contentObj->title ?></span>
		</a>
	<?php } else { ?>
			<span id="pageTitle"><?php echo $contentObj->title ?></span>
	<?php } ?>
	</div>
	
	<div style="flex:1 0 20%"><?php set_siteUserMenu($contentObj, $userObj); set_articleEditLink($contentObj, $userObj) ?></div>
	
</div>
