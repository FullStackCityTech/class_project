
var cars = ['mercedez', 'rolls royce', 'cadillac', 'toyota', 'honda'];

var numOfCars = cars.length;
console.log(cars.length);

document.write(  cars[1] + ' ' + cars[4] ) ;
 

for (c = 0; c < numOfCars; c++){
    console.log(cars[c]);
}


  
var buyCar; var i = 0;
do {
  i = i + 1; 
  buyCar = cars[i];


  console.log(buyCar);
} 
while (buyCar != 'toyota');
  

var x = 1;
switch(x) {
    case 2:
        var scope = 'ppppppp';
        console.log('twos company');
        break;
    case 3:
        console.log('threes a crowd');
        break;
    default:
        console.log('default');
}


console.log('scope variable ' + scope);

function showCar (numCars) {
    var typeCar = 'm';
    console.log(numCars + ' ' + typeCar);
}


function showCar1 (numCars) {
     
    document.getElementById('clickme').style.backgroundColor = 'blue';
}

var numCars = 2;
showCar(numCars);

showCar1(numCars);