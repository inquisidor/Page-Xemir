$(document).ready(function()
{ 
    $('.alternar-respuesta').on('click',function(e)
    {
        $(this).parent().next().toggle('slow');
        e.preventDefault();
    });

    $('#alternar-todo').on('click',function(e)
    {
        $('.respuesta').toggle('slow');
        e.preventDefault();
    });
});