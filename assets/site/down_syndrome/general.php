<?php include('inc/header.php');?>
    <!----------------Begin: Slider--------------------->


    <div class="inner-banner">
        <img src="images/banner/innerbanner.jpg" width="100%">
    </div>


    <div class="nation">
        <div class="container">
            <div class="row">
                <h1> General Members</h1>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="nation_box">
                        <h3 class="title_pera">General Members</h3>
                        <p class="nation_p">
                            Under Construction..........<br>


                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 nopadding">
                    <div class="content_image">
                        <form accept-charset="UTF-8" action="/users/login" class="form-horizontal" id="new_user" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="3hJkV8PLPzEwtxLoC7DLp/y8N6alTouFrIjchhPBtWA="></div>
                            <fieldset>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label text" for="user_email">Email</label>
                                    <div class="col-lg-9">
                                        <input autofocus="autofocus" class="form-control" id="user_email" name="user[email]" type="email" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text" for="user_password">Password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control text" id="user_password" name="user[password]" type="password">
                                    </div>
                                </div>
                                <div><input class="btn btn-primary btn-sm pull-right btncustom" name="commit" type="submit" value="Sign in"></div>
                            </fieldset>
                        </form>

                        <div class="pull-left">
                            <a href="reg_form.php" class="btn btn-primary btn-default btncustom">Create New User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





<?php include('inc/footer.php');?>