

<div class="inner_banner">
    <img src="<?php echo base_url().'assets/site/' ?>images/banner/banner_1.jpg" alt="" style="width: 100%"/>
</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about_page">
                    <h3 class="inner_headCon"> <?php     $cat  = $this->aboutus_model->get_by_id($id) ?>
                                       <?php echo $cat->title; ?></h3>
                    <h1 style="margin-top: 30px" class="wel_title"><?php echo $aboutus->title; ?></h1>  
                    <div class="row">
                    	<div class="col-md-3">
                    	<a   href="">
                            <img class="img-responsive" src="<?php echo base_url().'assets/filemanager/aboutus/'. $aboutus->file_name; ?>">
                           
                        </a>
                    </div>
                    	<div class="col-md-8">  
                        	<?php echo $aboutus->description; ?>
                        </p>
                    </div>
                    </div>
					
                   
                </div>
            </div>
        </div>
    </div>


