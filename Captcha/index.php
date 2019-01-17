<!DOCTYPE html>
<html>
<head>
<title>CAPTHA</title>
<script type="text/javascript">
 window.onload = function() {
  document.getElementById('send_data').addEventListener('click', function() {
   var http,
   response,
   captcha;

   captcha = document.getElementById('captcha');
   if (window.XMLHttpRequest) {
    http = new XMLHttpRequest();
   } else {
    http = new ActiveXObject('Microsoft.XMLHTTP');
   }

   http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
     // set response menjadi JSON
     response = JSON.parse(http.responseText);
     // munculkan pesan
     alert(response.message);
     // kosongkan textbox
     captcha.value = '';
    }
   }

   http.open('POST', 'cek.php', false);
   http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
   http.send('captcha='+ captcha.value);
  });
 }

</script>
</head>
<body>
<img src="captcha.php" height="70" width="200"><br />
<input type="text" id="captcha" /><br />
<button id="send_data">CEK CAPTCHA</button>
</body>
</html>