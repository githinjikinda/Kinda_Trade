<?php $__env->startSection('title'); ?>
    <?php echo e(Helper::webinfo()->site_title); ?> | <?php echo e(trans('labels.top_banner')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header"><?php echo e(trans('labels.add_banner')); ?></div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('danger')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('danger')); ?>

                                <?php
                                    Session::forget('danger');
                                ?>
                            </div>
                            <?php endif; ?>
                            <div class="px-3">
                                <form class="form" method="post" action="<?php echo e(route('admin.banner.store')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                    <div class="form-body">
                                      <div class="form-group">
                                          <label for="type" class="col-form-label"><?php echo e(trans('labels.type')); ?>:</label>
                                          <select name="type" class="form-control"id="type">
                                              <option value=""><?php echo e(trans('placeholder.select_type')); ?></option>
                                              <option value="category"><?php echo e(trans('labels.category')); ?></option>
                                              <option value="product"><?php echo e(trans('labels.product')); ?></option>                                
                                          </select>
                                      </div>

                                      <div class="category gravity">
                                          <div class="form-group">
                                              <label for="cat_id" class="col-form-label"><?php echo e(trans('labels.category')); ?>:</label>
                                              <select name="cat_id" class="form-control selectpicker"id="cat_id">
                                                  <option value=""><?php echo e(trans('placeholder.select_category')); ?></option>
                                                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="product gravity">
                                          <div class="form-group">
                                              <label for="product_id" class="col-form-label"><?php echo e(trans('labels.product')); ?>:</label>
                                              <select name="product_id" class="form-control selectpicker" id="product_id">
                                                  <option value=""><?php echo e(trans('placeholder.select_product')); ?></option>
                                                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option value="<?php echo e($product->id); ?>"><?php echo e($product->product_name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="image"><?php echo e(trans('labels.image')); ?>:</label>
                                          <input type="file" id="image" class="form-control" name="image" >
                                          <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                      </div>
                                      <div class="gallery"></div>
                                    </div>

                                    <div class="form-actions center">
                                        <a href="<?php echo e(route('admin.banner')); ?>" class="btn btn-raised btn-warning mr-1"><i class="ft-x"></i> <?php echo e(trans('labels.cancel')); ?></a>
                                        <?php if(env('Environment') == 'sendbox'): ?>
                                            <button type="button" class="btn btn-raised btn-primary" onclick="myFunction()"> <i class="fa fa-check-square-o"></i> <?php echo e(trans('labels.add')); ?></button>
                                        <?php else: ?>
                                            <button type="submit" id="btn_add_category" class="btn btn-raised btn-primary"> <i class="fa fa-check-square-o"></i> <?php echo e(trans('labels.add')); ?></button>
                                        <?php endif; ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u560359188/domains/kinda.africa/public_html/resources/views/Admin/banner/add.blade.php ENDPATH**/ ?>