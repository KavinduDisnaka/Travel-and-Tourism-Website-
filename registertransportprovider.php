<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Registration Transport Providers</h1>
      <form action="action/regsitertransporter.php" method="post" enctype="multipart/form-data">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Vehicle Type</label>
            <select name="vehicletype" id="usertype">
              <option value="Van">Van</option>
              <option value="Car">Car</option>
              <option value="Bus">Bus</option>
            </select>
          </div>
          <div class="user-input-box custom-file-upload">
            <label for="username">Profile Picture</label>
            <input type="file" id="propic" name="image" style="background-color: #fafafa;"/>
          </div>
          <div class="user-input-box">
            <label for="vehicleNumber">Vehicle Number</label>
            <input type="text"
                    id="vehicleNumber"
                    name="vehicleNumber"
                    placeholder="Enter Vehicle Number"/>
          </div>
          <div class="user-input-box">
            <label for="fullName">Location</label>
            <input type="text"
                    id="fullName"
                    name="location"
                    placeholder="Location"/>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Create Profile">
        </div>
      </form>
    </div>
  </body>
</html>