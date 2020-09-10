<?php
  session_start();
  $count = 0;
  // connecto database
  include_once ('C:\xampp\htdocs\MangaStore\MVC\model\functions\database_functions.php');
  $conn = db_connect();

  $query = "SELECT book_isbn, book_image FROM books";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "Full Catalogs of MangaStore";
  include_once('C:\xampp\htdocs\MangaStore\MVC\view\template\header.php');
?>
  <p class="lead text-center text-muted">Full Catalogs of MangaStore</p>
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="row">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-3">
            <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
              <img class="img-responsive img-thumbnail" src="./C:/xampp/htdocs/MangaStore/MVC/view/bootstrap/img/<?php echo $query_row['book_image']; ?>">
            </a>
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?>
      </div>
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
  include_once ('C:\xampp\htdocs\MangaStore\MVC\view\template\footer.php');
?>
