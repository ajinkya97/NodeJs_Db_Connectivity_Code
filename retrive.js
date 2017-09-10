//var http=require('http');
//var mysql = require('mysql');
//var fs = require('fs');
//
//
//http.createServer(function (req, res) {
//
//var con = mysql.createConnection({
//  host: "localhost",
//  user: "root",
//  password: "",
//  database: "nodejs"
//});
//
//con.connect(function(err) {
//  if (err) throw err;
//    var ret="select * from data";
//  con.query(ret, function (err, result, fields) {
//    if (err) throw err;
////      console.log(result);
////      res.end(JSON.stringify(result));
//
//
////fs.writeFile('jsondata1.json', '{"records":'+JSON.stringify(result)+"}", function (err) {
//fs.writeFile('jsondata1.json', '{"records":'+JSON.stringify(result)+"}", function (err) {
//
//
//
//  if (err) throw err;
//  console.log('Saved!');
//
//     res.end();
//});
//
//  });
//});
//
//
//}).listen(8000);


