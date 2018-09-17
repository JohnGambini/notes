<?php
/*--------------------------------------------------------------------------------------------
 * front-page_contentMenu.php
*
* Copyright 2015 2016 2017 2018 by John Gambini
*
---------------------------------------------------------------------------------------------*/
global $contentObj;
global $userObj;
global $dataArrays;
global $errorMessage;
global $sqlObject;
global $dbObj;
?>
<!-- utere-verbis/default_contentMenu.php -->
<div id="transparentContentMenu" class="contentMenu">
	<div id="mainmenuItem1" style="margin:0em 0em 0em 20px">
		<?php set_siteNameMenu($contentObj,$userObj) ?>
	</div>
	<div id="mainmenuItem3" style="margin:10px 0em;text-align:left">
		<ul id="rootContentItems" style="font-size:16pt">
			<?php
				if($dataArrays->get_rootContentArray($dbObj, $sqlObject)) {
				
				foreach($dataArrays->rootContentArray as $key => $values) {
			?>
				<li style="display:inline-block; padding:0em 1em; color:#DDDDEE; text-shadow:1px 1px #000000"><a class="menuItem" href="<?php echo SITE_NAME . SUBSITE_NAME . $values['permalink']?>"><?php echo $values['title']?></a></li> 
			<?php } } else { $errorMessage = $dbObj->error;
			 } ?>	
		</ul>
	</div>
	<div id="mainmenuItem4" style="margin:0em 1% 0em 0em; align-items:center; text-align:right">
		<?php set_siteUserMenu($contentObj, $userObj); set_articleEditLink($contentObj, $userObj) ?>
	</div>
</div>
