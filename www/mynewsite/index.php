<!DOCTYPE html5>
<html>
<head>
<font size = "6" color = "blue">
</head>
<script>
function f()
{
 var name = document.getElementById("email").value;
 var pass = document.getElementById("pass").value;
 
 if((name.trim() == "") || (pass.trim() == ""))
 {
   alert("Please Enter Valid Response in User and Password Field");
   return false;
 }
 return true;
}
</script>
<body bgcolor = "black">
<form action = "login.php" onsubmit = " return f() ">
<fieldset>
<div align = "center">
<b>
---------------------------------<br>
TEST LOGIN PAGE  - HARIS<br>
Login Page.<br><br>
--------------------------------<br><br>
Email: <input type = text name = "email" id = "email" autocomplete ="off"><br><br>
Password : <input type= text name = "pass" id = "pass" autocomplete ="off"><br><br>
<input type = submit style = "width:100px;height:50px;" >
<input type = "button" name = "Signup" id = "Signup" value = "Signup" style = "width:100px;height:50px;" onclick = "location.href = 'Signup.html'"><br><br>
**New User Please Click on Signup Button** <br><br>
************************
</b>
</div>
</fieldset>
</form>
</body>
</font>
</html>
