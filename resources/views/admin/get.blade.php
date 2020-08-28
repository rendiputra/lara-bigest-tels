<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
</head>
<body style="padding: 0; margin: 0px;">
<div>
<input id="aa" type="text" onblur="this.focus()" onkeyup="keyup()" onpress="keyup()" autofocus>
<button onclick="keyup()">get</button>
</div>
<iframe name="frem" frameborder="0" style="height:96vh;width:100%"></iframe>
<script>
function keyup() {
  var x = document.getElementById("aa").value;
  if(x.length > 5){
  window.open(x, "frem");
  document.getElementById("aa").value='';
  }
    
}  
</script>
</body>
</html>