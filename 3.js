
var headline = 'Os caracteres que compõem seu nome significam "Origem do Sol", razão pela qual o Japão é às vezes identificado como a "Terra do Sol Nascente".';

$('.marquee-text').html(headline);
$('.marquee').fadeIn('slow');

var marquee = $('div.marquee');
marquee.each(function() {
    var mar = $(this),
    indent = mar.width();
    mar.marquee = function() {
        indent-=3;
        mar.css('text-indent',indent);
        if (indent < -1 * mar.children('div.marquee-text').width()) {
            indent = mar.width();
        }
    };
    mar.data('interval',setInterval(mar.marquee,100/10));
});
