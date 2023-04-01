<h3>PRODUCT TYPE</h3>
<div class="btn-box1">
  <a class="btn-jsactive" onclick="document.getElementById('id01').style.display='block'">Add Product Type</a>
</div>

<table id="data-list">
  <tr>
    <th>#</th>
    <th>Product Type Code</th>
    <th>Description</th>
  </tr>
  <?php
  $count = 1;
  $count = 1;
  if ($product->list_product_type() != false) {
    foreach ($product->list_product_type() as $value) {
      extract($value);

  ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><a href="index.php?page=products&action=profile&id=<?php echo $type_id; ?>"><?php echo $type_id; ?></a></td>
        <td><?php echo $type_name; ?></td>
      </tr>
      <tr>
    <?php
      $count++;
    }
  } else {
    echo "No Record Found.";
  }
    ?>
</table>

<div id="id01" class="modal">
  <div #id="form-update" class="modal-content">
    <div class="container">

      <h2>Add Product Type</h2>

      <form method="POST" id="newForm" action="processes/process.product.php?action=newtype">
        <label for="fname">New Product Type Name</label>
        <input type="text" id="tname" class="input" name="tname" placeholder="Product Type Name">

      </form>

      <div class="clearfix">
        <button class="submitbtn" onclick="enableSubmit()">Confirm</button>
        <button class="cancelbtn" onclick="document.getElementById('id01').style.display='none'">Cancel</button>

      </div>
    </div>
  </div>
</div>
</div>
<script>
  var modal = document.getElementById('id01');

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  function enableSubmit() {
    document.getElementById("newForm").submit();
  }
</script>