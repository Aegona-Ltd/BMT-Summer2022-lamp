// $(document).ready(function () {
//   $("#myform").submit(function (event) {
//     // event.preventDefault();
//     var string = $("#param").val();
//     console.log(string);
//     if (string == "admin@gmail.com") {
//         console.log(string);
//         window.location.href = 'http://localhost/Summer2022-lamp/phpotm/view/dashboard.php';
//     } else {
//       event.preventDefault();
//     }
//   });
// });
    $(document).ready(function () {
        $("#myform").submit(function (event) {
          console.log('string');
          var string = $("#param").val();
          console.log(string);
          if (string == "admin@gmail.com") {
                window.location.assign('http://localhost/Summer2022-lamp/phpotm/view/dashboard.php');
            } else {
              event.preventDefault();
                }
        });
      });
//     console.log(string);
//     string= document.getElementById("param").value;
//     console.log(string);
//     $.ajax({
//         url: "http://localhost/Summer2022-lamp/phpotm/controller/getUserbyemail.php?email="+string,
//         method: "GET",
//         dataType: "json",
//         success: function(){
//             // if (string == "admin@gmail.com"){
//             //     console.log(string);
//             //     window.location.href = 'http://localhost/Summer2022-lamp/phpotm/view/dashboard.php';
//             // }               
//         },
// }); 

