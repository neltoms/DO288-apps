<!DOCTYPE html>

<body style="background-color: black">
   <h2 style="color: powderblue">Application cURL Test</h2>
   <div style="color: white">Enter cURL command below:</div><br>
   <form style="color: white" action="index.php" method="post">
      command: <input style="background-color: lightgrey" size="80" type="text" name="command">
      <input type="submit">
   </form>

   <?php


      $ip_port = $_POST['command'];
      echo "<pre style='color: white'>";
      echo "<strong style='color: powderblue'>Last Command Run: <span style='color: red'>$ip_port</span></strong>";
      echo "\r\n\n";

      $pattern = "/^([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\:([0-9]{1,5})$/";

      if ( preg_match($pattern, $ip_port) ) {
         echo shell_exec('curl -kv '.$ip_port);
      } else {
         echo "Please enter ip and port in the following pattern: [ip:port]";
      }

      echo "</pre>";

   ?>
</body>
