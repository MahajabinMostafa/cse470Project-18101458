<?php
	session_start();
	include_once ('C:\xampp\htdocs\MangaStore\MVC\model\functions\database_functions.php');
	// get publisherid
	if(isset($_GET['genreid'])){
		$genid = $_GET['genreid'];
	} else {
		echo "Wrong query! Check again!";
		exit;
	}

	// connect database
	$conn = db_connect();
	$genName = getGenName($conn, $genid);

	$query = "SELECT book_isbn, book_title, book_image FROM books WHERE genreid = '$genid'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty books ! Please wait until new books coming!";
		exit;
	}

	$title = "Books Per Genre";
	include ('C:\xampp\htdocs\MangaStore\MVC\view\template\header.php');
?>
	<p class="lead"><a href="publisher_list.php">Genre</a> > <?php echo $genName; ?></p>
	<?php while($row = mysqli_fetch_assoc($result)){
?>
	<div class="row">
		<div class="col-md-3">
			<img class="img-responsive img-thumbnail" src="./C:/xampp/htdocs/MangaStore/MVC/view/bootstrap/img/<?php echo $row['book_image'];?>">
		</div>
		<div class="col-md-7">
			<h4><?php echo $row['book_title'];?></h4>
			<a href="book.php?bookisbn=<?php echo $row['book_isbn'];?>" class="btn btn-primary">Get Details</a>
		</div>
	</div>
	<br>
<?php
	}
	if(isset($conn)) { mysqli_close($conn);}
	include_once('C:\xampp\htdocs\MangaStore\MVC\view\template\footer.php');
?>
