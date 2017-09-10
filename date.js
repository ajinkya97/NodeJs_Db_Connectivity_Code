//var http = require('http');
//var dt = require('./myfirstodule');
//
//http.createServer(function (req, res) {
////    res.writeHead(200, {'Content-Type': 'text/html'});
//    res.write("The date and time is currently: " + dt.myDateTime());
//    res.end();
//    console.log("server has runned");
//}).listen(8000);
var http = require('http');

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  //Return the url part of the request object:
  res.write(req.url);
  res.end();
}).listen(8000);
