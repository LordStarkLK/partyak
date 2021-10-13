<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php linkCSS("customer/customerEventSBview"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
   </head>
<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
    </header>

    <div class="container">
        <div class="cusdetail">
            <div class="custopic">
                <table>
                    <tr>
                        <th><i class="fas fa-plus"></i>Tasks</th>
                        <th><i class="fas fa-plus"></i>Service Types</th>
                        <th><i class="fas fa-user-plus"></i></th>
                        <th>Event Name</th>
                        <th>Event Details</th>
                        <th>Boards</th>
                    </tr>
                </table>
            </div>
            <div class="cusbody">
                <div class="custodo">
                    <div class="cusdotopic">
                        <table>
                            <tr>
                                <th>TO Do</th>
                                <th>5 Tasks</th>
                                <th> <i class="fas fa-ellipsis-h"></i></th>
                            </tr>

                       </table>
                    </div>

                </div>

                <div class="cusin">
                    <div class="cusdotopic">
                        <table>
                            <tr>
                                <th>INPROGRESS</th>
                                <th>0 Task</th>
                                <th> <i class="fas fa-ellipsis-h"></i></th>
                            </tr>
                        </table>
                    </div>
                   
                </div>

                <div class="cusdone">
                    <div class="cusdotopic">
                        <table>
                            <tr>
                                <th>COMPLETED</th>
                                <th>0 Task</th>
                                <th> <i class="fas fa-ellipsis-h"></i></th>
                            </tr>
                        </table>
                    </div>
                   
                </div>

            </div>
        </div>

    </div>



</body>
<?php linkJS("customer/customerSearchVendor"); ?>
<?php linkJS("customer/customerContactServiceProvicer"); ?>
<?php linkPhp("footer") ?>
</html>