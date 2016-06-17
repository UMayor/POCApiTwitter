<html>
<head>
<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
<script>
$(document).ready(function(){
	$("#btn").bind("click",function(){
		alert($('#txtMensaje').val());
	});//fin click
});//fin ready
/*
window.setInterval(function() {
 $("#marco").append();//("#<br>");
}, 1000);
*/
</script>
</head>
<body>
<br>
<textarea id='txtMensaje' name='txtMensaje'></textarea>
<img src='enviar.png' id='btn' name='btn'>
<!--<div id="marco"></div>-->
</body>
</html>