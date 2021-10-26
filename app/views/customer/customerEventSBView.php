<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Event Schedule Board</title>
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
                        <th><i class="fas fa-user-plus"></i></th>
                        <th>Eventshow</th>
                        <th>Event Details</th>
                        <th>Recomndations of event planner</th>
                        <th><i class="fa fa-comments"></i></th>
                        <th>Boards</th>
                    </tr>
                </table>
            </div>
            <div class="cusbody">
                <div class="custodo">
                    <!-- <div class="cusdotopic">
                        <table>
                            <tr>
                                <th>TO Do</th>
                                <th>5 Tasks</th>
                                <th> <i class="fas fa-ellipsis-h"></i></th>
                            </tr>

                       </table>
                    </div> -->
                    <div class="wrapper">
                        <header>TO DO</header>
                        <div class="footer">
                            <span><span class="pendingTasks"></span> pending tasks <button>Clear All</button></span>

                        </div>
                        <div class="inputField">
                        <input type="text" placeholder="Add new task">
                        <button><i class="fas fa-plus"></i></button>
                        </div>
                        <ul class="todoList">

                        <!-- data are comes from local storage -->
                        </ul>
                    </div>

                </div>

                <div class="cusin">
                    <!-- <div class="cusdotopic">
                        <table>
                            <tr>
                                <th>INPROGRESS</th>
                                <th>0 Task</th>
                                <th> <i class="fas fa-ellipsis-h"></i></th>
                            </tr>
                        </table>
                    </div> -->
                    <div class="wrapper">
                        <header>INPROGRESS</header>
                        <div class="footer">
                            <span><span class="pendingTasks"></span> pending tasks <button>Clear All</button></span>

                        </div>
                        <div class="inputField">
                        <input type="text" placeholder="Add new task">
                        <button><i class="fas fa-plus"></i></button>
                        </div>
                        <ul class="todoList">
                        <!-- data are comes from local storage -->
                        </ul>
                    </div>
                   
                </div>

                <div class="cusdone">
                    <!-- <div class="cusdotopic">
                        <table>
                            <tr>
                                <th>COMPLETED</th>
                                <th>0 Task</th>
                                <th> <i class="fas fa-ellipsis-h"></i></th>
                            </tr>
                        </table>
                    </div> -->
                    <div class="wrapper">
                        <header>COMPLETED</header>
                        <div class="footer">
                            <span><span class="pendingTasks"></span> pending tasks <button>Clear All</button></span>

                        </div>
                        <div class="inputField">
                        <input type="text" placeholder="Add new task">
                        <button><i class="fas fa-plus"></i></button>
                        </div>
                        <ul class="todoList">
                        <!-- data are comes from local storage -->
                        </ul>
                    </div>
                   
                </div>

            </div>
        </div>

    </div>



</body>
<?php linkJS("customer/customerSearchVendor"); ?>
<?php linkJS("customer/customerContactServiceProvicer"); ?>
<?php linkJS("customer/customerEventSB"); ?>
<?php linkPhp("footer") ?>
</html>