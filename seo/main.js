
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

//console.log('console message ' + x);

//document.write('this is a message' + y);

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
        var ttt; //

        break;
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

var num1 = 60;   var num2 = 30;

if( num1 < num2 ) { // 
    var ttt = 999; 
    console.log('ttt:' + ttt);
    
}

console.log('ttt:' + ttt); //ttt is not defined


//html css js - browser 
//php mysql - backend - server 

var array = [ 'japan', 'greece', 'spain', 'france' ]; //0 to 3

var ggg; 

for (var count = 0; count < 4; count++ ) {
    console.log( array[ count ]  ); 
    ggg = 0;
}

// ggg

/*
console.log( array[ 0 ]  );
console.log( array[ 1 ]  );
console.log( array[ 2 ]  );
console.log( array[ 3 ]  );
*/


function show_W_H () {
    var w = window.innerWidth; 
    var h = window.innerHeight;

    //alert( w + ' ' + h);     

    var thisText = document.getElementById('text').innerHTML; 

    if(thisText == '') {
        document.getElementById('text').innerHTML = 'your browser size is ' + w + 'px ' + h + 'px ';
    }
    else {
        document.getElementById('text').innerHTML = '';
    }

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


if (true) {
    //document.write('top');

    document.getElementById('iii').innerHTML = "jjjjjjj";
}

document.getElementById('p1').innerHTML = "sentence <a href='https://google.com'>link</a>";


document.getElementById('p2').innerHTML = " <div> gggrijnjfjnfjjfnj </div> ";


var p1 = document.getElementById('p1').innerHTML;

var p3 = document.getElementById('p3').innerHTML;

console.log('p3 is' + p3);


if(p3 == '') { //check for empty string
   document.getElementById('p3').innerHTML = p1;
}

function showHideCat(){

    var theCat = document.getElementById('theCat').innerHTML; 

    var theImg = '<img src="glass_3.jpg" class="cat" alt="cat 2">';

    // console.log('theCat ' + theCat);
    console.log( theCat == '' );

    if (theCat == '') {
         document.getElementById('theCat').innerHTML = theImg;
    }
    else { 
        document.getElementById('theCat').innerHTML = '';
    }

}