
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){ 



echo '<h4>You submitted a form!!</h4> <br>';

if (isset($_POST["Updates"])){
    $UpdatesText = "";
}

if(!empty($_POST["Name"]) && !empty($_POST["Email"]))
{
    function checkEmail($Email){
        $regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        return preg_match($regex, $Email);
        }
    $Name = $_POST["Name"];
    $Email= $_POST["Email"];
    $UpdatesText = "not";

    if(checkEmail($Email))
    {
        echo "<h4>Your name is: $Name</h4>";
        echo "<h4>Your email is: $Email</h4>";
        echo "<h4>You have decided to $UpdatesText receive updates and news related to your PHP skills!</h4>";
    }
    else echo "<h4>Your email-address is not valid!</h4>";
}
else echo "Some of your information wasn't given!. ";
}




// echo 'Your name is: $_POST["Name"]';
// echo 'Your email address is: $_POST["Email"]';
// echo "You have decided *NOT* to receive updates."



?>

