function validasi(){	
  var nama = document.getElementById("username").value;
  var pass = document.getElementById("password").value;
  
  if(nama === "" && pass === ""){
    alert("Username dan Password tidak boleh kosong");
  } else if(nama === ""){
    alert("Username tidak boleh kosong");
  } else if(pass === ""){
    alert("Password tidak boleh kosong");
  }
}

/*
if(nama === "" && pass === ""){
    alert("Username dan Password tidak boleh kosong");
  } else if(nama === ""){
    alert("Username tidak boleh kosong");
  } else if(pass === ""){
    alert("Password tidak boleh kosong");
  }
*/