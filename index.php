<!DOCTYPE html>
<html>
<head>
  <title> Home </title>
 <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <meta name"viewport" content="width=device-width, initial-scale=1,user-scalable=no" >
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style media="screen">
     body {
       padding-top: 50px ;
       background-color: #D0D0D0 ;
     }
   .img-style {
     width: 160px;
     height: 220px ;
      }
    .row {
      margin:0 auto;
       width:40%;
    }
  </style>
</head>
<?php

  require_once 'Connection/conn.php' ;
  $sql = "SELECT * FROM books ORDER BY id " ;
  $query = $db->query($sql);

  if (isset($_GET['sortby'])) {
    // Capture that in a variable by that name
    $sortby = $_GET['sortby'];
  // price low
    if ($sortby == 'lowprice') {
      $sql =("SELECT * FROM books ORDER BY price asc");
        $query = $db->query($sql);
    //price high 
    }
    elseif ($sortby == 'highprice') {
      $sql =("SELECT * FROM books ORDER BY price DESC");
        $query = $db->query($sql);
    }
    // sort by name
    elseif ($sortby == 'name') {
      $sql =("SELECT * FROM books ORDER BY author asc");
        $query = $db->query($sql);
    }
    
    // sort by rate sql
    elseif ($sortby == 'rate') {
      $sql =("SELECT * FROM books ORDER BY rate DESC");
        $query = $db->query($sql);
    }
    //sort by pdate sql
    elseif ($sortby == 'pdate') {
      $sql =("SELECT * FROM books ORDER BY pdate DESC");
        $query = $db->query($sql);
    }
  }

 ?>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <a href="index.php" class="navbar-brand active">Books.com</a>
    <ul class="nav navbar-nav">
      <li class = "dropdown ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Home </a>
      </li>
      <li class = "dropdown ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Books <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Since</a></li>
          <li><a href="#">Learning</a></li>
          <li><a href="#">other</a></li>
          </ul>
      </li>
      <li class = "dropdown ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> about us </a>
      </li>
    </ul>
  </div>
 </nav>

<div class="form-groub">
  <h2 class="text-center">Available Books</h2>  <hr>
   <div class="row">
       <h2 class="text-center">Sort By:</h2>  <hr>
     <a href="index.php?sortby=lowprice" class="btn btn-primary">Lowest Price</a>
     <a href="index.php?sortby=highprice" class="btn btn-primary">Highest Price</a>
     <a href="index.php?sortby=rate" class="btn btn-primary">Rate</a>
     <a href="index.php?sortby=pdate" class="btn btn-primary">Published date</a>
     <a href="index.php?sortby=name" class="btn btn-primary">Author name</a>
   </div>
 <hr>

  <?php while($book = mysqli_fetch_assoc($query)) : ?>
  <div class= "col-md-3 text-center form-groub">
    <h4><?php echo $book['title']; ?> </h4>
    <img src="<?php echo $book['image']; ?>" alt="<?php echo $book['title']; ?>" class="img-style">
    <p class="text-primary">Author: <span class="text-danger"><?php echo $book['author']; ?> </span></p>
    <p class="text-primary">Published: <span class="text-danger"><?php echo $book['pdate']; ?> </span></p>
    <p class="text-primary">Rate: <span class="text-danger"><?php echo $book['rate']; ?> </span></p>
    <p class="text-primary">Price: <span class="text-danger">$<?php echo $book['price']; ?> </span></p>



  </div>
    <?php endwhile; ?>

</div>


</body>
</html>
