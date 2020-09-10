<?php
	session_start();
	include_once ('C:\xampp\htdocs\MangaStore\MVC\model\functions\database_functions.php');
	$conn = db_connect();

	$query = "SELECT * FROM genre ORDER BY genreid";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty publisher ! Something wrong! check again";
		exit;
	}

	$title = "List Of Genre";
	include ('C:\xampp\htdocs\MangaStore\MVC\view\template\header.php');
?>
	<p class="lead">List of Genre</p>
	<ul>
	<?php
		while($row = mysqli_fetch_assoc($result)){
			$count = 0;
			$query = "SELECT genreid FROM books";
			$result2 = mysqli_query($conn, $query);
			if(!$result2){
				echo "Can't retrieve data " . mysqli_error($conn);
				exit;
			}
			while ($genInBook = mysqli_fetch_assoc($result2)){
				if($genInBook['genreid'] == $row['genreid']){
					$count++;
				}
			}
	?>
		<li>
			<span class="badge"><?php echo $count; ?></span>
		    <a href="bookPerPub.php?genreid=<?php echo $row['genreid']; ?>"><?php echo $row['genre_name']; ?></a>
		</li>
	<?php } ?>
		<li>
			<a href="books.php">List full of MangaStore</a>
		</li>
	</ul>
<?php
	mysqli_close($conn);
	include_once('C:\xampp\htdocs\MangaStore\MVC\view\template\footer.php');
?>
