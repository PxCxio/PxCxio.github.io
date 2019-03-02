

<!DOCTYPE html>


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

<body onload="currentTime()"> 



<style>

 a:link { color:red;
          text-decoration:none;
        }

 a:visited {
            color:white;
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
   color:white;
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

/* #wrapper {
     width : 100px;
     height : auto;
     background : #DAD5C1;
     border-left : 5px solid #A09885;
     border-right : 5px solid #A09885;
     overflow : auto;
     margin : 0;
     padding : 5px;
}

*{
font-size: 14px;
}
*/

#header {
        width : 100%;
        height : 100px;
        background : #101010
        border-bottom : 3px solid #7c7063;

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
       
<form action="includes/Controller5.php" method="post">       
	 
<tr> 
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


<table style="width: 75%; margin: 0px auto; padding-right: 10%;">

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

                       <td  text-align: left>
		 <input type="radio" <?php if ($Interest == "Commercial") echo "checked"; ?>
  name="Interest" value="Commercial">Commercial
                        <input type="radio" <?php if ($Interest == "Personal") echo "checked"; ?> 
	     name="Interest" value="Personal" > Personal &nbsp; 
                         <input type="radio" <?php if ($Interest == "Other") echo "checked"; ?> 		    name="Interest" value="Other" > Other &nbsp; 
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
               <td style="width: 80%;" align="left">
                  <!--
		  <input type="submit" name="Find" value="Find">
                  -->
		  <input type="submit" name="Save" value="Submit">
		  <!--
                  <input type="submit" name="Modify" value="Modify">
                  <input type="submit" name="Delete" value="Delete"
                  <input type="submit" name="Clear" value="Clear">-->
		  <input type="submit" name="Help" value="Help">
		</td><td>
		  <input type="submit" name="About" value="About">
               	  <input type="hidden" name="found" value="<?php echo $found ?>" >
		</td>
            </tr>
         </table>

      </form>
     </div>

<nav align="center" style="background:#101010">
<ul>

<ul>
        <li><a href="../index.php">Home</a>
           <ul>
             <li><a href="../hotKeys.html">Life Saving Hot Keys</a></li>
	   </ul>
	   </li>
             <li><a href="../musicPage.html">Music</a></li>
             <li><a href="../videoPage.html">Videos</a></li>
             <li><a href="../mProduction.html">Music Productions</a></li>

</ul>
</nav>
