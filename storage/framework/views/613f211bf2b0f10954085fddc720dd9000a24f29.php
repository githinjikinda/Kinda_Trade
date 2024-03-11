<?php $__env->startSection('title'); ?>
    <?php echo e(Helper::webinfo()->site_title); ?> | <?php echo e(trans('labels.all_notifications')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- =========================== Breadcrumbs =================================== -->
	<div class="brd_wraps pt-2 pb-2">
		<div class="container">
			<nav aria-label="breadcrumb" class="simple_breadcrumbs">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('labels.all_notifications')); ?></li>
			  </ol>
			</nav>
		</div>
	</div>
	<!-- =========================== Breadcrumbs =================================== -->

	<!-- =========================== My All Orders =================================== -->
	<section>
		<div class="container">
			<div class="row">

				<?php echo $__env->make('includes.web.order-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				
				<?php if(count($notifications) <= 0): ?>
					<div class="col-lg-8 col-md-9 col-sm-12 col-12 text-center">
						<img src="<?php echo e(Helper::image_path('no-data.png')); ?>">
						<h2 class="error_title mt-4"><?php echo e(trans('labels.no_notification')); ?></h2>
						<p><span class="text-primary"><?php echo e(trans('labels.woops')); ?></span> <?php echo e(trans('labels.notifications_not_found')); ?></p>
						<a href="<?php echo e(URL::to('/')); ?>" class="btn btn-primary"><?php echo e(trans('labels.go_home_page')); ?></a>
					</div>
				<?php else: ?>
					<div class="col-lg-8 col-md-9 col-sm-12 col-12">
						<!-- Notification list -->
						<div class="card style-2 mb-4">
							<div class="card-body">
								<ul class="item-groups">
									<?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<!-- Single Items -->
									<li>
										<div class="row align-items-center">
											<div class="col-4 col-md-3 col-xl-2">
												<?php if($value->order_status == 1): ?>
													<a href="<?php echo e(URL::to('track-order/'.$value->order_id)); ?>">
														<img src="<?php echo e(Helper::image_path('placed.png')); ?>"class="img-fluid" style="background-color: #fc0; padding: 20px; border-radius: 20%;">
													</a>
												<?php endif; ?>
												<?php if($value->order_status == 2): ?>
													<a href="<?php echo e(URL::to('track-order/'.$value->order_id)); ?>">
														<img src="<?php echo e(Helper::image_path('confirmed.png')); ?>"class="img-fluid" style="background-color: #007aff; padding: 20px; border-radius: 20%;">
													</a>
												<?php endif; ?>
												<?php if($value->order_status == 3): ?>
													<a href="<?php echo e(URL::to('track-order/'.$value->order_id)); ?>">
														<img src="<?php echo e(Helper::image_path('delivery.png')); ?>"class="img-fluid" style="background-color: #5ac8fa; padding: 20px; border-radius: 20%;">
													</a>
												<?php endif; ?>
												<?php if($value->order_status == 4): ?>
													<a href="<?php echo e(URL::to('track-order/'.$value->order_id)); ?>">
														<img src="<?php echo e(Helper::image_path('delivered.png')); ?>"class="img-fluid" style="background-color: #35c759; padding: 20px; border-radius: 20%;">
													</a>
												<?php endif; ?>
												<?php if($value->order_status == 5 || $value->order_status == 6): ?>
													<a href="<?php echo e(URL::to('track-order/'.$value->order_id)); ?>">
														<img src="<?php echo e(Helper::image_path('cancel.png')); ?>"class="img-fluid" style="background-color: #ff3a30; padding: 20px; border-radius: 20%;">
													</a>
												<?php endif; ?>
											</div>
											
											<div class="col">
												<!-- Title -->
												<p class="mb-2 font-size-sm font-weight-bold">
													<a class="text-body" href="<?php echo e(URL::to('track-order/'.$value->order_id)); ?>"><?php echo e($value->message); ?></a> <br>
													<span class="theme-cl"><?php echo e($value->order_number); ?></span>
												</p>

												<!-- Text -->
												<div class="font-size-sm text-muted">
													<?php echo e($value->created_at); ?>

												</div>

											</div>
										</div>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
						</div>
						<div class="d-flex justify-content-center">
							<?php echo e($notifications->links()); ?>

						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u560359188/domains/kinda.africa/public_html/resources/views/Front/notifications.blade.php ENDPATH**/ ?>