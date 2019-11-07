const fs = require('fs');
const path = require('path');

module.exports = function (dir, ext, callback) {
    fs.readdir(dir, (err, files) => {
        if (err) { return callback(err) }
        files = files.filter(f => path.extname(f) === '.' + ext);
        callback(null, files);
    })
}