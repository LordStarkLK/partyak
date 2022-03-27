<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("vendor/spMarketing");  ?>
  <?php linkCSS("navigation"); ?>
  <?php linkCSS("footer");?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <?php linkPhp("navigation") ?>
  </header>
  <div class="container">
   

    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <!-- <i class='bx bx-menu sidebarBtn'></i> -->
          <i class="fa fa-sticky-note" aria-hidden="true"></i>
          <span class="dashboard">MARKETING</span>
        </div>
      </nav>

      <div class="home-content">
        <div class="uploaded_area">
          <a>Uploaded Marketing Content</a>
          

          <?php while ($row = mysqli_fetch_assoc($data['contents'])){
            $i =1;
            // $check = "reject";
            echo "
              <div class=\"file_details\">
              <div class=\"details\">
                <a>$row[upload_date]</a>
                <div class=\"file\">
                  <div class=\"file_icon\">
                    <i class=\"fa fa-file-image-o fa-3x\" aria-hidden=\"true\"></i>
                  </div>";

                  $nameSplitArray = explode('.', $row['content'],3);
                  $newName = end($nameSplitArray);
                  echo "<div class=\"file_name\">
                    <a>$newName</a>
                  </div>

                </div>
              </div>";
              
              
               if($row['upload_status'] == "accept" ){
                echo "
                <div class=\"status accept\">
                  <a>Accepted</a>
                  <i class=\"fa fa-check-circle-o fa-lg\" aria-hidden=\"true\" ></i>
                </div>
              </div>";
              }
              elseif($row['upload_status'] == "reject"){
                echo "
                <div class=\"status reject\">
                  <a>Rejected</a>
                  <i class=\"fa fa-times-circle-o fa-lg\" aria-hidden=\"true\" ></i>
                </div>
              </div>";
              }
              else{
                echo "
                <div class=\"status pending\">
                  <a>Pending</a>
                  <i class=\"fa fa-pause-circle-o fa-lg\" aria-hidden=\"true\" ></i>
                </div>
              </div>";
              }
          }
          ?>
          
          <div class="paymentBtn">
            <a href="<?php echo BASEURL . '/payment'; ?>"><button>Pay now</button></a>
          </div>
          
        </div>

        <div class="submission_area">
          <div class="title"><a>Upload Your File</a></div>
          <div class="sub_title"><a>(File should be JPG, JPEG or PNG)</a></div>
<!-- here newly added codes -->
          <div class="upload-container">
            <div class="wrapper">
                <div class="image">
                    <img id="contentImg" src="" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div class="text">
                        No file chosen, yet!
                    </div>
                </div>
                <div id="cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <div class="file-name">
                    File name here
                </div>
            </div>
            
            <button type="file" name="file" onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
            
            <form action="<?php echo BASEURL . '/spMarketing/index'; ?>" method="POST" enctype="multipart/form-data">
            
            <input id="default-btn" type="file" name="file" hidden>
            <button type="submit" name="submit">UPLOAD </button>
            </form>
          </div>

<!-- end -->
          <!-- <div class="submit_file">
            <i class="fa fa-upload fa-4x" aria-hidden="true"></i>
            <br><a>Drag & Drop</a>
            <br><a>or</a>
            <br><a>Browse File to Upload</a>
          </div>
          <button tupe="submit">Upload</button> -->



        </div>
      </div>
    </section>
  </div>
  <!-- Notification adding -->
<?php linkPhp("notification"); ?>
<?php linkJS("lib/jquery-3.6.0.min"); ?>
<?php linkJS("admin/notification"); ?>

  <?php linkJS("vendor/spMarketing"); ?>
  <?php linkPhp("footer") ?>

<script>
  const wrapper = document.querySelector(".wrapper");
const fileName = document.querySelector(".file-name");
const defaultBtn = document.querySelector("#default-btn");
const customBtn = document.querySelector("#custom-btn");
const cancelBtn = document.querySelector("#cancel-btn i");
// const img = document.querySelector("img");
const img = document.getElementById("contentImg")
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

function defaultBtnActive(){
    defaultBtn.click();
}

defaultBtn.addEventListener("change", function(){
    const file = this.files[0];
    if(file){
        const reader = new FileReader();
        reader.onload = function(){
            const result = reader.result;
            img.src = result;
            wrapper.classList.add("active");
        }
        cancelBtn.addEventListener("click", function(){
            img.src = "";
            wrapper.classList.remove("active");
        })
        //read the content of the file
        reader.readAsDataURL(file);
    }

    if(this.value){
        let valueStore = this.value.match(regExp);
        fileName.textContent = valueStore;
    }

});
</script>



</body>


</html>