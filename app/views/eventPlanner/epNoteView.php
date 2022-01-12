<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("eventPlanner/epNote"); ?>
    <?php linkCSS("navigation"); ?>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <img class="back-blob" <?php srcIMG("home-blob.png") ?> alt="back blob">
    <header>
        <?php linkPhp("vendorNavigation") ?>
    </header>
    <div class="container">
        <div class="sidebar">

            <ul class="sidenav-links">
                <li>
                    <a href="<?php echo BASEURL . '/epAnalytics'; ?>">
                        <i class="fa fa-pie-chart" aria-hidden="true"></i>
                        <span class="links_name">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epProfile'; ?>">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <span class="links_name">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epService'; ?>">
                        <i class="fa fa-server" aria-hidden="true"></i>
                        <span class="links_name">Services</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epBooking'; ?>">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="links_name">Booking</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epMarketing'; ?>">
                        <i class="fa fa-sticky-note" aria-hidden="true"></i>
                        <span class="links_name">Marketing</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASEURL . '/epWallet'; ?>">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        <span class="links_name">Wallet</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span class="links_name">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span class="links_name">Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epReview '; ?>">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span class="links_name">Review</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epnote '; ?>">
                        <i class='bx bx-notepad' aria-hidden="true"></i>
                        <span class="links_name">Note</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL . '/epmyevent '; ?>">
                        <i class='bx bx-history' aria-hidden="true"></i>
                        <span class="links_name">My Event</span>
                    </a>
                </li>
            </ul>
        </div>

        <section class="home-section">
            <nav>
                <div class="sidebar-button">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="dashboard">Note</span>
                </div>
            </nav>

            <div class="note-area">
                <?php
                if ($data['note'] == null) {
                    echo "<h3 class='noNote'>No note yet</h3>";
                } else {
                    foreach ($data['note'] as $row) { ?>
                        <div class="note-cont">
                            <span class="note-head">
                                <h6>Cus. Id : <?php echo $row['customer_id']; ?></h6>
                                <h6>Cus. Name : <?php echo $row['customer_name']; ?></h6>
                                <h6>Event : <?php echo $row['event_name']; ?></h6>
                                <h6>Date : <?php echo $row['event_date']; ?></h6>
                            </span>
                            <div class="note-body">
                                <?php

                                if (isset($counter)) {
                                    if ($counter == mysqli_num_rows($data['noteBody'])) {
                                        mysqli_data_seek($data['noteBody'], 0);
                                    }
                                }

                                $counter = 0;
                                while ($rowBody = mysqli_fetch_assoc($data['noteBody'])) {


                                    $counter++;

                                    if ($row['note_id'] == $rowBody['note_id']) {   ?>
                                        <div class="note-strip">
                                            <h4><?php echo $rowBody['vendor_name']; ?></h4>
                                            <form action="<?php echo BASEURL . '/epnote/deleteNoteBody'; ?>" method="POST">
                                                <input type="hidden" id="vendorNoteId" name="vendorNoteId" value="<?php echo $rowBody['vendor_note_id'] ?>">
                                                <button type="submit" class="delete-note-text"><i class='bx bx-trash' aria-hidden="true"></i></button>
                                            </form>
                                        </div> <?php }
                                        } ?>
                            </div>
                            <div class="note-foot">
                                <form class="note-body-form" action="<?php echo BASEURL . '/epnote/insertNoteBody'; ?>" method="POST">
                                    <input class="note-body-input" type="text" name="noteBody" id="noteBody">
                                    <input type="hidden" id="noteId" name="noteId" value="<?php echo $row['note_id'] ?>">
                                    <button type="submit" class="add-note-body"><i class='bx bx-plus' aria-hidden="true"></i></button>
                                </form>
                                <form action="<?php echo BASEURL . '/epnote/deleteNote'; ?>" method="POST">
                                    <input type="hidden" id="noteId" name="noteId" value="<?php echo $row['note_id'] ?>">
                                    <button type="submit" class="delete-note-text">Delete note</button>
                                </form>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>




            <div class="bottom-section">
                <div class="event-board-link">
                    <a href="<?php echo BASEURL . '/#'; ?>"><button>Event Schedule Board</button></a>
                </div>
                <div class="add-note-div">
                    <h3 class="add-note">Add a note</h3>
                    <a href="<?php echo BASEURL . '/epNoteAdd'; ?>"><img class="add-btn" <?php srcIMG("addButton.png") ?>></a>
                </div>
            </div>
        </section>
    </div>
    <?php linkJS("vendor/spProfile"); ?>
</body>

</html>