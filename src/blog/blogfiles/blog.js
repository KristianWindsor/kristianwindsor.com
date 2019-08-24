$(window).on('load', function () {
    $('img.isgif').each(function(i, obj) {
        var oldSrc = $(obj).attr('src');
        var newSrc = oldSrc.split('.')[0] + '.gif';
        $('body').append('<img src="'+newSrc+'" class="gifisgif" />');
    });
    $('img.gifisgif').on('load', function() {
        var newSrc = $(this).attr('src');
        $(this).remove();
        var oldSrc = newSrc.split('.')[0];
        var imgEl = $('body').find('[src^='+oldSrc+']');
        $(imgEl).removeClass('isgif');
        $(imgEl).attr('src', newSrc);
    });
});