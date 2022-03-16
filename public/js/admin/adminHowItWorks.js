// let num = 1;
let x;
function funcpassid(num){
  var modal = document.getElementById(num+"-modal");
  // var modal = document.getElementsByClassName("myModal").id;
  
  // Get the button that opens the modal
  var btn = document.getElementById(num+"-btn");
  // btn = document.getElementsByClassName("myBtn").id;
  
  // Get the <span> element that closes the modal
  var span = document.getElementById(num+"-close");
  // span = document.getElementsByClassName("close")[0].id;
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
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
}

function addnew(){
  var modal = document.getElementById("myModal");
  // var modal = document.getElementsByClassName("myModal").id;
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  // btn = document.getElementsByClassName("myBtn").id;
  
  // Get the <span> element that closes the modal
  var span = document.getElementById("close");
  // span = document.getElementsByClassName("close")[0].id;
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
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

}

function addnew2(){
  var modal = document.getElementById("myModal2");
  // var modal = document.getElementsByClassName("myModal").id;
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn2");
  // btn = document.getElementsByClassName("myBtn").id;
  
  // Get the <span> element that closes the modal
  var span = document.getElementById("close2");
  // span = document.getElementsByClassName("close")[0].id;
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
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

}

function addnew3(){
  var modal = document.getElementById("myModal3");
  // var modal = document.getElementsByClassName("myModal").id;
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn3");
  // btn = document.getElementsByClassName("myBtn").id;
  
  // Get the <span> element that closes the modal
  var span = document.getElementById("close3");
  // span = document.getElementsByClassName("close")[0].id;
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
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

}