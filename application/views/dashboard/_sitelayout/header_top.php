	<header class="navbar">
		<div class="container-fluid">
			<button class="navbar-toggler mobile-toggler hidden-lg-up" type="button" style="color:#fff">&#9776;</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard/index"><strong>STEP</strong></a>
			<ul class="nav navbar-nav hidden-md-down">
				<li class="nav-item">
					<a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
				</li>
				<li class="nav-item p-x-1">
				  <a href="http://10.28.19.245:8280/XTEP/UserPage" class="text-info"><strong>STEP Home</strong></a>
				</li>
	

			</ul>
			<ul class="nav navbar-nav pull-right hidden-md-down">
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo template_path(); ?>img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
						<span class="hidden-md-down"><?php echo ($_SESSION['logged_in']['username'] != '')? $_SESSION['logged_in']['username'] : ''; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-header text-xs-center">
							<strong>Settings</strong>
						</div>
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/dashboard/profile">
							<i class="fa fa-user"></i> Profile
						</a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/dashboard/logout">
							<i class="fa fa-lock"></i> Logout
						</a>
					</div>
				</li>

			</ul>
		</div>
	</header>