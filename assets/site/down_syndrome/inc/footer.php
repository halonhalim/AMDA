
    <div class="links_wrapper"><!--Begin:Quick links-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="quik_link">
                        <h2>Quick links</h2>
                        <ul>
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="what-is-down-syndrome.php"> About us</a> </li>
                            <li><a href="photo.php">Gallery</a> </li>
                            <li><a href="#">News and Event</a> </li>
                            <li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="quik_link2">
                        <h2>Connect</h2>
                        <div class="social_link">
                            <ul class="social ftr">
                                <li><a href="https://www.facebook.com/DownSyndromeParentsSupportGroupBangladesh/?hc_ref=SEARCH&fref=nf"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="quik_link_3">
                        <h2>News Letter</h2>
                        <div class="input-group entermail">
                            <input type="text" class="form-control" placeholder="Please enter email address." aria-describedby="basic-addon1">
                            <a href="#"> <img src="images/button.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End: Quick links--->



    <div class="footer_bg"><!--Begin: footer-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer">
                        <!--<h2 class="copyright"></h2>-->
                        <p class="woner_p">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2017 AMDA. All rights reserved. Design and Development by<span><a href="http://wanitltd.com/">  wan IT ltd.</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End: footer-->





    
<!-----------------------------------------------Begin:Js------------------------------------->

<script src="js/jquery-2.1.1.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/js.js"></script><!--gallery slider-->
<script src="js/script.js"></script><!--menu-->

<script src="js/jquery.flexisel.js" type="text/javascript"></script>

<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo3").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });

    });
</script>













    <!-- Begin: Fancy box-->
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.fancybox').fancybox();
		
		jQuery(window).scroll(function() {
    jQuery(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = jQuery(window).scrollTop();
        if (pos < winTop + 600) {
          jQuery(this).addClass("slide");
        }
    });
  });
		
		
    });
	
	
</script>

<script>
	$('.thumbnail').click(function(){
  	$('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
</script>

</body>
</html>