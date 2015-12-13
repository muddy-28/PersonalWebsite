<!doctype html>
<?php require_once( 'couch/cms.php' ); ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Contact - Champion Programming</title>
    <link href="grid.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="lightbox.css" rel="stylesheet">
</head>
<body id="main">
<? include("header.php") ?>
    <div class="col3"></div>

    <div class="col5 border maincontent">
        <article>
        <?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit">
                <div><label>Your name: </label> <input name="name" type="text" value="" size="30" required /></div>
                <div><label>Your email: </label><input name="email" type="text" value="" size="30" required /></div>
                <div><label>Your message: </label><textarea name="message" rows="7" cols="30" required ></textarea></div>
                
                <input id="submit" type="submit" value="Send email" />
            </form>
            <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("sundavistalri@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?>
            </article>
    </div>

    <? include("footer.php") ?>
</body>
</html>
<?php COUCH::invoke(); ?>