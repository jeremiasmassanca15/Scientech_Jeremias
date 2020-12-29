<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Home</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="index.php?add_product" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add New Product</a>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Blank Page</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                  <h3>Add New Products</h2>
                  <form method="post" enctype="multipart/form-data">
                    <table>
                    <tr>
                      <td>Enter Product Name:</td>
                      <td><input type="text" name="pro_name"/></td>
                    </tr>
                    <tr>
                      <td>Select Category Name:</td>
                      <td>
                        <select name="cat_name">
                        <?php include ("inc/function.php"); echo viewall_cat();?>
                      </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Select SubCategory Name:</td>
                      <td>
                      <select name="sub_cat_name">
                        <?php echo viewall_sub_cat();?>
                      </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Select Sellers Name:</td>
                      <td>
                      <select name="sell_name">
                        <?php echo viewall_sell();?>
                      </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Select Producr Image1:</td>
                      <td><input type="file" name="pro_img1"/></td>
                    </tr>
                    <tr>
                      <td>Select Producr Image2:</td>
                      <td><input type="file" name="pro_img2"/></td>
                    </tr>
                    <tr>
                      <td>Select Producr Image3:</td>
                      <td><input type="file" name="pro_img3"/></td>
                    </tr>
                    <tr>
                      <td>Select Producr Image4:</td>
                      <td><input type="file" name="pro_img4"/></td>
                    </tr>
                    <tr>
                      <td>Enter Feature1:</td>
                      <td><input type="text" name="pro_feature1"/></td>
                    </tr>
                    <tr>
                      <td>Enter Feature2:</td>
                      <td><input type="text" name="pro_feature2"/></td>
                    </tr>
                    <tr>
                      <td>Enter Feature3:</td>
                      <td><input type="text" name="pro_feature3"/></td>
                    </tr>
                    <tr>
                      <td>Enter Feature4:</td>
                      <td><input type="text" name="pro_feature4"/></td>
                    </tr>
                    <tr>
                      <td>Enter Feature5:</td>
                      <td><input type="text" name="pro_feature5"/></td>
                    </tr>
                    <tr>
                      <td>Enter Price:</td>
                      <td><input type="text" name="pro_price"/></td>
                    </tr>
                    <tr>
                      <td>Enter Model No:</td>
                      <td><input type="text" name="pro_model"/></td>
                    </tr>
                    <tr>
                      <td>Enter warranty:</td>
                      <td><input type="text" name="pro_warranty"/></td>
                    </tr>
                    <tr>
                      <td>Enter Keyword:</td>
                      <td><input type="text" name="pro_keyword"/></td>
                    </tr>



                  </table>
                  <center>
                    <button name="add_product">Add Product</button>
                  </center>
                </form>
                <?php echo add_pro();?>
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
