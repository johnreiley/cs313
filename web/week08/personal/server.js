const http = require('http');
const fs = require('fs');

const port = process.argv[2];
const filepath = process.argv[3];

const server = http.createServer(onRequest);
try {
    server.listen(port);
    console.log(`server running on port ${port}...`);
} catch (err) {
    console.error(`Invalid Port ${port}: ${err}`);
}


let paths = JSON.parse(fs.readFileSync('./paths.json'));
paths[filepath] = generatePathObject(filepath);



function onRequest(req, res) {
    console.log(`recieved request for: ${req.url}`);
    try {
        let path = paths[req.url];
        res.writeHead(path.responseCode, {"Content-Type" : path.contentType});
        let content = fs.readFileSync(path.filepath);
        res.write(content);

    } catch (error) {
        res.writeHead(404, {"Content-Type" : "text/html"})
        res.write("<h1>404: Page note found!</h1>");
    }
    res.end();
}

function generatePathObject(path) {
    return {
        responseCode: 200,
        contentType: "text/html",
        filepath: `.${path}`
    }
}