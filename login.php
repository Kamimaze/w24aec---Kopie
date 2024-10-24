<?php  
require_once(".\layout\header.php")
require_once(".\app\User.php");

if(isset($_POST["body"]))
{
    $visitor_message = new User();
    $visitor_message->body = $_POST["body"];
    $visitor_message->mobileNumber = $_POST["visitor_phone_number"];
    $visitor_message->senderEmail = $_POST["visitor_email"];
    $visitor_message->senderName = $_POST["visitor_name"];    
    unset($_POST);
    
    $send_result = $visitor_message->send(); 
    if($send_result){
        echo "successful sended message";
    }
    else
    {
        echo "sorry try later!";
    }

}
?>
        

    after register you can login

    
<h1>Login</h1>

<form  method="post">
    <input name="id" placeholder="your id" required minlength="5" maxlength="20"></input>
    <br/>
    <br/>
    <input type="password" name="password" required placeholder="password" minlength="8"/>
    <br/>
    <br/>
    <button type="submit">senden</button>
</form>
<?php  require_once(".\layout\\footer.php") ?>