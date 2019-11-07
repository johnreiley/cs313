const fs = require('fs');
const path = require('path');

let dir = process.argv[2];
let ext = process.argv[3];

function getFilesByExtension(ext, dir, callback) {
    fs.readdir(dir, (err, files) => {
        if (err) {
            callback(err);
        } else {
            files = files.filter(f => path.extname(f).slice(1) == ext);
            callback(null, files);
        }
    })
}

function logFileNames(err, filenames) {
    if (err) {
        return console.log(err);
    }
    filenames.forEach(filename => {
        console.log(filename);
    });
}

getFilesByExtension(ext, dir, logFileNames);