$(document).ready(function(){
    
    $(".accept-btn").click(function(){
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