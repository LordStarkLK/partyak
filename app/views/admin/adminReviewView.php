<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("admin/adminReview"); ?>
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
                <span class="dashboard">REVIEWS</span>
            </div>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box" id="box-marketing">
                        <span class="links_name"><img class="customer-image" <?php srcIMG("re.png") ?> width="50"
                                height="50">
                            <div class="box-topic">Reviews</div>
                        </span>

                    </div>

                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a>Reviews</a></li>

                    </ul>
                </div>


                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search by vendor.." name="search">

                        <button type="submit"><i class="fa fa-search"></i></button>
                        <!-- <i class="fas fa-search"></i> -->


                    </form>
                </div>






                <ul class="breadcrumb">

                </ul>

                <div class="sales-boxes">

                    <table>
                        <tr>
                            <th>Review ID</th>
                            <th>Service Name</th>
                            <th>Reviewed By</th>
                            <th>Rating</th>
                            <th id="review">Review</th>

                        </tr>
                        <tr>
                        <?php 
                        $checked = "checked";
                        $notchecked = "";
                        while($row = mysqli_fetch_assoc($data['review'])){

                        
                                echo"
                                <td>$row[review_id]</td>
                                <td>$row[service_name]</td>
                                <td>$row[f_name] $row[l_name]</td>
                                <td class = \"$row[ratedStar] \">
                                <span class=\"fa fa-star ".(($row['ratedStar']>=1)?$checked:$notchecked)."\"></span>
                                <span class=\"fa fa-star ".(($row['ratedStar']>=2)?$checked:$notchecked)."\"></span>
                                <span class=\"fa fa-star ".(($row['ratedStar']>=3)?$checked:$notchecked)."\"></span>
                                <span class=\"fa fa-star ".(($row['ratedStar']>=4)?$checked:$notchecked)."\"></span>
                                <span class=\"fa fa-star ".(($row['ratedStar']>=5)?$checked:$notchecked)."\"></span>
                            </td>
                                <td>$row[textReview]</td>
                                
                            </tr>

                                ";
                            } ?>
                        



                        <!-- <tr>
                            <td>02</td>
                            <td>JK photography</td>
                            <td>Photographer</td>
                            <td>Logan Paul</td>
                            <td>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </td>
                            <td>Need  to improve but appreciate the service</td>

                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Hotel Oki doki</td>
                            <td>Venue</td>
                            <td>Eddie alvarez</td>
                            <td>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </td>
                            <td>Ideal venue for a wedding! loved it</td>

                        </tr> -->


                    </table>



        </section>
    </div>

    <?php linkJS("adminHomeView"); ?>
    <?php linkJS("admin/adminReview"); ?>




</body>

</html>