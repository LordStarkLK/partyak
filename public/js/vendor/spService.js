// // let sidebar = document.querySelector(".sidebar");
// //     let sidebarBtn = document.querySelector(".sidebarBtn");
// //     sidebarBtn.onclick = function() {
// //     sidebar.classList.toggle("active");
// //     if(sidebar.classList.contains("active")){
// //       sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
// //     }else
// //     sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
// //     }

// //   var srv = document.getElementById("service");
// //   var pkg = document.getElementById("package");
  
// //   var sBtn = document.getElementById("s_btn");
// //   var pBtn = document.getElementById("p_btn");
  
// //   sBtn.onclick = function() {
// //     srv.style.display ="block";
// //     pkg.style.display="none";
// //   }

// //   pBtn.onclick = function() {
// //     pkg.style.display="block";
// //     srv.style.display ="none";
// //   }




   //this is the javascripts for the star rating system
   var ratedIndex = -1;

   $(document).ready(function() {
       resetStarColors();

       $('.fa-star').on('click', function() {
           ratedIndex = parseInt($(this).data('index'));
           document.getElementById("ratedStars").value = (ratedIndex+1);
       });

       $('.fa-star').mouseover(function() {
           resetStarColors();

           var currentIndex = parseInt($(this).data('index'));
           for (var i = 0; i <= currentIndex; i++)
               $('.fa-star:eq(' + i + ')').css('color', '#f8f900');

       });
       $('.fa-star').mouseleave(function() {
           resetStarColors();

           if (ratedIndex != -1) {
               for (var i = 0; i <= ratedIndex; i++)
                   $('.fa-star:eq(' + i + ')').css('color', '#f8f900');
           }
       });
   });

   function resetStarColors() {
       $('.fa-star').css('color', 'white');
   };