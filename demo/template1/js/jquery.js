$(document).ready(function () {
    $("#search").on({
        focus:function () {
            $(this).css("background","yellow");
        }, blur:function () {
            $(this).css('background', 'white');
            $(this).css("text-transform","uppercase");
        }
    });

    $(".advanced-search-icon").click(function () {
        $(".advanced-search").fadeToggle(500);
    });
});