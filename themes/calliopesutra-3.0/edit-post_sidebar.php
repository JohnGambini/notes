<?php
/*--------------------------------------------------------------------------------------------
 * edit-post_sidebar.php
 *
 * Copyright 2015 2016 2017 2018 by John Gambini
 *
 ---------------------------------------------------------------------------------------------*/
global $dbObj;
global $contentObj;
global $dataArrays;
global $userObj;

?>
<div id="sidebarContainer" class="sidebarContainer">
<div id="sidebar" class="sidebar">
<div style="margin:0.5em 0em 0em 0em">
<?php set_siteNameMenu($contentObj,$userObj)?>
<?php set_languages($contentObj, $dataArrays->langArray) ?>
<?php set_tabsList($userObj, $contentObj, $dataArrays) ?>
</div>
</div> <!-- close sidebar -->
</div> <!-- sidebar container -->