
var eventbtn =document.getElementById("eventb");
var eventdata =document.getElementById("service_det");

eventbtn.onclick = function(){
  eventdata.style.display="block";
}


$(document).ready(function(){
  $(function(){
    function status(Status,task){
      $.ajax({
            type: "GET",
            url:"http://localhost/partyak/customerEventSB/statusChange/" + Status+'/'+task,
            })
      console.log(Status);
      console.log(task);
    }
    status_change = status;
  })
  
  
});