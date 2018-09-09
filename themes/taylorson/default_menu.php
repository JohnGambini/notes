<?php 
/*--------------------------------------------------------------------------------------------
 * default_menu.php
 *
 * Copyright 2015 2016 2017 2018 by John Gambini
 *
 ---------------------------------------------------------------------------------------------*/
global $contentObj;
global $userObj;
?>
<div id="mainmenu" class="mainmenu" style="border:1px solid blue;padding:0em 2em">
	<div style="flex:1 0 19%; padding:0em 0em 0em 1.5em">Default Menu</div>
	<div style="flex:1 0 60%"></div>
	<div style="flex:1 0 20%"><?php set_siteUserMenu($contentObj, $userObj) ?></div>
</div> <!-- close main menu -->
