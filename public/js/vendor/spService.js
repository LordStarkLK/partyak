let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }

  var srv = document.getElementById("service");
  var pkg = document.getElementById("package");
  
  var sBtn = document.getElementById("s_btn");
  var pBtn = document.getElementById("p_btn");
  
  sBtn.onclick = function() {
    srv.style.display ="block";
    pkg.style.display="none";
  }

  pBtn.onclick = function() {
    pkg.style.display="block";
    srv.style.display ="none";
  }

  // Get the modal
  var modal = document.getElementById("packagePopup");
  
  // Get the button that opens the modal
  var reqbtn = document.getElementById("request-button");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  reqbtn.onclick = function() {
    // btn.style.display = "none";
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  var request_submit = document.getElementById("request-submit");
  request_submit.onclick=function(){
    modal.style.display = "none";
  }
  
