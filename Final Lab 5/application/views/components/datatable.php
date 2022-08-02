<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Buying Price</th>
                <th>Selling Price</th>
                <th>Display</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
      <?php if(!empty($data)): ?>

      <?php foreach($data as $product): ?>

      <tr>
          <td><?php echo ucwords($product->name); ?></td>
          <td><?php echo $product->buyingPrice . "$"; ?></td>
          <td><?php echo $product->sellingPrice . "$"; ?></td>
          <td><?php echo $product->displayable; ?></td>
          <td><a href="<?php echo BASEURL; ?>/profile/edit_product/<?php echo $product->id; ?>" class="btn btn-warning">Edit</a></td>
          <td><a href="<?php echo BASEURL; ?>/profile/delete/<?php echo $product->id; ?>" class="btn btn-danger">Delete</a></td>
      </tr>

<?php endforeach;?>

<?php endif; ?> 
</tbody>
           
    </table>