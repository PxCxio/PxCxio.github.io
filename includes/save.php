

<html>

  <body>

 <!-- <br><h2>This is save.php</h3><br>-->

	

   <?php
 	$Telephone=trim($Telephone);
	if(strlen($Telephone)>0)
	{
	   $sql="INSERT INTO customers (
		Telephone,
		FirstName,
		LastName,
		Email,
		Interest,
		Cellular,
		Text,
		Emailp,
		RequestType,
		MainMessage
	)
	VALUES
	(
		'$Telephone',
		'$FirstName',
		'$LastName',
		'$Email',
		'$Interest',
		'$Cellular',
		'$Text',
		'$Emailp',
		'$RequestType',
		'$MainMessage'
	)";

	        
          if (mysqli_query($connection, $sql)) 
          {
             //echo "<br>New record created successfully";
             $comments ="<span style=\"color: blue;\">RECORD $Telephone ADDED</span><br\>";
          } 
          else
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $comments ="<span style=\"color: red;\">RECORD $Telephone ALREADY EXISTS </span><br\>";
          }
           
       }//end if(strlen($Telephone)>0)                      
       else
       {
          $comments ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       } 
             
    ?>
       
      
    <!--form method="post" action="../../research/Testing/pgm3.php" >
       <input type="submit" name="return" value="Press to  continue" />
    </form--> 
         
  </body>

</html>
