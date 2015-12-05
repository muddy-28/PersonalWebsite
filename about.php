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
    
        <div class="clear"></div>

        <div class="col1"></div>
    
    <div class="col6 border maincontent">
        <article>
            <h1>Some Heading</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nunc justo. Etiam tempus laoreet erat. Etiam semper dapibus justo vel sodales. Donec vitae dignissim mauris. Duis pretium justo in laoreet porttitor. Cras urna risus, consectetur ut consectetur at, vulputate et arcu. Nullam placerat mi ac risus venenatis finibus. Vestibulum sed dui tincidunt, efficitur odio eget, mollis ex. Mauris sed egestas erat, quis eleifend orci.
            </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nunc justo. Etiam tempus laoreet erat. Etiam semper dapibus justo vel sodales. Donec vitae dignissim mauris. Duis pretium justo in laoreet porttitor. Cras urna risus, consectetur ut consectetur at, vulputate et arcu. Nullam placerat mi ac risus venenatis finibus. Vestibulum sed dui tincidunt, efficitur odio eget, mollis ex. Mauris sed egestas erat, quis eleifend orci.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nunc justo. Etiam tempus laoreet erat. Etiam semper dapibus justo vel sodales. Donec vitae dignissim mauris. Duis pretium justo in laoreet porttitor. Cras urna risus, consectetur ut consectetur at, vulputate et arcu. Nullam placerat mi ac risus venenatis finibus. Vestibulum sed dui tincidunt, efficitur odio eget, mollis ex. Mauris sed egestas erat, quis eleifend orci.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nunc justo. Etiam tempus laoreet erat. Etiam semper dapibus justo vel sodales. Donec vitae dignissim mauris. Duis pretium justo in laoreet porttitor. Cras urna risus, consectetur ut consectetur at, vulputate et arcu. Nullam placerat mi ac risus venenatis finibus. Vestibulum sed dui tincidunt, efficitur odio eget, mollis ex. Mauris sed egestas erat, quis eleifend orci.
            </p>
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