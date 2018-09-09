<?php
/*--------------------------------------------------------------------------------------------
 * parallax_contentMenu.php
*
* Copyright 2015 2016 2017 2018 by John Gambini
*
---------------------------------------------------------------------------------------------*/
global $contentObj;
global $userObj;

$menuId = 'popupContentMenu';
?>
<div id="transparentContentMenu" class="transparentContentMenu">
	<div id="mainmenuItem2">&nbsp;</div>
	<div id="mainmenuItem3">&nbsp;</div>
	<div id="mainmenuItem4">
		<?php set_siteUserMenu($contentObj, $userObj); set_articleEditLink($contentObj, $userObj) ?>
	</div>
</div>
