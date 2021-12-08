$(document).ready(function(){
    
    $(".input-field").keydown(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);

        if(keycode == '13'){
            sendMessage();
        }

    });

    $(".send-btn").click(function(){
        sendMessage();
    });

    function sendMessage()
    {
        let message = $(".input-field").val();
        $(".input-field").val("");
        let user = $(".incoming_id").val();
        
        $.ajax({
            type: "GET",
            url:"http://localhost/partyak/adminChatmsg/sendMessage/" + user +'/'+ message
        })
    }
});

const form = document.querySelector(".typing-area"),
incoming_id = form.querySelector(".incoming_id").value,
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault();
}

inputField.focus();
inputField.onkeyup = ()=>{
    if(inputField.value != ""){
        sendBtn.classList.add("active");
    }else{
        sendBtn.classList.remove("active");
    }
}



// sendBtn.onclick = ()=>{
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "http://localhost/partyak/chat/sendMessage/", true);
//     xhr.onload = ()=>{
        
//         if(xhr.readyState === XMLHttpRequest.DONE){
//             if(xhr.status === 200){
//                 inputField.value = "";
//                 scrollToBottom();
//             }
//         }
//     }
    
//     let formData = new FormData(form);
//     xhr.send(formData);
    
    
// }
chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}


setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","http://localhost/partyak/adminChatmsg/getChatList/",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                }
            }
        }
    }
    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhr.send("incoming_id="+incoming_id);

},500);

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
  }