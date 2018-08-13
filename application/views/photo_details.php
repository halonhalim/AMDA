
    <!----------------Begin: Slider--------------------->


<div class="inner_banner">
    <img src="<?php echo base_url().'assets/site/' ?>images/banner/banner_1.jpg" alt="" style="width: 100%"/>
</div>



    <div class="nation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 style="color:#393939;">Photo</h1><br>
                    <div class="nation">

                        <div class="row">
                             <?php foreach ($photo as $key => $row) { ?>
                            <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                                <a title="title_1" href="">
                                    <img class="thumbnail img-responsive" alt="" src="<?php echo base_url().'assets/filemanager/gallery/'.$row->file_name;?>"> 
                                </a>
                                <h3><?php echo $row->title; ?></h3>
                            </div>
                           
                            
                             <?php } ?>
                            

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- myModal Start for image gallery-->
    <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Image Title</h3>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->




