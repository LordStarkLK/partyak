<?php $service_id=$data['service_id']; ?>
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
        <li>
          <a href="<?php echo BASEURL . '/spReview/index/'.$service_id.''; ?>">
            <i class="fa fa-star" aria-hidden="true"></i>
            <span class="links_name">yakek</span>
          </a>
        </li>

      </ul>
    </div>