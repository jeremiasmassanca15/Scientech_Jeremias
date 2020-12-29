
<div class="container" style="">
    <div style=" background:#fff; padding-bottom:10px; padding-top:10px">
      

    </div>

    <div class="product_box">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <ul class="product_box">
      <?php if (isset($_GET['electronics'])) {
        echo electronics();
      } ?><?php if (isset($_GET['cars'])) {
        echo cars();
      } ?>

  </ul><br clear='all' />
<?php if(!isset($_GET['cat_id'])) { ?>
      <?php } ?>
  </div>





</div>

</body>
