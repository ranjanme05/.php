<!DOCTYPE html>
<html>
<head>
  <title>User Registration | PHP</title>
</head>
<body>
  
  <div>
    <form action="registration.php" method="post">
      <div class="container">
        <h1>Registration</h1>
        <p>fill up the form with the correct values.</p>
        <label for="firstname"><b>First Name</b></label>
        <input type="text" name="firstname" required>
        
        <label for="lastname"><b>Lastname</b></label>
        <input type="text" name="lastname" required>
        
        <label for="email"><b>Email Address</b></label>
        <input type="email" name="email" required>
        
        <label for="phonenumber"><b>Phone Number</b></label>
        <input type="text" name="phonenumber" required>
        
        <label for="password"><b>Password</b></label>
        <input type="password" name="password" required>
        
        <input type="submit" name="create" value="Sign Up">
      </div>
    </form>
  </div>
  
</body>
</html>