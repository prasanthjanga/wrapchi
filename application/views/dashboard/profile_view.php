
<?php //print_r($title); ?>
 <?php //echo "<pre>"; print_r(dashboard_menu()); ?>

<!-- Main content -->
<div class="main">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <strong><?php echo ($_SESSION['logged_in']['username'] != '')? $_SESSION['logged_in']['username'] : ''; ?>
                      </strong> Profile
                </div>
                <div class="card-block">
                    <div class="row m-b-2">
                        <div class="col-sm-2">
                            <div><strong>Full Name :</strong></div>
                            <div><strong>Address :</strong></div>
                            <div><br><br></div>
                            <div><strong>Country : </strong></div>
                            <div><strong>Pin Code : </strong></div>
                            <div><strong>Phone :</strong></div>
                            <div></div>
                        </div>
                        <!--/col-->
                        <div class="col-sm-10">
                            <div><?php echo ($_SESSION['logged_in']['username'] != '')? $_SESSION['logged_in']['username'] : ''; ?></div>
                            <div>FNO : TEST</div>
                            <div>Address-1,</div>
                            <div>Address-2,</div>
                            <div>Malaysia.</div>
                            <div>58200.</div>
                            <div>+60 123 456 7899</div>
                        </div>
                        <!--/col-->
                    </div>
                    <!--/row-->

                </div>
            </div>
        </div>
        <!-- /.conainer-fluid -->
</div>
