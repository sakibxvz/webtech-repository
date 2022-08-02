<h2>Update product Form</h2>
<form action="<?php echo BASEURL;?>/profile/updateproduct" method="POST">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="product Name..." value="<?php echo $data['data']->name; ?>">
<div class="error">
    <?php if($data['nameError']): echo $data['nameError']; endif;?>
</div>
</div>
<div class="form-group">

    <input type="number" name="buyingPrice" class="form-control" placeholder="product buyingPrice..." value="<?php echo $data['data']->buyingPrice; ?>">
    <div class="error">
        <?php if($data['buyingPriceError']): echo $data['buyingPriceError']; endif;?>
    </div>

    <input type="number" name="sellingPrice" class="form-control" placeholder="product sellingPrice..." value="<?php echo $data['data']->sellingPrice; ?>">
    <div class="error">
        <?php if($data['sellingPriceError']): echo $data['sellingPriceError']; endif;?>
    </div>

    <input type="hidden" name="hiddenId" value="<?php echo $data['data']->id; ?>">
    </div>

    <div class="form-group">
    <select name="displayable" class="form-control" value="<?php echo $data['data']->displayable; ?>">
        <option value="">Select displayable</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <div class="error">
        <?php if($data['displayableError']): echo $data['displayableError']; endif;?>
    </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Update product" class="btn btn-primary">
    </div>
</form>