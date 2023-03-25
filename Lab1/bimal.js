// Program to find the circumference of circle
/*
Formula : 2* pi *r;
*/

const pi = 3.14
var radius = 4;
var circumference = 0;
circumference = 2 * pi * radius;
console.log(circumference);


// another way of implementing it using function

const circum = (radius) =>{
    // it returns the circumference once we pass on radius argument
    return 4 * Math.PI * radius;
} 
console.log(circum(2));