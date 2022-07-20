var x; //undefined
var y; //undefined 
var z = 0; 

console.log(x); //undefined 
console.log(z); //0
document.write(x);
document.write(z);

x = 1; //1
y = 10; //10

console.log(x); //1 
console.log(y); //10
document.write(x);
document.write(y);

x = 100; y = 50; 
z = x / y; //2

document.write( '<br>' );
//document.write(z); 

var name = '\'Benjamin\'ii"y"iyuyyuiyiy$pppp';
var fullname = "first 'name' 'last' time";
console.log(name);

/*
var c = 1; //lower limit
c <= 10; //upper limit
c += 1; //increment
*/

for (var c = 1; c <= 10; c+=2) { 
    console.log('message'); console.log(c)
}

for (var even = 0; even <= 10; even+=2) {
    document.write(even + ' '); 
}

document.write('<br>');

for (var b = 10; b >= 0; b-=1 ) {
    document.write(b + ' '); 
}

document.write('<br>');

for (var d = 1; d <= 100; d+=1 ) {
    document.write(d + ' '); 

    if( d == 30 ) //boolean = true/false
        break; // break out of the loop
} //20


var f = 100; //int 
var str = 'this is a string'; //string
var is_it_true = false; //boolean = true or false
var this_bool; //undefined

var is_sun_bright = false;

//var is_sun_bright = confirm('is the sun bright?'); 

document.write('<br>');

console.log( 'is_sun_bright ' + is_sun_bright );

if (is_sun_bright) { //false
    document.write('wear sunglasses'); 
} //

document.write('<br>');
document.write('<br>');

var have_passport; 
have_passport = false;  

var airplane_ticket = false;

if (airplane_ticket) {
    document.write('travel to 27 countries'); 
}

var passport_year = 2040; //

if(passport_year >= 2022) { 
    document.write('passport is valid'); 
}