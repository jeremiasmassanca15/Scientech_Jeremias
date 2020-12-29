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
                  <h3>view all sellers</h2>
                  <form method="post">
                    <table>
                    <tr>
                      <th>sr no</th>
                      <th>sr no</th>
                      <th>sr no</th>
                      <th>sr no</th>
                    </tr>


                      <?php include ("inc/function.php"); echo viewall_seller();?>
                  </table>
                </form>
                <h3>Add New Seller From Here</h3>
                <form method="post">
                  <table>
                  <tr>
                    <td>Enter Seller Name:</td>
                    <td>
                      <input type="text" name="sell_name"/>
                    </td>
                  </tr>
                </table>
                <center><button name="add_sell">Add Seller</button></center>
                </form>
                <?php echo add_sell();?>
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
