const fs = require('fs');

let file = await fs.readFile(process.argv[2], 'utf8');

function callback(err, text) {
    if (err) {
        return console.log(err);
    }
    console.log(text.split('\n').length - 1);
}
