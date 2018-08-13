

<div class="inner_banner">
    <img src="<?php echo base_url().'assets/site/' ?>images/banner/banner_1.jpg" alt="" style="width: 100%"/>
</div>



    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about_page">
                    <h3 class="inner_headCon"><?php     $cat  = $this->membership_model->get_by_id($id) ?>
                                       <?php echo $cat->title; ?></h3></h3>

                    <h1 style="margin-top: 30px" class="wel_title"><?php echo $membership->title; ?></h1>
                    <p style="padding: 25px 0" class="well_p">
                         <?php echo $membership->description; ?>
                    </p>



                </div>
            </div>
        </div>
    </div>


