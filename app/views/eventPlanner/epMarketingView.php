<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("eventPlanner/epMarketing"); ?>
  <?php linkCSS("navigation"); ?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <?php linkPhp("vendorNavigation") ?>
  </header>
  <div class="container">
    <?php linkPhp("epSideBar") ?>

    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">MARKETING</span>
        </div>
      </nav>

      <div class="home-content">
        <div class="uploaded_area">
          <a>Uploaded Marketing Content</a>
          <div class="file_details">
            <div class="details">
              <a>2021/10/09</a>
              <div class="file">
                <div class="file_icon">
                  <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i>
                </div>
                <div class="file_name">
                  <a>My file.png</a>
                </div>
              </div>
            </div>
            <div class="status">
              <a style="color: rgb(75, 224, 88);">Pending</a>
              <i class="fa fa-pause-circle-o fa-lg" aria-hidden="true" style="color: rgb(75, 224, 88);"></i>
            </div>
          </div>
          <a href="<?php echo BASEURL . '/payment'; ?>"><button>Pay now</button></a>

        </div>
        <div class="submission_area">
          <div class="title"><a>Upload Your File</a></div>
          <<div class="sub_title"><a>(File should be JPG or PNG)</a>
        </div>
        <div class="submit_file">
          <i class="fa fa-upload fa-4x" aria-hidden="true"></i>
          <br><a>Drag & Drop</a>
          <br><a>or</a>
          <br><a>Browse File to Upload</a>
        </div>

      </div>
  </div>
  </section>
  </div>
   <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

  <?php linkJS("vendor/spMarketing"); ?>
</body>

</html>