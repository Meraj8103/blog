<!-- header -->
<?php  include "includes/header.php";
include "includes/config.php";
?>
<!-- header end -->
<div class="content-wrapper">
    <div class="main-content-body">
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0 mt-2">Order Details</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-md-nowrap">
                                <thead>
                                    <tr>
                                        
                                        <th>ORDER ID</th>
                                        
                                        <th class="wd-15p border-bottom-0">Order Date</th>
                                        <th class="wd-20p border-bottom-0">Payment Type</th>
                                        <th class="wd-15p border-bottom-0">Mobile No.</th>
                                        <th class="wd-10p border-bottom-0">Total Price</th>
                                        <th class="wd-10p border-bottom-0">Delivery Charge</th>
                                        <th class="wd-10p border-bottom-0">Subtotal</th>
                                        <th class="wd-10p border-bottom-0">Status</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $id=$_GET['id'];
                    $sql="SELECT * FROM orders INNER JOIN order_items ON order_items.order_id=orders.order_id WHERE order_items.id='{$id}'" or die("sql faild.");
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();

                                     ?>
                                    <tr>
                                        
                                        <td><?php echo $row['order_id']; ?></td>
                                        <td><?php echo $row['order_date']; ?></td>
                                        <td><?php echo $row['payment_type']; ?></td>
                                        <td><?php echo $row['user_number']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td><?php echo $row['shipping_charges']; ?></td>
                                        <td><?php echo $row['price']+$row['shipping_charges']; ?></td>
                                        <td style="color:red;"><?php echo $row['status']; ?></td>
                                        
                                        
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
        
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0 mt-2">Shipping Address</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-md-nowrap">
                                <thead>
                                    
                                    <tr>
                                        
                                        <th>PIN</th>
                                        
                                        <th class="wd-15p border-bottom-0">Address1</th>
                                        <th class="wd-20p border-bottom-0">Address2</th>
                                        <th class="wd-15p border-bottom-0">Address3</th>
                                        <th class="wd-10p border-bottom-0">City</th>
                                        <th class="wd-10p border-bottom-0">State</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $ship_id=$row['shipping_address'];
                                    $sql1="SELECT * FROM shipping_address WHERE ship_id='{$ship_id}'" or die("sql faild.");
                                    $result1=$conn->query($sql1);
                                    $row1 = $result1->fetch_assoc();
                                     ?>
                                    <tr>
                                        <td><?php echo $row1['pincode']; ?></td>
                                        <td><?php echo $row1['address1']; ?></td>
                                        <td><?php echo $row1['address2']; ?></td>
                                        <td><?php echo $row1['address3']; ?></td>
                                        <td><?php echo $row1['city']; ?></td>
                                        <td><?php echo $row1['state']; ?></td>
                                        
                                        
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0 mt-2">Cancel Reasan</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php 
                        $reasn="SELECT * FROM reasen WHERE product_id='{$row["product_id"]}' and order_id='{$row["order_id"]}'";
                        $reasn_result=$conn->query($reasn);
                        $ref=$reasn_result->fetch_assoc();
                         ?>
                        <div class="table-responsive">
                            <p><?php echo $ref['reasen']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0 mt-2"> Ordered  Items</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-md-nowrap">
                                <thead>
                                    <tr>
                                        
                                        
                                        
                                        <th class="wd-15p border-bottom-0">Product  ID</th>
                                        <th class="wd-20p border-bottom-0">Qty</th>
                                        <th class="wd-15p border-bottom-0">Price</th>
                                        
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><?php echo $row['product_id']; ?></td>
                                        <td><?php echo $row['qty']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        
                                        
                                        
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td><?php echo $row['price']; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Delivery Charge</td>
                                        <td><?php echo $row['shipping_charges']; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Subtotal</td>
                                        <td><?php echo $row['price']+$row['shipping_charges']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!---accept or cancelled---->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <a href="cancel-re.php/?n=<?php echo $row["id"]; ?>" class="btn btn-danger btn-block">Not Accept</a>
                            </div>
                            <div class="col-md-6">
                                <a href="cancel-re.php/?y=<?php echo $row["id"]; ?>" class="btn btn-primary btn-block">Accept</a>
                            </div>
                        </div>
                        <!------->
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
</div>
<!-- footer -->
<?php include "includes/footer.php"; ?>
<!-- footer end -->