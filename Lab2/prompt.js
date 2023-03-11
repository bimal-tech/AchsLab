const num = parseInt(prompt("Enter an integer:"));

if (isNaN(num)) {
  console.log("Invalid input!");
} else {
  for (let i = 1; i <= 10; i++) {
    console.log(`${num} x ${i} = ${num * i}`);
    // document.write(`${num} x ${i} = ${num * i}`+'<br>');
  }
}

