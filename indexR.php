<script>
<?php
$result = mysqli_query($con, 'select * from product');
?>

<?php while ($product = mysqli_fetch_object($result)){ ?>
	<tr>
		<td><?php echo $product->id; ?></td> 
		<td><?php echo $product->name; ?></td>
		<td><?php echo $product->price; ?></td>
		<td><a href="cart.php?=<?php echo $product->id;?>">Order Now</a></td>
	</tr>
	
<?php } ?>	


function load()
{
alert("if the calendar doesnt appear please sign in to your Google account");
}

function iFrameCheck() {
  var ttle = $('#ifrm').contents().find('title').text();

  setTimeout(function(){
    if (ttle.indexOf('404 - File or directory not found.') == -1) {
      return false;
    } else {
      $('#iFrameAlert').toggleClass('hidden');
    }
  }, 2000);
}


</script>
<!DOCTYPE html>

<!--
******************************************************************************************
	Author:	Ciro Pascasio
	Subject: Personal Music Coding Tech Webpage
	Program:

	Certification:
	I Hereby certify that this work is my own and none of it is the work of any other person
........{ Ciro Pascasio }........  ****************************************************************************************
-->
<html lange="en">

<head>
<meta charset="utf-8" />

 <!--css/js files are also supported, you can
 refer them using relative path.
 Save all files first, including html file
 to use this feature.
 Author: Ciro Pascasio
  -->
<link href="index.css" rel="stylesheet">
</head>

<body>

   	
<div class="site">
<div class="title">	
<!--

	<div class="dropdown">		
	<span> Home </span>
	<div class="dropdown-content">
	<p><font family="helvetica" size="4"><a href="index.html">Home</a> </font> </p>
	</div>
	</div>

	 <div class="dropdown">
        <span> Hotkeys </span>
        <div class="dropdown-content">
        <p><font family="helvetica" size="4"><a href="index.html">Hotkeys</a> </font> </p>
        </div>
        </div>

	 <div class="dropdown">
        <span> Lessons </span>
        <div class="dropdown-content">
        <p><font family="helvetica" size="4"><a href="index.html"> Lessons</a> </font> </p>
        </div>
        </div>

	 <div class="dropdown">
        <span> Contact Me </span>
        <div class="dropdown-content">
        <p><font family="helvetica" size="4"><a href="index.html">Contact Me</a> </font> </p>
        </div>
        </div>

</div>
-->
<center> 
<nav align="center"><font size="3">

<ul>
	<li><a href="../index.php">Home</a><ul>
	<li><a href="../hotkeys.html">HotKeys</a></li>
        <li><a href="../gamelinks.html">Games</a></li>
	</ul></li>     
	<li><a href="../includes/lessonlinks.html">Lessons</a></li>
	<li><a href="../includes/Pgm6.php">Shortkeys/Hotkeys</a></li>
        <li><a href="../includes/store.php">Store</a></li>
	<li><a href="../includes/Live.html">Live</a></li>
	<li><a href="#">Linked</a></li>
        <li><a id="linkedin" href="#"><span></span></a></li>

</ul>
	</font>
</nav>
</center>
</div>
 
	
	
	<div class="main">
	
<?php include_once("Pgm6R.php");?>
<table>
<tr>



<td>
 <center>
        &nbsp; &nbsp;
	<nav class="reg">
	<img class="prtFolio" id="prtFolio" src="../images/prtFolio.png"/>
	</nav>


        <nav class="reg">

          <input type="checkbox" id="check">
          <label id="central" for="check"><img src="../images/centralxy.png"/></label>
          <a href="a"><img class="link" id="link_01" src="../images/link_01.png"/></a>
          <a href="a"><img class="link" id="link_02" src="../images/link_02.png"/></a>
          <a href="a"><img class="link" id="link_03" src="../images/link_03.png"/></a>
          <a href="a"><img class="link" id="link_04" src="../images/link_04.png"/></a>
	  <a href="a"><img class="link" id="link_05" src="../images/link_05.png"/></a>

        </nav>	
	</center>
</td>
</tr>
</table>
</div>


    <div class="sidebar">
   <table>
   <tr>	
	
   0's YouTube Top Playlist
   </tr>
   <td>
<iframe width="100%" height="269" src="https://www.youtube.com/embed/videoseries?list=PL0C8E480122A34E1A" frameborder="0" allowfullscreen> your browser does not support iframes</iframe>


<p>0's YouTube Liked Playlist</p>
<iframe width="100%" height="270" src="https://www.youtube.com/embed/videoseries?list=FLX5fJdGsW_bC1j7bWKoLBlw " frameborder="0" allowfullscreen></iframe>
 
</td>

</table>
    </div>

   <div class="rsidebar">
   
   <td>
   <iframe width="100%" height="225" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/156979267&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

   <td> <iframe width="100%" height="333" scrolling="no" frameborder="no" src="https://www.reverbnation.com/widget_code/html_widget/artist_1143520?widget_id=55&pwc[included_songs]=1&context_type=page_object&spoid=artist_1143520" style="width:0px;min-width:100%;max-width:100%;"></iframe>
   </td>	
<!--
 <iframe width=100%" height="225" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/246064283&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
-->
   </td>
   </div>

   <div class="rmid">
   <table>
   	<tr>
   		<td>
   			Skills:
			<br/>	
			Unix/Windows System Administration
			<br/>
			Database Admin
			<br/>
			Web Developer : HTML CSS PHP MySQL
			<br/>
   			Java Swift C# Javascript Bash PowerShell Python
			<br/>
			Programming Portfolio - <a href="#">Github</a>
			<br/>
			Gallery Photographer
			<br/>
		    <!--Image Editor - Adobe Photoshop/Gimp -->
			Video Editor - Final Cut Pro X			
			<br/>
			Music Production - Films/Videogames/Commercials
			<br/>
			Recording/Mixing/Mastering [Logic Pro X]
			<br/>
			Guitarrist, Vocalist, Composer, Keyboardist, Percussionist
             		<br/>
			Music Lessons - Online
			<br/>
			<a href="http://www.paypal.me/ciropas">www.paypal.me/ciropas</a>
			<br/>
			<br/>
			<br/>
			
			Music Portfolios
			<br/>
			I compose music of every kind, adequate for each respective occasion.
			Please take a look at my different genres portfolios here by clicking the round Symbol over the portfolio and then the respective subgenre to look at the different playlists: Folk, Rock, Cinematic, Videogame Effects, eXperimental. For Collaborations, timely (videogame) programming, Copyright use and inquirys please email me at cirorock@live.com	
		<br/>
		<br/>
			
   		</td>

   	</tr>

 
   </table>
   
   </div>
   
  <div class="lxbar">
	<nav class="ftlinks">		
	<ul>
	<li><a href="https://www.facebook.com/ciro.pascasio"><img src="../images/Facebook.png" alt="Facebook Icon" style="width:35px;height:35px;vertical-align:middle;"></a></li>

	<li><a href="https://www.youtube.com/user/Redlabel0/playlists?view_as=public"><img src="../images/YouTubeicon.png" alt="YouTube Icon" style="width:35px;height:35px;vertical-align:middle;"></a></li>

	 <li><a href="https://www.instagram.com/00ciro"><img src="../images/Instagram.png" alt="Instagram Icon" style="width:35px;height:35px;vertical-align:middle;"></a></li>


	<li>
	</ul>
	</nav>
  </div>  
 
  <div class="mxbar">
  <font style="text-align:center;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Click to change genres -->
  </font>
  </div>

  <div class="rxbar">
  <a href="includes/help.php">Help</a> &nbsp;
  <a href="includes/about.php">About</a>
  <a id="linkedin" href="#"><span></span></a>
  </div>

    <div class="footer">
	<h3><font size="3" color="red">My Name is Ciro Pascasio</font></h5>			
	<font size="2" >
born in Mexico in 92, I have been playing music since 2003
	</font>

	<font size="2" >
Self taught Music Producer in Logic Pro X since 2011
	<br>
	</font>

	<font size="2" >
I'm also a Video and Photo enthusiast with experience with an art gallery as the digital gallery picture administrator.
	</br>
	</font>

	<font size="2" >
I produce with Kontakt Libraries, Therefore multiple instruments are possible. Making environment audio for video games, or just small audio motiffs for creative purposes. taking inquiries at cirorock@live.com </br>
	<b>Free Downloadables SoundCloud folder if you enjoyed what you've heard gift us money at :</b>
	<p><a href="http://www.paypal.me/ciropas">www.paypal.me/ciropas</a> 
	</p>
	</font>
<iframe src="https://calendar.google.com/calendar/selfsched?sstoken=UUpKNHUwVWhIMjRufGRlZmF1bHR8MDg1NmUyMTUxYTQ3ZmU4OGYxNzdhM2JiMjRmMDUzZTY" style="border: 0" width="450" height="600" frameborder="0" scrolling="no" onload="iFrameCheck()"></iframe>


    <!-- Crazy Games go to:
         
         miniclip.com
         newgrounds.com
         there was this candy mini golf from life savers u should google it a gem
         Matrix fighting sticks game
	Attack on Titan
 
      -->	
  </div> 
</div>

</body>
</html>

    
