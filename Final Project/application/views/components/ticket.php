<div class="col-md-6">
    <h5 class="text-center">Ongoing Tickets</h5>
    <div class="table-responsive">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">#Order ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Issue</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data[0])): ?>
                <?php foreach($data[0] as $tickets): ?>
                <tr>
                    <th scope="row"><?php echo $tickets->id; ?></th>
                    <td>#<?php echo $tickets->order_id; ?></td>
                    <td><?php echo ucwords($tickets->customer_name); ?></td>
                    <td><?php echo ucwords($tickets->issue); ?></td>
                    <td><?php if ($tickets->status) {
                        echo "Fixed";
                    }else{
                        echo "Not Fixed";
                    }
                     ?></td>
                </tr>
                <?php endforeach;?>
                <?php endif; ?> 
            </tbody>
        </table>
    </div>
</div>