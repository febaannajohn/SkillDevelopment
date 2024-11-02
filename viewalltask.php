<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
        background-color: #fbfbfb;
        }
        @media (min-width: 991.98px) {
        main {
        padding-left: 240px;
        }
        }
        
        /* Sidebar */
        .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0; /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
        }
        
        @media (max-width: 991.98px) {
        .sidebar {
        width: 100%;
        }
        }
        .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }
        
        .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        }

        .accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
        
        </style>
</head>
<body>
<?php

include('admin/config.php');
?>
   

<?php
include("header.php");

include("sidebar.php");
?>
      <section id="">


        <main style="margin-top: 58px;">
            <div class="container  ">
                  
                <div class="row pl-5 pt-5">
                <div class="col-md-3 pl-5">
                 
                    <img src="co.png" height="145rem;" alt=""
                    loading="lazy" />
                </div>
                <div class="col-md-8 pt-1">
                    <h3>Assingnment Task</h3>
                 
                    <h5>Learn Tutorial First , Then Do the given Task To get more Result. </h5>

                        <p>Enroll in our 6-month online training Intenship, 'Nosce', to learn coding and other skills in an Work environment by paying the low training fee with placement.</p>
                </div>
               </div>
               </div>
               </main>
               </section> 
             
                
             

      <section id="">


        <main style="margin-top: 58px;">
            <div class="container  ">
                  
                <div class="row pl-5 pt-5">
                <div class="col-md-10 pl-5">
                    <h2>Assingnment Task Based on the given Tutorial</h2>
                     
                    <?php

// $sql = "SELECT tbl_task.*, categories.catname,tbl_addsubject.subname,
// from tbl_task
// inner join categories on categories.catid = tbl_task.catid
// inner join tbl_addsubject on addsubject.subid = tbl_task.subid";


// $res  = mysqli_query($conn, $sql);
// if(mysqli_num_rows($res) > 0){
//   while($data = mysqli_fetch_array($res)){


    $sql = "select tbl_task.*, tbl_addsubject.*, categories.catname
                                from tbl_task
                                inner join tbl_addsubject on tbl_addsubject.subid = tbl_task.subid
                                inner join categories on categories.catid = tbl_addsubject.catid
                               ";
                                $res  = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($res) > 0){
                                  while($data = mysqli_fetch_array($res)){

                                ?>




                    <button class="accordion"><?= $data['subname'] ?> </br> <span><?= $data['catname'] ?></button>
                                
                    <div class="panel">
                    </br>
                      <h3> <?= $data['task'] ?> </h3> </div>
                    
                  
            <?php
  }}
            ?>
                </div>
                <script>
                    var acc = document.getElementsByClassName("accordion");
                    var i;
                    
                    for (i = 0; i < acc.length; i++) {
                      acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                          panel.style.display = "none";
                        } else {
                          panel.style.display = "block";
                        }
                      });
                    }
                    </script>
             
                
             


               


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
</body>
</html>