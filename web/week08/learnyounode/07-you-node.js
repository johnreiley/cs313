const http = require('http');
const url = process.argv[2];


function performHttpGet(url, callback) {
    http.get(url, (res) => {
        let dataArray = [];
        res.setEncoding('utf8');
        res.on('data', chunk => dataArray.push(chunk));
        res.on('error', err => callback(err))
        res.on('end', () => callback(null, dataArray));
    })
}

function callback(err, dataArray) {
    if (err) return console.error(err);
    dataArray.forEach(data => console.log(data));
}


performHttpGet(url, callback);