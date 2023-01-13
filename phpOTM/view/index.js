
function load_ajax() {
    $.ajax({
        type: "POST",
        url: "http://localhost/Summer2022-lamp/phpotm/controller/createUser.php",
        method: "POST",
        dataType: "json",
        data: JSON.stringify(
            {
                fullname : $('#fullname').val(),
                companyname :  $('#companyname').val(),
                businessphone :  $('#businessphone').val(),
                email :  $('#email').val(),
                password :  $('#password').val()
            }),
            success: function(){              
                window.location.href = 'http://localhost/Summer2022-lamp/phpotm/view/login.php';
            },
}); 
}


// jQuery(document).ready(function(){
//     $('#btn2').on('click', function(){
//         jQuery.ajax({
//             type: 'POST',
//             dataType: 'JSON',
//             url : "http://localhost/Summer2022-lamp/phpotm/controller/createUser.php",
//             data : {
//                 fullname : $('#fullname').val(),
//                 companyname :  $('#companyname').val(),
//                 businessphone :  $('#businessphone').val(),
//                 email :  $('#email').val(),
//                 password :  $('#password').val(),
//             },
//             success: function(response){
//                 console.log(response.message);
//                 if(response.message == 'true'){
//                     window.location
//                 }
//                 else {}
//             },
//             error: function(response){
//                 console.log("i messed up");
//             }
//         });
//     });
   
// });