
var p_p_p; //undefined
p_p_p = "string";

var x = "string"; var y = "string";

//this is a comment 

/** kkkkkk
 * llllll
 * ppppp
 * llllkkkss
 */


//document.getElementById('ddddd'); //dom

console.log('console message ' + x);

document.write('this is a message' + y);

var japan = true; var greece = true; var spain = true;
var france = false;

if (japan && greece) {
    //japanese and greek
}
else if (japan && spain) {
    //japanese and spanish
}
else if (spain && france) {
    //latin
}
else {
    //english
}

var borough = '6784659457685488695';

switch (borough) {
    case 'bronx':
    case 'manhattan':
        /////////
        break;
    case 'brooklyn':
    case 'queens':
        //
        break;
    case 'staten island':
        //
        break;
    //case 'brooklyn':
    default:
        //
}

var num1 = 60;   var num2 = 20;

if( num1 < num2 ){ // 

}



//html css js - browser 
//php mysql - backend - server 

var array = [ 'japan', 'greece', 'spain', 'france' ]; //0 to 3

for (var count = 0; count < 4; count++ ) {
    console.log( array[ count ]  ); 
}

/*
console.log( array[ 0 ]  );
console.log( array[ 1 ]  );
console.log( array[ 2 ]  );
console.log( array[ 3 ]  );
*/


function show_W_H () {
    var w = window.innerWidth; 
    var h = window.innerHeight;

    alert( w + ' ' + h);     
}


var w = window.innerWidth; 
var h = window.innerHeight;

//document.write( ' width: ' + w + ' height: ' + h );


function windowWH ( w, h ) {
   // console.log(  w + ' ' + h);
}

function do_nothing () {
    console.log('nothing');

}

windowWH( w, h ); //function call

do_nothing(); //function call
do_nothing();
do_nothing();



function cat () {
    var tom_jerry = true;

    
    console.log(tom_jerry);

    alert('meow');
} 

