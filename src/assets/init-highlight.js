$(document).ready(function() {
    console.log('init');
    //Create numbering for every line block wich code
    $('pre').each(function(i, block) {
        hljs.highlightBlock(block);
    });
    
});


