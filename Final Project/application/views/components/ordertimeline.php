<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="container">
                <div class="row text-center justify-content-center mb-5">
                    <div class="col-xl-6 col-lg-8">
                        <h2 class="font-weight-bold">Order Timeline</h2>

                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="2003">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1"><?php echo $data->order_date ?></p>
                                    <p class="h6 text-muted mb-0 mb-lg-0">Order Placed</p>
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="2004">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1"><?php echo $data->order_cancled ?></p>
                                    <p class="h6 text-muted mb-0 mb-lg-0">Order Canceled</p>
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="2005">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1"><?php echo $data->delivery_shipped ?></p>
                                    <p class="h6 text-muted mb-0 mb-lg-0">Product Shipped</p>
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="2010">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1"><?php echo $data->delivery_done ?></p>
                                    <p class="h6 text-muted mb-0 mb-lg-0">Delivery Done</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>