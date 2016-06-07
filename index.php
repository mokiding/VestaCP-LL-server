<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>VestaCP - Local License Server</title>
  <meta name="description" content="VestaCP Local License Server">
  <meta name="author" content="Momcilo m0k1 Micanovic">
</head>
<body>
  <p><b><h2>VestaCP Local License Server</h2></b></p>
  ============================================================
  <p>What is this ?
  <br>
  This is alternative (backup) server for checking licenses of VestaCP in case that main VestaCP license server is down.</p>
  ============================================================<br>
  How to use ?
  <br>
  <b>Method 1</b> (need to be done after evry update)<br>
  Edit v_host variable to your LLS url.<br>
  Example:<br>
  <b>Before:</b> v_host='https://vestacp.com/checkout'<br>
  <b>After:</b> v_host='<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>checkout'<br>
  <br>
  Files need to be edited:<br>
  v-activate-vesta-license, v-check-vesta-license, v-deactivate-vesta-license<br>
  <br>
  They are located in /usr/local/vesta/bin<br>
  Done. Just recheck for license in your VestaCP<br></p>
  <br>
  <br>
  SFTP Jail module activated ? YES
  <br>
  File Manager module activate ? YES
  <br>

</body>
</html>
