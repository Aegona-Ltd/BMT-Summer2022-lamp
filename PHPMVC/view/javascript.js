$.ajax({
  url: "http://localhost/Summer2022-lamp/phpmvc/api/getALLuser.php",
  dataType: "json",
  success: function (data) {
    let placeholder = document.querySelector("#tbody");
    let out = "";
    for(let product of data){
       out += `
          <tr>
             <td> ${product.id}</td>
             <td> ${product.fullname}</td>
             <td> ${product.companyname}</td>
             <td> ${product.businessphone}</td>
             <td> ${product.email}</td>
             <td> ${product.password}</td>
             <td> ${product.created}</td>
             <td> ${product.updated}</td>
          </tr>
       `;
    }
    placeholder.innerHTML = out;
  }
});

function GetID() {
  string= document.getElementById("param").value;
  $.ajax({
    url: "http://localhost/Summer2022-lamp/phpmvc/api/getUserbyid.php?id=" + string,
    dataType: "json",
    success: function (data) {
      let placeholder = document.querySelector("#tbody");
     
      console.log(data.updated);
      let out = `
            <tr>
              <td> ${data.id}</td>
              <td> ${data.fullname}</td>
              <td> ${data.companyname}</td>
              <td> ${data.businessphone}</td>
              <td> ${data.email}</td>
              <td> ${data.password}</td>
              <td> ${data.created}</td>
              <td> ${data.updated}</td>
            </tr>
        `;
      placeholder.innerHTML = out;
    }
  });
}

function Delete() {
  string= document.getElementById("param").value;
  console.log( "http://localhost/Summer2022-lamp/phpmvc/api/deleteUser.php" + string);
  $.ajax({
    url: "http://localhost/Summer2022-lamp/phpmvc/api/deleteUser.php?id=" + string,
    method: "DELETE",
    dataType: "json",
    success: function(html){
      location.reload();
    }
  });
  window.location.reload();
}

