<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css
    " integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  <title>Welcome To Home Page</title>
</head>

<body>
  <h1>
    <center><b>Discussion Forum </b></center>
  </h1>
  <?php include '_dbconnect.php';?>
  <?php include '_header.php'; ?> 

   <!-- Category container starts here -->
   <div class="container my-4" id="ques">
        <h2 class="text-center my-4">iDiscuss - Browse Categories</h2>
        <div class="row my-4">
          <!-- Fetch all the categories and use a loop to iterate through categories -->
         <?php 
         $sql = "SELECT * FROM `categories`"; 
         $result = mysqli_query($con, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['category_id'];
          $cat = $row['category_name'];
          $desc = $row['category_description'];
          echo '<div class="col-md-4 my-2">
                  <div class="card" style="width: 18rem;">
                      <img src="img/card-'.$id. '.jpg" class="card-img-top" alt="image for this category">
                      <div class="card-body">
                          <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                          <p class="card-text">' . substr($desc, 0, 90). '... </p>
                          <a href="threads.php?catid=' . $id . '" class="btn btn-primary">Explore</a>
                      </div>
                  </div>
                </div>';
         } 
         ?>
  
<!-- <?php
echo'
<div class="row mx-10 ">
<div class="card mx-2 my-2" style="width: 18rem;">
<img class="card-img-top" src="image/programming.jpg" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">Programming</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
  <a href="#" class="btn btn-primary">Explore</a>
</div>
</div>
<div class="card mx-2 my-2" style="width: 18rem;">
<img class="card-img-top" src="image/programming.jpg" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">Sports</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
  <a href="#" class="btn btn-primary">Explore</a>
</div>
</div>
<div class="card mx-2 my-2" style="width: 18rem;">
<img class="card-img-top" src="image/programming.jpg" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">Education</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
  <a href="#" class="btn btn-primary">Explore</a>
</div>
</div>
<div class="card mx-2 my-2" style="width: 18rem;">
<img class="card-img-top" src="image/programming.jpg" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">News</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
  <a href="#" class="btn btn-primary">Explore</a>
</div>
</div>


</div>';
?> -->
 
  <?php include '_footer.php'; ?>
  

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>