

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