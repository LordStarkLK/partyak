<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("vendor/spReview"); ?>
  <?php linkCSS("navigation"); ?>
  <?php linkCSS("footer");?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $service_id = $data['service_id'];?>
</head>

<body>
  <header>
    <?php linkPhp("navigation") ?>
  </header>
  <div class="container">
    <div class="sidebar">

          <ul class="sidenav-links">
        
        <li>
          <a href="<?php echo BASEURL . '/spPackage/index/'.$service_id.''?>">
            <i class="fa fa-server" aria-hidden="true"></i>
            <span class="links_name">Packages</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spBooking/index/'.$service_id.''; ?>">
            <i class="fa fa-list" aria-hidden="true"></i>
            <span class="links_name">Bookings</span>
          </a>
        </li>
        
        <li>
        <a href="<?php echo BASEURL . '/spChat/index/'.$service_id.''; ?>">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span class="links_name">Chat</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spCalendar/index/'.$service_id.''; ?>">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="links_name">Calendar</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASEURL . '/spReview/index/'.$service_id.''; ?>">
            <i class="fa fa-star" aria-hidden="true"></i>
            <span class="links_name">Review</span>
          </a>
        </li>
      </ul>
    </div>

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
          
          <?php while ($row = mysqli_fetch_assoc($data['review_data'])) {
            $row2 = mysqli_fetch_assoc($data['review_user']);
            $i = 1;
            $pic=$row2["profilePicture"];
            $dateSplitArray = explode(' ', $row['Date'],2);
            $date = $dateSplitArray[0];
            echo " 
              <div class=\"user-review\">
              <div class=\"reviewer-details\">
                <div class=\"reviewer-pic\">
                  <img src=\"http://localhost/partyak/public/img/userImages/$pic\" >
                </div>
                <div class=\"reviewer-name\">
                  <div class=\"review_date\">$date</div>
                  <a>$row2[f_name]</a>
                </div>
              </div>
              ";
              if($row['ratedStar'] == "1"){
                echo "
                <div class=\"reviewer-rating\">
                <div class=\"star-rating\">
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"ratingPoints\">
                  <a>1.0</a>
                </div>
              </div>
                ";
              }
              if($row['ratedStar'] == "2"){
                echo "
                <div class=\"reviewer-rating\">
                <div class=\"star-rating\">
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"ratingPoints\">
                  <a>2.0</a>
                </div>
              </div>
                ";
              }
              if($row['ratedStar'] == "3"){
                echo "
                <div class=\"reviewer-rating\">
                <div class=\"star-rating\">
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"ratingPoints\">
                  <a>3.0</a>
                </div>
              </div>
                ";
              }
              if($row['ratedStar'] == "4"){
                echo "
                <div class=\"reviewer-rating\">
                <div class=\"star-rating\">
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"ratingPoints\">
                  <a>4.0</a>
                </div>
              </div>
                ";
              }
              if($row['ratedStar'] == "5"){
                echo "
                <div class=\"reviewer-rating\">
                <div class=\"star-rating\">
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"ratingPoints\">
                  <a>5.0</a>
                </div>
              </div>
                ";
              }
              echo "
              <div class=\"reviewer-comment\">
                <a>$row[textReview]</a>
              </div>
            </div>
            ";
            }
          ?>


        </div>
      </div>
    </section>
  </div>
  <?php linkJS("vendor/spReview"); ?>
  <?php linkPhp("footer") ?>
</body>

</html>