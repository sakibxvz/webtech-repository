<?php include_once  'dbh.inc.php'; ?>
                            <!-- sessions-section start -->
								<div class="col-xl-8 col-md-6">
									<div class="card table-card">
										<div class="card-header">
											<h5>All orders</h5>
										</div>
										<div class="card-body px-0 py-0">
											<div class="table-responsive">
												<div class="session-scroll" style="height:478px;position:relative;">
													<table class="table table-hover m-b-0">
														<thead>
															<tr>
																<th><span>Order ID</span></th>
																<th><span>Date</span></th>
																<th><span>Customer</span></th>
																<th><span>Amount</span></th>
																<th><span>Delivery Status</span></th>
																<th><span>Location</span></th>
																<th><span>View Order</span></th>
																
															</tr>
														</thead>
														<tbody>
                                                            <?php 
                                                            //Check Connection 
                                                                if ($conn -> connect_error) {
                                                                    die("Connecton failed ". $conn->connect_error);
                                                                }

                                                                $sql = "SELECT * FROM orders";
                                                                $result = $conn->query($sql);

                                                                if (!$result) {
                                                                    die("Invalid Query ".  $conn->connect_error);
                                                                }

                                                                while ($row = $result->fetch_assoc()) {
                                                                   echo '	
                                                            <tr>
																<td>'. $row["ID"] .'</td>
																<td>'. $row["OrderDate"] .'</td>
																<td>'. $row["CustomerName"] .'</td>
																<td>$'. $row["ItemPrice"] * $row["Quantity"] .'</td>
																<td>
																	<div class="dropdown">
																	<button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
																		data-toggle="dropdown" aria-expanded="false">
																		'. $row["DeliveryStatus"] .'
																	</button>
																	<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																		<li><a class="dropdown-item" href="#">Delivered</a></li>
																		<li><a class="dropdown-item" href="#">Shipped</a></li>
																		<li><a class="dropdown-item" href="#">Canceled</a></li>
																	</ul>
																	</div>
																</td>
																<td>'. $row["DeliveryPlace"] .'</td>
																<td>
																	<!-- Button trigger modal -->
																	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
																		View
																	</button>

																	<!-- Modal -->
																	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
																		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
																		<div class="modal-dialog modal-dialog-centered" role="document">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																						<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				<div id="modal-body">
																					<!-- Modal body start  -->
																					<div class="body">
																						<div class="container-fluid my-5 d-sm-flex justify-content-center">
																							<div class="card px-2">
																								<div class="card-header bg-white">
																									<div class="row justify-content-between">
																										<div class="col">
																											<p class="text-muted"> Order ID <span
																													class="font-weight-bold text-dark">#'. $row["ID"] .'</span></p>
																											<p class="text-muted"> Place On <span
																													class="font-weight-bold text-dark">'. $row["OrderDate"] .'</span> </p>
																										</div>
																									</div>
																								</div>
																								<div class="card-body">
																									<div class="media flex-column flex-sm-row">
																										<div class="media-body ">
																											<h5 class="bold">'. $row["ItemName"] .'</h5>
																											<p class="text-muted"> Qt: '. $row["Quantity"] .' Pair</p>
																											<h4 class="mt-3 mb-4 bold"> <span class="mt-5">$</span>'. $row["ItemPrice"] .' <span
																													class="small text-muted"> via (COD) </span></h4>
																											<p class="text-muted">Tracking Status on: <span class="Today">11:30pm,
																													Today</span></p>
																											<button type="button" class="btn  btn-outline-primary d-flex disabled"><h4> Total Price: $'. $row["ItemPrice"] * $row["Quantity"] .'  </h4></button>
																										</div><img class="align-self-center img-fluid"
																											src="https://5.imimg.com/data5/KC/PC/MY-38629861/dummy-chronograph-watch-500x500.jpg"
																											width="180 " height="180">
																									</div>
																								</div>
																								<div class="row px-3">
																									<div class="col">
																										<ul id="progressbar">
																											<li class="step0 active " id="step1">PLACED</li>
																											<li class="step0 active text-center" id="step2">SHIPPED</li>
																											<li class="step0  text-muted text-right" id="step3">DELIVERED</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<!-- Modal body end  -->
																				</div>
																				<div class="modal-footer">
																					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>';
                                                                }

                                                               
                                                            ?>
														

														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- sessions-section end -->