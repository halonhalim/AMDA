
 <!----------------Begin: Slider--------------------->

    <!--https://www.youtube.com/watch?v=szmqiN-CH7Q-->
    
    <div class="inner_banner">
    <img src="<?php echo base_url().'assets/site/' ?>images/banner/banner_1.jpg" alt="" style="width: 100%"/>
</div>




    <div class="nation">
        <div class="container">
            <div class="row">
                <h1>Video Gallery</h1><br>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php foreach ($video as $key => $row) { ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <article class="video">
                            <iframe width="350" height="200" src="https://www.youtube.com/embed/<?php echo $row->file_name; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
                            <h5 style="padding:3px;" class="video_content"> <?php echo $row->title; ?></h5>
                        </article>
                    </div>
                     <?php } ?>
                   

                     
                    


                </div>
            </div>
        </div>
    </div>
    



