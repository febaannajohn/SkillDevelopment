<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MCQ Quiz</title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"/>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="exam.css" />

    <link rel="icon" href="imges/no.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>

 <?php

// include('header.php');

 ?>

  <div class="container">
   <div class="row pl-5 pt-5" >
  <div class="col-md-8 pl-5 pt-5" style="left: 190px;"> 
  <h4> <b>Exam Test . </b></h4></br>
  <h5>You can test your HTML skills with W3Schools' Quiz. </h5>
 <h6> The test contains 13 questions with time limit. </h6>
<h6>You will get 1 point for each correct answer. At the end of the Quiz, your total score will be displayed. Maximum score is 13 points.</h6>
</div>
</div>
</div>

<div class="row">


<div class="col-md-4 pl-5 pt-5"> 
  



    <div class="start-screen">
    
    <div class="card" style="width: 38rem; top: 120px; left: 390px;">
  
  <div class="card-body">
    <h5 class="card-title">Start the Quiz</h5>
    <p class="card-text">Good luck!</p>
    </div>
      <button id="start-button" >Start</button>
    </div>
  </div>
</div>
  <div class="row">
  <div class="col-md-8 pl-5 pt-5" style="left: 300px;"> 
    <div id="display-container">
      <div class="header">
        <div class="number-of-count">
          <span class="number-of-question">1 of 3 questions</span>
        </div>
        <div class="timer-div">
          <img src="timer-icon.svg" />
          <span class="time-left">10s</span>
        </div>
</div>
      <div id="container">
        <!-- questions and options will be displayed here -->
      </div>
      <button id="next-button">Next</button>
      </div>
    
    <div class="score-container hide">
      <div id="user-score">Demo Score</div>
      <button id="restart">Restart</button>
    </div>
</div>

</div>
    <!-- Script -->
    <script src="examscript.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
  </body>
</html>