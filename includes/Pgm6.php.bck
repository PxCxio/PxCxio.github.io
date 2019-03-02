

<!DOCTYPE html>

<html lange="en">

<head style="background:#black;">
<meta charset="utf-8" />
<title> Ciro Samuel Pascasio - Pgm6</title>
<script>

var currentTime = currentTime();

//var curTime = currentTime(); 
//console.log(currentTime);


function currentTime()
{
	var today	= new Date;
	var hour	= today.getHours();
	var minutes 	= today.getMinutes();
	var sec		= today.getSeconds();

	minutes  	= checkTime(minutes);
	sec		= checkTime(sec);

	document.getElementById('txt').innerHTML = "Current Time: "+hour+":"+minutes+":"+sec + "    " ;

	var t = setTimeout(function()
	{currentTime()},500);

}	

function checkTime(i)
{
	if (i<10) {i = "0" + i};
	return i;
}


</script>
</head>

<body onload="currentTime()"> 


<style>
 a:link { color:red;
          text-decoration:none;
        }

 a:visited {
            color:green;
           }
h2 {
   font-family:"Courier";
   text-align:center;

   }


h3 {
    font-family : "Times New's Roman";
    text-align : center;
   }

p {
   font-family:"Verdana";
   color:purple;
   line-height:150%;
   text-indent:20px;
  }

head {
      background : #101010;
     }

body {
      background : #546fce;
      margin : 0;
      padding : 0;
      font-family : "Helvetica","Arial";
     }
 #wrapper {
     width : 960px;
     height : auto;
     background : #DAD5C1;
     border-left : 5px solid #A09885;
     border-right : 5px solid #A09885;
     overflow : auto;
     margin : 0;
     padding : 10px;
}
#header {
        width : 100%;
        height : 100px;
        background : #101010
        border-bottom : 3px solid #7c7063;

       }

nav ul ul
        {
            display: none;
            /*if changed to yes it will display all ul ul menues */
        }


        nav ul li:hover > ul
        {
            display: block;
        }


        nav ul
        {
            /* this section does not seem to have any effect */
            background: purple; /* #efefef; */
            background: linear-gradient(top, #101010 0%, #2f1a1a 100%);
            background: -moz-linear-gradient(top, #101010 0%, #2f1a1a 100%);
            background: -webkit-linear-gradient(top, #101010 0%,#2f1a1a 100%);
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 5px;
            border-radius: 10px;
            list-style: none;
            position: relative;
            display: inline-table;
        }


        nav ul:after
        {
            content: ""; clear: both; display: block;
        }


        nav ul li
        {
            /*left will display the menu in current order
              right will display menu from the right (backwards) */
            float: left;
        }


        nav ul li:hover
        {
            background: #E0E0E0; /* #E0E0E0; #4b545f; = Very dark grayish blue.*/
            background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
            background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
            background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
        }


        nav ul li:hover a
        {
            /* this section does not seem to have any effect */
            color: red; /* #ffffff; =2f1a2f #ff00ff; /*#fff; */ /*menu name color */
        }


        nav ul li a
        {
            display: block; padding: 10px 20px; /* menu height by width */
            color: red; /* main menu name #757575;*/ text-decoration: unset;

                /*
                text-decoration: none;
                text-decoration: underline red;
                text-decoration: underline wavy red;

                text-decoration: inherit;
                text-decoration: initial;
                text-decoration: unset;
                */
        }


        nav ul ul
        {
                /* sub menues colors #bfc1c6;= light gray #EFEFEF;=darker lightslategray */
                background: #black;  border-radius: 0px; padding: 0;
                position: absolute; top: 100%;
        }


        nav ul ul li
        {
                /*lines color top and bottom on submenues selections */
                float: none; /*yes will display menues sideways, not top down */
                border-top: 1px solid black; /*#6b727c; */ /*border top */
                border-bottom: 1px solid black; /*border down */
                position: relative;
        }


        nav ul ul li a
        {
                /* selection name color at ul ul li */
                padding: 10px 40px;
                color: blue; /* #fff; */
        }


        nav ul ul li a:hover
        {
                /* hovering submenu background color selections #4b545f; submenu */
                background: #3a2528;
		bottom: 100%;
        }


        nav ul ul ul
        {
                position: absolute; left: 100%; top:0;
        }

	   .tooltip 
    {
      position: relative;
      display: inline-block;

    }

    .tooltip .tooltiptext 
    {
      visibility: hidden;
      width: 120px;
      background-color: black;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -60px;
      opacity: 0;
      transition: opacity 1s;
    }


    .tooltip .tooltiptext .tooltip-left 
    {
      top: -5px;
      bottom:auto;
      right: 128%;  
    }



    .tooltip .tooltiptext::after 
    {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: red transparent transparent transparent; /*arrow*/
    }

    .tooltip:hover .tooltiptext 
    {
      visibility: visible;
      opacity: 1;
    }

</style>


 <?php
        //find save modify delete clear
	/*	
        $Telephone = $_POST[ 'Telephone' ];
        $FirstName = $_POST[ 'FirstName' ];
        $LastName = $_POST[ 'LastName' ];
        $Email = $_POST[ 'Email' ];
        $Interest = $_POST[ 'Interest' ];
        $Cellular = $_POST[ 'Cellular' ];
        $Text = $_POST[ 'Text' ];
        $Emailp = $_POST[ 'Emailp' ];
        $RequestType = $_POST[ 'RequestType' ];
        $MainMessage = $_POST[ 'MainMessage' ];
        */
	?>



<style type="text/css"> </style>

<nav align="center" style="background:#101010;">
<ul>
        <li><a href="../index.html">Home</a>
           <ul>
             <li><a href="../index.html">Home</a>/<li>
             <li><a href="../musicPage.html">Music</a></li>
             <li><a href="../videoPage.html">Videos</a></li>
             <li><a href="../mProduction.html">Music Productions</a></li>
             <li><a href="../hotKeys.html">Life Saving Hot Keys</a></li>
	   </ul>    
    	</li> 
     <li><a href="../index.html">Home</a></li>
	
 </ul>
</nav>
</tr>


<?php 
        
      if( strlen(trim($found)) > 0 )
      {  
         //echo "<br>Leave it alone  it means that find.php was already executed  Found = [" . $found . "]";
         //leave it alone it means that find.php was already executed 
      }
      else 
      {
         $found = ""; //set the value of $found to empty
      }

   ?>

       <div>
       <form action="Controller5.php" method="post">
       


	 
<tr> 
        <h3 align="center" style="font-family: helvetica;"> 0xStudios </h3>
</tr>

<tr>
<td style="width:20%;">
<script>
       
	loggedInTime();
        
        var temp1

        function loggedInTime ( temp )
        
	{
                var tiempo = new Date();
		
	
		var temp2 = "Logged in at &nbsp;: " + tiempo + "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; "  ;
                temp1 = temp2
		
                document.write( temp2  );
        
        }

	//console.log(currentTime);
        // document.write(currentTime );

        checkTime();
	
	
//second script begins

	


</script>

<!--<p id="txt"></p>-->
<div id="txt" style="display:inline;"></div><!--Professor I found the style after just 6hrs ;p-->


</tr>

<table style="width: 74%; margin: 0px auto; padding-right: 10%;">

	<tr>
               <td style="width: 5%; text-align: left;">
		<div class="tooltip">Telephone &nbsp;
	       <span class="tooltiptext"><font color="red">REQUIRED</font></span>
	      </div>
	      </td>
               <td style="width: 20%;">
                  <input type="text" name="Telephone" value="<?php echo $Telephone ?>" placeholder="Telephone" style="width: 100%;">
               </td>
            </tr>
	
	<tr>
               <td style="width: 5%; text-align: left;">
		<div class="tooltip">First Name &nbsp;
		<span class="tooltiptext"><font color="red">Please provide your first name</font></span>
		</div>
		</td> 
               <td style="width: 20%;">
                  <input type="text" name="FirstName" value="<?Php echo $FirstName ?>" placeholder="First Name" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: left;">
		<div class="tooltip">Last Name &nbsp;
		<span class="tooltiptext"><font color="red">Please provide your last name</font></span>
		</div>
	      </td>
               <td style="width: 20%;">
                  <input type="text" name="LastName" value="<?Php echo $LastName  ?>" placeholder="Last Name" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: left;">
		<div class="tooltip">Email &nbsp;
		<span class="tooltiptext"><font color="red"> Please provide a valid E-mail</font></span>
		</div>
		</td>
               <td style="width: 20%;">
                  <input id="Email" type="text" name="Email" value="<?Php echo $Email ?>" placeholder="yourEmail@yourmail.com" style="width: 100%;">
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>


            <tr><td> &nbsp; </td> </tr>

	<!-- Radio buttons-->

            <tr>
               <td style="width: 5%; text-align: left;">
		<div class="tooltip">Interest &nbsp;
		<span class="tooltiptext"><font color="red"> Please select the nature of your Interest</font></span>
		</div>
		</td>
               <td style="width: 20%; text-align: left;">
                  <table style="margin: 0px auto;">
		    <tr>	

                       <td text-align: left>

		 <input type="radio" <?php if ($Interest == "Commercial") echo "checked"; ?>
 	     name="Interest" value="Commercial" > Commercial &nbsp;
                        <input type="radio" <?php if ($Interest == "Personal") echo "checked"; ?> 
 	     name="Interest" value="Personal" > Personal &nbsp; &nbsp;
                         <input type="radio" <?php if ($Interest == "Other") echo "checked"; ?> 		    name="Interest" value="Other" > Other &nbsp; &nbsp;
                 	</td>   
		   </tr>
                 </table>
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>
	
	<!--Check Boxes -->

            <tr>
               <td style="width: 5%; text-align: left">
		<div class="tooltip">Contact Preferences &nbsp;
		<span class="tooltiptext"><font color="red">Please check your prefered contact medium</font></span>
		</div>
		</td>

               <td style="width: 20%;">
                  <table>
                     <tr>
                        <td "text-align: left"> <input type="checkbox" name="Cellular"   
			<?php if($Cellular == "Cellular") echo checked; ?>   value="Cellular"> Cell &nbsp;  </td>
                        <td> <input type="checkbox" name="Text" 
			<?php if($Text == "Text") echo checked; ?>  value="Text"> Text   &nbsp;  </td>
                        <td> <input type="checkbox" name="Emailp"
			 <?php if($Emailp == "Emailp") echo checked; ?>  value="Emailp"> Emailp &nbsp; &nbsp; </td>
                     </tr>
                  </table>
               </td>
            </tr>

	

	     <tr>
               <td style="width: 5%; text-align: left;">
		<div class="tooltip">Type of Request &nbsp;
		<span class="tooltiptext"><font color="red">Select the type of request you are interested in</font></span>
		</div>
		</td>
               <td style="width: 20%; text-align: left;">
                   <select name="RequestType" style="width: 100%;">
                      <option value="Song Production"<?php if ($RequestType == "Song Production") echo selected;?> >Song Production   </option>
                      <option value="Song Mixing" <?php if ($RequestType == "Song Mixing") echo selected;?>  > Song Mixing </option>
                      <option value="Intellectual Property Request for use" <?php if ($RequestType == "Intellectual Property Request for use") echo selected; ?>  > Intellectual Property Use Request </option>
                      <option value="Online one on one lessons"<?php if ($RequestType == "Online one on one lesson") echo selected; ?> > Online one on one lesson </option>
                      <option value="Midi Drum Library substitution" <?php if($RequestType ==  "Midi Drum Library substitution") echo selected; ?> > Midi Drum Library substituion </option>
                      <option value="Special Request" <?php if($RequestType == "Special Request") echo selected;  ?>> Special Request </option>
                   </select>
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

            <tr>
               <td style="width: 5%; text-align: left;">
		<div class="tooltip">Main Message &nbsp;
		<span class="tooltiptext"><font color="red">Please leave here your main message</font></span>
		</div>
		</td>
               <td style="width: 20%;">
                  <div>
                     <textarea placeholder="write here your main intent with this formulary" name="MainMessage" style="width: 100%; height: 50px;"><?php echo $MainMessage; ?></textarea>
                  </div>
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

            <tr>
               <td style="width: 15%;"> </td>
               <td style="width: 20%;" align=center>
               <?php echo $comments ?>
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

	    <tr>
		
		<td style="width:20%;">
		</td>
		
		<td>

            <tr>
               <td style="width: 15%;"> </td>
               <td style="width: 20%;" align=center>
                  <input type="submit" name="Find" value="Find">
                  <input type="submit" name="Save" value="Save">
                  <input type="submit" name="Modify" value="Modify">
                  <input type="submit" name="Delete" value="Delete">
                  <input type="submit" name="Clear" value="Clear">
		  <input type="submit" name="Help" value="Help">
		  <input type="submit" name="About" value="About">
		  <input type="submit" name="Contact_us" value="Contact_us">
		  <input type="submit" name="Leads" value="Leads">
               	  <input type="hidden" name="found" value="<?php echo $found ?>" >
		</td>
            </tr>

         </table>
      </form>
     </div>

<nav align="center" style="background:#101010">
<ul>
        <li><a href="../index.html">Pgm1</a>
           <ul>
            <li><a href="../index.html">Home</a></li>
             <li><a href="../musicPage.html">Music</a></li>
             <li><a href="../videoPage.html">Videos</a></li>
             <li><a href="../mProduction.html">Music Productions</a></li>
             <li><a href="../hotKeys.html">Life Saving Hot Keys</a></li>
             <li><a href="../Pgm2.php">Pgm2</a></li>i
	   </ul>
	   </li>
	      <li><a href="../Pgm2.php">Pgm2</a></li>
	      <li><a href="Pgm3.php">Pgm3</a></li>
	      <li><a href="Pgm4.php">Pgm4</a></li>
              <li><a href="Pgm5.php">Pgm5</a></li>
	      <li><a href="../index.html">Home</a></li> 

</ul>
</nav>
</body>
</html>
