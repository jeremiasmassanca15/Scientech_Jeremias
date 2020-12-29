<?php
if (isset($_GET['edit_pro'])) {
  $pro_id=$_GET['edit_pro'];

  $fetch_pro=$con->prepare("select * from products where pro_id='$pro_id'");
  $fetch_pro->setFetchMode (PDO:: FETCH_ASSOC);
  $fetch_pro->execute();
  $row=$fetch_pro->fetch();
  
  $cat_id=$row['cat_id'];
  $sub_cat_id=$row['sub_cat_id'];

  $fetch_cat=$con->prepare("select * from categories where cat_id='$cat_id'");
  $fetch_cat->setFetchMode (PDO:: FETCH_ASSOC);
  $fetch_cat->execute();
  $row_cat=$fetch_cat->fetch();
  $cat_name=$row_cat['cat_name'];

  $fetch_sub_cat=$con->prepare("select * from sub_cat where sub_cat_id='$sub_cat_id'");
  $fetch_sub_cat->setFetchMode (PDO:: FETCH_ASSOC);
  $fetch_sub_cat->execute();
  $row_sub_cat=$fetch_sub_cat->fetch();
  $sub_cat_name=$row_sub_cat['sub_cat_name'];

  echo "<form method='post' enctype='multipart/form-data'>
    <table>
    <tr>
      <td>Update Product Name:</td>
      <td><input type='text' name='pro_name' value='".$row['pro_name']."'/></td>
    </tr>
    <tr>
      <td>Update Category Name:</td>
      <td>
        <select name='cat_name'>
        <option value='".$row['cat_id']."'>".$cat_name."</option>
        "; echo viewall_cat(); echo"
      </select>
      </td>
    </tr>
    <tr>
      <td>Update SubCategory Name:</td>
      <td>
      <select name='sub_cat_name'>
      <option value='".$row['sub_cat_id']."'>".$sub_cat_name."</option>
        "; echo viewall_sub_cat(); echo"
        </select>
      </td>
    </tr>
    <tr>
      <td>Update Produce Image1:</td>
      <td>
      <input type='file' name='pro_img1'/>
      <img src='../imgs/pro_img/".$row['pro_img1']."' style='width:60px; height:60px'/>
      </td>
    </tr>
    <tr>
      <td>Select Producr Image2:</td>
      <td>
      <input type='file' name='pro_img2'/>
      <img src='../imgs/pro_img/".$row['pro_img2']."' style='width:60px; height:60px'/>
      </td>
    </tr>
    <tr>
      <td>Select Producr Image3:</td>
      <td>
      <input type='file' name='pro_img3'/>
      <img src='../imgs/pro_img/".$row['pro_img3']."' style='width:60px; height:60px'/>
      </td>
    </tr>
    <tr>
      <td>Select Producr Image4:</td>
      <td>
      <input type='file' name='pro_img4'/>
      <img src='../imgs/pro_img/".$row['pro_img4']."' style='width:60px; height:60px'/>
      </td>
    </tr>
    <tr>
      <td>Enter Feature1:</td>
      <td><input type='text' name='pro_Feature1' value='".$row['pro_feature1']."'/></td>
    </tr>
    <tr>
      <td>Enter Feature2:</td>
      <td><input type='text' name='pro_Feature2' value='".$row['pro_feature2']."'/></td>
    </tr>
    <tr>
      <td>Enter Feature3:</td>
      <td><input type='text' name='pro_Feature3' value='".$row['pro_feature3']."'/></td>
    </tr>
    <tr>
      <td>Enter Feature4:</td>
      <td><input type='text' name='pro_Feature4' value='".$row['pro_feature4']."'/></td>
    </tr>
    <tr>
      <td>Enter Feature5:</td>
      <td><input type='text' name='pro_Feature5' value='".$row['pro_feature5']."'/></td>
    </tr>
    <tr>
      <td>Enter Price:</td>
      <td><input type='text' name='pro_price' value='".$row['pro_price']."'/></td>
    </tr>
    <tr>
      <td>Enter Model No:</td>
      <td><input type='text' name='pro_model' value='".$row['pro_model']."'/></td>
    </tr>
    <tr>
      <td>Enter warranty:</td>
      <td><input type='text' name='pro_warranty' value='".$row['pro_warranty']."'/></td>
    </tr>
    <tr>
      <td>Enter Keyword:</td>
      <td><input type='text' name='pro_keyword' value='".$row['pro_keyword']."'/></td>
    </tr>
  </table>
  <center>
    <button name='update_product'>Update Product</button>
  </center>
</form>";

if (isset($_POST['$update_product'])) {
  $pro_name=$_POST['pro_name'];
  $cat_id=$_POST['cat_name'];
  $sub_cat_id=$_POST['sub_cat_name'];

  $pro_img1=$_FILES['pro_img1']['name'];
  $pro_img1_tmp=$_FILES['pro_img1']['tmp_name'];

  $pro_img2=$_FILES['pro_img2']['name'];
  $pro_img2_tmp=$_FILES['pro_img2']['tmp_name'];

  $pro_img3=$_FILES['pro_img3']['name'];
  $pro_img3_tmp=$_FILES['pro_img3']['tmp_name'];

  $pro_img4=$_FILES['pro_img4']['name'];
  $pro_img4_tmp=$_FILES['pro_img4']['tmp_name'];

  move_uploaded_file ($pro_img1_tmp,"../imgs/pro_img/$pro_img1");
  move_uploaded_file ($pro_img2_tmp,"../imgs/pro_img/$pro_img2");
  move_uploaded_file ($pro_img3_tmp,"../imgs/pro_img/$pro_img3");
  move_uploaded_file ($pro_img4_tmp,"../imgs/pro_img/$pro_img4");

  $pro_feature1=$_POST['pro_feature1'];
  $pro_feature2=$_POST['pro_feature2'];
  $pro_feature3=$_POST['pro_feature3'];
  $pro_feature4=$_POST['pro_feature4'];
  $pro_feature5=$_POST['pro_feature5'];

  $pro_price=$_POST['pro_price'];
  $pro_model=$_POST['pro_model'];
  $pro_warranty=$_POST['pro_warranty'];
  $pro_keyword=$_POST['pro_keyword'];

  $up_pro=$con->prepare("update products set pro_name='$pro_name',  pro_price='$pro_price'");

  if ($up_pro->execute() ) {
      echo"<script>alert('Product Updated Successfully !!!')</script>";
      echo"<script>window.open('index.php?viewall_products','_self')</script>";
  }
}
}
