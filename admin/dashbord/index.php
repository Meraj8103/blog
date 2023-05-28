<!-- header -->
<?php  include "includes/header.php"; ?>
<!-- header end -->


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                $sql="SELECT * FROM post" or die("sql faild.");
                $result=$conn->query($sql);
                 ?>
                <h3><?php echo $result->num_rows; ?></h3>

                <p>Total Post</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                $sql1="SELECT * FROM category " or die("sql faild.");
                $result1=$conn->query($sql1);

                 ?>
                <h3><?php echo $result1->num_rows; ?><sup style="font-size: 20px">cat</sup></h3>

                <p>Total Category</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                  <?php 
                $sql2="SELECT * FROM admin " or die("sql faild.");
                $result2=$conn->query($sql2);

                 ?>
                <h3><?php echo $result2->num_rows; ?></h3>

                <p>Total User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </div>
          
        </div>
        <!-- /.row -->
        <div class="row">
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- footer -->
<?php include "includes/footer.php"; ?>
<!-- footer end -->