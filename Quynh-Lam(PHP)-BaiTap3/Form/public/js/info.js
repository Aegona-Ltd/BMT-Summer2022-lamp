$(document).ready(function() {
    $('#table1').DataTable();
  });
  $('.btn-update').click(function() {
    $.ajax({
      type: "get",
      url: '/admin/getbyid/' + $(this).data('id'),
      dataType: "json",
      success: function(response) {
        console.log(response);
        $('#id').val(response.id);
        $('#name').val(response.name);
        $('#email').val(response.email);
        $('#subject').val(response.subject);
        $('#content').val(response.content);
      }
    });
    $('#exampleModal').modal('show');
  });
  $('.btn-save').click(function() {
    var formData = new FormData($('form#formUpdate')[0]);
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // == csrf
      },
      type: "post",
      url: '/admin/save',
      data: formData,
      dataType: "json",
      processData: false,
      contentType: false,
      success: function(response) {
        console.log(response);
        $('#exampleModal').modal('hide');
        location.reload();
        // console.log
      }
    });
  })