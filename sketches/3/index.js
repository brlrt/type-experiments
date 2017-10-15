
var headline = "Hakusan est une municipalité ayant le statut de ville dans la préfecture d'Ishikawa, au Japon. La ville a reçu ce statut en 2004.";

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
    mar.data('interval',setInterval(mar.marquee,50/10));
});
