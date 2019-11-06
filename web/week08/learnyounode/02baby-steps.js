let sum = process.argv.slice(2)
.reduce((acc, curr) => {return acc += Number(curr)}, 0);

console.log(sum);