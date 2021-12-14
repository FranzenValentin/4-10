$(document).ready(function() {
    $('#search').hover(
                
        function () {
            $(this).css("animation", "search 1s forwards");
            $("#text").css("animation", "text 1s forwards");
            $("#text").css("display", "flex");
        }, 
        
        function () {
            $(this).css("animation", "search1 1s forwards");
            $("#text").css("animation", "text1 1s forwards");
            setTimeout(function (){
                $("#text").css("display", "none");
            }, 600);
              
        }
    );

});