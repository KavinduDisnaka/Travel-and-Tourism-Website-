<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Responsive Registration Form</title>
  <meta name="viewport" content="width=device-width,
      initial-scale=1.0" />
  <link rel="stylesheet" href="css/register.css" />
</head>

<body>
  <div class="container">
    <h1 class="form-title">Registration</h1>
    <form action="action/registersession.php" onsubmit="return validateForm()">
      <div class="main-user-info">
        <div class="user-input-box">
          <label for="fullName">User Type</label>
          <select name="usertype" id="usertype">
            <option value="tourist">Tourist</option>
            <option value="transportProvider">Transport Providers</option>
            <option value="travelGuide">Travel Guide</option>
          </select>
        </div>
        <div class="user-input-box">
          <label for="username">User Name</label>
          <input type="text" id="username" name="username" placeholder="Enter Username" />
        </div>
        <div class="user-input-box">
          <label for="firstName">First Name</label>
          <input type="text" id="fullName" name="firstName" placeholder="Enter First Name" />
        </div>
        <div class="user-input-box">
          <label for="lastName">Last Name</label>
          <input type="text" id="fullName" name="lastName" placeholder="Enter Last Name" />
        </div>
        <div class="user-input-box">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter Email" />
        </div>
        <div class="user-input-box">
          <label for="phoneNumber">Phone Number</label>
          <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number"/>
        </div>
       <div class="user-input-box">
          <label for="idNumber">ID Number</label>
          <input type="text" id="idNumber" name="idNumber" placeholder="Enter ID Number"/>
        </div>
        <div class="user-input-box">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter Password" />
        </div>
        <div class="user-input-box">
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" />
        </div>
      </div>
      <script>
          function validatePhoneNumber(phoneNumber) {
            const numericInput = phoneNumber.replace(/\D/g, ''); // Remove non-numeric characters
            return numericInput.length === 10;
          }

          function validateIdNumber(idNumber) {
            const regex = /^[0-9]{9}[vxVX]$/; // 9 digits followed by 'v' or 'x' (case insensitive)
            return regex.test(idNumber);
          }

          function validateForm() {
            const phoneNumberInput = document.getElementById('phoneNumber').value;
            const idNumberInput = document.getElementById('idNumber').value;

            if (!validatePhoneNumber(phoneNumberInput)) {
              alert('Please enter a valid 10-digit phone number.');
              return false;
            }

            if (!validateIdNumber(idNumberInput)) {
              alert('Please enter a valid ID number with 9 digits followed by \'v\' or \'x\'.');
              return false;
            }
            return true;
          }
        </script>
      <div class="gender-details-box">
        <span class="gender-title">Gender</span>
        <div class="gender-category">
          <input type="radio" name="gender" id="male" value="male">
          <label for="male">Male</label>
          <input type="radio" name="gender" id="female" value="female">
          <label for="female">Female</label>
          <input type="radio" name="gender" id="other" value="other">
          <label for="other">Other</label>
        </div>
      </div>
      <div class="form-submit-btn">
        <input type="submit" value="Register">
      </div>
    </form>
  </div>
</body>

</html>
