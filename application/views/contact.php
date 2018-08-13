

<div class="inner_banner">
    <img src="<?php echo base_url().'assets/site/'; ?>images/banner/banner_1.jpg" alt="" style="width: 100%"/>
</div>



    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about_page">
                    <h3 class="inner_headCon">Contact Us</h3>

                    <h1 style="margin-top: 30px" class="wel_title"></h1>
                      
                     <div class="col-md-3" style="color:#264C5E; font-family:monda">
                     	
                                <div class="conatact_box"><!-- Begin : conatact_box -->
                                    <h3><i class="fa fa-home"></i>Contact address</h3><br>
                                    
                                    <h4 style="color:#67A3EB;">Head Office</h4><hr>
                                    <p><?php echo $contact->headoffice; ?></p>
                                    <br>
                                    
                                </div><!-- End : conatact_box -->
                                 <div class="conatact_box"><!-- Begin : conatact_box -->
                                    
                                    
                                    <h4 style="color:#67A3EB;">AMDA Headquarters</h4><hr>
                                    <p><?php echo $contact->amdaoffice;; ?></p>
                                    <br>
                                    
                                </div><!-- End : conatact_box --> 
                           
                     </div> 
                    
                    <div class="col-md-3" style="color:#264C5E; font-family:monda">
                     </div> 
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color:#000">
                <div class="conatact_box" style="padding-right:1px;"><!-- Begin : conatact_box -->
                    <h3 class="CB_line"><i class="fa fa-comment-o" aria-hidden="true"></i> Get a free quote!</h3>
                    <h3><?php echo $this->session->userdata('msg');?></h3>    
                    <form class="form-horizontal" style="margin-top:15px;" method="post" action="<?php echo base_url().'page/contactadd' ?>" >
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input class="form-control" name="name"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input class="form-control" name="email" id="inputEmail3" placeholder="Enter E-mail" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input class="form-control" name="phone" id="inputPassword3" placeholder="Enter Phone" type="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea rows="3" cols="3" type="text" name="comments" class="form-control" id="inputPassword3" placeholder="Enter Comments" style="height:76px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit<i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
                    

                </div>
            </div>
        </div>
        
        <!--<div class="row">
        	<div class="col-md-12">
            	<h3 style="color:#264C5E; font-family:monda"><i class="fa fa-location-arrow"></i>Find us on map</h3>
            	
            </div>
        </div>-->
        
    </div>


