$(document).ready(function(){
    
    $(".accept-btn").click(function(){
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

    $(".reject-btn").click(function(){
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
});