<!doctype html>
<!--
/*******************************************/
/*------------CHAMPION HOMEPAGE------------*/
/*-----------------------------------------*/
/*******************************************/

/********************************/
/*--------------TEAM------------*/
/********************************/

Jonathan Champion



/-->
<?php require_once( 'couch/cms.php' ); ?>
    
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Champion Programming</title>
        <link href="grid.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="lightbox.css" rel="stylesheet">
        <link rel="shortcut icon" href="Images/favicon.ico">
    </head>

    <body id="main">
        <? include("header.php") ?>

        <div class="clear"></div>

        <div class="col1"></div>

        <!--    Left Box    -->
        <div class="col4 mainpagecontentbox resize border" id="mainpagecontentbox1" style="background-image: url(<cms:editable name='left_box_image' label='left image' type='image'></cms:editable>)">
                <a class="fill" href="gallery.php"></a>
        </div>
        
        <!--    Center Divider    -->
        
        <div class="col1 middle"></div>

        <!--    Right Box    -->
        <div class="col4 mainpagecontentbox resize border" id="mainpagecontentbox2" style="background-image: url(<cms:editable name='right_box_image' label='right image' type='image'></cms:editable>)">
            <a class="fill"  href="gallery.php">
                
            </a>
        </div>
        
        
        

        <div class="col1"></div>
        
        <? include("footer.php") ?>
    </body>

    </html>
    <?php COUCH::invoke(); ?>