var http=require('http');
var url=require('url');
var mysql = require('mysql');
var fs = require('fs');

http.createServer(function (req, res) {
  var data = url.parse(req.url, true).query;
  var fname = data.fname;
  var lname = data.lname;
  var email = data.email;
  var contactno = data.contactno;
  var age = data.age;

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "nodejs"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected");

    if(fname!=undefined && lname!=undefined  && email!=undefined && contactno!=undefined && age!=undefined)
        {
            var sql = "INSERT INTO data (fname,lname,email,contactno,age) VALUES ('"+fname+"','"+lname+"','"+email+"','"+contactno+"','"+age+"')";
            con.query(sql, function (err, result) {
            if (err) throw err;
            console.log("query executed");
            });
        }
        var ret="select * from data";
        con.query(ret, function (err, result, fields) {
        if (err) throw err;

        fs.writeFile('jsondata1.json', '{"records":'+JSON.stringify(result)+"}", function (err) {

        if (err) throw err;
        console.log('Saved');
        res.end();
        });
});

//    con.query("delete from data where fname like 'undefined'");
});

  res.end("<table border='1' cellpadding='5' cellspacing='0' style='width:100%;left:50%;margin-left:0px;top:300px;background-color: #64B5F6;font-size:20px;'><tr><th>FName</th><th>LName</th><th>Email</th><th>ContactNo</th><th>Age</th></tr><tr style='text-align:center;'><td>"+fname+"</td><td>"+lname+"</td><td>"+email+"</td><td>"+contactno+"</td><td>"+age+"</td></tr></table>");


}).listen(8000);




