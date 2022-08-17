<?php 
 $cardResult =array (
    'orders'=> count($data[1]),
    'canceled_orders'=> (function ($data)
    {   
        $res=0;
        foreach ($data as $order) {
            if ($order->delivery_status ==2) {
                $res++;
            }
        }
        return $res;
    })($data[1]),
    'on_shipped_orders'=> (function ($data)
    {   
        $res=0;
        foreach ($data as $order) {
            if ($order->delivery_status ==3) {
                $res++;
            }
        }
        return $res;
    })($data[1]),
    'completed_orders'=> (function ($data)
    {   
        $res=0;
        foreach ($data as $order) {
            if ($order->delivery_status ==4) {
                $res++;
            }
        }
        return $res;
    })($data[1]),
    'total_order_ammount'=> (function ($data)
    {   
        $res=0;
        foreach ($data as $order) {
            if ($order) {
                $res+= $order->order_price * $order->order_quantity;
            }
        }
        return $res;
    })($data[1]),
    'customers'=>  (function ($data)
    {   
        $res=0;
        foreach ($data as $order) {
            if ($order->order_id) {
                $res++;
            }
        }
        return $res;
    })($data[1]),
 );
?>

<div class="col-md-10 ">
    <div class="row ">
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fa fa-shopping-cart"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Orders</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <?php echo $cardResult['orders'] ?>
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="width:  <?php echo ($cardResult['canceled_orders'] /  $cardResult['orders'])*100 ?>%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-red-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fa fa-times"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Cancelled Orders</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <?php echo $cardResult['canceled_orders'] ?>
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($cardResult['canceled_orders'] /  $cardResult['orders'])*100 ?>%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fa fa-truck" aria-hidden="true"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">On Shipped Orders</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <?php echo $cardResult[on_shipped_orders] ?>
                            </h2>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($cardResult['on_shipped_orders']/($cardResult['orders'] -  $cardResult['canceled_orders']))*100  ?>%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fa fa-check"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Completed Orders</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <?php echo $cardResult['completed_orders']; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ( $cardResult['completed_orders'] /($cardResult['orders'] - $cardResult['canceled_orders']))*100 ?>%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fa fa-usd"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Total Order Ammount</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $<?php echo $cardResult['total_order_ammount'] ?>
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fa fa-list-ul"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Customers</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <?php echo $cardResult['customers']; ?>
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>