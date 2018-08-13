
<!----------Start Banner---------->
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1600px; height: 500px; 

     overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; 

             width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center 

             center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1600px; height: 

         500px; overflow: hidden;">
         <?php foreach ($banners as $key => $row) { ?>
            <div data-p="112.50">
                <img data-u="image" src="<?php echo base_url() . 'assets/filemanager/banners/' . $row->file_name; ?>" />
            </div>
        <?php } ?>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb01" style="bottom:18px;right:18px; left:50%;">
        <div data-u="prototype" style="width:18px; height:18px; border-radius:50%; border:3px solid #fff; background:none;"></div>
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px; " data-

          autocenter="2"></span>
    <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-

          autocenter="2"></span>
</div>
<!----------End Banner---------->
<!----------Start Content---------->
<div class="main">
    <div class="container">
        <div class="row">
            <div class="welcome-area">
                <?php foreach ($article as $key => $row) { ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h1 class="wel_title"><?php echo $row->title; ?></h1>
                        <p class="well_p">
                            <?php echo read_more($row->details, 130); ?>
                        </p>
                        <h5><a href="<?php echo base_url() . 'page/about/' . $row->id; ?>"> Read More...</a></h5>
                    </div>
                <?php } ?> 
                <h3 class="latest_title">Latest News</h3>
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
            </div>
             </div><!--End: Latest news-->
    <h3 class="text-right"> <a href="<?php echo base_url().'page/all_news';?>" class="btn btn-success"> View All News </a> </h3>
</div>  
        </div>
    </div>
</div> 
<!----------Start Item Event---------->
<section class="features-sec">
    <div class="container">
        <div class="row">
            <div class="item_event">
                <div class="col-lg-3 col-sm-6">
                     <a href="<?php echo base_url(); ?>page/photo">
                    <img src="<?php echo base_url() . 'assets/site/'; ?>images/event/event_1.jpg" alt="...">
                    <h4><a href="#">Events</h4></a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo base_url(); ?>page/video">
                    <img src="<?php echo base_url() . 'assets/site/'; ?>images/event/event_2.jpg" alt="...">
                    <h4>Video Gallery</h4></a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <img src="<?php echo base_url() . 'assets/site/'; ?>images/event/event_3.jpg" alt="...">
                    <h4><a href="#">Health Care </a> </h4>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <img src="<?php echo base_url() . 'assets/site/'; ?>images/event/event_4.jpg" alt="...">
                    <h4><a href="#">Inclusive Education</a></h4>
                </div>
            </div>
        </div>  
    </div>
</section>
<!----------End Content---------->
<!----------Start Client---------->
<div class="client">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="client_title">Our Partners</h3>
                <ul id="flexiselDemo3">
                    <?php foreach ($slider as $key => $row) { ?>
                        <li>
                            <div class="gallery_box">
                                <!--<h4>Mondal Group</h4>-->
                                <a href="<?php echo $row->web_link;?>" target="_blank">
                                <img src="<?php echo base_url() . 'assets/filemanager/slider/' . $row->file_name; ?>"target="_blank">
                                </a>
                            </div>
                        </li>
                    <?php } ?>            
                </ul>
            </div>
        </div>
    </div>
</div>


<!----------End Client---------->

