const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };
  const validatePass = (passwork) => {
    return String(passwork)
      .toLowerCase()
      .match(
        /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/
      )
  };
  // const validatePhone =(sdt) =>
  // {
  //   return String(sdt)
  //   .toLowerCase()
  //   .match(/((09|03|07|08|05)+([0-9]{8})\b)/)
  // };
  function Login(e)
  {
    
    e.preventDefault();
    
    if(!validateEmail(document.getElementById('email').value)){
        alert("Sai định dạng email"); // chay di
      }
      if(!validatePass(document.getElementById('password').value)){
        alert("Sai định dạng pass"); // chay di
      }
      // if(!validatePhone(document.getElementById('sdt'))){
      //   alert("Sai định dạng SDT"); // chay di
      // }
      else{
      window.location.href = "http://localhost:5500/contac.html";
      }
     
  }
  function Login1(e)
  {
    
    e.preventDefault();
    
    if(!validateEmail(document.getElementById('email').value)){
        alert("Sai định dạng email"); // chay di
      }
      if(!validatePass(document.getElementById('password').value)){
        alert("Sai định dạng pass"); // chay di
      }
      if(!validatePhone(document.getElementById('sdt'))){
        alert("Sai định dạng SDT"); // chay di
      }
      else{
      window.location.href = "http://127.0.0.1:5500/contac.html";
      }
     
  }
  