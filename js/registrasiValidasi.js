function validasi(){
     var pass = document.getElementById("password").value;
     var conf = document.getElementById("confirm-password").value;
  
  if( pass === "" && conf === ""){
    alert("Password dan Konfirmasi Password tidak boleh kosong");
  } else if(pass === "" ){
    alert("Password tidak boleh kosong");
  } else if(conf === ""){
    alert("Konfirmasi Password tidak boleh kosong");
  } else if(pass != conf){
    alert("Password dan Konfirmasi Password tidak cocok")
  } else if(pass == conf){
    alert("Berhasil Mendaftar")
  }
}