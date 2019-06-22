$(document).ready(function(){
    $('.sentMessage').hide()
        $('.submit').click(function(){
            
           $('.sentMessage').show()
           $('.form').hide()
                $('#alert').toggle(delay)
        });

});
