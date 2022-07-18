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

  <title>Welcome To Discussion Page</title>
</head>

<body>
  <h1>
    <center><b>Discussion Forum </b></center>
  </h1>
  

<?php include '_dbconnect.php';?>
<?php include '_header.php'; ?>

<!-- Inserting comment into the database from the form -->
<?php
    $show_alert=false;
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
    $comment_content=$_POST['comment_content'];
    $comment_time=$_POST['comment_time'];
    $sql= "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_time`, `comment_by`) VALUES ('$comment_content', '$id', current_timestamp(), '0')";
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

<?php
$id=$_GET['thread_id'];
$sql="select * from threads where thread_id='$id'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $id=$row['thread_id'];
    $title=$row['thread_title'];
    $description=$row['thread_description'];
}
?>
<div class="jumbotron">
  <h1 class="display-4"><?php echo $title;?></h1>
  <p class="lead"><?php echo $description;?></p>
  <hr class="my-4">
  <p>Important notice... <br>
<marquee behavior="" direction="left">
No Spam / Advertising / Self-promote in the forums. ...
Do not post copyright-infringing material. ...
Do not post “offensive” posts, links or images. ...
Do not cross post questions. ...
Do not PM users asking for help. ...
Remain respectful of other members at all times.
</p></marquee>
  <p class="">
    <b>Posted By --------------------</b>
  </p>
</div>

<div class="class container">
  <h1 class="py-2">Post your Comment</h1>

  <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
    
    <div class="form-floating">
      <label for="floatingTextarea"><b>Please post your Reply or Comment.</b></label>
      <textarea class="form-control" placeholder="Write Explanation here" id="comment" name="comment"rows="3"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <hr>
</div>




<div class="class container">
  <h1 class="py-2">Replies / Comments</h1>
  <?php
      $id=$_GET['thread_id'];
      $sql="select * from comments where thread_id='$id'";
      $result=mysqli_query($con,$sql);
      $no_result=true;
      while($row=mysqli_fetch_assoc($result)){
        $no_result=false;
        $comment_id=$row['comment_id'];
        $comment_content=$row['comment_content'];
        $comment_time=$row['comment_time'];
       echo' 
       <div class="media">
       <img class="mr-3" src="https://img.icons8.com/doodle/48/000000/test-account.png" alt="There is some problem">
       <div class="media-body">
       <p class="font-weight-bold my-0">Amnonymous user'.$comment_time.'</p>
       '.$comment_content.'  
  </div>
</div>';
}?>
</div>
<?php include '_footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

