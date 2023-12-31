<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link rel="stylesheet" href="register.css">
  <style>
    .error {
      display: none;
      color: red;
      font-size: 12px;
      margin-top: 5px;
    }

    .error.active {
      display: block;
      border-radius: 3px;
      border-color: red;
    }
  </style>
</head>
<body>
  <div class="form-content">
    <form action="register-redirect.php" method="POST" onsubmit="return validateForm()">
      <h3>Register Now</h3>
      <div class="textfield">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required placeholder="Enter Your Name">
        <div class="error" id="name-error">Please enter a valid name</div>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Enter Your Email">
        <div class="error" id="email-error">Please enter a valid email address</div>

        <label for="contact">Contact No</label>
        <input type="tel" id="contact" name="contact" required placeholder="Enter Your Phone Number">
        <div class="error" id="contact-error">Please enter a valid phone number</div>

        <label for="dob">Date of birth</label>
        <input type="date" id="dob" name="dob" required>
        <div class="error" id="dob-error">Please enter your date of birth</div>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Password">
        <div class="error" id="password-error">Use at least 8 characters with special characters like @, !, or # and numbers like 1, 2, or 3</div>
      </div>
      <input type="submit" name="submit" value="Sign Up" class="form-button">
    </form>
    <p class="register">Already have an account? <a href="../login/login.php">Login</a></p>
  </div>

  <script src="reg-validation.js"></script>
    </body>
    </html>