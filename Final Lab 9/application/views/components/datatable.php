<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Per Item Price</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Order Status</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($data[0])): ?>

            <?php foreach($data[0] as $order): ?>

            <tr>
                <td>#<?php echo $order->order_id ?></td>
                <td><?php echo ucwords($order->customer_frist_name)." ".ucwords($order->customer_last_name); ?></td>
                <td><?php echo $order->address ?></td>
                <td><?php echo $order->order_item ?></td>
                <td><?php echo $order->order_quantity ?></td>
                <td>$<?php echo $order->order_price ?></td>
                <td>$<?php echo $order->order_price * $order->order_quantity ?></td>
                <td><?php echo $order->order_date ?></td>
                <td><?php switch ($order->delivery_status) {
                    case '1':
                        echo '<button class="btn btn-primary" disabled="disabled"> Order Placed</button>';
                        break;
                    case '2':
                        echo '<button class="btn btn-danger" disabled="disabled"> Order Canceled</button>';
                        break;
                    case '3':
                        echo '<button class="btn btn btn-dark" disabled="disabled"> Order Shipped</button>';
                        break;
                    case '4':
                        echo '<button class="btn btn-success" disabled="disabled"> Delivery Done</button>';
                        break;
                } ?></td>
                <td><a href="<?php echo BASEURL; ?>/profile/vieworder/<?php echo $order->order_id; ?>" class="btn btn btn-info">View</a></td>
                <td><a href="<?php echo BASEURL; ?>/profile/edit_order/<?php echo $order->order_id; ?>" class="btn btn-warning">Edit</a></td>
                <td><a href="<?php echo BASEURL; ?>/profile/delete/<?php echo $order->order_id; ?>" class="btn btn-danger">Delete</a></td>
            </tr>

<?php endforeach;?>

<?php endif; ?> 
    </tbody>
           
</table>