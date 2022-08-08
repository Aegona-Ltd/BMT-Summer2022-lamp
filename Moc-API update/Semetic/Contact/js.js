  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]

            },
            comment:{
              identifier:'comment',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your comment'
                },
                {
                  type:'length[200]',
                  prompt:'Your comment must be at least 200 characters'
                }

                ]
            }
          }
        })
      ;
    })
  ;
  $(document).ready(function() {
    $('#ph').blur(function(e) {
        if (validatePhone('ph')) {
            $('#sns').html('Valid');
            $('#sns').css('color', 'green');
        }
        else {
            $('#sns').html('Invalid');
            $('#sns').css('color', 'red');
        }
    });
});
  function validatePhone(ph) {
    var a = document.getElementById(ph).value;
    var filter = /^[0-9-+]+$/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}