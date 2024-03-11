<?php $__env->startSection('title'); ?>
    <?php echo e(Helper::webinfo()->site_title); ?> | <?php echo e(trans('labels.about')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- =========================== Breadcrumbs =================================== -->
	<div class="brd_wraps pt-2 pb-2">
		<div class="container">
			<nav aria-label="breadcrumb" class="simple_breadcrumbs">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('labels.about')); ?></li>
			  </ol>
			</nav>
		</div>
	</div>
	<!-- =========================== Breadcrumbs =================================== -->

	<!-- =========================== About =================================== -->

   	<section>
   		<div class="container">
   			<h2 class="text-center"><?php echo e(trans('labels.about')); ?></h2>
   			<div class="row">

   				<div class="col-lg-12 col-md-12 col-sm-12">
   					<p><?php echo nl2br(e($about->about_content)); ?></p>
   				</div>
   				
   			</div>
   		</div>
   	</section>
	<!-- =========================== Category =================================== -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripttop'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u560359188/domains/kinda.co.ke/public_html/resources/views/Front/about.blade.php ENDPATH**/ ?>