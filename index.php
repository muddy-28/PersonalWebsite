<?php require_once( 'couch/cms.php' ); ?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link href="grid.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body id="main">
    <? include("header.php") ?>
    
    <div class="col12"></div>
    <div id="tall" class="clear"></div>
    
    <div class="col1"></div>
    
    <div class="col4" id="mainpagecontentbox" style="background-image: url(<cms:editable name='left_box_image' label='left image' type='image'></cms:editable>)">
        <a href="#">
            <img class="center-cropped" src="<cms:editable name='left_box_image' label='left image' type='image'></cms:editable>">
        </a> 
    </div>
    
    <div class="col2"></div>
    
    <div class="col4" id="mainpagecontentbox" style="background-image: url(<cms:editable name='right_box_image' label='right image' type='image'></cms:editable>)">
        <a href="#">
            <img class="center-cropped" src="<cms:editable name='right_box_image' label='right image' type='image'></cms:editable>">
        </a> 
    </div>
    
    <div class="col1"></div>
    
        
    
    <div class="clear"></div>
    

<? include("footer.php") ?>
</body>
</html>
<?php COUCH::invoke(); ?>