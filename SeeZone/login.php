<?php
include 'views/header.php';
?>
<form id="loginform" action="models/login_user.php" method="POST">
      <label for="uname">Username or Email</label>   
      <input type="text" name="uname" id="uname" placeholder="User or Email" required>
      <label for="pass">Password</label> 
      <input type="password" name="pass" id="pass" placeholder="Password" required>
      <label for="signedin">Keep me signed in</label>
      <input type="checkbox" name="signedin" id="signedin" value="signedin"> 
      <input type="submit" value="login">     
<?php
include 'views/footer.php';
?>
