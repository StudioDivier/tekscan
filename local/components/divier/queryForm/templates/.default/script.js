$(function () {
    $(".queryForm").submit(function (e) {
        let form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize()
        }).done(function(data) {
            console.log(data);
            alert(data);
        }).fail(function(data) {
            console.log(data);
            alert("Произошла ошибка");
        });
        e.preventDefault();
    });
});