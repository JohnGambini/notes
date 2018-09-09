<?php 
/*--------------------------------------------------------------------------------------------
 * default_content.php
 *
 * Copyright 2015 2016 2017 2018 by John Gambini
 *
 ---------------------------------------------------------------------------------------------*/
global $contentObj;
?>
<div id="contentContainer" class="contentContainer">
<div id="content" class="content">
<?php get_contentMenu($contentObj) ?>
<div id="mainContent" style="padding: 0.02em 0em 0em 0em;border:1px solid #00FF00">
<?php get_rightbar($contentObj)?>
<div class="fontSpecVerySmall">Default Page</div>
</div> <!-- close mainContent -->
</div> <!-- close content -->
</div> <!-- close content container -->
