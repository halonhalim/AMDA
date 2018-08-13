
 <div class="inner_banner">
    <img src="<?php echo base_url().'assets/site/' ?>images/banner/banner_1.jpg" alt="" style="width: 100%"/>
</div>

<div class="area_mission-vission">
    <div class="container"><!--Begin: Latest news-->
       
        <div class="row" style="margin: 0px 100px;">
            <h1> News </h1>
             <?php foreach ($news as $key => $row) { ?>  
                <div class="col-lg-6 col-md-6 col-sm-12 news-section">
                    
                    
                    <div class="new_box">
                        <div class="news-left">
                            <div class="news_date">
                                <h5><?php echo $row->published_date; ?> </h5>
                            </div>
                            <div class="news_pic">
                                <img src="<?php echo base_url().'assets/filemanager/news/'. $row->file_name; ?>">
                            </div>
                        </div>
                        <div class="news_descrive">
                            <p class="well_p_2"><?php echo read_more($row->description, 50); ?><span style="padding-left:5px;" class="read_more"> <a href="<?php echo base_url().'page/news_details/'.$row->id; ?>">read more</a></span></p>
                        </div>
                    </div>

                   
                </div>
                 <?php } ?>
        </div><!--End: Latest news-->
    </div>  
</div>
