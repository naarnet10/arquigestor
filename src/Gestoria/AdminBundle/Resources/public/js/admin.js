$(document).ready(function () {
    
    var main = $('#main').data('url');
    $('#content').load(main);
    
    $('ul.child_menu li').click(function(){
            var url = $(this).data("url");
            $('#content').load(url);
        });
    
});
    