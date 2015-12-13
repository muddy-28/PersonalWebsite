<!doctype html>
<?php require_once( 'couch/cms.php' ); ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>About - Champion Programming</title>
    <link href="grid.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="lightbox.css" rel="stylesheet">
</head>
<body id="main">
        <? include("header.php") ?>
    
        <div class="clear"></div>

        <div class="col1"></div>
    
    <div class="col6 border maincontent">
        <article>
            <h1>About Me</h1>
            <p>I am a creative and determined programmer with a focus on game programming. I am currently attending Ferris State University for 3d Animation and Game Design. I am also a Junior Developer at <a href="http://www.yeticgi.com">YETi CGI</a>.
            </p>
            <h1>Skills</h1>
            <ul>
                <li>C#</li>
                <li>Action Script 3</li>
                <li>Processing</li>
                <li>Unity3D</li>
                <li>Flash Professional</li>
                <li>Photoshop</li>
                <li>Illustrator</li>
                <li>Unreal Engine 4</li>
                <li>3DS Max</li>
                
            </ul>
        
        </article>
    </div>
    
    <div class="col1 middle"></div>
    
    <div class="col2 border maincontent">
        <img class="profile" src="<cms:editable name='profile_picture' label='profile' type='image'></cms:editable>">
    </div>

<? include("footer.php") ?>
</body>
</html>
<?php COUCH::invoke(); ?>