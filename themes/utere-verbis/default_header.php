<?php 
/*--------------------------------------------------------------------------------------------
 * default_header.php
 *
 * Copyright 2015 2016 2017 2018 by John Gambini
 *
 ---------------------------------------------------------------------------------------------*/
global $dbObj;
global $userObj;
global $contentObj;
global $sqlObject;
global $dataArrays;
?>
<!DOCTYPE html>
<html lang="<?php echo $contentObj->lang ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php if( strlen($contentObj->title) == 0 ) { ?>
    <title><?php echo APP_NAME ?></title>
<?php } else { ?>
    <title><?php echo htmlspecialchars($contentObj->title) . " - " . APP_NAME?></title>
<?php } ?>
	<!-- code mirror support -->
	<link rel="stylesheet" href="/codemirror/lib/codemirror.css">
	<script src="/codemirror/lib/codemirror.js"></script>
	<script src="/codemirror/mode/xml/xml.js"></script>
	<script src="/codemirror/addon/selection/active-line.js"></script>
	<style type="text/css">
	.CodeMirror {width:100%;height:37.5em;border-top: 1px solid #888; border-bottom: 1px solid #888;}
	</style>
	<meta name="author" content="<?php echo $contentObj->authorFullName ?>">
	<meta property="og:title" content="<?php echo $contentObj->title ?>" />
	<meta property="og:locale" content="<?php echo $contentObj->lang ?>" />
	<meta property="og:type" content="<?php echo $contentObj->ogType ?>" />
	<meta property="og:url" content="<?php echo SITE_NAME . SUBSITE_NAME . $contentObj->permalink ?>" />
	<meta property="og:image" content="<?php echo replace_wb_variable($contentObj->articleImage, $dbObj, $userObj, $contentObj) ?>" />
	<meta name="description" content="<?php echo htmlspecialchars($contentObj->articleDescription)?>">
	<meta property="og:description" content="<?php echo htmlspecialchars($contentObj->articleDescription) ?>" />
	<meta property="og:site_name" content="<?php echo APP_NAME  ?>" />
	<link rel="shortcut icon" href="<?php echo SITE_NAME . SUBSITE_NAME ?>/favicon.ico">
	<link rel="stylesheet" href="<?php echo WORKBENCH_FOLDER ?>/css/dialogs.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo WORKBENCH_FOLDER ?>/css/workbench.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo WORKBENCH_FOLDER ?>/css/icomoon.css" type="text/css" media="screen"/>

	<!-- css theme specific overides of default workbench css  -->
	<style>
		 body { background-image: linear-gradient(#CDCDCD, #EEEEEE, #EFEFEF); }
		/*---------------- main menu ----------------------*/
		.wb-icon-menu::before { background: #BBBBBB; box-shadow: 0 -6px #BBBBBB, 0 -12px #BBBBBB; }
		.wb-icon-menu:hover::before { background: #EEEEEE; box-shadow: 0 -6px #EEEEEE, 0 -12px #EEEEEE; }
		.icon-circle-down::before { color: #BBBBBB; font-size:14pt; vertical-align: -4px; }
		.icon-circle-down:hover::before { color: #EEEEEE; }
		.icon-point-up::before { color: #999999; font-size: 14pt; vertical-align: 4px; }
		.icon-point-up:hover::before { color: #DDDDDD; }
		.icon-arrow-up2::before { color: #777777; font-size: 14pt; vertical-align: -2px; }
		.icon-arrow-up2:hover::before { color: #DDDDDD; }
		#pageTitle { color: #777777; }
		.menuHighlightItem { color:#4444DD; text-decoration:none; } 
		.menuHighlightItem:hover { color:#444444D; text-decoration:underline; } 
		a.linkItem { color:#44444DD; } 
		a.linkItem:hover { color:##44444D; } 

		 /*--------------------- CSS for main page sections ------------------*/
		.sidebarContainer{}
		 .contentContainer {}
		 .topMenu { display:flex; align-items:center; position:fixed; top:0;
		 	background-color:transparent; color:white; width:100%;
		 	margin:0em auto; height:3.50em; z-index:1; }
		 .mainmenu { display:flex; align-items:center; position:fixed;
			top: -2.5em; left: 0px; width: 100%; height: 3.50em;
			z-index:1; background-color:black; box-shadow: 0px 2px 12px #888888;
			transition: top 0.5s; }
		.contentMenu { background-color:transparent; }
		
		/*--------------- CSS for specific page types -----------------------*/
		.gallery {}
		.parallax {}
		.menuItem {}
		.wb-dialog .menuItem { text-shadow: none; }
		.articleTab .menuItem { text-shadow: none; }
		.featuredItemMain {}
		.featuredItem {}
		
		/*-------------- CSS for includes and widgets ---------------------*/
		
		.siteName { color:#FFFFFF; font-family: times-new-roman; font-size: 20pt; }
		.siteName:hover { color:#DDDDEE; }
		#userName { color:#DDDDEE; }
		#articleEditLink { color:#DDDDEE; }
		#articleEditLink:hover { color:#FFFFFF; }
		#galleryTitle {}
		#rootContentItems {	display:inline-block; }
		
		@media all and (max-width:699px) {
			#siteName {
				display:inline-block;
			}
			
			#userName {
				display:none;
			}
			
			#rootContentItems {
				display:none;
			}
			
		}
		
		/*-----------------------------------------------------------------
		 * CSS for article blocks
		 */
		
		article {
			background-color: white;
			color: #000000;
			text-shadow: 0px 0px #000000;
			border:1px solid #990000;
		}
		
		.firstCharacter:first-letter {
			color:#DD2266;
			text-shadow:1px 1px black;
		}
		
		/*------------- css for dialogs and scroll table widget --------------*/
		
		#popupLanguages { display:block; }
		#popupHr { display:block; }
		
		@media all and (max-width:699px) {
			#popupMainMenu {
				display:none;
			}
		}
	</style>

	<script type="text/javascript" src="<?php echo WORKBENCH_FOLDER ?>/js/workbench.js"></script>
	<script type="text/javascript" async src="/MathJax-2.6/MathJax.js?config=TeX-AMS_SVG"></script>
	<meta http-equiv="Cache-Control" content="no-store" />
</head>
<body id="body">
<!-- This is so javascript:wbAjax has somewhere to grab the web application directory from -->
<input id="webapp" type="text" hidden="true" value="<?php echo WEBAPP ?>"/>
<input id="workbench_folder" type="text" hidden="true" value="<?php echo WORKBENCH_FOLDER ?>"/>
<input id="pageType" type="text" hidden="true" value="<?php echo $contentObj->pageType ?>"/>
