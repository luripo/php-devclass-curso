<?php require "../bootstrap.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">
    <title>Curso de PHP devclass</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <style>

    a.bt-style:link {
    font-weight: bold;
    color:#FC0A67;
    font-family:Arial, Helvetica, sans-serif;
    text-decoration:none;
    }
    a.bt-style:visited{
    font-weight: bold;
    font-family:Arial, Helvetica, sans-serif;
    color:#FC0A67;
    text-decoration:none;
    }
    a.bt-style:hover {
    font-family:Arial, Helvetica, sans-serif;
    font-weight: bold;
    color:#000;
    text-decoration:underline;
    }
    #botao{
        padding: 8px;
        float: right
    }
    .button{
        background-color:#FC0A67;
        font-weight: bold;
        color:#fff;
    }
    
    th, td{
        text-align:center;
    }

    </style>
</head>
<body>
    <div class="container">
<?php
try {
	require load();
} catch (Exception $e) {
	echo $e->getMessage();
}
?>
    </div>
</body>
</html>
 