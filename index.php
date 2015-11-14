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
    <header>
        <div class="col1"></div>
        <a href="#" class="col1"><img src="Images/logo100.gif"></a>
        <div id="title" class="col3" class="clear" >
            
            <h1>Jonathan Champion</h1>
            <h2>Game Programmer</h2>
        </div>
        <nav class="col6" >
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Resume</a></li>
            </ul>
        </nav>
        <div class="col1" class="clear"></div>
        
    </header>
    <div class="col12"></div>
    <div id="tall" class="clear"></div>
    
    <div class="col1"></div>
    <cms:editable name='main_content_left' type='richtext'>
    <div class="col4" id="mainpagecontentbox"></div>
    </cms:editable>
    <div class="col2"></div>
    <cms:editable name='main_content_right' type='richtext'>
    <div class="col4" id="mainpagecontentbox"></div>
    </cms:editable>
    <div class="col1"></div>
    
        
    
    <div class="clear"></div>
    <footer >
        
        <div class="col1"></div>
        <div class="col10" id="horizLine"></div>
        <div class="col1" ></div>
        <div class="clear"></div>
        <div class="col1" ></div>
        <div class="col4">
            <p>site design &copy; Jonathan Champion</p>
        </div>
        <nav class="col6" >
            <ul>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">GitHub</a></li>
            </ul>
        </nav>
        <div class="col1"></div>
        <div class="clear"></div>
    </footer>


</body>
</html>
<?php COUCH::invoke(); ?>