<?php
	$book_isbn = $_GET['bookisbn'];

	include_once ('C:\xampp\htdocs\MangaStore\MVC\model\functions\database_functions.php');
	$conn = db_connect();

	$query = "DELETE FROM books WHERE book_isbn = '$book_isbn'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: admin_book.php");
?>