<?php  
require_once(".\layout\header.php")
//require_once(".\app\User.php");

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