<?php include "includes/header.php" ?>

    <div id="wrapper">
      <?php include "includes/navigation.php" ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to the Admin Page
                            <small>Subheading</small>
                        </h1>
                        <div class="col-xs-6">
                        <?php
                          if(isset($_POST['submit'])){
                            $cat_title = $_POST['cat_title'];
                            if($cat_title == '' || empty($cat_title)){
                              echo "Required field";
                            } else {
                              $query = "INSERT INTO category(cat_title) ";
                              $query .= "VALUE('{$cat_title}') ";
                              $create_category = mysqli_query($connection, $query);
                              if(!$create_category){
                                die('Query Failed: ' . mysqli_error($connection));
                              }
                            }
                          }
                        ?>
                          <form class="" action="categories.php" method="post">
                            <div class="form-group">
                              <label for="cat_title">Category Title</label>
                              <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                          </form>
                      </div>
                      <div class="col-xs-6">
                        <table class='table table-bordered table-hover'>
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Category Title</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            //query: find all categories
                              $query = "SELECT * FROM category";
                              $fetchCategories = mysqli_query($connection, $query);

                              while ($row = mysqli_fetch_assoc($fetchCategories)){
                                $cat_id    = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                echo "<tr>";
                                echo "<td>{$cat_id}</td>";
                                echo "<td>{$cat_title}</td>";
                                echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                                echo "</tr>";
                              }
                           ?>
                           <?php
                           //query: delete a category
                            if(isset($_GET['delete'])){
                              $fetch_cat_id = $_GET['delete'];

                              $query  = "DELETE FROM category WHERE cat_id = {$fetch_cat_id} ";
                              $delete_query = mysqli_query($connection, $query);
                              //refresh the page
                              header("Location: categories.php");
                            }
                            ?>
                          </tbody>
                        </table>
                      <div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
  <?php include "includes/footer.php" ?>
