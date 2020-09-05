
<?php
    $myPDO = new PDO('sqlite:C:\ProgramData\Gameplay Time Tracker\UserData\Profiles\Utilisateur\GameplayTimeTracker.sqlite');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>APOXER Beta</title>
		<link rel="stylesheet" href="./style.css">
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	
<style>
.topnav {
	position:absolute;
  overflow: hidden;
  z-index:99999999999999;
  top: 35px;
    left: 35px;
}

.topnav a {
  float: left;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
  font-family: Proxima Nova Thin;
}

.ktaba {

  color: #ffffff;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
  font-family: Proxima Nova;
    font-weight: bold;
	    margin-top: -20px;
}

/*.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.avatar {
	width: 50px;
	height: 50px;
  border-radius: 40px; /* половина ширины и высоты 
  margin: 10px;
}


/* Mini menu CSS */

/* Style the buttons */
#myDIV{
margin-top:50px;
margin-left: 12px;
margin-right: px;
display:inline-flex;
}

#myDIV btn1{
top:3px;

}

#myDIV p{
top:4px;
/*margin-left: 10px;*/
letter-spacing: 1.8px;

}



.RL1{
    color: #ffffff;
      padding: 2px 8px;
      font-family: Proxima Nova;
      font-weight: normal;
        font-size: 12px;
            border-radius: 2rem;
      	border-color: #ffffff;
    border-width: 1.5px;
    border-style: solid;
    height: 50px;
	    padding-right: 10px;
    padding-left: 10px;
	opacity: 0.4;
    }
	
/* Mini menu CSS */

/* Style the buttons */
#menu{
  margin-top:50px;
  display: inline-flex; 
  margin-left: 15px; 
  margin-right: 5px;
  list-style-type:none;
}

.btn1 {
  top:3px;
  letter-spacing: 1.8px;
  border: none;
  outline: none;
  padding: 3px 12px;
  cursor: pointer;
  font-size: 18px;
  border-radius: 2rem;
  transition: 0.2s;
  position: relative;
  text-align: center;
  align-items: center;
  justify-content: center;
  overflow: visible;
  color: #000;
  font-family: Proxima Nova;
  font-weight: bold;
  
  /* Give non-active items an invisible 2px border
     so that when they do become active the overall
     size of the element doesn't shift around. */
  border: 1px solid rgba(0,0,0,0);
}
    
.active {
  border-color: #366eaf;
  border-width: 2px;
  border-style: solid;
}


	</style>
</head>
<body   onload="startTime()">
<div class="response">	
<!--Copie menu-->
<div class="topnav animate__animated animate__fadeInDown">
  <a><div class="ktaba" style="font-weight:normal;" id="txt"></div></a>
  <!--<a><div id="textInfo"></div></a>-->
  
</div>

<div class="topnav2 animate__animated animate__fadeInDown" style="position:absolute; right:0;z-index:999;   top: 35px;
    right: 35px; display:flex;">
	  <p class="ktaba" style="color:white;     margin-top: -6px;"><img style="width: 80%;" src="https://i.imgur.com/yp5rnJG.png"/></p>
  <p style="color:white;     margin-top: -6px; "><img style="	width: 50px;
	height: 50px; border-radius: 40px; margin: 5px;" src="https://pbs.twimg.com/profile_images/414463654470221824/DEakqH-I.jpeg"/></p>

  <div class="user"><p class="ktaba" style="color:white; display: inline-grid;">Jinzagon</p>
  <p class="ktaba" style="color:white; color:white;margin-top: -50px;font-size: 14px;">Fugitif</p></div>
</div>

<div class="menu  animate__animated animate__fadeInDown" style="position: absolute;z-index: 5555; top: 7%; left: 7%;">
<a class="RL1" style="color:white;">L1</a>
 
<ul id="menu">
  <li class="btn1 active">ALL</li>
  <li class="btn1"><a href="#open">MENU1</a></li>
  <li class="btn1"><a href="#">MENU2</a></li>
  <li class="btn1">MENU3</li>
  <li class="btn1">MENU4</li>
  <li class="btn1">MENU5</li>
</ul>

<a class="RL1" style="color:white;">R1</a></div>




<!-- partial:index.partial.html -->
<img class="animate__animated animate__fadeInDown" style="position:absolute; z-index:99999; margin-left:50%; margin-right:50%; top: 52px; " src="https://i.imgur.com/ZZkFWI5.png" />
<!--End copie -->

	<div class="panel-up" id="1">
	  <div class="panel-content">
		<div class="container-info"  style="padding-left: 10%; padding-bottom: 6%;">

  <img style="width:2%; height:2%; opacity:0.5;" src="https://i.imgur.com/hAtfWPT.png"/>
  <div class="infos"><h1>The last of Us: Part II</h1></div>
  
  <div style="display:flex; margin-top:0px;">
  
  <div class="">
    <div><h3  style="opacity:0.5; font-size: 1rem;">PLAYED FOR</h3></div>
  <div><h4 style="display:flex;">23<p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">h</p>19<p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">m</p></h4></div>
  </div> 
  
  <div style="margin-left:5%">
  <div><h3 style="opacity:0.5; font-size: 1rem;">STORAGE</h3></div>
  <div><h4 style="display:flex;">152<p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">gb</p></h4></div>
  </div> 
    
  </div> 
  
  </div>
	  </div>
	</div>

	<div class="panel-up" id="2">
	  <div class="panel-content">
		<div class="container-info"  style="padding-left: 10%; padding-bottom: 6%;">

  <img style="width:2%; height:2%; opacity:0.5;" src="https://i.imgur.com/hAtfWPT.png"/>
  <div class="infos"><h1>Ghost Of Tsushima</h1></div>
  
  <div style="display:flex; margin-top:0px;">
  
  <div class="">
    <div><h3  style="opacity:0.5; font-size: 1rem;">PLAYED FOR</h3></div>
  <div><h4 style="display:flex;">00<p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">h</p>35<p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">m</p></h4></div>
  </div> 
  
  <div style="margin-left:5%">
  <div><h3 style="opacity:0.5; font-size: 1rem;">STORAGE</h3></div>
  <div><h4 style="display:flex;">61<p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">gb</p></h4></div>
  </div> 
    
  </div> 
  
  </div>
	  </div>
	</div>

	<div class="panel-up" id="3">
	  <div class="panel-content">
		<div class="container-info"  style="padding-left: 10%; padding-bottom: 6%;">

  <img style="width:2%; height:2%; opacity:0.5;" src="https://i.imgur.com/hAtfWPT.png"/>
  <div class="infos"><h1>
    <?php
$result = $myPDO->query("SELECT * FROM Applications WHERE Id = '48';");
    foreach($result as $row)
    {
        print  $row['ProductName'] . "\n";
    }
?>
</h1></div>
  
  <div style="display:flex; margin-top:0px;">



  <div class="">
    <div><h3  style="opacity:0.5; font-size: 1rem;">PLAYED FOR</h3></div>
    
  <div><h4 style="display:flex;"><?php
$result = $myPDO->query("SELECT * FROM Applications WHERE Id = '48';");
    foreach($result as $row)
    {
     
$init = $row['StatTotalFullRuntime'];
$hours = floor($init / 36000000000);

echo "$hours";
    }
?><p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">h</p>
<?php
$result = $myPDO->query("SELECT * FROM Applications WHERE Id = '48';");
    foreach($result as $row)
    {
     
$init = $row['StatTotalFullRuntime'];
$hours = floor($init / 36000000000);
$minutes = floor(($init / 600000000) % 60);

echo "$minutes";
    }
?>

<p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">m</p></h4></div>
  </div> 
  
  <div style="margin-left:5%">
  <div><h3 style="opacity:0.5; font-size: 1rem;">STORAGE</h3></div>
  <div><h4 style="display:flex;">712<p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">mo</p></h4></div>
  </div> 
    
  </div> 
  
  </div>
	  </div>
	</div>

  <!--unity -->
  <div class="panel-up" id="4">
	  <div class="panel-content">
		<div class="container-info"  style="padding-left: 10%; padding-bottom: 6%;">

  <img style="width:2%; height:2%; opacity:0.5;" src="https://i.imgur.com/hAtfWPT.png"/>
  <div class="infos"><h1>
    <?php
$result = $myPDO->query("SELECT * FROM Applications WHERE Id = '8';");
    foreach($result as $row)
    {
        print  $row['ProductName'] . "\n";
    }
?>
</h1></div>
  
  <div style="display:flex; margin-top:0px;">



  <div class="">
    <div><h3  style="opacity:0.5; font-size: 1rem;">PLAYED FOR</h3></div>
    
  <div><h4 style="display:flex;"><?php
$result = $myPDO->query("SELECT * FROM Applications WHERE Id = '8';");
    foreach($result as $row)
    {
     
$init = $row['StatTotalFullRuntime'];
$hours = floor($init / 36000000000);

echo "$hours";
    }
?><p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">h</p>
<?php
$result = $myPDO->query("SELECT * FROM Applications WHERE Id = '8';");
    foreach($result as $row)
    {
     
$init = $row['StatTotalFullRuntime'];
$hours = floor($init / 36000000000);
$minutes = floor(($init / 600000000) % 60);

echo "$minutes";
    }
?>

<p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">m</p></h4></div>
  </div> 
  
  <div style="margin-left:5%">
  <div><h3 style="opacity:0.5; font-size: 1rem;">STORAGE</h3></div>
  <div><h4 style="display:flex;">712<p style="font-size:1rem; font-size: 1rem; margin-left: 5px; margin-top: 27px; margin-right: 5px;">mo</p></h4></div>
  </div> 
    
  </div> 
  
  </div>
	  </div>
	</div>

  <!-end unity-->
  
  
<div class="content" style="color:white">
<div class="cover animate__animated animate__fadeInUp" style="position: fixed; z-index: 99999999999; pointer-events: none; right: 20px;
    bottom: -30px;"><img src="https://i.imgur.com/DITMXie.png" /></div>
    <section class="games">
	
        <div class="va">
		<a style="position:absolute;opacity:0; outline: none;" href="#1" class="reveal-up" id='open'>9</a><a style="outline: none;" href="http://youtube.com"  target="_self" class="section"><img class="va" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4f/TLOU_P2_Box_Art_2.png/220px-TLOU_P2_Box_Art_2.png"><img class="platform" style="width: 15%;
    height: 15%; margin-top: 40px; margin-left: -16px;" src="https://i.imgur.com/hAtfWPT.png"></a></a>
        </div>
        <div class="va">
		<a style="position:absolute;opacity:0; outline: none;" href="#2" class="reveal-up" id='close'>8</a><a style="outline: none;" href="file:///D:\Games Bond\Broforce\steamapps\common\Broforce\Broforce_beta.exe" target="_self" class="section"><img class="va" src="https://vulcan.dl.playstation.net/ap/rnd/202006/1602/EehA3BAKTBn9gb9q66pfDK3t.png?w=50&h=50&bg_color=000000&opacity=100&_version=00_09_000"><img class="platform" style="width: 15%;
    height: 15%; margin-top: 40px; margin-left: -16px;" src="https://i.imgur.com/hAtfWPT.png"></a>
        </div>
        <div class="va">
		<a style="position:absolute;opacity:0; outline: none;" href="#3" class="reveal-up" id='copi'>8</a><a style="outline: none;" href="file:///D:/Games%20Bond/Huntdown/Huntdown.exe" class="section"><img class="va" src="https://i.imgur.com/oydgxyX.jpg"><img class="platform" style="width: 15%;
    height: 15%; margin-top: 40px; margin-left: -16px;" src="https://i.imgur.com/hAtfWPT.png"></a>
        </div>
        <div class="va">
		<a style="position:absolute;opacity:0; outline: none;" href="#4" class="reveal-up" id='unity'>8</a><a style="outline: none;" href="file:///D:\Games Bond\Assassin's Creed Unity\ACU.exe" class="section"><img class="va" src="https://i.imgur.com/MCVtI1W.jpg"><img class="platform" style="width: 15%;
    height: 15%; margin-top: 40px; margin-left: -16px;" src="https://i.imgur.com/hAtfWPT.png"></a>
        </div>
        <div class="va">
						<img src="http://placehold.it/288x288?text=5">
        </div>
		        <div class="va">
						<img src="http://placehold.it/288x288?text=3">
        </div>
        <div class="va">
						<img src="http://placehold.it/288x288?text=4">
        </div>
        <div class="va">
						<img src="http://placehold.it/288x288?text=5">
        </div>
		        <div class="va">
						<img src="http://placehold.it/288x288?text=3">
        </div>
        <div class="va">
						<img src="http://placehold.it/288x288?text=4">
        </div>
        <div class="va">
						<img src="http://placehold.it/288x288?text=5">
        </div>
		
    </section></div>
	
    
	<div class="ip" style="opacity:1; z-index:-5; position:absolute;">
	<div class="cover" style="position: absolute; z-index: 2; pointer-events: none;"><img src="https://i.imgur.com/Har8ETb.png" /></div>
	<div class="slideshow">
  <div class="slider">
    <div class="item">
      <img src="https://img.wallpapersafari.com/desktop/1920/1080/61/23/1BHFeo.jpg" />
    </div>
    <div class="item">
      <img src="https://images5.alphacoders.com/105/thumb-1920-1056682.png" />
    </div>
    <div class="item">
      <img src="https://images.hdqwalls.com/wallpapers/huntdown-4k-ky.jpg" />
    </div>
    <div class="item">
      <img src="https://i.imgur.com/rM7aroP.jpg" />
    </div>
  </div>
</div>

	</div>

  </div>


	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script src='./script.js'></script>
	
	<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + "";
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
</script>

<!--<script>
// listen for keydown event
document.addEventListener("keydown", event => {
  // get element with active class
  let el = document.querySelector(".active");
  /* if key is an "e", remove the active class from current element, focus the next element, and give it the active class */
  if (event.key === "e" && el.nextElementSibling !== null) {
    el.classList.remove("active");
    el.nextElementSibling.focus();
    el.nextElementSibling.classList.add("active");
  }
  /* if key is an "a", remove the active class from current element, focus the previous element, and give it the active class */
  if (event.key === "a" && el.previousElementSibling !== null) {
    el.classList.remove("active");
    el.previousElementSibling.focus();
    el.previousElementSibling.classList.add("active");
  }
});</script>-->

<script>

// Listen for key strokes on the document
document.addEventListener("keydown", function(event){

    // Get the currently active element
    let activeElement = document.querySelector(".active");
    
    // Check for "e" and if there is a previous sibling
    if(event.key == "a" && activeElement.previousElementSibling){
      // Make the previous sibling (if any) element active
      deselectAll();
      activeElement.previousElementSibling.classList.add("active");  
      
    } else if(event.key == "e" && activeElement.nextElementSibling){
      // Make the next sibling element (if any) active
      deselectAll();
      activeElement.nextElementSibling.classList.add("active");
    }
});

// Just set up one event handler on the parent of all the menu items
// Any click within that parent will bubble up and be handled here
document.getElementById("menu").addEventListener("click", function(event) {
  // event.target is the actual element that triggered the event
  if(event.target.classList.contains("btn1")){
    deselectAll();
    event.target.classList.add("active"); // Add active to the clicked item
  }
});

// Don't use .getElementsByClassName() - - it's outdated
let items = document.querySelectorAll(".btn1");

function deselectAll(){
  // Loop over all the menu items
  items.forEach(function(item){
    item.classList.remove("active"); // Remove the active class if its there
  });
}
</script>

<script>
  $(document).ready(function() {
  $('.section').click(function(e) {
    e.preventDefault();
    var $responsiveDiv = $('.response')
     $responsiveDiv.addClass('clicked'); // Instead of adding clicked to a tag  add class clicked directly to responsive div
     setTimeout(function() {
      window.location.assign($responsiveDiv.attr('href'));
     // window.location.assign($a.attr('href'));//
    }, 4700);
  });
});
</script>

</body>

</html>