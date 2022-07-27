

var div = document.getElementById('paragraph'); //element object
console.log(div);

document.getElementById('paragraph').style.color = 'blue';
div.style.color = 'white';

var nonsense = document.getElementById('nonsense'); //document object model = dom
//nonsense = type object

nonsense.style.color = 'white';
nonsense.style.fontSize = '30px';  //font-size: 30px;
nonsense.style.border = '1px solid green'; 
nonsense.style.marginTop = '40px';  //margin-top
nonsense.style.paddingTop = '20px'; 
nonsense.style.backgroundColor = 'indigo';

document.getElementById('body').style.backgroundColor = 'black';


var cars = [ 'honda', 'mercedes', 'toyota', 'cadillac', 'tesla' ]; //array of 5 items


console.log('for loop');

var c;
for(c = 0; c < cars.length; c++) {
    console.log( 'c: ' + c + ' ' + cars[c] );
}


console.log( cars[0] ); //0 not 1
console.log( cars[3] );  

cars[3] = 'lambo';

console.log( cars[3] );  


console.log('for loop');

var c;
var output = ''; //
for(c = 0; c < cars.length; c++) {

    output = output + ' c: ' + c + ' ' + cars[c]; 
//    console.log( 'c: ' + c + ' ' + cars[c] );
}
console.log(output);


var population = [ 100, 200, 450, 50, 50, 70, 50, 40, 30 ];

population[2] = 999;

console.log(population.length);

//0 to 8
for(var p = 0; p <= population.length - 1; p++){
    console.log( 'p: ' + p + ' ' + population[p] );
}

var sum = 0;
for(var p = 0; p < population.length; p++){
    //console.log( 'p: ' + p + ' ' + population[p] );
    sum = sum + population[p]; //sum = 0 + 100
    //sum = 100 + 200 = 300
    //sum = 300 + 999 = ...
}

console.log('sum: ' + sum);


var sales = [2, 1, 3, 3, 1, 0, 2]; //
var inv = 100;

for(var s = 0; s < sales.length; s++) {
    inv = inv - sales[s];
}
console.log('inv: ' + inv);


var people = 9; 
switch(people) {
    case 10: 
        console.log('good');
        break;
    case 2: 
        console.log('twos company');
        break;
    case 3:
        console.log('threes a crowd');
        break;
    default:
        console.log('thats nice');
}

/* if(people == 1)
else if(people == 2)
else if(people == 3)
else 
*/

var favoriteAnime = 'kimi no na wa';

switch(favoriteAnime) {
    case 'dbz':
        console.log('over 9000');
        break;
    case 'codegeass':
        console.log('obey me');
        break; 
    case 'bobs burgers':
        console.log('bobs burgers');
        break; 

    default: 
        console.log('never heard of it');
}


var power_levels = ['normal', 'ss', 'ss2', 'ss3', 'ss_red', 'ss_blue'];

var current_power_level = power_levels[1];

switch('ss2') {

    case 'ss3':
        console.log('long hair');  
    case 'ss2': 
        console.log('electricity');
    case 'ss':
        console.log('yellow hair');  
 
        break;  

    case 'ss_red':
        console.log('hair not yellow anymore');  
    case 'ss_blue':
        console.log('god levels');  
    
        break;

    case 'normal': 
    default:
        console.log('you suck');
}

for (var y = 1; y <= 20; y++) { //1 to 20
    console.log(y);

   //if(y == 8)
     //   break; //break loop
    if(y % 2 == 0) {
        document.write(y + ' is even '); 
    }

}

//% modulo 
var num1 = 7;  

document.write('<br><br>');

if(num1 % 2 == 0) { //even
    document.write(num1 + ' is even');
}
else { //odd

    document.write(num1 + ' is odd');
}

