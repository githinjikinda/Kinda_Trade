<div data-active-color="white" data-background-color="black" data-image="<?php echo e(asset('storage/app/public/Adminassets/img/sidebar-bg/04.jpg')); ?>" class="app-sidebar">
    <!-- main menu header-->
    <!-- Sidebar Header starts-->
    <div class="sidebar-header">
      <div class="logo clearfix"><a href="<?php echo e(route('admin.home')); ?>" class="logo-text float-left">
          <span class="text align-middle"><?php echo e(Helper::webinfo()->site_title); ?></span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="ft-toggle-right toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
    </div>

    <!-- Sidebar Header Ends-->
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="sidebar-content">
      <div class="nav-container">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <!-- Dashboard -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.home') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.home')); ?>"><i class="ft-home"></i><span class="menu-title"><?php echo e(trans('labels.dashboard')); ?></span></a>
          </li>
          <?php if(Auth::user()->type == 1): ?>
          <!-- Category -->
          <li class="has-sub nav-item">
            <a href="#">
              <i class="fa fa-list"></i>
              <span class="menu-title"><?php echo e(trans('labels.category')); ?></span>
            </a>
            <ul class="menu-content">
              <li class="<?php echo e(Request::routeIs('admin.category*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.category')); ?>">
                  <span class="menu-title"><?php echo e(trans('labels.category')); ?></span>
                </a>
              </li>
              <li class="<?php echo e(Request::routeIs('admin.subcategory*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.subcategory')); ?>">
                  <span class="menu-title"><?php echo e(trans('labels.subcategory')); ?></span>
                </a>
              </li>
              <li class="<?php echo e(Request::routeIs('admin.innersubcategory*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.innersubcategory')); ?>">
                  <span class="menu-title"><?php echo e(trans('labels.innersubcategory')); ?></span>
                </a>
              </li>
            </ul>
          </li>
          <!-- Category -->

          <li class="has-sub nav-item">
            <a href="#">
              <i class="fa fa-list"></i>
              <span class="menu-title"><?php echo e(trans('labels.attributes')); ?></span>
            </a>
            <ul class="menu-content">
              <li class="<?php echo e(Request::routeIs('admin.brand*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.brand')); ?>">
                  <span class="menu-title"><?php echo e(trans('labels.brand')); ?></span>
                </a>
              </li>
              <li class="<?php echo e(Request::routeIs('admin.attribute*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.attribute')); ?>">
                  <span class="menu-title"><?php echo e(trans('labels.attribute')); ?></span>
                </a>
              </li>
            </ul>
          </li>

          <!-- Home page settings -->
          <li class="has-sub nav-item">
            <a href="#">
              <i class="fa fa-list"></i>
              <span class="menu-title"><?php echo e(trans('labels.home_page_settings')); ?></span>
            </a>
            <ul class="menu-content">
              <li class="<?php echo e(Request::routeIs('admin.slider*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.slider')); ?>">
                  <span class="menu-title"><?php echo e(trans('labels.sliders')); ?></span>
                </a>
              </li>
              <li class="<?php echo e(Request::routeIs('admin.banner*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.banner')); ?>"><span class="menu-title"><?php echo e(trans('labels.top_banner')); ?></span></a>
              </li>
              <li class="<?php echo e(Request::routeIs('admin.largebanner*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.largebanner')); ?>"><span class="menu-title"><?php echo e(trans('labels.large_banner')); ?></span></a>
              </li>
              <li class="<?php echo e(Request::routeIs('admin.leftbanner*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.leftbanner')); ?>"><span class="menu-title"><?php echo e(trans('labels.left_banner')); ?></span></a>
              </li>
              <li class="<?php echo e(Request::routeIs('admin.bottombanner*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.bottombanner')); ?>"><span class="menu-title"><?php echo e(trans('labels.bottom_banner')); ?></span></a>
              </li>
              <li class="<?php echo e(Request::routeIs('admin.popupbanner*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.popupbanner')); ?>"><span class="menu-title"><?php echo e(trans('labels.popup_banner')); ?></span></a>
              </li>
            </ul>
          </li>

          <!-- Vendors -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.vendors*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.vendors')); ?>"><i class="fa fa-users" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.vendors')); ?></span></a>
          </li>

          <!-- Users -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.users*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.users')); ?>"><i class="fa fa-users" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.customers')); ?></span></a>
          </li>

          <!-- Payments -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.payments*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.payments')); ?>"><i class="fa fa-usd" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.payments')); ?></span></a>
          </li>

          <!-- Coupons -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.coupons*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.coupons')); ?>"><i class="fa fa-gift" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.coupons')); ?></span></a>
          </li>

          <!-- Orders -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.orders*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.orders')); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.orders')); ?></span></a>
          </li>

          <!-- Return orders -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.returnorders*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.returnorders')); ?>"><i class="fa fa-undo" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.returnorders')); ?></span></a>
          </li>

          <!-- Return conditions -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.returnconditions*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.returnconditions')); ?>"><i class="fa fa-undo" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.returnconditions')); ?></span></a>
          </li>

          <!-- Payout request -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.payout*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.payout')); ?>"><i class="fa fa-credit-card" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.payout_request')); ?></span><span class="tag badge badge-pill badge-danger float-right mr-1 mt-1"><?php echo e(Helper::PayoutRequest()); ?></span></a>
          </li>

          <!-- Help -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.help*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.help')); ?>"><i class="fa fa-question-circle" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.help')); ?></span><span class="tag badge badge-pill badge-danger float-right mr-1 mt-1"><?php echo e(Helper::Help()); ?></span></a>
          </li>

          <!-- Subscribe -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.subscribe*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.subscribe')); ?>"><i class="fa fa-check" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.subscribe')); ?></span></a>
          </li>

          <!-- Settings -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.settings*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.settings')); ?>"><i class="fa fa-cog" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.settings')); ?></span></a>
          </li>

          <!-- CMS Pages -->
          <li class="has-sub nav-item">
            <a href="#">
              <i class="fa fa-list"></i>
              <span class="menu-title"><?php echo e(trans('labels.cms_pages')); ?></span>
            </a>
            <ul class="menu-content">
              <li class="<?php echo e(Request::routeIs('admin.about*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.about')); ?>">
                  <span class="menu-title"><?php echo e(trans('labels.about')); ?></span>
                </a>
              </li>
              <li class="<?php echo e(Request::routeIs('admin.privacy-policy*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.privacy-policy')); ?>">
                  <span class="menu-title"><?php echo e(trans('labels.privacy_policy')); ?></span>
                </a>
              </li>
              <li class="<?php echo e(Request::routeIs('admin.terms-conditions*') ? 'active is-shown' : ''); ?>">
                <a href="<?php echo e(route('admin.terms-conditions')); ?>">
                  <span class="menu-title"><?php echo e(trans('labels.terms_conditions')); ?></span>
                </a>
              </li>
            </ul>
          </li>
          <?php endif; ?>

          <?php if(Auth::user()->type == 3): ?>
          <!-- Products -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.products*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.products')); ?>"><i class="fa fa-list"></i><span class="menu-title"><?php echo e(trans('labels.products')); ?></span></a>
          </li>

          <!-- Orders -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.orders*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.orders')); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.orders')); ?></span> <span class="tag badge badge-pill badge-danger float-right mr-1 mt-1"><?php echo e(Helper::NewOrderCount(Auth::user()->id)); ?></span></a>
          </li>

          <!-- Return orders -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.returnorders*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.returnorders')); ?>"><i class="fa fa-undo" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.returnorders')); ?></span> <span class="tag badge badge-pill badge-danger float-right mr-1 mt-1"><?php echo e(Helper::ReturnOrderCount(Auth::user()->id)); ?></span></a>
          </li>

          <!-- Return Policy -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.return-policy*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.return-policy')); ?>"><i class="fa fa-exchange" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.return-policy')); ?></span></a>
          </li>

          <!-- Payout request -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.payout*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.payout')); ?>"><i class="fa fa-credit-card" aria-hidden="true"></i>
              <span class="menu-title"><?php echo e(trans('labels.payout_request')); ?></span>
              <?php if(Helper::PayoutRequest() >= 1): ?>
              <span class="tag badge badge-pill badge-danger float-right mr-1 mt-1"><?php echo e(Helper::PayoutRequest()); ?></span>
              <?php endif; ?>
            </a>
          </li>

          <!-- Manage profile -->
          <li class=" nav-item <?php echo e(Request::routeIs('admin.vendor-profile*') ? 'active is-shown open' : ''); ?>">
            <a href="<?php echo e(route('admin.vendor-profile')); ?>"><i class="fa fa-cog" aria-hidden="true"></i><span class="menu-title"><?php echo e(trans('labels.shop_settings')); ?></span></a>
          </li>

          <?php endif; ?>

        </ul>
      </div>
    </div>
    <!-- main menu content-->
    <div class="sidebar-background"></div>
    <!-- main menu footer-->
</div>

<!-- Change Password model -->
<div class="modal fade text-left" id="ChangePasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <label class="modal-title text-text-bold-600" id="myModalLabel33"><?php echo e(trans('labels.change_password')); ?></label>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="change_password_form">
        <?php echo csrf_field(); ?>
        <div class="modal-body">
          <!--<label><?php echo e(trans('labels.old_password')); ?>: </label>-->
          <!--<div class="form-group">-->
          <!--    <input type="password" placeholder="<?php echo e(trans('placeholder.old_password')); ?>" class="form-control" name="oldpassword" id="oldpassword">-->
          <!--    <span class="error" id="oldpassword-error"></span>-->
          <!--</div>-->

          <label><?php echo e(trans('labels.new_password')); ?>: </label>
          <div class="form-group">
              <input type="password" placeholder="<?php echo e(trans('placeholder.new_password')); ?>" class="form-control" name="newpassword" id="newpassword">
              <span class="error" id="newpassword-error"></span>
          </div>

          <label><?php echo e(trans('labels.confirm_password')); ?>: </label>
          <div class="form-group">
              <input type="password" placeholder="<?php echo e(trans('placeholder.confirm_password')); ?>" class="form-control" name="confirmpassword" id="confirmpassword">
              <span class="error" id="confirmpassword-error"></span>
          </div>

        </div>
        <div class="modal-footer">
        <input type="reset" class="btn btn-raised btn-warning" data-dismiss="modal" value="<?php echo e(trans('labels.close')); ?>">
        <?php if(env('Environment') == 'sendbox'): ?>
            <button type="button" class="btn btn-raised btn-primary" onclick="myFunction()"> <i class="fa fa-check-square-o"></i> <?php echo e(trans('labels.update')); ?></button>
        <?php else: ?>
        <button type="button" class="btn btn-raised btn-primary submit" onclick="changePassword()"><?php echo e(trans('labels.save')); ?></button>
        <?php endif; ?>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Images -->
<div class="modal fade" id="EditImages" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabeledit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" name="editimg" class="editimg" id="editimg" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabeledit"><?php echo e(trans('labels.images')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <span id="emsg"></span>
                <div class="modal-body">
                    <div class="form-group">
                        <label><?php echo e(trans('labels.images')); ?></label>
                        <input type="hidden" id="idd" name="id">
                        <input type="hidden" class="form-control" id="old_img" name="old_img">
                        <input type="file" class="form-control" name="image" id="image" accept="image/*">
                        <input type="hidden" name="removeimg" id="removeimg">
                    </div>
                    <div class="galleryim"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btna-secondary" data-dismiss="modal"><?php echo e(trans('labels.close')); ?></button>
                    <?php if(env('Environment') == 'sendbox'): ?>
                        <button type="button" class="btn btn-raised btn-primary" onclick="myFunction()"> <i class="fa fa-check-square-o"></i> <?php echo e(trans('labels.update')); ?></button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.update')); ?></button>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /home/u560359188/domains/kinda.africa/public_html/resources/views/includes/admin/sidebar.blade.php ENDPATH**/ ?>