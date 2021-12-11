let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
sidebar.classList.toggle("active");
if(sidebar.classList.contains("active")){
    sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}


// for new update

// const wrapper = document.querySelector(".wrapper");
// const fileName = document.querySelector(".file-name");
// const defaultBtn = document.querySelector("#default-btn");
// const customBtn = document.querySelector("#custom-btn");
// const cancelBtn = document.querySelector("#cancel-btn i");
// const img = document.querySelector("img");
// let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

// function defaultBtnActive(){
//     defaultBtn.click();
// }

// defaultBtn.addEventListener("change", function(){
//     const file = this.files[0];
//     if(file){
//         const reader = new FileReader();
//         reader.onload = function(){
//             const result = reader.result;
//             img.src = result;
//             wrapper.classList.add("active");
//         }
//         cancelBtn.addEventListener("click", function(){
//             img.src = "";
//             wrapper.classList.remove("active");
//         })
//         //read the content of the file
//         reader.readAsDataURL(file);
//     }

//     if(this.value){
//         let valueStore = this.value.match(regExp);
//         fileName.textContent = valueStore;
//     }

// });
