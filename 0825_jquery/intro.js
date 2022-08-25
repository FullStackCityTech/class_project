$(document).ready(function () { 

    $('p').hide();
    $('p').show();
    //$('.headline').hide();
    $('h1').hide();
    $('h2').hide();
    //$('button').hide();
    //$('input[type="button"]').hide(); 

    //jquery event - click
    $( "p" ).click(function() {
        console.log( "You clicked a paragraph!" );
    });

    $('button').click(function() {
        $('#me').show();
    });

    $('[type="button"]').click(function() {
        $('#me').hide();
    });

    //$('p.intro').hide();

    $('p:first').hide();

    $('p.intro').click(function() {
        $(this).hide(); 
    });

   // $('[href]').hide();

    $('[href]').click(function() { 
        $(this).hide(); 
    });


    $('div').hide();
    $('div').css("width", "100px");
    $('div').css("height", "100px");
    $('div.red').css("background-color", "rgb(141, 77, 77)");
    $('div.blue').css("background-color", "rgb(123, 123, 167)");

    $('.fade').click(function() { 
        $('div.red').fadeIn(7000); 
        $('div.blue').fadeIn(4000);  
    });



});