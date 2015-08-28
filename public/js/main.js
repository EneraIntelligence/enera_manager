
$( document ).ready(function() {
    console.log( "ready!" );

    $( ".item" ).click(function() {
        console.log( "Handler for .click() called." );
        var menu = $(this);
        //console.log(menu.attr('url'));
        var pag = menu.attr('url');
        console.log(pag);
        window.location.href='http://localhost:8000/'+pag;
    });


});


