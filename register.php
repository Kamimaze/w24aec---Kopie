<?php  require_once(".\layout\header.php") ?>
    please register first

<h1>Registration</h1>

<form  method="post">
    <input name="id" placeholder="your id" required minlength="5" maxlength="20"></input>
    <br/>
    <br/>
    <input type="email" name="email" required placeholder="email" maxlength="120"/>
    <br/>
    <br/>
    <input type="text" name="first name" required placeholder="first name" maxlength="60"/>
    <br/>
    <br/>
    <input type="text" name="last name" required placeholder="last name" maxlength="60"/>
    <br/>
    <br/>
    <input type="password" name="password" required placeholder="password" minlength="8"/>
    <br/>
    <br/>
    <button type="submit">senden</button>
</form>

<?php  require_once(".\layout\\footer.php") ?>