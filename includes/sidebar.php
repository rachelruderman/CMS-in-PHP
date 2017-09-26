<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
     <h4>Blog Search</h4>
      <form class="" action="search.php" method="post">
        <div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" name="submit" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
      </form> <!--search form-->
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">

      <?php
        $query = "SELECT * FROM category";
        $fetchCategTitle = mysqli_query($connection, $query);
       ?>

        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                  <?php
                    while ($row = mysqli_fetch_assoc($fetchCategTitle)){
                      $cat_title = $row['cat_title'];
                      echo "<li><a href='#'>{$cat_title}</a></li>";
                      //double quotes to include variables with html
                    }
                 ?>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
      <?php include "widget.php"; ?>

</div>

</div>
<!-- /.row -->

<hr>
