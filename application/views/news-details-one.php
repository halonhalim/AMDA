
<!----------------Begin: Slider--------------------->

<div class="inner_banner">
    <img src="<?php echo base_url().'assets/site/' ?>images/banner/banner_1.jpg" alt="" style="width: 100%"/>
</div>


<div class="area_mission-vission">
    <div class="container">
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="nation_box">
                        
                        <h3><?php echo date('d-m-Y', strtotime($news_details->published_date)); ?></h3>  

                        <div class="contn-area">
                             <img src="<?php echo base_url().'assets/filemanager/news/'. $news_details->file_name; ?>">
                            <?php echo $news_details->description; ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>


