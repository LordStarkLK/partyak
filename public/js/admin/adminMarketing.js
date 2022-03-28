$(document).ready(function(){
    
    $(".online-btn").click(function(){
        // used to get the content id from the class list
        console.log($(this).attr('class').split(' ')[1]);
        var content_id = $(this).attr('class').split(' ')[1];
        


        $.ajax({
            type: "GET",
            url: "http://localhost/partyak/adminMarketing/online/"+content_id,
            dataType: "html",
            success: function(response){
                $(".status"+content_id).html(response);
            }
        })
        
    })

    $(".offline-btn").click(function(){
        // used to get the content id from the class list
        console.log($(this).attr('class').split(' ')[1]);
        var content_id = $(this).attr('class').split(' ')[1];
        


        $.ajax({
            type: "GET",
            url: "http://localhost/partyak/adminMarketing/offline/"+content_id,
            dataType: "html",
            success: function(response){
                // console.log(response);
                $(".status"+content_id).html(response);
            }
        })
        
    })

    $(".accept-btn").click(function(){
        // used to get the content id from the class list
        console.log($(this).attr('class').split(' ')[1]);
        var content_id = $(this).attr('class').split(' ')[1];
        


        $.ajax({
            type: "GET",
            url: "http://localhost/partyak/adminMarketing/accept/"+content_id,
            dataType: "html",
            success: function(response){
                $(".status"+content_id).html(response);
            }
        })
        
    })

    $(".reject-btn").click(function(){
        // used to get the content id from the class list
        console.log($(this).attr('class').split(' ')[1]);
        var content_id = $(this).attr('class').split(' ')[1];
        


        $.ajax({
            type: "GET",
            url: "http://localhost/partyak/adminMarketing/reject/"+content_id,
            dataType: "html",
            success: function(response){
                $(".status"+content_id).html(response);
            }
        })
        
    })




});