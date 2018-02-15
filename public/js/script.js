

    $('.watermark').watermark({
        text: 'www.photoShare.io',
        textWidth: 600,
        textHight:900000,
        gravity: 'n',
        opacity: 6,
        margin: 12
    });

    $('.watermark2').watermark({
        path: '',
        margin: 0,
        gravity: 'nw',
        opacity: 0.5,
        outputWidth: 600
    });

   
$(document).ready(function() {
    $(window).load(function() {
         $('#loader').hide();
         $('#pagecontent').show();
    });
});