<?php
	session_start();
	include_once('C:\xampp\htdocs\MangaStore\MVC\model\functions\admin.php');
	
	$title = "Add new book";
	include('C:\xampp\htdocs\MangaStore\MVC\view\template\header.php');

	include('C:\xampp\htdocs\MangaStore\MVC\model\functions\database_functions.php');

	$conn = db_connect();

	if(isset($_POST['add'])){
		$isbn = trim($_POST['isbn']);
		$isbn = mysqli_real_escape_string($conn, $isbn);

		$title = trim($_POST['title']);
		$title = mysqli_real_escape_string($conn, $title);

		$author = trim($_POST['author']);
		$author = mysqli_real_escape_string($conn, $author);

		$descr = trim($_POST['descr']);
		$descr = mysqli_real_escape_string($conn, $descr);

		$price = floatval(trim($_POST['price']));
		$price = mysqli_real_escape_string($conn, $price);

		$genre = trim($_POST['genre']);
		$genre = mysqli_real_escape_string($conn, $genre);

		// add image
		if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
			$image = $_FILES['image']['name'];
			$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
			$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "./C:/xampp/htdocs/MangaStore/MVC/view/bootstrap/img/";
			$uploadDirectory .= $image;
			move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
		}

		// find publisher and return pubid
		// if publisher is not in db, create new
		$findGen = "SELECT * FROM genre WHERE genre_name = '$genre'";
		$findResult = mysqli_query($conn, $findGen);
		if(!$findResult){
			// insert into publisher table and return id
			$insertGen = "INSERT INTO genre(genre_name) VALUES ('$genre')";
			$insertResult = mysqli_query($conn, $insertGen);
			if(!$insertResult){
				echo "Can't add new publisher " . mysqli_error($conn);
				exit;
			}
			$genreid = mysql_insert_id($conn);
		} else {
			$row = mysqli_fetch_assoc($findResult);
			$genreid = $row['genreid'];
		}


		$query = "INSERT INTO books VALUES ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "', '" . $genreid . "')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location: admin_book.php");
		}
	}
?>
	<form method="post" action="admin_add.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ISBN</th>
				<td><input type="text" name="isbn"></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" required></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="descr" cols="40" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" required></td>
			</tr>
			<tr>
				<th>Genre</th>
				<td><input type="text" name="genre" required></td>
			</tr>
		</table>
		<input type="submit" name="add" value="Add new book" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	
	include_once('C:\xampp\htdocs\MangaStore\MVC\view\template\footer.php');
	
?>
