<section id="courses" class="courses">
      <div class="container" data-aos="fade-up">



        <div class="row" data-aos="zoom-in" data-aos-delay="100">

       


        
          <?php

                                $sql = "SELECT tbl_addsubject.*, categories.catname
                                from tbl_addsubject
                                inner join categories on categories.catid = tbl_addsubject.catid
                                where tbl_addsubject.catid = 2
                                order by tbl_addsubject.subid DESC";
                                $res  = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($res) > 0){
                                  while($data = mysqli_fetch_array($res)){

                                ?>

                             
                                    
        <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="course-item">
            <img src="admin/uploads/<?= $data['image'] ?>"  style="height:120px width:130px" align:"center"  alt="">
                                  
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4> <span><?= $data['catname'] ?></span></h4>
                  <p class="price">$169</p>
                </div>

                <h3><a href="course-details.html"> <span> <h5><?= $data['subname'] ?></h5></span></a></h3>
                <p> <?= $data['descption'] ?></p>
               
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
            }
          }

          ?>

        </div>


       

       

        </div>

      </div>

