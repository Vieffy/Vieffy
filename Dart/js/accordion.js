$(document).ready(function(){
    $(".accordion .bellows:first").addClass("active");
    $(".accordion .accordion-content:not(:first)").hide();

    $(".accordion .bellows").click(function(){
        $(this).next(".accordion-content").slideToggle("slow")
        .siblings(".accordion-content:visible").slideUp("slow");
        $(this).toggleClass("active");
        $(this).siblings(".bellows").removeClass("active");
    });

    $('#carouselExampleControls').on('slide.bs.carousel', function () {
        $direction("bottom")
    })
});
