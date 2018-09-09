<?php
/*--------------------------------------------------------------------------------------------
 * default_contentMenu.php
 *
 * Copyright 2015 2016 2017 2018 by John Gambini
 *
 ---------------------------------------------------------------------------------------------*/
global $contentObj;
global $userObj;

$menuId = 'popupContentMenu';
?>
<div id="contentMenu" class="contentMenu">
	<div id="mainmenuItem2">&nbsp;</div>
	<div id="mainmenuItem3">
		<div id="pageTitle" class="fontSpecSmall" style="width:100%;margin:0em 0em 0em 0.5em;text-align:center"><?php set_pageTitle($contentObj) ?></div>
	</div>
	<div id="mainmenuItem4">
		<?php set_siteUserMenu($contentObj, $userObj); set_articleEditLink($contentObj, $userObj) ?>
	</div>
</div>
