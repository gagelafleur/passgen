function makeid() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_+=";

  for (var i = 0; i < 12; i++){
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }


  document.getElementById("password").innerHTML = text;
}
document.getElementById("generate-button").addEventListener( "click", makeid);
