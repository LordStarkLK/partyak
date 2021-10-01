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