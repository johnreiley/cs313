const mymodule = require('./06_2-you-node.js');

dir = process.argv[2];
ext = process.argv[3];

mymodule(dir, ext, callback);

function callback(err, filenames) {
    if (err) {
        return console.error(err);
    }
    filenames.forEach(filename => {
        console.log(filename);        
    });
}
