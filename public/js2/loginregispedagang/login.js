function mouseoverPassw(objek) {
    var objek = document.getElementById('passw');
    objek.type = "text";
  }
  function mouseoutPassw(objek) {
    var objek = document.getElementById('passw');
    objek.type = "password";
  }

  function mouseoverPass(obj) {
    var obj = document.getElementById('password');
    obj.type = "text";
  }
  function mouseoutPass(obj) {
    var obj = document.getElementById('password');
    obj.type = "password";
  }

  function mouseoverPassword(object) {
    var object = document.getElementById('confirm');
    object.type = "text";
  }
  function mouseoutPassword(object) {
    var object = document.getElementById('confirm');
    object.type = "password";
  }

  function mouseoverPassw(objek) {
    var objek = document.getElementById('pass');
    objek.type = "text";
  }
  function mouseoutPassw(objek) {
    var objek = document.getElementById('pass');
    objek.type = "password";
  }

  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
  
      return false;
    return true;
  }


