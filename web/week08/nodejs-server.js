var http = require('http');

function sayHello(req, res) {
    console.log("Recieved a request for: " + req.url);

    res.write("Hello from Node");
    res.end();
}

var server = http.createServer(sayHello);
server.listen(80);

console.log('The server is now listening on port 80...');
