<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
    <?php linkCSS("admin/adminUsers"); ?>
    <?php linkCSS("css/all"); ?>

    
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
<body>
<div class="container">
  <?php linkPHP("adminSidebar");?>
  <section class="home-section">
    
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn' id="iconMenu"></i>
        <span class="dashboard">USERS</span>
      </div>
   
    <div class="home-content">
    <div class="overview-boxes">
        <div class="box" id="box-customer">
            <span class="links_name" onclick="window.location='<?php echo BASEURL . '/adminUsers'; ?>'"><img class="customer-image box-img" <?php srcIMG("consumer.png") ?> width="40" height="40">
            <div class="box-topic">Customers</div></span>
            <!-- <a href="<?php echo BASEURL . 'adminUsers'; ?>"></a>
            <img class="customer-image" <?php srcIMG("consumer.png") ?> width="40" height="40">
            <div class="box-topic">Customers</div> -->
          
          
          <!-- <i class='bx bxs-user cart'></i> -->
        </div>
        <div class="box" id="box-service">
        <span class="links_name" onclick="window.location='<?php echo BASEURL . '/adminUsersService'; ?>'">
        <img class="service-image box-img" <?php srcIMG("service.png") ?> width="40" height="40">
            <div class="box-topic">Service Providers</div>
    </span>
            
          
          <!-- <i clss='bx bxs-user-rectangle cart two' ></i> -->
        </div>
        <div class="box" id="box-event">
        <span class="links_name" onclick="window.location='<?php echo BASEURL . '/adminUsersEvent'; ?>'">
        <img class="event-image box-img" <?php srcIMG("event.png") ?> width="40" height="40">   
            <div class="box-topic">Event Planners</div>
    </span>
            
          
          
        </div>
        </div>

      <div>
      <ul class="breadcrumb">
        <li><a href="#">Users</a></li>
        <li><a href="#">Customers</a></li>
        </ul>

        <div class="search-container">
          <form action="/action_page.php">
          <input type="text" placeholder="Search Users.." name="search">
         
          <button type="submit"><i class="fa fa-search"></i></button>
          <!-- <i class="fas fa-search"></i> -->
         
          
    </form>
  </div>
        
        
      </div>



      <ul class="breadcrumb">
  
</ul>

      <div class="sales-boxes">
        
        <table>
  <tr>
    <th>Customer ID</th>
    <th>Customer Name</th>
    <th>Email</th>
    <th>More Actions</th>

  </tr>
 
<?php while($row=mysqli_fetch_assoc($data['customers']) ){
    $i = 1;
    $row2=mysqli_fetch_assoc($data['customer_email']);
    echo"
    <tr>
    <td>$row[user_id]</td>
    <td>$row[f_name] $row[l_name]</td>
    
    <td>$row2[email]</td>
    
    <td>  
    <div class=\"btn-group\">
        <button>View Profile</button>
        <button>Delete User</button>
        
      </div>

    
    </td>
</tr>   
    ";
    $i++;
}?>

<!-- && $row2=mysqli_fetch_assoc($data['customer_email']) -->
 <!-- <td>$row2[email']</td> -->

</table>
          
        
        
  </section>
</div>

<?php linkJS("adminHomeView"); ?>

  

</body>
</html>