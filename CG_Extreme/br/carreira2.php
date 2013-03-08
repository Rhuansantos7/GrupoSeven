<!doctype html>
<html>
<?php include('metas.php'); ?>
<script>
// JavaScript Document
$(document).ready(function(e) {
	$("#view li:eq(0)").fadeIn("slow");
	
	var ant = 0;
	var index = 0;
    $(".box").click(function(e) {
		ant = index;
		index = $(this).attr("i");
		if(ant != index)
		
		{
			$("#view li:eq("+index+")").fadeIn("slow");
			$("#view li:eq("+ant+")").fadeOut("slow");
		}
    });

});
</script>
<style>
#view { width:1000px; height:500px; border:1px solid #F0F; margin-bottom:50px; }
#view ul { margin:0; padding:0;}
#view ul  li { margin:0; padding:0; list-style:none; width:1000px; height:500px; position:absolute; display:none;}
.box { width:200px; height:200px; background:#FF0000; float:left; margin-left:10px;}
.mostra{ margin:0; padding:0; list-style:none; width:1000px; height:500px; position:absolute; background:#FFF;}
#op {margin:auto; width:1100px; height:200px;}
</style>
<!-- teste -->

<body>
<?php include('include/menu.php'); ?>

  <div  i="0" class="box" style="background:#090; "> equipe</div>
 
	<div id="view">


     
    	<ul> 
            <li>0</li>
            <li>gaughuahga</li>
            <li>2gaogh8ahgu</li>
            <li>3</li>
        </ul>
        
    </div>
    <div id="op">
   
        <div i="1"></div>
        <div i="2"></div>
        <div i="3"></div>
        </div>
			
<?php include('include/rodape.php'); ?>

</body>
</html>