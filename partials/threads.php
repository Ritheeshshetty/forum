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
  <?php
    $id = $_GET['catid'];
    $sql = "select * from categories where category_id=$id "; 
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
      $id=$row['category_id'];
      $title = $row['category_name'];
      $category_description = $row['category_description'];
    }
    ?>
    
    <?php
    $show_alert=false;
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
    $th_title=$_POST['thread_title'];
    $th_description=$_POST['thread_description'];
    $sql= "INSERT INTO `threads` (`thread_title`, `thread_description`, `thread_category_id`, `thread_user_id`, `time_stamp`) VALUES ('$th_title', '$th_description', '1', '0', current_timestamp())";
    $result=mysqli_query($con,$sql);
    $show_alert=true;
    }
    if($show_alert){
      echo'<div class="alert alert-success"role="alert">
      <h4 class="alert-heading">Posted Successfully.........!</h4>
      <p class="mb-0">Whenever you need to,be sure to use margin utilities to keep things nice and tidy.</p>
      </div>';
    }
    ?>

   <!-- Category container starts here -->
   <div class="jumbotron">
  <h1 class="display-4"><?php echo $title;?></h1>
  <p class="lead"><?php echo $category_description;?></p>
  <hr class="my-4">
  <p>Share your thoughts... <br>
<marquee behavior="" direction="left">
No Spam / Advertising / Self-promote in the forums. ...
Do not post copyright-infringing material. ...
Do not post “offensive” posts, links or images. ...
Do not cross post questions. ...
Do not PM users asking for help. ...
Remain respectful of other members at all times.
</p></marquee>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

<div class="class container">
  <h1 class="py-2">Start Discussion</h1>

  <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"><b>Post Title</b></label>
      <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="thread_title" name="thread_title">
      <div id="emailHelp" class="form-text"><b>Try to keep your title as short as possible.</b></div>
    </div>
    <div class="form-floating">
      <label for="floatingTextarea"><b>Detail Explanation About your post.</b></label>
      <textarea class="form-control" placeholder="Write Explanation here" id="floatingTextarea" id="thread_description" name="thread_description"rows="3"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <hr>
</div>


    <div class="container">
      <h1 class="py-2" style="text-align:left;">Browse questions</h1>
      <?php
      $id=$_GET['catid'];
      $sql="select * from threads where thread_category_id='$id'";
      $result=mysqli_query($con,$sql);
      $no_result=true;
      while($row=mysqli_fetch_assoc($result)){
        $no_result=false;
        $thread_id=$row['thread_id'];
        $thread_title=$row['thread_title'];
        $thread_description=$row['thread_description'];

       echo' 
       <div class="media">
       <img class="mr-3" src="https://img.icons8.com/doodle/48/000000/test-account.png" alt="There is some problem">
       <div class="media-body">
       <h5 class="mt-0"><a class="text-dark" href="thread.php?thread_id=' .$thread_id .'">'.$thread_title.'</a></h5>
       '.$thread_description.'
       
  </div>
</div>';
      }

      if($no_result){
        echo"<b>Be the first person to start Discussion on topic of your Interest in this Category</b> ";
      }
      ?>
    <!-- </div> -->
  
 
  <?php include '_footer.php'; ?>
  

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>