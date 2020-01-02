var $ = jQuery;

function loadNewContent(){    
    var selectedOption = $("#dropDown1 option:selected").val();
    $.post("index.php", {option_value: selectedOption});        
}

$(document).ready(function () {
    
    $("#dropDown1").change(loadNewContent());
    
    var facebook = $(".fa-facebook");
    var instagram = $(".fa-instagram");
    var twitter = $(".fa-twitter-square");
    var pinterest = $(".fa-pinterest");

    var page = $(".page");
    var clicks = 0;
    var newsOpen = new Boolean("false");
    var galleryOpen = new Boolean("false");
    var contactOpen = new Boolean("false");

    var overlay = $(".overlay");

    var imgHover = $(".img-hover");

    var settingsChevUp = (".settings .fa-chevron-up");
    var settingsChevDown = (".settings .fa-chevron-down");

    var nextBtn = $(".carousel-control-next-icon");
    var prevBtn = $(".carousel-control-prev-icon");
    
    var headerEdit = (".addContent1");
    var navEdit = (".addContent2");
    var galleryEdit = (".addContent3");
    var newsEdit = (".addContent4");
    var contactEdit = (".addContent5");
    var socialEdit = (".addContent6");

    //Social Icons Color on Hover
    facebook.hover(function () {
        $(this).css("color", "#1877f2");
    }, function () {

        $(this).css("color", "black");
    });


    instagram.hover(function () {
        $(this).css("color", "#c32aa3");
    }, function () {

        $(this).css("color", "black");
    });

    twitter.hover(function () {
        $(this).css("color", "#1da1f2");
    }, function () {

        $(this).css("color", "black");
    });

    pinterest.hover(function () {
        $(this).css("color", "#bd081c");
    }, function () {

        $(this).css("color", "black");
    });

    //Social Icons Size on Hover    
    facebook.on({
        "mouseenter": function () {
            $(this).animate({
                fontSize: "3em",
            }, 100);
        },
        "mouseleave": function () {
            $(this).animate({
                fontSize: "2em",
            }, 100);
        },
    });

    instagram.on({
        "mouseenter": function () {
            $(this).animate({
                fontSize: "3em",
            }, 100);
        },
        "mouseleave": function () {
            $(this).animate({
                fontSize: "2em",
            }, 100);
        },
    });

    twitter.on({
        "mouseenter": function () {
            $(this).animate({
                fontSize: "3em",
            }, 100);
        },
        "mouseleave": function () {
            $(this).animate({
                fontSize: "2em",
            }, 100);
        },
    });

    pinterest.on({
        "mouseenter": function () {
            $(this).animate({
                fontSize: "3em",
            }, 100);
        },
        "mouseleave": function () {
            $(this).animate({
                fontSize: "2em",
            }, 100);
        },
    });

    overlay.on({
        "mouseover": function () {
            $(this).addClass("d-flex align-items-center justify-content-center");
            $(this).addClass("overlayAnim");
            $(this).css("opacity", "1");
        },

        "mouseout": function () {
            $(this).removeClass("d-flex align-items-center justify-content-center");
            $(this).removeClass("overlayAnim");
            $(this).css("opacity", "0");
        },
    });


    //News Tile Hover
    $(".news").hover(function () {
        $(".news h1").css("color", "rgba(0,0,0,0.2)");
    }, function () {
        $(".news h1").css("color", "black");
    });

    //Gallery Tile Hover
    $(".galleryFold").hover(function () {
        $(".galleryFold h1").css("color", "rgba(0,0,0,0.2)");
    }, function () {
        $(".galleryFold h1").css("color", "black");
    });

    //Contact Tile Hover
    $(".contact").hover(function () {
        $(".contact h1").css("color", "rgba(0,0,0,0.2)");
    }, function () {
        $(".contact h1").css("color", "black");
    });


    //News Tile    
    $(".news").on({
        "mousedown": function () {
            $(".newsFolded").slideToggle("slow", function () {
                clicks++;
                newsOpen = "true";
                console.log(clicks);
            });

            //First click -> FontIncrease
            if (clicks % 2 == 0) {
                $(".news h1").animate({
                    fontSize: "3.5em",
                });
                $(".page").animate({
                    marginTop: "0",
                });
                $(".newsFolded").addClass("d-flex justify-content-center");

                //First click -> FontDecrease                
            } else {
                newsOpen = "false";
                $(".news h1").animate({
                    fontSize: "2.5em",
                });
                $(".page").animate({
                    marginTop: "6em",
                });
                $(".newsFolded").removeClass("d-flex justify-content-center");
            }
        },
    });


    //Contact Tile
    $(".contact").on({
        "mousedown": function () {
            $(".contactFolded").slideToggle("slow", function () {
                clicks++;
                contactOpen = "true";
                console.log(clicks);
            });

            //First click -> FontIncrease
            if (clicks % 2 == 0) {
                $(".contact h1").animate({
                    fontSize: "3.5em",
                });
                $(".page").animate({
                    marginTop: "0",
                });

                //First click -> FontDecrease                
            } else {
                contactOpen = "false";
                $(".contact h1").animate({
                    fontSize: "2.5em",
                });
                $(".page").animate({
                    marginTop: "6em",
                });
            }
        },
    });

    //Contact Tile
    $(".galleryFold").on({
        "mousedown": function () {
            $(".galleryFolded").slideToggle("slow", function () {
                clicks++;
                galleryOpen = "true";
                console.log(clicks);
            });

            //First click -> FontIncrease
            if (clicks % 2 == 0) {
                $(".galleryFold h1").animate({
                    fontSize: "3.5em",
                });
                $(".page").animate({
                    marginTop: "0",
                });

                //First click -> FontDecrease                
            } else {
                galleryOpen = "false";
                $(".galleryFold h1").animate({
                    fontSize: "2.5em",
                });
                $(".page").animate({
                    marginTop: "6em",
                });
            }
        },
    });

    if (newsOpen == "false" && contactOpen == "false") {
        $(".page").animate({
            marginTop: "6em",
        });
    };




});