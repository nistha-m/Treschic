<? php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="treschic";
	$conn=mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn)
		{
			die("connection failed" , mysql_connect_error());

		}

	$sql="INSERT INTO (uname , password) VALUES ("Ram","Rampass");
	if(mysqli_query($conn.$sql))
	{
		echo"New Record Inserted Sucessfuylly";
	}
	else
	{
		echo"error". $sql."<br>" .mysqli_error($conn);

	}
	mysqli_close($conn);
?>
