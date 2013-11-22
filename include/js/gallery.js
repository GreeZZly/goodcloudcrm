$(document).ready(function () {

    $(document).on("click", ".im", function () {
        if ($(this).attr("src") != "") {
            $("#im").attr("src", $(this).attr("src"));
            $("#FixedBlack").show().fadeTo(200, 1);
            $("#im").show().fadeTo(0.5, 1);
        }
    });

    $(document).on("click", "#FixedBlack", function () {
        $("#im").hide();
        $("#FixedBlack").stop(true).fadeTo(200, 0, function () {
            $("#FixedBlack").hide();
        });
    });

    $(document).on("click", ".p_content_menu_item", function(){
        var path = $(this).attr("id");
        $(".im").attr("src", "/include/images/"+path+".png");

        
    });
});