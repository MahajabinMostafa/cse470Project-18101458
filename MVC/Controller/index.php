<?php
  session_start();
  $count = 0;
  // connecto database

  $title = "Index";
  include_once('C:\xampp\htdocs\MangaStore\MVC\view\template\header.php');
  include_once ('C:\xampp\htdocs\MangaStore\MVC\model\functions\database_functions.php');
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
      <!-- Example row of columns -->
      <p class="lead text-center text-muted">Latest MangaStore</p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./C:/xampp/htdocs/MangaStore/MVC/view/bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  include_once ('C:\xampp\htdocs\MangaStore\MVC\view\template\footer.php');
?>
