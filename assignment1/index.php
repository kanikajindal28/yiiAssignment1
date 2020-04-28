<html>
<head></head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    var myVar;
    function setTimestamp(){
        $("tstamp").innerText = setInterval(function() {
            var dt = new Date();
            var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
          document.getElementById("tstamp").innerText = time;
        },1000);

    }

    $(document).ready(function(){
        setTimestamp();
    });
</script>
<body>
<form action="index.php" method="post">
    <label>Enter your name </label>
    <p>Name: <input type="text" name="nameString"></p>
    <input type="submit">
</form>

<?php


     $str = $_POST["nameString"];
     if(!empty($str))
     {
     echo "<p>Your name is $str </p>";
     $str_base64= base64_encode ($str);
     echo "The input string in the form of 'base64' string is $str_base64<br>";
     echo "<h3>Hello $str_base64,Welcome to WNS!! <br></h3>";
     }

     date_default_timezone_set('Asia/Calcutta');
     echo date('d/m/y :', time()) . "<span id='tstamp'>  </span>"


?>


</body >
</html>