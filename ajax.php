<html>
<head>
    <script>

    try
        {


var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
//        alert(this.responseText);
        var myObj = JSON.parse(this.responseText);
//        alert(myObj.length);
//        alert(myObj[0].FName);
        for(var i=0;i<=myObj.length;i++)
            {
                var f =      document.getElementById("demo5").innerHTML += myObj[i].Id+"<br>";
                var a =      document.getElementById("demo").innerHTML += myObj[i].FName+"<br>";
                var b =      document.getElementById("demo1").innerHTML += myObj[i].LName+"<br>";
                var c =      document.getElementById("demo2").innerHTML += myObj[i].Email+"<br>";
                var d =      document.getElementById("demo3").innerHTML += myObj[i].ContactNo+"<br>";
                var e =      document.getElementById("demo4").innerHTML += myObj[i].Age+"<br>";

            }
    }
};
xmlhttp.open("GET", "jsondata1.json", true);
xmlhttp.send();
}
        catch(e)
            {
                document.write(e);
            }

</script>
</head>
    <body>
        <table border='1' cellpadding='5' style='width:100%;text-align:center;'>
            <tr><th>Id</th><th>FName</th><th>LName</th><th>EmailId</th><th>ContactNo</th><th>Age</th></tr>
            <tr><td id="demo5"></td><td id="demo"></td><td id="demo1"></td><td id="demo2"></td><td id="demo3"></td><td id="demo4"></td></tr>
        </table>
    </body>
</html>



