$(document).ready(function(){
    var booking_id =  booking_id;
    console.log(booking_id);

    $('#mySubmitButton').click(function(){
        //Send data to the email script
        $.post( 'https://sandbox.payhere.lk/pay/checkout', $('form').serialize(), function(data, textStatus) {
            //data is the result from the script
            // alert(data);
        });

        //Send data to the other script
        $.post( 'http://localhost/partyak/payment/insertPayment/', $('form').serialize(), function(data, textStatus) {
            //data is the result from the script
            // alert(data);
        });
    });



});