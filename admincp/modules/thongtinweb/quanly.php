<p>
  Huỳnh Giang Hữu Tuấn 
  Email: tuan12678999@gmai.com
  sdt: 0702085106
</p>
<?php
    $sql_lh= "SELECT * FROM tbl_lienhe WHERE id=1";
    $query_lh= mysqli_query($mysqli,$sql_lh);
?>
<table width="100%" style="border-collapse: collapse;",border="1">
   <?php
      while($dong = mysqli_fetch_array($query_lh)) {
      ?>
  <form method="POST" action="modules/thongtinweb/xuly.php?id=<?php echo $dong['id']?>"  enctype="multipart/form-data">

      <tr>
        <td>Thông Tin Liên Hệ</td>
        <td><textarea rows="10" name="thongtinlienhe" style="resize: none"><?php echo $dong['thongtinlienhe'] ?></textarea></td>
    </tr>

    <tr>
      <td colspan="2"><input type="submit" name="submitlienhe" value="Cập Nhật"></td>
    </tr>
  <?php
    }
  ?>
</form>
</table>
