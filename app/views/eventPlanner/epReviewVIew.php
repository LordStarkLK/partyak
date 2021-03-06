<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("eventPlanner/epReview"); ?>
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
          <span class="dashboard">REVIEW</span>
        </div>
      </nav>
      <div class="home-content">
        <div class="overall-details">
          <a>Overrall Rating<br></a>
          <div class="overall-rating"><a>4.0</a></div>
          <div class="overall-stars">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </div>
          <a>Based on 23 reviews</a>
        </div>

        <div class="overall-chart">
          <div class="ratingBox">
            <div class="name">Excellent</div>
            <div class="rating-bar">
              <div class="box1"></div>
            </div>
          </div>
          <div class="ratingBox">
            <div class="name">Good</div>
            <div class="rating-bar">
              <div class="box2"></div>
            </div>
          </div>
          <div class="ratingBox">
            <div class="name">Average</div>
            <div class="rating-bar">
              <div class="box3"></div>
            </div>
          </div>
          <div class="ratingBox">
            <div class="name">Below-average</div>
            <div class="rating-bar">
              <div class="box4"></div>
            </div>
          </div>
          <div class="ratingBox">
            <div class="name">Poor</div>
            <div class="rating-bar">
              <div class="box5"></div>
            </div>
          </div>
        </div>

        <div class="review-content">
          <div class="user-review">
            <div class="reviewer-details">
              <div class="reviewer-pic">
                <img <?php srcIMG("avatar1.png") ?> alt="Avatar">
              </div>
              <div class="reviewer-name">
                <a>Rocky <br>Colombo</a>
              </div>
            </div>
            <div class="reviewer-rating">
              <div class="star-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="ratingPoints">
                <a>4.0</a>
              </div>
            </div>
            <div class="reviewer-comment">
              <a>This is an awasome service. I really thankfull for you. My event totally went well beacause of your best service.</a>
            </div>
          </div>

          <div class="user-review">
            <div class="reviewer-details">
              <div class="reviewer-pic">
                <img <?php srcIMG("avatar2.jpg") ?> alt="Avatar">
              </div>
              <div class="reviewer-name">
                <a>Tom<br>Galle</a>
              </div>
            </div>
            <div class="reviewer-rating">
              <div class="star-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="ratingPoints">
                <a>3.0</a>
              </div>
            </div>
            <div class="reviewer-comment">
              <a>This is an awasome service. I really thankfull for you. My event totally went well beacause of your best service.</a>
            </div>
          </div>


          <div class="user-review">
            <div class="reviewer-details">
              <div class="reviewer-pic">
                <img <?php srcIMG("avatar3.png") ?> alt="Avatar">
              </div>
              <div class="reviewer-name">
                <a>Jack <br> Kandy</a>
              </div>
            </div>
            <div class="reviewer-rating">
              <div class="star-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="ratingPoints">
                <a>4.0</a>
              </div>
            </div>
            <div class="reviewer-comment">
              <a>This is an awasome service. I really thankfull for you. My event totally went well beacause of your best service.</a>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>
  <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

  <?php linkJS("vendor/spReview"); ?>
</body>

</html>