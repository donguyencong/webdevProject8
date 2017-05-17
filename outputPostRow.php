<?php
function outputPostRow($number){
  include('travel-data.php');
  include('generateLink.php');
  $link = "#";
  $class = "";
  if($number==1){?>
    <div class="row">
        <div class="col-md-2">
           <a href="post.php?id=1" class=""><img src="images/travel/<?php echo $thumb1 ?>" alt="Calgary in the Snow" class="img-thumbnail"/></a>
        </div>
        <div class="col-md-10">
           <h2><?php echo $title1 ?></h2>
           <div class="details">
             Posted by <?php generateLink($link, utf8_encode($userName1), $class) ?>
             <span class="pull-right"><?php echo $date1 ?></span>
           </div>
           <p class="excerpt">
           <?php echo $excerpt1 ?>
           </p>
           <p><a href="post.php?id=1" class="btn btn-primary btn-sm">Read more</a></p>
        </div>
    </div>
    <hr/>
    <?php }
    if($number==2){?>
      <div class="row">
          <div class="col-md-2">
             <a href="post.php?id=3" class=""><img src="images/travel/<?php echo $thumb2 ?>" alt="Mountain Climbing" class="img-thumbnail"/></a>
          </div>
          <div class="col-md-10">
             <h2><?php echo $title2 ?></h2>
             <div class="details">
               Posted by <?php generateLink($link, utf8_encode($userName2), $class) ?>
               <span class="pull-right"><?php echo $date2 ?></span>
             </div>
             <p class="excerpt">
             <?php echo $excerpt2 ?>
             <p><a href="post.php?id=3" class="btn btn-primary btn-sm">Read more</a></p>
          </div>
      </div>
      <hr/>
      <?php }
      if($number==3){?>
      <div class="row">
          <div class="col-md-2">
             <a href="post.php?id=9" class=""><img src="images/travel/<?php echo $thumb3 ?>" alt="Nova Scotia" class="img-thumbnail"/></a>
          </div>
          <div class="col-md-10">
             <h2><?php echo $title3 ?></h2>
             <div class="details">
               Posted by <?php generateLink($link, utf8_encode($userName3), $class) ?>
               <span class="pull-right"><?php echo $date3 ?></span>
             </div>
             <p class="excerpt">
             <?php echo $excerpt3 ?>
             </p>
             <p><a href="post.php?id=9" class="btn btn-primary btn-sm">Read more</a></p>
          </div>
      </div>
      <?php }
  } ?>
