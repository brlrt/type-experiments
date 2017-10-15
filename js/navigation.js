
// Wie viele Links sollen in die navi?

var howManyLinks = 12;

for (var i = 1; i < howManyLinks; i++){
    var linkHtml = '<a id="link-' + i + '">' + i + '</a>';
    $('#navbox').append(linkHtml);
}

// A $( document ).ready() block.
$( document ).ready(function() {

// KLICK AUF EIN NAV-ITEM

var clickedLinkInt = 0;
var stylesheet;

$('#navbox a').click(function (){
    clickedLinkInt = $(this).attr('id').replace( /^\D+/g, '');
    $('#sketchStyles').attr('href','sketches/' + clickedLinkInt + '/index.css');
    $('#stageWrapper').load('sketches/'+clickedLinkInt+'/index.html');

    $.getScript( 'sketches/'+clickedLinkInt+'/index.js');

    });

});

$('#nav-toggle').click(function(){
    $('#overlay').toggleClass('active');
        $('#overlay p').toggleClass('hide');

    $(this).toggleClass('active');
    $('body').removeClass('invert');
});


$('#toggleColor').click(function(){
    $('body').toggleClass('invert');
});
