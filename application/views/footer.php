





<!----------Start Footer---------->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="links">
                    <ul>
                        <h2 class="links_title">Links</h2>
                        <li><a href="<?php echo base_url() ?>">home</a></li>
                        <li><a href="<?php echo base_url() ?>">About us</a></li>
                        <li><a href="<?php echo base_url() ?>">Core Programs</a></li>
                        <li><a  target="_blank" href="http://dss-bd.org/"> Down Syndrome</a></li>
                        <li><a href="<?php echo base_url() ?>">Membership</a></li>
                        <li><a href="<?php echo base_url() ?>page/photo">Gallery</a></li>
                        <li><a href="<?php echo base_url() ?>page/contact">Contact us</a></li>
                    </ul>


                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="webmail">
                    <h2 class="links_title">Webmail</h2>

                    <i style="font-size:20px; color:#fff; padding:10px 0; width:32px; float:left" class="fa fa-envelope-o" aria-hidden="true"></i>
                    <h6 class="webMail"><a href="#">Log In</a></h6>

                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="newslatter">
                    <h2 style="border-bottom:none;"class="links_title">News letter</h2>

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Please enter email address..">
                    </div><!-- /input-group -->
                    <div class="input-group subscrive">
                        <input type="text" class="form-control" placeholder="SUBSCRIBE">
								  <span class="input-group-btn">
									<button class="btn btn-default" type="button"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </button>
								  </span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p style="line-height: 33px; color: #888888"> Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2017 BD.All Rights Reserved. Design and development by wan IT</p>
    </div>
</footer>
<!----------End Footer---------->
</div>





<!-----------------------------------------------Begin:Js------------------------------------->

<script src="<?php echo base_url().'assets/site/';?>js/jquery-2.1.1.js" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/site/';?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/site/';?>js/jquery.flexisel.js" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/site/';?>js/script.js"></script><!--menu-->

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
<script type="text/javascript" src="<?php echo base_url().'assets/site/';?>js/jquery.fancybox.js?v=2.1.5"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.fancybox').fancybox();
    });

    });

</script>


<!---->

<!---slider---->
<script src="<?php echo base_url().'assets/site/';?>js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var jssor_1_SlideoTransitions = [
            [{b:0,d:600,y:-290,e:{y:27}}],
            [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:87.50,t:-87.50}},{b:11000,d:500,c:{x:-87.50,t:87.50}}],
            [{b:0,d:600,x:410,e:{x:27}}],
            [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
            [{b:-1,d:1,c:{x:175.0,t:-175.0}},{b:0,d:800,c:{x:-175.0,t:175.0},e:{c:{x:7,t:7}}}],
            [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
            [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
            [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
            [{b:2000,d:600,rY:30}],
            [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
            [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
        ];

        var jssor_1_options = {
            $AutoPlay: true,
            $Idle: 2000,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                    [{d:2000,b:1000}]
                ]
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 1600);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        /*responsive code end*/
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
