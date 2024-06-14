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
      <h1 class="form-title">Registration Travel Guide</h1>
      <form action="action/regsiterguides.php" method="post" enctype="multipart/form-data">
        <div class="main-user-info">
          <div class="user-input-box custom-file-upload">
            <label for="username">Profile Picture</label>
            <input type="file"  id="propic" name="image" style="background-color: #fafafa;"/>
          </div>
          <div class="user-input-box">
            <label for="username">Location</label>
            <input type="text"
                    id="Location"
                    name="location"
                    placeholder="Enter Location"/>
          </div>
          <div class="user-input-box">
            <label for="fullName">Description</label>
            <input type="text"
                    id="fullName"
                    name="description"
                    placeholder="Enter Description"/>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Create Profile">
        </div>
      </form>
    </div>
  </body>
</html>