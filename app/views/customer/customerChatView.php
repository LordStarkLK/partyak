<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("customer/customerChatView"); ?>
    <?php linkCSS("customerNavigation"); ?>
    <?php linkCSS("footer");?>
   </head>
<body>
    <header>
        <?php linkPhp("customerNavigation") ?>
    </header>
    <div class="container">
        <div class="content">
            <div class="sidebar">

                <div class="cusname">
                  <p>Chamathka Shehani</p>
                </div>
               
                <div class="cusSearch">
                    <form class="cuse" action="#" method="POST">
                        <input type="text" name="search">
                        <button class="cusbtn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div class="chatlist">

                    <div class="profi">
                        <img class="proimg" <?php srcIMG("galadari.circle.png") ?> alt="Chance Flowers">
                    </div>

                    <div class="remsg">
                        <p>Hi I like to book </p>
                    </div>

                </div>

            </div>

            <!-- <div class="chatside">

               <table>
                   <tr>
                       <th>
                            <div class="sendlogo">
                                <img class="sendimg" <?php srcIMG("galadari.circle.png") ?> alt="Chance Flowers"><p>Galadari Hotel, Colombo</p>
                            </div>
                       </th> -->

                       <!-- <th>
                            <div class="user">
                                <i class="far fa-user-circle" ></i>
                            </div>
                       </th> -->
                       
                   <!-- </tr>

                   <tr>
                       <th>
                       <div class="chats">
                            <div class="chatscreen"> 
                                
                                <div class="contain">
                                    <p>Hi, I like to book your ballroom hall for my wedding. I still don’t have a boyfriend but I like to book the hall anyway please let me do this. This is my only hope.</p>
                                    <span class="time-right">11:02</span>
                                </div>
  
                            </div>
                        </div>


                       </th>
                   </tr>

                   <tr>
                       
                   </tr>
               </table>

               

            </div> -->
            <div class="page">
            
                <!-- <div class="top-bar"></div>
                <div class="sleep"></div>
                <div class="volume"></div>
                <div class="camera"></div> -->
                <div class="screen">
                  <div class="screen-container">
                    <!-- <div class="status-bar">
                      <div class="time"></div>
                      <div class="battery">
                        <i class="zmdi zmdi-battery"></i>
                      </div>
                      <div class="network">
                        <i class="zmdi zmdi-network"></i>
                      </div>
                      <div class="wifi">
                        <i class="zmdi zmdi-wifi-alt-2"></i>
                      </div>
                      <div class="star">
                        <i class="zmdi zmdi-star"></i>
                      </div>
                    </div> -->
                    <div class="chatt">
                      <div class="chat-container">
                        <div class="user-bar">
                          <div class="back">
                            <i class="zmdi zmdi-arrow-left"></i>
                          </div>
                          <div class="avatar">
                            <img <?php srcIMG("galadari.circle.png") ?> alt="Avatar">
                          </div>
                          <div class="name">
                            <span>Galadari Hotel, Colombo</span>
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
                            <div class="message sent">
                            Hi, I like to book your ballroom hall for my wedding.<br> I still don’t have a boyfriend but I like to book the hall anyway please let me do this. <br>This is my only hope.
                              <span class="metadata">
                                  <span class="time"></span><span class="tick"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#4fc3f7"/></svg></span>
                              </span>
                            </div>
                          </div>
                          <form class="conversation-compose">
                            <div class="emoji">
                              <i class="far fa-laugh"></i>
                            </div>
                            <input class="input-msg" name="input" placeholder="Type a message" autocomplete="off" autofocus></input>
                            <div class="photo">
                              <i class="fa-fas-camera"></i>
                            </div>
                            <button class="send">
                                <div class="circle">
                                  <i class="fas fa-paper-plane"></i>
                                </div>
                              </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
        </div>

    </div>
    <?php linkPhp("footer") ?>
</body>
</html>