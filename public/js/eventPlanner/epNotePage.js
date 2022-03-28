let x = document.getElementsByClassName('status');
if(x="pending"){
    document.getElementsByClassName('status').style.back = 'orange';
}else if (x="rejected") {
    document.getElementsByClassName('status').style.color = 'red';
} else {
    document.getElementsByClassName('status').style.color = 'green';
}

// switch(x) {
//     case 'pending':
//         document.getElementsByClassName('status').style.color = 'orange';
//       break;
//     case 'rejected':
//         document.getElementsByClassName('status').style.color = 'red';
//       break;
//     case 'approved':
//         document.getElementsByClassName('status').style.color = 'green';
//       break;
//   }