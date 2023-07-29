<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>

<form action="#" method="post">

<label for="Name">Name:</label> <br>
<input type="text" id="Name" name="Name"> <br>

<label for="Email">Email address:</label> <br>
<input type="text" name="Email" id="Email"> <br>

<label for="Updates">I would like to receive updates and news related to my PHP skills.</label> <br>
<input type="checkbox" name="Updates" id="Updates"><br>


<input type="submit" value="Send">

<div id="Feedback"></div>
<?php
require 'contact_form.php';
?>


</form>
</body>
</html>