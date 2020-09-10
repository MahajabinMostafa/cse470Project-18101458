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

<h2>MangaStore page:</h2>


<div class ="MangaStore-container">
  <?php
  $title = mysqli_real_escape_string($conn, $_GET['title']);
  $author = mysqli_real_escape_string($conn, $_GET['author']);


  $sql = "SELECT * FROM books WHERE book_title='$title' AND book_author='$author'";
  $result = mysqli_query($conn, $sql);
  $queryResult = mysqli_num_rows($result);

  if($queryResult>0){
    while ($row = mysqli_fetch_assoc($result)){
      echo "<div class='MangaStore-box'>

      <h4>".$row['book_title']."</h4>
      <p>".$row['book_author']."<p>
      <p>".$row['book_price']."<p>


      </div>";
    }
  }

	include_once('C:\xampp\htdocs\MangaStore\MVC\view\template\footer.php');
  ?>
  <form method="post" action="cart.php">
    <input type="hidden" name="bookisbn" value="<?php echo $book_isbn;?>">
    <input type="submit" value="Purchase / Add to cart" name="cart" class="btn btn-primary">
  </form>
</div>
