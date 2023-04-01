<h3>Inventory</h3>
<main class="table">
<div id="subcontent">
  <table id="data-list">
 
    <th>Product</th>
    <th>Received</th>
    <th>Released</th>
    <th>In stock</th>
    <th>Retail Price</th>
    <th>Sale Value</th>
    <th>Stock Value</th>

    <?php
    $count = 1;
    if ($inventory->list_instock() != false) {
      foreach ($inventory->list_instock() as $value) {
        extract($value);
    ?>
        <tr>
          <td><a href="index.php?page=products&action=profile&id=<?php echo $prod_id; ?>"><?php echo $prod_name; ?></a></td>
          <td><?php echo $inventory->get_product_receive_inv($prod_id); ?></td>
          <td><?php echo $inventory->get_product_release_inv($prod_id); ?></td>
          <td><?php echo $inventory->get_product_receive_inv($prod_id) - $inventory->get_product_release_inv($prod_id); ?></td>
          <td><?php echo $product->get_prod_price($prod_id); ?></td>
          <td><?php echo number_format($product->get_prod_price($prod_id) * $inventory->get_product_release_inv($prod_id), 2); ?></td>
          <td><?php echo number_format($product->get_prod_price($prod_id) * ($inventory->get_product_receive_inv($prod_id) - $inventory->get_product_release_inv($prod_id)), 2); ?></td>
        </tr>
    <?php
        $count++;
      }
    } else {
      echo "No Record Found.";
    }
    ?>
  </table>
  </main>
</div>