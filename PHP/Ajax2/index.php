<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>Select Person to Print Data</label>
    <select name="personid" onchange="getPerson(this.value)">
        <option value="0">Select Person</option>
        <?php 
            require_once("connection.php");

            $result = $dbconn->printIdFname();

            while($row = $result->fetch_assoc()){
                echo "<option value=$row[id]>$row[fname]</option>";
            }
        ?>
    </select>

    <hr>
    <div id="op"></div>

    <hr>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consequatur modi dolor! Aliquid placeat animi, cum nemo vitae esse odio? Ratione non consequuntur veritatis neque, dicta delectus vel cumque sed! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, aliquam amet delectus, minus laborum laboriosam quod fugiat officia at, exercitationem architecto facilis blanditiis sapiente. Saepe ipsum iste reiciendis debitis quae.</p>
</body>
</html>

<script>
    function getPerson(pid){
        //alert(pid);
        let op = document.getElementById("op");
        if(pid == 0){
            op.innerHTML = "Please Select Person to view Data";
        }else{
            const XMLHttp = new XMLHttpRequest();
            XMLHttp.open("GET", "getperson.php?pid="+pid, true);
            XMLHttp.send()

            XMLHttp.onreadystatechange = function(){
                if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
                    op.innerHTML = XMLHttp.responseText;
                }
            }
        }
    }
</script>