<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php
                     
       //connecting to mysqli 
       //echo "<h3>I am going to connect to mySql";

       //                                server      user    password  database     
       $connection = mysqli_connect("localhost:8889","root","root","mysql");
       if (mysqli_connect_errno())
       {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
       else
       {  
          //echo "<br>I have connected to mySql<br>";            
             
          // Change database to another name if needed
             
          $dbName="mysql"; 
          $db_selected = mysqli_select_db( $connection, $dbName );
                      
          if (!$db_selected)
          {
             die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
          }
          else
          {
             //echo "I selected database : " . $db_selected . " " . $dbName . "<br></h3>" ;
                   
             //access to a table                    
             $tableName = "customers";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it 
             if(!$query)
             {
               // echo "The ".$tableName." does not exists<br>";
                        
               // echo "<br>Creating table : ".$tableName."<br>";
                       
                $sql = "CREATE TABLE ".$tableName."(
                       Telephone VARCHAR(20) NOT NULL,
                        PRIMARY KEY(Telephone),
                        FirstName VARCHAR(30),
                        LastName VARCHAR(30),
                        Email VARCHAR(30),
			Interest VARCHAR(12),
			Cellular VARCHAR(8),
                        Text  VARCHAR(4),
                        Emailp  VARCHAR(6),
			RequestType VARCHAR(33),
                        MainMessage VARCHAR(200)
                        )";
                                
                $result = mysqli_query( $connection, $sql );
                         
                //confirm table creation
                if ($result)
                {
                   echo "table ". $tableName." created<br>";
                }
                else
                {
                   die ("Can\'t create ". $tableName." ". mysqli_error() );
                }
                     
             }//if(!$query) if table does not exist, create it 
                        
          }//end if (!$db_selected) connecting to db
                
       }//end if (mysqli_connect_errno()) connecting to mysqli

	
	//find save modify delete clear
	
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

	$found = $_POST['found'];	

/*		
	echo "$Telephone <br>";
	echo "$FirstName<br>";
	echo "$LastName<br>";
	echo "$Email<br>";
        echo "$Interest<br>";
        echo "$Cellular<br>";
	echo "$Text<br>";
        echo "$Emailp<br>";
        echo "$RequestType<br>";
	echo "$MainMessage<br>";
			
*/
	?>

	

			 
<?php
        //find save modify delete clear

        if ( $_POST['Find'] )
        {
        include('find.php');
	include( 'Pgm6.php' );   
        }
        else if ( $_POST[ 'Save' ] )

        {
	include('save.php');
	include( '../indexR.php' );
        }

        else if ( $_POST[ 'Modify' ] )
        {
        include('modify.php');
	include( 'Pgm5.php' );
        }

        else if ( $_POST[ 'Delete' ] )
        {
        include('delete.php');
	include( 'Pgm5.php' );
	}
        
	else if ( $_POST[ 'Clear' ] )
	{
	include('clear.php');
	include( '../index.html' );
	}
	
	else if ( $_POST[ 'Help' ] )
	{
	include('help.php');
	}
	
	else if ( $_POST[ 'About'] )
	{
	include('about.php');
	}
	
	else if ( $_POST[ 'Contact_us'] )
	{
	include('contact_us.php');
	}
	else if ( $_POST[ 'Leads'] )
	{	
	include('leads.php');
	}

        else
        {
           echo "This is the Controller4 page, an unknown button was pressed";
        }

       mysqli_close($connection); 

       //include( 'Pgm5.php' );

      ?>


