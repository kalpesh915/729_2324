<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <button onclick="sendData()">Send Data</button>
   <hr>
   <p id="demo"></p>
</body>

</html>

<script>
    function sendData(){
        const xhttp = new XMLHttpRequest();
        xhttp.open("POST", "demo_phpfile.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onload = function() {
            document.getElementById("demo").innerHTML = this.responseText;
        }
        xhttp.send("fname=Jayrajsinh");
  }
</script>