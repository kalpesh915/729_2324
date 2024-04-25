<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="searchBox">Search Here</label>
    <input type="text" name="searchBox" id="searchBox" onkeyup="showSuggestions(this.value)">
    <p id="op"></p>
</body>
</html>

<script>
    function showSuggestions(data){
        //alert(data);
        /// create XMLHttpRequest() object for generate http request
        const XMLHttp = new XMLHttpRequest();

        // open a new request for get data from get hint page with get
        XMLHttp.open("GET", "gethint.php?text="+data, true);
        // send 
        XMLHttp.send();

        // callback wait for proper response
        XMLHttp.onreadystatechange = function(){
            // status = 200 (OK) readyState = 4 (Response received)
            if(XMLHttp.status == 200 && XMLHttp.readyState == 4){
                //alert(XMLHttp.responseText);
                document.getElementById("op").innerHTML = XMLHttp.responseText;
            }
        }
    }
</script>