const searchBar = document.querySelector(".search input"),
searchIcon = document.querySelector(".search button"),
usersList = document.querySelector(".users-list");
console.log("Hi");
searchBar.onkeyup = ()=>{
    // console.log("Hi");
    let searchTerm = searchBar.value;
    if(searchTerm != ""){
        searchBar.classList.add("active");
    }else{
        searchBar.classList.remove("active")
    }

    let xhr = new XMLHttpRequest();
    // console.log("Hi");
    xhr.open("POST","partyak/chat/search",true);
    console.log("Hi");
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.Done){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }

    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}