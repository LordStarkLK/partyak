<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/adminMarketing"); ?>
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
        <div class="box" id="box-marketing">
            <span class="links_name" ><img class="customer-image" <?php srcIMG("marketingContent.png") ?> width="40" height="40">
            <div class="box-topic">Marketing</div></span>
           
        </div>
       
      </div>

      <div>
      <ul class="breadcrumb">
        <li><a >Marketing</a></li>
        
        </ul>

        <div class="search-container">
          <form action="/action_page.php">
          <input type="text" placeholder="Search Marketing.." name="search">
         
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
    <th>Vendor Name</th>
    <th>Title </th>
    <th>Content</th>
    <th>Status</th>
    <th>More actions</th>

  </tr>
  <tr>
    <td>JK photography</td>
    <td>photography is an art</td>
    <td><img class="customer-image" <?php srcIMG("marketingad.jpg") ?> width="60" height="60"></td>
    <td><i class="fas fa-circle"></i> Online</td>
    <td>
      <div class="btn-group">
      <div class="dropdown">
      <?php
        $id_name = 'myDropdown';
        
         $x = 1;
         $id_name .= $x;
        echo"
        <button onclick=\"myFunction($x)\" class=\"dropbtn\">Change Status <i class=\"fas fa-caret-down\"></i></button>
        <div id=$id_name class=\"dropdown-content\">
          <a href=\"#home\">Online</a>
          <a href=\"#about\">Offline</a>
          
        </div>
        "; 
    
    ?>
</div>
          <button>Delete</button>
          
        </div>
    </td>
  </tr>
  <tr>
    <td>02</td>
    <td>Forrest</td>
    <td>forrest@gmail.com</td>
    <td>Null</td>
    <td>
      <div class="btn-group">
      <div class="dropdown">
    <?php
        $id_name = 'myDropdown';
        
         $x = 2;
         $id_name .= $x;
        echo"
        <button onclick=\"myFunction($x)\" class=\"dropbtn\">Change status <i class=\"fas fa-caret-down\"></i></button>
        <div id=$id_name class=\"dropdown-content\">
          <a href=\"#home\">Online</a>
          <a href=\"#about\">Offline</a>
          
        </div>
        "; 
    
    ?>
  
</div>
          <button>Delete</button>
          
        </div>
    </td>
  </tr>
  <tr>
    <td>03</td>
    <td>Swanson</td>
    <td>swanson@gmail.com</td>
    <td>Null</td>
  </tr>
  <tr>
    <td>04</td>
    <td>Brown</td>
    <td>brown@gmail.com</td>
    <td>Null</td>
</tr>
<tr>
    <td>05</td>
    <td>JK photography</td>
    <td>jkphoto@gmail.com</td>
    <td>Null</td>
  </tr>

</table>
          
        
        
  </section>
</div>

<?php linkJS("adminHomeView"); ?>


  

</body>
</html>