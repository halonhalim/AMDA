
 <!----------------Begin: Slider--------------------->

    

<div class="inner_banner">
    <img src="<?php echo base_url().'assets/site/' ?>images/banner/banner_1.jpg" alt="" style="width: 100%"/>
</div>


    <div class="nation">
        <div class="container">
            <div class="row">
                  
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<h1>Video</h1><br>
                       <?php foreach ($video as $key => $row) { ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <article class="video">
                            <figure>
                                <a class="fancybox fancybox.iframe" href="<?php echo base_url(). "page/video_details/" .$row->id;?>">
                                <img class="videoThumb" src="<?php echo base_url().'assets/filemanager/gallery/'.$row->album_cover;?>">
                                <span><img src=""></span>

<!--                                    https://www.youtube.com/watch?v=szmqiN-CH7Q-->
                                </a>
                            </figure>
                            <h5 style="padding:3px;" class="video_content"><?php echo $row->album_name ; ?></h5>
                        </article>
                    </div>
                         <?php } ?>
                        
                   
                   
                   
                </div>
            </div>
        </div>
    </div>
    



