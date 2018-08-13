
 <!----------------Begin: Slider--------------------->
 <div class="inner_banner">
    <img src="<?php echo base_url().'assets/site/' ?>images/banner/banner_1.jpg" alt="" style="width: 100%"/>
</div>



    <div class="nation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<h1 style="color:#393939;">Photo Gallery</h1><br>
                    <div class="nation">
                        
						<div class="row">
                                      <?php foreach ($photo as $key => $row) { ?>
                        	<div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                                <div class="album">
                                    <a href="<?php echo base_url(). "page/photo_details/" .$row->id;?>">
                                    <img class=" img-thumbnail img-responsive" alt="" src="<?php echo base_url().'assets/filemanager/gallery/'.$row->album_cover;?>">
                                    <h3 class="album_title"><?php echo $row->album_name; ?></a> </h3>
                                </div>
                            </div>
                                      <?php } ?>


                           
                           
                           

                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal --