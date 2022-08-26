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


    //$('div').hide();
    $('div').css("width", "100px");
    $('div').css("height", "100px");
    $('div.red').css("background-color", "rgb(141, 77, 77)");
    $('div.blue').css("background-color", "rgb(123, 123, 167)");

    $('.fade').click(function() { 
        $('div.red').fadeOut(7000); 
        $('div.blue').fadeOut(4000);  
    });

    $('.green').css("background-color", "rgb(169, 239, 169)");

    $('#fadeToggle').click(function() { 
        // console.log('fadetoggle');
        $('.green').fadeToggle(3000);
    });

    //$('#content').hide();
    $('#content').css("width", "500px");
    $('#content').css("border", "2px solid gray");

    $('#su').click(function() {  
        $('#content').slideUp(1000);
    });

    $('#sd').click(function() {  
        $('#content').slideDown(1000);
    });

    $('#st').click(function() {   
        $('#content').slideToggle(1000);
    });

    $('#append').append("<span> ... at the end</span>");

    $('#append').prepend(" before the start");


    $('span').css("background-color", "yellow");    


    // $('.green').remove();

    $('#addGreen').click(function() {   
        //$(this).addClass('green');
    });

    $('#addRed').click(function() {   
        $(this).addClass('green');
    }); 

    $('#addGreen').removeClass('green');
    $('#addGreen').removeClass('bigText');
    $('#addGreen').removeClass('underline');

    $('#addGreen').remove();

    $('.accordionItemHeaders');
});