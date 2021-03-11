<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Welcome to Codesponsors.com</title>
</head>
<body>

 
<div id="container">
    <h1>Welcome to Codesponsors.com!</h1> 
    <div id="body">
        <p>If you are seeing this means, it my work behind it <a href="http://codesponsors.com/">Codesponsors</a>.</p>
    </div> 

    <h1>Image example</h1> 
    <div id="body">
       <img src="<?php echo base_url("assets/images/codesponsor-user.png"); ?>" alt="">
    </div> 

    <h1>CSS example</h1> 
    <style media="print">
        #css { 
            color: red; 
        }
    </style>
    <div id="body">
       <p id="css">The appearance of a default mPDF document based on HTML should approximate to its appearance in a browser.</p>      
    </div> 

    <?php if(isset($data) && !empty($data)){ ?>
        <h1>Example with dynamic data</h1> 
        <p> my name is <?php echo $data["name"]; ?> and my age  <?php echo $data["age"]; ?></p>
    <?php } ?>
</div>
 
</body>
</html>