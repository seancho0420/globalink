<!-- page-intro start-->
<!-- ================ -->
<div class="page-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a href="<?=DIR?>"><?=$GLOBALS['glt_nav']['1']['main']['home']?></a></li>
					<li><a href="<?=DIR?>personal"><?=$GLOBALS['glt_nav']['2']['main']['personal']?></a></li>
					<li class="active"><?=$GLOBALS['glt_nav']['2']['sub']['noncanadians']?></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- page-intro end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

	<div class="container">
		<div class="row">

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-12">

				<!-- page-title start -->
				<!-- ================ -->
				<h1 class="page-title"><?=$data['glt_noncanadian_form']['title']?></h1>
				<div class="separator-2"></div>
				<!-- page-title end -->

				<div class="animated fadeInUpSmall">
					<div class="row">
						<div class="col-xs-12">
							<?php
							foreach ($data['glt_noncanadian_form']['body'] as $key => $value) {
							?>
							
								<p><?=$value['main']?></p>
								
								<?php
								if(sizeof($value['sub'])) {
								?>
								<ul class="m-t-n m-b-md">
									<?php
									foreach ($value['sub'] as $sub_key => $sub) {
									?>
									<li><?=$sub?></li>
									<?php
									}
									?>
								</ul>
								<?php
								}
								?>
							<?php
							}
							?>
						</div>
					</div>
				</div>

				<div class="animated fadeInDownSmall">
				<!-- page-title end -->
					<div class="row m-t-lg">
						<div class="col-md-12">
							<p>
								<?=$data['glt_noncanadian_form']['form']['title']?>
							</p>
						</div>

						<div class="col-md-12">
							<?php
							if($data['submit']) {
							?>
							<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<?=$data['glt_noncanadian_form']['form']['submit_msg']?>
							</div>
							<?php
							}
							?>
						</div>
					</div>


					<div class="noncanadians-form">
						<form id="noncanadians-form" role="form" method="post">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="firstname"><?=$data['glt_noncanadian_form']['form']['firstname']?> <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="firstname" name="firstname" placeholder="" required>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="lastname"><?=$data['glt_noncanadian_form']['form']['lastname']?> <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="lastname" name="lastname" placeholder="" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email"><?=$data['glt_noncanadian_form']['form']['email']?> <span class="text-danger">*</span></label>
										<input type="email" class="form-control" id="email" name="email" placeholder="abc@email.com" required>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="phone"><?=$data['glt_noncanadian_form']['form']['phone']?></label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="123-456-7890">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="sin"><?=$data['glt_noncanadian_form']['form']['sin']?></label>
										<input type="text" class="form-control" id="sin" name="sin" placeholder="">
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="birthdate"><?=$data['glt_noncanadian_form']['form']['birthdate']?></label>
										<input type="text" class="form-control datepicker" id="birthdate" name="birthdate" placeholder="MM/DD/YYYY" maxlength="10">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="arrived_at"><?=$data['glt_noncanadian_form']['form']['arrive_in_canada']?> <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="arrived_at" name="arrived_at" placeholder="e.g. 2010" required>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="worked"><?=$data['glt_noncanadian_form']['form']['work_in_canada']?> <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="worked" name="worked" placeholder="Yes / No" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="earned"><?=$data['glt_noncanadian_form']['form']['make_money']?> <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="earned" name="earned" placeholder="$" required>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="rent"><?=$data['glt_noncanadian_form']['form']['rent_fee']?> <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="rent" name="rent" placeholder="$" required>
									</div>
								</div>
							</div>

							<div class="row m-t-sm">
								<div class="col-md-12 text-center">
									<input type="submit" value="<?=$data['glt_noncanadian_form']['form']['submit']?>" name="submit" class="btn btn-default btn-block">
								</div>
							</div>
						</form>
	
						<?php if(sizeof($data['glt_noncanadian_form']['blurb'])) { ?>
						<div class="row m-t-xl">
							<div class="col-md-12">
								<p class="m-b-xs">
									<?=$data['glt_noncanadian_form']['blurb'][0]?>
								</p>

								<p>
									<?=$data['glt_noncanadian_form']['blurb'][1]?>
								</p>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			<!-- main end -->
			</div>
		</div>
	</div>
</section>
<!-- main-container end -->