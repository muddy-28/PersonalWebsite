<!doctype html>
<?php require_once( 'couch/cms.php' ); ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link href="grid.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="lightbox.css" rel="stylesheet">
</head>
<body id="main">
<? include("header.php") ?>
    
    <div class="col1"></div> 
    
    <div class="col1 border resize galleryDiv">
        <a href="<cms:editable name='gallery1' label='gallery1' type='image' group='gallery1'></cms:editable>"
           data-lightbox="<cms:editable name='gallery1' label='gallery1' type='image' group='gallery1'></cms:editable>" 
           data-title="<cms:editable name='gallery1_caption' label='gallery1_caption' type='richtext' group='gallery1' />">
            <img class="galleryimg" src="<cms:editable name='gallery1_thumb' label='gallery1_thumb' type='image' group='gallery1'></cms:editable>">
        </a>
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
        <a href="<cms:editable group='gallery2' name='gallery2' label='gallery2' type='image'></cms:editable>"
           data-lightbox="<cms:editable group='gallery2' name='gallery2' label='gallery2' type='image'></cms:editable>" 
           data-title="<cms:editable group='gallery2' name='gallery2_caption' label='gallery2_caption' type='richtext' />">
            <img class="galleryimg" src="<cms:editable group='gallery2' name='gallery2_thumb' label='gallery2_thumb' type='image'></cms:editable>">
        </a>
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
        <a href="<cms:editable group='gallery3' name='gallery3' label='gallery3' type='image'></cms:editable>"
           data-lightbox="<cms:editable group='gallery3' name='gallery3' label='gallery3' type='image'></cms:editable>" 
           data-title="<cms:editable group='gallery3' name='gallery3_caption' label='gallery3_caption' type='richtext' />">
            <img class="galleryimg" src="<cms:editable group='gallery3' name='gallery3_thumb' label='gallery3_thumb' type='image'></cms:editable>">
        </a>
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
        <a href="<cms:editable group='gallery4' name='gallery4' label='gallery4' type='image'></cms:editable>"
           data-lightbox="<cms:editable group='gallery4' name='gallery4' label='gallery4' type='image'></cms:editable>" 
           data-title="<cms:editable group='gallery4' name='gallery4_caption' label='gallery4_caption' type='richtext' />">
            <img class="galleryimg" src="<cms:editable group='gallery4' name='gallery4_thumb' label='gallery4_thumb' type='image'></cms:editable>">
        </a>
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
        <a href="<cms:editable group='gallery5' name='gallery5' label='gallery5' type='image'></cms:editable>"
           data-lightbox="<cms:editable group='gallery5' name='gallery5' label='gallery5' type='image'></cms:editable>" 
           data-title="<cms:editable group='gallery5' name='gallery5_caption' label='gallery5_caption' type='richtext' />">
            <img class="galleryimg" src="<cms:editable group='gallery5' name='gallery5_thumb' label='gallery5_thumb' type='image'></cms:editable>">
        </a>
    </div>
    
    <div class="col1"></div>
    
    <div class="col11"></div>
    
    <div class="col1"></div> 
    
    <div class="col1 border resize galleryDiv">
        <a href="<cms:editable group='gallery6' name='gallery6' label='gallery6' type='image'></cms:editable>"
           data-lightbox="<cms:editable group='gallery6' name='gallery6' label='gallery6' type='image'></cms:editable>" 
           data-title="<cms:editable group='gallery6' name='gallery6_caption' label='gallery6_caption' type='richtext' />">
            <img class="galleryimg" src="<cms:editable group='gallery6' name='gallery6_thumb' label='gallery6_thumb' type='image'></cms:editable>">
        </a>
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
        <a href="<cms:editable group='gallery7' name='gallery7' label='gallery7' type='image'></cms:editable>"
           data-lightbox="<cms:editable group='gallery7' name='gallery7' label='gallery7' type='image'></cms:editable>" 
           data-title="<cms:editable group='gallery7' name='gallery7_caption' label='gallery7_caption' type='richtext' />">
            <img class="galleryimg" src="<cms:editable group='gallery7' name='gallery7_thumb' label='gallery7_thumb' type='image'></cms:editable>">
        </a>
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
        <a href="<cms:editable group='gallery8' name='gallery8' label='gallery8' type='image'></cms:editable>"
           data-lightbox="<cms:editable group='gallery8' name='gallery8' label='gallery8' type='image'></cms:editable>" 
           data-title="<cms:editable group='gallery8' name='gallery8_caption' label='gallery8_caption' type='richtext' />">
            <img class="galleryimg" src="<cms:editable group='gallery8' name='gallery8_thumb' label='gallery8_thumb' type='image'></cms:editable>">
        </a>
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
        <a href="<cms:editable group='gallery9' name='gallery9' label='gallery9' type='image'></cms:editable>"
           data-lightbox="<cms:editable group='gallery9' name='gallery9' label='gallery9' type='image'></cms:editable>" 
           data-title="<cms:editable group='gallery9' name='gallery9_caption' label='gallery9_caption' type='richtext' />">
            <img class="galleryimg" src="<cms:editable group='gallery9' name='gallery9_thumb' label='gallery9_thumb' type='image'></cms:editable>">
        </a>
    </div>
    
    <div class="col1"></div>
    
    <div class="col1 border resize galleryDiv">
        <a href="<cms:editable group='gallery10' name='gallery10' label='gallery10' type='image'></cms:editable>"
           data-lightbox="<cms:editable group='gallery10' name='gallery10' label='gallery10' type='image'></cms:editable>" 
           data-title="<cms:editable group='gallery10' name='gallery10_caption' label='gallery10_caption' type='richtext' />">
            <img class="galleryimg" src="<cms:editable group='gallery10' name='gallery10_thumb' label='gallery10_thumb' type='image'></cms:editable>">
        </a>
    </div>
    
    <div class="col1"></div>
    
    

<? include("footer.php") ?>
</body>
</html>
<?php COUCH::invoke(); ?>