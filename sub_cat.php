<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Home</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <a href="index.php?add_product" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add New Product</a>                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Blank Page</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                  <h3>view all sub categories</h2>
                    <form method="post" enctype="multipart/form-data">
                      <table>
                        <tr>
                          <th>sr no</th>
                          <th>sr no</th>
                          <th>sr no</th>
                          <th>sr no</th>
                        </tr>
                        <?php include ("inc/function.php"); echo viewall_sub_category();?>
                    </table>
                  </form>

                    <h3>view all categories</h2>
                    <form method="post" enctype="multipart/form-data">
                      <table>
                      <tr>
                        <td>Select Category Name:</td>
                        <td>
                          <select name="categories">
                          <?php echo viewall_cat();?>
                        </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Enter Sub Category Name:</td>
                        <td>
                          <input type="text" name="sub_cat_name"/>
                        </td>
                      </tr>
                    </table>
                    <center><button name="add_sub_cat">Add SubCategory</button></center>
                  </form>
                  <?php echo add_sub_cat();?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
