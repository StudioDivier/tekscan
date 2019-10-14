$(function () {
    $(".siphbc-two ").click(function () {
        let src = $(this).closest(".services-item").find(".services-item-product-image img").attr("src");
        let name = $(this).closest(".services-item").find(".services-item-product-name").html();
        let price = $(this).closest(".services-item").find(".services-price").html();
        let stock = $(this).closest(".services-item").find(".services-in-stock-button").html();

        $(".modal-services-feedback .modal-product-images img").attr("src", src);
        $(".modal-services-feedback .modal-product-name").html(name);
        $(".modal-services-feedback .services-price").html(price);
        $(".modal-services-feedback .services-in-stock-button").html(stock);

        $(".modal-services-feedback").addClass("d-flex");
    });
    $(".button-exit").on("click", function () {
        $(".modal").removeClass("d-flex");
    });


    $(".siphbc-one").click(function () {
        let src = $(this).closest(".services-item").find(".services-item-product-image img").attr("src");
        let name = $(this).closest(".services-item").find(".services-item-product-name").html();
        let price = $(this).closest(".services-item").find(".services-price").html();
        let stock = $(this).closest(".services-item").find(".services-in-stock-button").html();

        $(".modal-services-question .modal-product-images img").attr("src", src);
        $(".modal-services-question .modal-product-name").html(name);
        $(".modal-services-question .services-price").html(price);
        $(".modal-services-question .services-in-stock-button").html(stock);

        $(".modal-services-question").addClass("d-flex");
    });

    $(".services-modal-list p.services-modal-list-button").on("click", function () {
        $(this).closest(".services-modal-list").find(".services-modal-dropdown").toggleClass("d-none");
    });
    $(".services-modal-dropdown-exit").on("click", function () {
        $(this).closest(".services-modal-dropdown").toggleClass("d-none");
    });

    /* Сортировка */
    $(".services-sort form select").change(function () {
        $(".services-sort form").submit();
    });
    /**************/

    /* Переключатель товаров */
    $(".tab-one").click(function () {
        let itemList = $(".services-products");
        if (itemList.hasClass("services-list-items-v1")) {
            $(".services-sort form input[name=tile]").val("N");
            $(".tab-one img").attr("src", "/local/templates/divier/components/bitrix/catalog/services/images/tab-1_red.png");
            $(".tab-two img").attr("src", "/local/templates/divier/components/bitrix/catalog/services/images/tab-2_grey.png");
            itemList.removeClass("services-list-items-v1");
            itemList.addClass("services-list-items-v2");
        }
    });

    $(".tab-two").click(function () {
        let itemList = $(".services-products");
        if (itemList.hasClass("services-list-items-v2")) {
            $(".services-sort form input[name=tile]").val("Y");
            $(".tab-one img").attr("src", "/local/templates/divier/components/bitrix/catalog/services/images/tab-1_grey.png");
            $(".tab-two img").attr("src", "/local/templates/divier/components/bitrix/catalog/services/images/tab-2_red.png");
            itemList.removeClass("services-list-items-v2");
            itemList.addClass("services-list-items-v1");
        }
    })
    /*************************/
});