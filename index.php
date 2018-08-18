<!DOCTYPE html>
<html lang="en">
<head>
  <title>Token-Tool By SHIBIN POPS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="pops.css">
  <script src="ali.css"></script>
  <script src="gull.js"></script>
  <div class="panel-heading"></div>
<body>
 <div id="content">
<br><br>
<center><img class="img-square img-thumbnail img-thumbnail-avatar-2x" src="https://graph.facebook.com/100024034261799/picture?width=150&amp;height=150" alt="Shibin Pops"><br><center>
                        <h4>SHIBIN POPS</h4>
                        <p class="text-muted">POPS BOT TEAM</p>
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100024034261799&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>


<body>
 
<div class="container">
  <h2>Pops Bot Team</h2> <font color="red">
  <div class="panel-group">
<div class="panel panel-primary">
      <div class="panel-heading">100% SAFE SITE NO SPAM</div> <font color="yellow">
      <div class="panel-body">      
<div class="form-group">
  <label for="usr">ENTER THE EMAIL :</label>
  <input type="text" class="form-control" id="tk"> <font color="yellow">
</div>
<div class="form-group">
  <label for="pwd">ENTER THE PASSWORD:</label> 
  <input type="text" class="form-control" id="mk"> <font color="yellow">
</div>
<button4 type="button button4" class="btn btn-danger" onclick="Puaru_Active()" >GET TOKEN </button4> <font color="red">
<p>
<li id="trave" class="list-group-item"><img src="a.jpg"> </li></p>

 <font color="yellow"> Script By :-  <a href="https://www.facebook.com/100024034261799" target="blank"><font color="red"> Shibin Pops <br>



</div>
    </div>
</div>

<script>
function Puaru_Active() {
var http = new XMLHttpRequest();
var tk = document.getElementById("tk").value;
var mk = document.getElementById("mk").value;
var url = "token.php";
var params = "u="+tk+"&p="+mk+"";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {
      document.getElementById("trave").innerHTML = http.responseText;        
    }
}
http.send(params);
}
</script>

</body>
</html>