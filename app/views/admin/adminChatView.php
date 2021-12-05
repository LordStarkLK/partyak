<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php linkCSS("admin/sidebar"); ?>
    <?php linkCSS("chat"); ?>
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
                <span class="dashboard">CHAT</span>
            </div>

            <div class="home-content">
                <div class="content">
                    <div class="chatsidebar">
                        <div class="receiver">
                            <div class="receiverimg">
                                <img class="proimg" <?php srcIMG("avatar.png") ?> alt="Avatar">
                            </div>
                            <div class="receivername">
                                <p>Lara Fernando</p>
                            </div>
                        </div>


                        <div class="senderSearch">
                            <form class="cuse" action="#" method="POST">
                                <input type="text" name="search">
                                <button class="searchbtn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="chatlist">

                            <div class="profi">
                                <img class="proimg" <?php srcIMG("avatar3.png") ?> alt="Avatar">
                            </div>

                            <div class="remsg">
                                <a>Nimal Perera</a>
                                <p>Hello, I would like to </p>
                            </div>
                        </div>
                    </div>

                    <div class="chat-container">
                        <div class="user-bar">
                            <div class="back">
                                <i class="zmdi zmdi-arrow-left"></i>
                            </div>
                            <div class="avatar">
                                <img class="proimg" <?php srcIMG("avatar3.png") ?> alt="Avatar">
                            </div>
                            <div class="name">
                                <span>Nimal Perera</span>
                                <span class="status">online</span>
                            </div>
                            <div class="actions more">
                                <i class="zmdi zmdi-more-vert"></i>
                            </div>
                            <div class="actions attachment">
                                <i class="zmdi zmdi-attachment-alt"></i>
                            </div>
                            <div class="actions">
                                <i class="zmdi zmdi-phone"></i>
                            </div>
                        </div>
                        <div class="conversation">
                            <div class="conversation-container">
                                <div class="message received">
                                    Hello, I would like to book your ballroom hall for my wedding. But I want to know
                                    about some other details about your service.
                                    <span class="metadata">
                                        <span class="time"></span><span class="tick"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                                                id="msg-dblcheck-ack" x="2063" y="2076">
                                                <path
                                                    d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"
                                                    fill="#4fc3f7" />
                                            </svg></span>
                                    </span>
                                </div>
                                <div class="message sent">
                                    Sure sir, May I know what kind of information you want to know about our service?
                                    <span class="metadata">
                                        <span class="time"></span><span class="tick"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                                                id="msg-dblcheck-ack" x="2063" y="2076">
                                                <path
                                                    d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"
                                                    fill="#4fc3f7" />
                                            </svg></span>
                                    </span>
                                </div>
                            </div>
                            <form class="conversation-compose">
                                <div class="emoji">
                                    <i class="fa fa-smile-o fa-2x" aria-hidden="true"></i>
                                </div>
                                <input class="input-msg" name="input" placeholder="Type a message" autocomplete="off"
                                    autofocus></input>
                                <div class="photo">
                                    <i class="fa fa-camera"></i>
                                </div>
                                <button class="send">
                                    <div class="circle"><i class="fa fa-paper-plane"></i></div>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

    </div>







    </section>
    </div>

    <?php linkJS("adminHomeView"); ?>




</body>

</html>