<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
    <?php linkCSS("admin/adminEvents"); ?>
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
        <span class="dashboard">Events</span>
      </div>
   
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box" id="box-marketing">
            <span class="links_name" ><img class="customer-image" <?php srcIMG("events.png") ?> width="40" height="40">
            <div class="box-topic">Events</div></span>
           
        </div>
       
      </div>

      <div>
      <ul class="breadcrumb">
        <li><a >Events</a></li>
        
        </ul>

        <div class="search-container">
          <form action="/action_page.php">
          <input type="text" placeholder="Search by customer.." name="search">
         
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
    <th>Event ID</th>
    <th>Event Name / type</th>
    <th>Customer</th>
    <th>Event Planner added</th>
    <th>Service Providers Added</th>

  </tr>
  <tr>
    <td>01</td>
    <td>Wedding</td>
    <td>Chuck Lidell</td>
    <td>Eddie Planners</td>
    <td>
       <div>JK photography</div> 
        <div>Eve Hotel</div>
        <div>Mad Vibes DJ</div>
        
    </td>
  </tr>
  <tr>
  <td>02</td>
    <td>Joe's B'day Party</td>
    <td>Joe Rogan</td>
    <td>Joey Diaz</td>
    <td>
       <div>DMT Hotels</div> 
        <div>West newberry Cakes</div>
        <div>JD DJ</div>
        
    </td>
    
  </tr>
  <tr>
  <td>02</td>
    <td>AGM John Hopkings</td>
    <td>John Hopkings</td>
    <td>CT planners</td>
    <td>
       <div>Filipino Hotels</div> 
        <div>GH decorations</div>
        <div>Tom Catering</div>
        
    </td>
    
  </tr>
  

</table>
          
        
        
  </section>
</div>

<?php linkJS("adminHomeView"); ?>


  

</body>
</html>