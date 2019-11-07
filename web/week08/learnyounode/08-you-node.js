const http = require('http');

performHttpGet(process.argv[2], callback);

function performHttpGet(url, callback) {
    http.get(url, res => {
        let data = [];
        res.setEncoding('utf8');
        res.on('data', chunk => data.push(chunk));
        res.on('error', callback)
        res.on('end', () => callback(null, data));
    })
}

function callback(err, data) {
    if (err) return console.error(err)
    data = data.join('');
    console.log(data.length);
    console.log(data);
}