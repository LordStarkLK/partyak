let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }


    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    
    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ['sales', 'amount'],
      ['Income', 70000],
      ['Charges', 5000],
      ['On-hold', 20000],
      
    ]);
    
      // Optional; add a title and set the width and height of the chart
      var options = {
              pieHole: 0.6,
              backgroundColor: 'black',
              legend: {alignment: 'center', position: 'right', textStyle: {color: 'white', fontSize: 16}},
              chartArea: {left:20,top:10,width:'100%',height:'100%'},
            };
      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }    

    //sales summary chart
var xValues = ["Jan","Feb","Mar","Apr","May","Jun","July","Aug","Sep","Oct","Nov","Dec"];
var yValues = [3000,10000,5000,18000,40000,60000,50000,55000,80000,65000];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "white",
      borderColor: "blue",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 1000, max:100000}}],
    }
  }
});