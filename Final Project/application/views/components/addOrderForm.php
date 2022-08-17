<form class="px-5" action="<?php echo BASEURL; ?>/profile/orderStore" method="POST">
<?php $lastOrder= count((array)$data)-1;
    // print_r($data[$lastOrder]);
?>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Frist Name">Customer Frist Name</label>
            <input type="text" class="form-control" id="Fristname" name="Fristname" placeholder="Frist name" value="<?php if ($data['Fristname']) : echo $data['Fristname']; endif; ?>">
            <div class="error">
                <?php if ($data['FristnameError']) : echo $data['FristnameError']; endif; ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="Last name">Customer Last Name</label>
            <input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Last Name" value="<?php if ($data['Lastname']) : echo $data['Lastname']; endif; ?>">
            <div class="error">
                <?php if ($data['LastnameError']) : echo $data['LastnameError']; endif; ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="OrderID">Order ID</label>
            <input type="text" class="form-control" id="OrderID" name="OrderID" value="<?php print_r($data[$lastOrder]->order_id+1) ?> " disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="Address">Address</label>
            <input type="text" class="form-control" id="Address" name="Address" placeholder="Input your address" value="<?php if ($data['Address']) : echo $data['Address']; endif; ?>">
            <div class="error">
                <?php if ($data['AddressError']) : echo $data['AddressError']; endif; ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="OrderItem">Order Item</label>
            <input type="text" class="form-control" id="OrderItem" name="OrderItem" value="<?php if ($data['OrderItem']) : echo $data['OrderItem']; endif; ?>">
            <div class="error">
                <?php if ($data['OrderItemError']) : echo $data['OrderItemError']; endif; ?>
            </div>
        </div>
        <div class="form-group col-md-2">
            <label for="OrderPrice">Price</label>
            <input type="number" class="form-control" id="OrderPrice" name="OrderPrice" value="<?php if ($data['OrderPrice']) : echo $data['OrderPrice']; endif; ?>">
            <div class="error">
                <?php if ($data['OrderPriceError']) : echo $data['OrderPriceError']; endif; ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="Quantity">Quantty</label>
            <input type="number" class="form-control" id="Quantity" name="Quantity" value="<?php if ($data['Quantity']) : echo $data['Quantity']; endif; ?>">
            <div class="error">
                <?php if ($data['QuantityError']) : echo $data['QuantityError']; endif; ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="OrderDate">Order Date</label>
            <input type="date" class="form-control" id="OrderDate" name="OrderDate" min='2022-01-08' max='2022-08-08' value="<?php if ($data['OrderDate']) : echo $data['OrderDate']; endif; ?>">
            <div class="error">
                <?php if ($data['OrderDateError']) : echo $data['OrderDateError']; endif; ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="DeliveryStatus">Delivery Status</label>
            <select id="DeliveryStatus" name="DeliveryStatus" class="form-control" value="<?php if ($data['DeliveryStatus']) : echo $data['DeliveryStatus']; endif; ?>">
                <option selected>Choose...</option>
                <option value="1">Order Placed</option>
                <option value="2">Order Canceled</option>
                <option value="3">Product Shipped</option>
                <option value="4">Delivery Done</option>
            </select>
            <div class="error">
                <?php if ($data['DeliveryStatusError']) : echo $data['DeliveryStatusError']; endif; ?>
            </div>
        </div>
        <div class="form-group col-md-4">
        </div>
        </div>
        <button type="Submit" class="btn btn-primary m-3">Submit</button>
        <button type="button" onclick="window.location.href='<?php echo BASEURL; ?>/profile'" class="btn btn-danger m-3">Cancle</button>
</form>