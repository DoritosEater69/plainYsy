var $ = jQuery;

$(document).ready(function () {
    var del1 = $(".addContent1 .btn-danger");
    var del2 = $(".addContent2 .btn-danger");
    var del3 = $(".addContent3 .btn-danger");
    var del4 = $(".addContent4 .btn-danger");
    var del5 = $(".addContent5 .btn-danger");
    var del6 = $(".addContent6 .btn-danger");
    var del7 = $(".addContent7 .btn-danger");
    var del8 = $(".addContent8 .btn-danger");
    var banner = $("#component0");
    var navbar = $("#component1");
    var carousel = $("#component2");
    var news = $("#component3");
    var gallery = $("#component4");
    var contact = $("#component5");
    var footer = $("#component6");
    var spacer = $("#component7");
    var spacerIcons = $("#component8");

    del1.on({
        "mousedown": function () {
            navbar.hide();
        },
    });

    del2.on({
        "mousedown": function () {
            carousel.hide();
        },
    });

    del3.on({
        "mousedown": function () {
            news.hide();
        },
    });

    del4.on({
        "mousedown": function () {
            gallery.hide();
        },
    });

    del5.on({
        "mousedown": function () {
            contact.hide();
        },
    });

    del6.on({
        "mousedown": function () {
            footer.hide();
        },
    });

    del7.on({
        "mousedown": function () {
            spacer.hide();
        },
    });

    del8.on({
        "mousedown": function () {
            spacerIcons.hide();
        },
    });    

});

function editMode() {
    var editMode = document.getElementById("editMode");
    if (editMode.checked == true) {
        $(".addContent1, .addContent2, .addContent3, .addContent4, .addContent5, .addContent6, .addContent7, .addContent8 ").show();
        console.log("active");
    } else {
        $(".addContent1, .addContent2, .addContent3, .addContent4, .addContent5, .addContent6, .addContent7, .addContent8 ").hide();
        console.log("hidden");
    }
}