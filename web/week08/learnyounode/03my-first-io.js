const fs = require('fs');

let fileText = fs.readFileSync(process.argv[2], 'utf8');
let numLines = fileText.split('\n').length - 1;
console.log(numLines);