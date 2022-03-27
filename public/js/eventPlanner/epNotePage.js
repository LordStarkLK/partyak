let x = document.getElementById('status').innerHTML;
// if(x="pending"){
//     document.getElementById('status').style.color = 'orange';
// }else if (x="rejected") {
//     document.getElementById('status').style.color = 'red';
// } else {
//     document.getElementById('status').style.color = 'green';
// }

switch(x) {
    case 'pending':
        document.getElementById('status').style.color = 'orange';
      break;
    case 'rejected':
        document.getElementById('status').style.color = 'red';
      break;
    case 'approved':
        document.getElementById('status').style.color = 'green';
      break;
  }