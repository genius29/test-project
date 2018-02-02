<!DOCTYPE html>
<html lang="en">
<head>
	<title>array</title>
	
</head>
<body>

<p><b><big>Start typing a name in the input field below:</big></b></p>
<form> 
<big>Pangita ug Gwapo: </big><input type="text" onkeyup="showHint(this.value)">
</form>
<p><big>Gwapo si: </big><span id="txtHint"></span></p>
<script>
	function showHint(str) {
	    if (str.length == 0) { 
	        document.getElementById("txtHint").innerHTML = "";
	        return;
	    } else {
	        var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("txtHint").innerHTML = this.responseText;
	            }
	        }
	        xmlhttp.open("GET", "gethint.php?q="+str, true);
	        xmlhttp.send();
	    }
	}
	</script>
</body>
</html>