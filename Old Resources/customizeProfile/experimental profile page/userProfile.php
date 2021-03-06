<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
  <meta charset="utf-8" />
  <title>Profile Page</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <div class="profile_page_picture_container">
      <img src="profileImages/profileImageDefault.png" width="auto" height="300" alt="Profile Image" title="Profile Image" class="profile_page_profile_image" />
    </div>

    <div class="profile_page_button">
      <!--HTML form that allows users to choose the image file they want to upload-->
      <form action="uploadImg.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <!--Button for uploading the file-->
        <button type="submit" name="submit">Upload Profile Image</button>
      </form>
    </div>
  </main>
</body>

</html>