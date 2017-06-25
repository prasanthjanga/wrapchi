<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php echo $title; ?>">
        <meta name="author" content="Prasanth.Janga">
        <meta name="keyword" content="#">

        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>"/>
        <!-- Main styles for this application -->
        <link href="<?php echo template_path(); ?>css/style.css" rel="stylesheet">
    </head>

    <body class="">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                    <div class="card-group ">
                        <div class="card p-a-2">
                        <form action="<?php echo base_url('index.php/dashboard/login'); ?>" method="post">
                            <div class="card-block">
                                <h1>Login</h1>
                                <p class="text-muted">Sign In to your account</p>
                                <?php if(!empty($msg)){ echo '<p class="text-red">'.$msg.'</p>'; } ?>
                                <span style="color: red;"><?php echo validation_errors(); ?></span>
                                
                                <div class="input-group m-b-1">
                                    <span class="input-group-addon"><i class="icon-user"></i>
                                    </span>
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group m-b-2">
                                    <span class="input-group-addon"><i class="icon-lock"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
<!--                                         <button type="button" class="btn btn-primary p-x-2">Login</button> -->
                                        <input type="submit" name="sub" value="Sign In" class="btn btn-primary p-x-2">
                                    </div>
                                    <div class="col-xs-6 text-xs-right">
                                        <a href="#" class="btn btn-link p-x-0">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="card card-inverse card-primary p-y-3">
                            <div class="card-block text-xs-center">
                                <div>
                                    <img alt="Logo" src="<?php echo base_url('assets/images/step_logo.png');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap and necessary plugins -->
        <script src="<?php echo template_path(); ?>js/libs/jquery.min.js"></script>
        <script src="<?php echo template_path(); ?>js/libs/tether.min.js"></script>
        <script src="<?php echo template_path(); ?>js/libs/bootstrap.min.js"></script>
        <script>
            function verticalAlignMiddle()
            {
                var bodyHeight = $(window).height();
                var formHeight = $('.vamiddle').height();
                var marginTop = (bodyHeight / 2) - (formHeight / 2);
                if (marginTop > 0)
                {
                    $('.vamiddle').css('margin-top', marginTop);
                }
            }
            $(document).ready(function()
            {
                verticalAlignMiddle();
            });
            $(window).bind('resize', verticalAlignMiddle);
        </script>
    </body>
</html>
