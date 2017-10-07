
var headline = "Die geltende japanische Verfassung wurde am 3. November 1946 verkündet und trat am 3. Mai 1947 in Kraft.";

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
