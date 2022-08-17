<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-5">
                    <div class="invoice-container">
                        <div class="invoice-header">

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <a href="index.html" class="invoice-logo">
                                        Delivery Website
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <address class="text-right">
                                        American International University Bangladesh<br>
                                        Kuratoli<br>
                                        Dhaka,Dangladesh
                                    </address>
                                </div>
                            </div>
                            <!-- Row end -->

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                    <div class="invoice-details">
                                        Customer Name: <?php echo $data->customer_frist_name." ".$data->customer_last_name ?>
                                        <address class="mt-1">
                                           Address: <?php echo $data->address ?>
                                        </address> 
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="invoice-details">
                                        <div class="invoice-num">
                                            <div>Invoice Number - <?php echo $data->order_id ?></div>
                                            <div>Order Date: <?php echo $data->order_date ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->

                        </div>

                        <div class="invoice-body">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table custom-table m-0">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Sub Total</th>
                                                    <th>Delivery Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?php echo $data->order_item ?>
                                                        <p class="m-0 text-muted">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        </p>
                                                    </td>
                                                    <td><?php echo $data->order_quantity ?></td>
                                                    <td><?php echo $data->order_price ?></td>
                                                    <td>$<?php echo $data->order_quantity * $data->order_price ?></td>
                                                    <td><?php switch ($data->delivery_status) {
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
                                                        } ?>
                                                    </td>
                                                </tr>
                                                    <td>&nbsp;</td>
                                                    <td colspan="2">
                                                        <p>
                                                            Subtotal<br>
                                                            Shipping &amp; Handling<br>
                                                            Tax<br>
                                                        </p>
                                                        <h5 class="text-success"><strong>Grand
                                                                Total</strong></h5>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            $<?php echo $data->order_quantity * $data->order_price ?><br>
                                                            $10.00<br>
                                                            $4.00<br>
                                                        </p>
                                                        <h5 class="text-success"><strong>$<?php echo number_format((float)($data->order_quantity * $data->order_price)+14, 2, '.', '');  ?></strong>
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="custom-actions-btns mb-5">
                                        <a href="<?php echo BASEURL; ?>/profile/edit_order/<?php echo $data->order_id; ?>" class="btn btn-primary">
                                            Edit
                                        </a>
                                        <a href="<?php echo BASEURL; ?>/profile/delete/<?php echo $data->order_id; ?>" class="btn btn-danger">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>