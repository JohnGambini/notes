<?php 
/*--------------------------------------------------------------------------------------------
 * default_sidebar.php
 *
 * Copyright 2015 2016 2017 2018 by John Gambini
 *
 ---------------------------------------------------------------------------------------------*/
global $dbObj;
global $contentObj;
global $sqlObject;
global $userObj;
global $dataArrays;

?>
<div id="sidebarContainer" class="sidebarContainer">
<div id="sidebar" class="sidebar" style="padding-top: 0.5em">
<div style="margin:0.5em 0em 0em 0em">
<?php set_siteNameMenu($contentObj,$userObj)?>
<?php set_languages($contentObj,$dataArrays->langArray) ?>
<?php set_articleEditSidebarWidget($dbObj, $contentObj, $userObj,$sqlObject, $dataArrays)?>
<?php set_menuList($dbObj, $contentObj, $sqlObject,$dataArrays)?>
</div>
</div> <!-- close sidebar -->
</div> <!-- sidebar container -->
