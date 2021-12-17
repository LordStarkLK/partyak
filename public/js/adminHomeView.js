let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

function myFunction(num) {

  document.getElementById("myDropdown"+num).classList.toggle("show");
  var clicked = document.getElementById("myDropdown"+num);
  var dropdowns = document.getElementsByClassName("dropdown-content");
  
    for(var i =0;i<dropdowns.length;i++){
      if(clicked != dropdowns.item(i)){
        
        dropdowns.item(i).classList.remove("show");
      }
      
    
  }
  

}
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

// chart js start

var xValues = ["3rd Quater 2020", "4th Quater 2020", "1st Quater 2021", "2nd Quater 2021", "3rd Quater 2021"];
var yValues = [55000, 49000, 44000, 24000, 60000];
var barColors = ["#e6817a", "#e44e43","#a0160c","#630c06","#300b08"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues,
      
    }]
  },
  options: {
    responsive: true,
    legend: {display: false},
    title: {
      display: true,
      text: "Sales Revenue 20/21 ",
      fontColor: "#000",
      fontSize: 13,
      fontWeight: 900,
      fontFamily: "sans-serif"
            
      
    },

   
      

    
      scales: {
        yAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Revenue in Lkr',
            fontColor: "black",
            fontSize: 13,
            fontWeight: 900,
            fontFamily: "sans-serif"
            
          },

          ticks: {
            fontColor: "black",
            fontSize: 13,
            fontFamily: "sans-serif"
            

          },

          gridLines: {
            display: false
        }
        }],

        xAxes: [{
          ticks: {
            autoSkip: false,
            maxRotation: 45,
            minRotation: 45,
            fontColor: "black",
            fontSize: 13,
            fontWeight: 900,
            fontFamily: "sans-serif"
            
        },
          gridLines: {
            display: false
        }


        }]

        
      }     
    

   
      
    
  }

  
});