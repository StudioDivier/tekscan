$(function () {
    $(".FAQ-item-title").on("click", function () {
        $(this).closest(".FAQ-item").find(".FAQ-item-toggle-block").toggleClass("d-none");
        $(this).closest(".FAQ-item").toggleClass("active");
    });

    $(".FAQ-tb-select-item .select-item").click(function () {
        let blocks = $(".FAQ-item-toggle-block-more");
        let thisBlock = $(this).siblings(".FAQ-item-toggle-block-more");
        if (!thisBlock.hasClass("d-none")) {
            blocks.addClass("d-none");
        } else {
            blocks.addClass("d-none");
            thisBlock.removeClass("d-none");
        }
    });
});
