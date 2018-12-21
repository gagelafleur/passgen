<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
  <meta http-equiv="Pragma" content="no-cache"/>
  <meta http-equiv="Expires" content="0"/>
  <title>PassGen</title>
</head>
<body onload = "makeid()">

  <div id = "password">

  </div>
  <a id = "generate-button" href = "#">Generate</a>
  <script>
  function makeid() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_+=";

    for (var i = 0; i < 12; i++){
      text += possible.charAt(Math.floor(Math.random() * possible.length));
    }


    document.getElementById("password").innerHTML = text;
  }
  document.getElementById("generate-button").addEventListener( "click", makeid);

  <!--

  Rules:
  Max chars

  Default
  Needs Special Characters - checkbox
  Letters only




  -->

  </script>
</body>
</html>
