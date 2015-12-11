<!doctype html>
<?php require_once( 'couch/cms.php' ); ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link href="grid.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body id="main">
<? include("header.php") ?>
    
    <div class="col1"></div> 
    
    <div class="col1 border resize galleryDiv">
    <img class="galleryimg" src="<cms:editable name='gallery1' label='gallery1' type='image'></cms:editable>">
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
    <img class="galleryimg" src="<cms:editable name='gallery2' label='gallery2' type='image'></cms:editable>">
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
    <img class="galleryimg" src="<cms:editable name='gallery3' label='gallery3' type='image'></cms:editable>">
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
    <img class="galleryimg" src="<cms:editable name='gallery4' label='gallery4' type='image'></cms:editable>">
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
    <img class="galleryimg" src="<cms:editable name='gallery5' label='gallery5' type='image'></cms:editable>">
    </div>
    
    <div class="col1"></div>
    
    <div class="col11"></div>
    
    <div class="col1"></div> 
    
    <div class="col1 border resize galleryDiv">
    <img class="galleryimg" src="<cms:editable name='gallery6' label='gallery6' type='image'></cms:editable>">
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
    <img class="galleryimg" src="<cms:editable name='gallery7' label='gallery7' type='image'></cms:editable>">
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
    <img class="galleryimg" src="<cms:editable name='gallery8' label='gallery8' type='image'></cms:editable>">
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
    <img class="galleryimg" src="<cms:editable name='gallery9' label='gallery9' type='image'></cms:editable>">
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
    <img class="galleryimg" src="<cms:editable name='gallery10' label='gallery10' type='image'></cms:editable>">
    </div>
    
    <div class="col1"></div>
    
    

<? include("footer.php") ?>
</body>
</html>
<?php COUCH::invoke(); ?>