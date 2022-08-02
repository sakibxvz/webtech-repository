<h2>Add product Form</h2>
<form action="<?php echo BASEURL;?>/profile/productStore" method="POST">

<div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="product Name..." value="<?php if($data['name']): echo $data['name']; endif; ?>">
    <div class="error">
        <?php if($data['nameError']): echo $data['nameError']; endif;?>
    </div>
</div>

<div class="form-group">
    <input type="number" name="buyingPrice" class="form-control" placeholder="product buying Price..." value="<?php if($data['buyingPrice']): echo $data['buyingPrice']; endif; ?>">
    <div class="error">
        <?php if($data['buyingPriceError']): echo $data['buyingPriceError']; endif;?>
    </div>
</div>

<div class="form-group">
    <input type="number" name="sellingPrice" class="form-control" placeholder="product sellingPrice..." value="<?php if($data['sellingPrice']): echo $data['sellingPrice']; endif; ?>">
    <div class="error">
        <?php if($data['sellingPriceError']): echo $data['sellingPriceError']; endif;?>
    </div>
</div>

<div class="form-group">
    <select name="displayable" class="form-control" value="<?php if($data['displayable']): echo $data['displayable']; endif; ?>">
        <option value="">Select displayable</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <div class="error">
        <?php if($data['displayableError']): echo $data['displayableError']; endif;?>
    </div>
</div>

<div class="form-group">
    <input type="submit" value="Add product" class="btn btn-primary">
</div>

</form>