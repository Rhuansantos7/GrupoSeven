// JavaScript Document
$(document)
    .ready(function(e) {
    hVideo_qtd = $("#b-slide ul li")
        .length;
    a = 8;
    $("#b-slide-list ul li")
        .each(function(index, element) {
        a--;
        $("#b-slide-list-control ul")
            .append("<li i='" + index + "'></li>");
    });
    $("#b-slide-list-control ul li:eq(6)")
        .css("background", "url(img/slider/bullets_hover.png) no-repeat");
    var img = 4;
    var imgAnt = 0;
    var eixo = 0;
    var time = 7000;
    var loop;
    var status = false;

    function setAnimation() {
        $("#b-slide ul li:eq(" + imgAnt + ")")
            .fadeOut("slow");
        $("#b-slide ul li:eq(" + img + ")")
            .fadeIn("slow");

        $("#b-slide-list-control ul li:eq(" + img + ")")
            .css("background", "url(img/slider/bullets_hover.png) no-repeat");
        $("#b-slide-list-control ul li:eq(" + imgAnt + ")")
            .css("background", "");
    }

    function interval() {
        loop = setInterval(function() {
            status = false;
            imgAnt = img;
            img--;
            if (img < 0) {
                img = 4;
                imgAnt = 0;
            }
            setAnimation();
        }, time)
    }
    interval();
    $("#b-slide-list-control ul li")
        .click(function(e) {
        imgAnt = img;
        img = $(this)
            .attr("i");
        setAnimation();
        if (status == true) {
            clearInterval(loop);
            interval();
            status = false;
        }
    });
    
   
$(".fancybox").fancybox();

});