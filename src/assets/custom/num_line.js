$(document).ready(function() {
    console.log('num');
    //Create numbering for every line block wich code
    $('pre code').each(function(i, block) {

        var lines = $(this).text().split('\n').length - 1;
        console.log(lines);
        var numbering = $('<ul/>').addClass('line-numbering');
        
        $(this) .addClass('code-numbered')
                .parent()
                .prepend(numbering);
        
        for (i = 1; i <= lines; i++){
            numbering.append($('<li/>').text(i));
        }

        $('.code-numbered').parent("pre").addClass('wrap-has-numbering'); 
    });
    
});
