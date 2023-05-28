<div class="col-lg-4 col-md-12">
    <div class="main-sidebar">
      
      <div class="row">
        <div class="p-1 mx-1 text-white" style="background:red;position:relative;">
        <h2>Recent Post</h2>
        <span class="rec-row"><i class="fas fa-caret-down fa-2x"></i></span>
        </div>
      </div>
      
      <ol class="p-0 m-0 sidebar">

              <?php

                $sql="SELECT * FROM post WHERE visibility=1 ORDER BY id DESC Limit 4";
                $last=$conn->query($sql);
                while ($row=$last->fetch_assoc()) {
              
               ?>
        <li class="side-item mt-3">
          <a href="<?php echo $base_url.$row['url_slug']; ?>" class="side-link">
            <div class="d-flex mb-1">
              <img data-src="<?php echo $base_url.'image/'.$row['thumbnail']; ?>" class="side-img lazyload" width="120px" height="60px" alt="">
              <h3 class="ms-1 side-h"><?php echo $row['title'] ?></h3>
            </div>
          </a>
        </li>
      <?php } ?>

      </ol>
    </div>
    <hr>
    <div class="row">
      <ol class="sidebar">
        <?php

                $sql1="SELECT * FROM post WHERE visibility=1 ORDER BY id DESC Limit 4,9";
                $last1=$conn->query($sql1);
                while ($row1=$last1->fetch_assoc()) {
               ?>
        <li class="mb-3">
          <a href="<?php echo $base_url.$row1['url_slug']; ?>" class="side-link"><b><?php echo $row1['title']; ?></b></a>
        </li>
        <?php } ?>
      </ol>
    </div>
  </div>