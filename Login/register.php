<?php
echo "<title>Register Here!</title>"; //Page title
echo "<h1>Register Page</h1>"; //Heading
echo "<form action='finished.php' method='post'>"; 
echo "Username: <input type='text' name='usrnme' /><br>";  //Username box
echo "Character Name: <input type='text' name='CharName' /><br>"; //CharName box
echo "Password: <input type='password' name='pwd' />  <br>"; //Password box
echo "<input type='hidden' name='registerform' value='1'>"; //Hidden Field.
echo "<input type='submit' value='submit'>"; //Submit button.
echo "</form>"; 
?>