<?php
echo "<title>Login Here!</title>"; //Page title
echo "<h1>Login Page</h1>"; //Heading
echo "<form action='finished.php' method='post'>"; 
echo "Username: <input type='text' name='usrnme' /><br>";  //Username box
echo "Password: <input type='password' name='pwd' />  <br>"; //Password box
echo "<input type='hidden' name='registerform' value='0'>"; //Hidden Field.
echo "<input type='submit' value='submit'>"; //Submit button.
echo "</form>"; 
?>