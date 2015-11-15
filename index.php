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

        <!--    Left Box    -->
        <div class="col4 mainpagecontentbox" id="mainpagecontentbox1" style="background-image: url(<cms:editable name='left_box_image' label='left image' type='image'></cms:editable>)">
                <a href="#">
                    <!--     Fake Image that will be Transparent       -->
                    <img class="center-cropped" src="<cms:editable name='left_box_image' label='left image' type='image'></cms:editable>">
                </a>
        </div>
        
        <!--    Center Divider    -->
        <div class="col1 middle"></div>
        <div class="col1 middle"></div>

        <!--    Right Box    -->
        <div class="col4 mainpagecontentbox" id="mainpagecontentbox2" style="background-image: url(<cms:editable name='right_box_image' label='right image' type='image'></cms:editable>)">
            <a href="#">
                <!--     Fake Image that will be Transparent       -->
                <img class="center-cropped" src="<cms:editable name='right_box_image' label='right image' type='image'></cms:editable>">
            </a>
        </div>
        
        <script>
             var resize = function(){
                var cw =$('.mainpagecontentbox').width();
    
                $('#mainpagecontentbox2').css({
                    'height': cw + 'px'
                });
                 $('#mainpagecontentbox1').css({
                    'height': cw + 'px'
                });
                 $('.middle').css({
                    'height': cw + 'px'
                });
                 var lw =$('#logoDiv').width();
                 $('#logoDiv').css({
                    'height': lw + 'px'
                });
            };
            resize();
            
            $(window).resize(function(){resize()});
        </script>
        

        <div class="col1"></div>
        <div class="clear"></div>
        <? include("footer.php") ?>
    </body>

    </html>
    <?php COUCH::invoke(); ?>