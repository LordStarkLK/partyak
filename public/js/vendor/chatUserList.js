const searchBar = document.querySelector(".search input"),
searchIcon = document.querySelector(".search button"),
usersList = document.querySelector(".users-list");

searchIcon.onclick = ()=>{
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if(searchBar.classList.contains("active")){
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}

searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "http://localhost/partyak/spChat/search/", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}

setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "http://localhost/partyak/spChat/userList/", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          if(!searchBar.classList.contains("active")){
            usersList.innerHTML = data;
          }
        }
    }
  }
  xhr.send();
}, 500);









// $(document).ready(function(){
//   //  console.log("123");
//    $(".search input").keyup(function(){
//     let searchValue = $(this).val();
//     searchValue = searchValue.replace(/ /g,"_");

//     $.ajax({
//       type: "GET",

//       url: "http://localhost/partyak/customerChat/search/" + searchValue,
//       dataType: "html",
//       success: function (response) {
//           $(".users-list").html(response);
//       }
//   })
//   });

//   setInterval(()=>{
//     if(!$(".search input").val()){
//       console.log("Hi");

//       $.ajax({
//         type: "GET",
  
//         url: "http://localhost/partyak/customerChat/userList/",
//         dataType: "html",
//         success: function (response) {
//             $(".users-list").html(response);
//         }
//     })
//     }
    

//   },500);
  //   searchValue = searchValue.replace(/ /g,"_");

  //   $.ajax({
  //     type: "GET",

  //     url: "http://localhost/partyak/chat/search/" + searchValue,
  //     dataType: "html",
  //     success: function (response) {
  //         $(".users-list").html(response);
  //     }
  // })
  
  


// });
  

// const searchBar = document.querySelector(".search input"),
// searchIcon = document.querySelector(".search button"),
// usersList = document.querySelector(".users-list");
// console.log("Hi");
// searchBar.onkeyup = ()=>{
//     // console.log("Hi");
//     let searchTerm = searchBar.value;
//     if(searchTerm != ""){
//         searchBar.classList.add("active");
//     }else{
//         searchBar.classList.remove("active")
//     }

//     let xhr = new XMLHttpRequest();
//     // console.log("Hi");
//     xhr.open("POST","partyak/chat/search",true);
//     console.log("Hi");
//     xhr.onload = ()=>{
//         if(xhr.readyState === XMLHttpRequest.Done){
//             if(xhr.status === 200){
//                 let data = xhr.response;
//                 usersList.innerHTML = data;
//             }
//         }
//     }

//     xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//     xhr.send("searchTerm=" + searchTerm);
// }