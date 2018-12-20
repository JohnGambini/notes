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
<div id="contentMenu" class="contentMenu">
	<div id="mainmenuItem2" style="margin:0em 0em 0em 20px">
			<?php set_siteNameMenu($contentObj,$userObj,'contentMenuTrigger-2') ?>
	</div>
	<div id="mainmenuItem3">&nbsp;</div>
	<div id="mainmenuItem4" style="padding:0em 1% 0em 0em">
		<?php set_siteUserMenu($contentObj, $userObj); set_articleEditLink($contentObj, $userObj) ?>
	</div>
</div>
