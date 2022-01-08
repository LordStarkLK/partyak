$(document).ready(function(){
    
    $(".accept-btn").click(function(){
        alert("Budu saranai");
        console.log($(this).attr('class').split(' ')[1]);
        var service_id = $(this).attr('class').split(' ')[1];
        


        $.ajax({
            type: "GET",
            url: "http://localhost/partyak/adminRequest/accept/"+service_id,
            dataType: "html",
            success: function(response){
                $(".status"+service_id).html(response);
            }
        })
        
    })

    $(".reject-btn").click(function(){
        console.log($(this).attr('class').split(' ')[1]);
        var service_id = $(this).attr('class').split(' ')[1];
        


        $.ajax({
            type: "GET",
            url: "http://localhost/partyak/adminRequest/reject/"+service_id,
            dataType: "html",
            success: function(response){
                $(".status"+service_id).html(response);
            }
        })
        
    })
});


const searchBar = document.querySelector(".search input"),
searchIcon = document.querySelector(".search button"),
usersList = document.querySelector(".sales-boxes");


searchIcon.onclick = ()=>{
    searchBar.classList.toggle("show");
    searchIcon.classList.toggle("active");
    searchBar.focus();
    if(searchBar.classList.contains("acitve")){
        searchBar.value = "";
        searchBar.classList.remove("active");
    }
}

searchBar.onkeyup = () =>{
    // console.log("Hi");
    let searchTerm = searchBar.value;
    if(searchTerm != ""){
        searchBar.classList.add("active");
    }else{
        searchBar.classList.remove("active");
    }

    let xhr = new XMLHttpRequest();
    xhr.open("POST","http://localhost/partyak/adminRequest/search",true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                // console.log(data);
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send("searchTerm="+searchTerm);   
}



