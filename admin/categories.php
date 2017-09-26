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
                          <form class="" action="index.html" method="post">
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
                        <table class='table table-border table-hover'>
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Category Title</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>PHP</td>
                            </tr>
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
