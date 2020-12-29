<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 ">
                <h3 class="page-title">All orders</h3></div>
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
                <div class="white-box" style="overflow-x:scroll">
                  <form method="post" enctype="multipart/form-data">
                    <table>
                    <tr>
                      <th>Sr No:</th>
                      <th>Customer Name</th>
                      <th>City</th>
                      <th>Address</th>
                      <th>Mobile Number</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Feature 1:</th>
                      <th>Feature 2</th>
                      <th>Feature 3</th>
                      <th>Feature 4</th>
                      <th>Feature 5</th>
                      <th>Model No</th>
                      <th>warranty</th>
                      <th>Keyword</th>
                      <th>Category</th>
                      <th>SubCategory</th>
                      <th>Data Added</th>
                    </tr>
                  <?php include ("inc/function.php"); echo viewall_orders();?>
                  </table>
                </form>
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
