
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Dashboard</h1>
			</section>
			<section class="content">
            
                
                
                
				
                
				<!-- Main row -->
				<div class="row">
				<!-- Left col -->
					<div class="col-md-12">
						<div class="row">
						<!-- /.col -->
							<div class="col-md-12">
						<!-- USERS LIST -->
								<div class="box box-danger">
									<div class="box-header with-border">
										<?php $this->session->userdata('userid');?>
										<?php $this->session->userdata('accessid');?>
										<?php $this->session->userdata('user_type');?>
										<h3 class="box-title"></h3>
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">
											<?php /*?><?php if($responce = $this->session->flashdata('Successfully')): ?>
											<div class="text-center">
												<div class="alert alert-success text-center"><?php echo $responce;?></div>
											</div>
											<?php endif;?><?php */?>
										</div>
									</div>
								</div>
								
                                
								<div class="box-body table-responsive no-padding">
                                
								</div>
                                
							</div>
							
						</div>
					</div>
				</div>
			</section><!--content-->
		</div><!--content-wrapper-->
	</div><!--wrapper-->
</div>



</body>
</html>
