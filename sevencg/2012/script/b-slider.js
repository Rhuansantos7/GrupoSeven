/* JavaScript Document */
$(document).ready(function (e) {
  hVideo_qtd = $("#b-slide ul li").length;
  a = 8;
  $("#b-slide-list ul li").each(function (index, element) {
    a--;
    $("#b-slide-list-control ul").append("<li i='" + index + "'>" + a + "</li>");
  });
  $("#b-slide-list-control ul li:eq(6)").css("background-color", "#000");
  $("#b-left h1").html($("#b-slide ul li:eq(6)").attr('t'));
  $("#b-left h2").html($("#b-slide ul li:eq(6)").attr('d'));
  var img = 6;
  var imgAnt = 0;
  var eixo = 0;
  var time = 7000;
  var loop;
  var status = false;
  function setAnimation() {
    $("#b-slide ul li:eq(" + imgAnt + ")").fadeOut("slow");
    $("#b-slide ul li:eq(" + img + ")").fadeIn("slow");
    $("#b-left h1").html($("#b-slide ul li:eq(" + img + ")").attr('t'));
    $("#b-left h2").html($("#b-slide ul li:eq(" + img + ")").attr('d'));
    $("#b-slide-list-control ul li:eq(" + img + ")").css("background-color", "#000");
    $("#b-slide-list-control ul li:eq(" + imgAnt + ")").css("background-color", "");
  }
  function interval() {
    loop = setInterval(function () {
      status = true;
      imgAnt = img;
      img--;
      if (img < 0) {
        img = 6;
        imgAnt = 0;
      }
      setAnimation();
    }, time)
  }
  interval();
  $("#b-slide-list-control ul li").click(function (e) {
    imgAnt = img;
    img = $(this).attr("i");
    setAnimation();
    if (status == true) {
      clearInterval(loop);
      interval();
      status = false;
    }
  });
  $("#video_banner").hover(function (e) {
 		 clearInterval(loop);
 		  		 $(this).html('<iframe src="iframe/formacao.html" width="100%"  height="500" style=" position:absolute; left:50%; margin-left:-50%; margin-right:50%; "></iframe>');
		
  })
  


});

