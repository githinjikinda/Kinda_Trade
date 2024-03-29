<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>
<style type="text/css">
  .chart {
    width: 100%; 
    min-height: 450px;
  }
</style>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="content-wrapper">
    <?php if(Session::has('success')): ?>
    <div class="alert alert-success">
        <?php echo e(Session::get('success')); ?>

        <?php
            Session::forget('success');
        ?>
    </div>
    <?php endif; ?>

    <?php if(Session::has('danger')): ?>
    <div class="alert alert-danger">
        <?php echo e(Session::get('danger')); ?>

        <?php
            Session::forget('danger');
        ?>
    </div>
    <?php endif; ?>
    
    <!--Statistics cards Starts-->
    <div class="row">
      <input type="hidden" name="role" id="role" value="<?php echo e(Auth::user()->type); ?>">
      <?php if(Auth::user()->type == 2): ?>
      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card bg-primary">
          <div class="card-body">
            <div class="px-3 py-3">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0"><?php echo e(count($ttlproducts)); ?></h3>
                  <span><?php echo e(trans('labels.total_products')); ?></span>
                </div>
                <div class="media-right align-self-center">
                  <i class="fa fa-list-alt white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>

      <?php if(Auth::user()->type == 1): ?>
      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card bg-primary">
          <div class="card-body">
            <div class="px-3 py-3">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0"><?php echo e(count($ttlusers)); ?></h3>
                  <span><?php echo e(trans('labels.total_users')); ?></span>
                </div>
                <div class="media-right align-self-center">
                  <i class="fa fa-users white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card bg-success">
          <div class="card-body">
            <div class="px-3 py-3">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0"><?php echo e(count($ttlorders)); ?></h3>
                  <span><?php echo e(trans('labels.total_orders')); ?></span>
                </div>
                <div class="media-right align-self-center">
                  <i class="fa fa-shopping-cart white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card bg-danger">
          <div class="card-body">
            <div class="px-3 py-3">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0"><?php echo e(count($ttlreturn)); ?></h3>
                  <span><?php echo e(trans('labels.total_return_orders')); ?></span>
                </div>
                <div class="media-right align-self-center">
                  <i class="fa fa-undo white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card bg-warning">
          <div class="card-body">
            <div class="px-3 py-3">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0"><?php echo e(count($ttlcancel)); ?></h3>
                  <span><?php echo e(trans('labels.total_cancel_orders')); ?></span>
                </div>
                <div class="media-right align-self-center">
                  <i class="fa fa-times white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if(Auth::user()->type == 1): ?>
      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card bg-warning">
          <div class="card-body">
            <div class="px-3 py-3">
              <div class="media">
                <div class="media-left align-self-center">
                  <i class="icon-users white font-large-2 float-left"></i>
                </div>
                <div class="media-body white text-right">
                  <h3><?php echo e(count($ttlvendors)); ?></h3>
                  <span><?php echo e(trans('labels.total_vendors')); ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>

      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card bg-danger">
          <div class="card-body">
            <div class="px-3 py-3">
              <div class="media">
                <div class="media-left align-self-center">
                  <i class="icon-wallet white font-large-2 float-left"></i>
                </div>
                <div class="media-body white text-right">
                  <h3><?php echo e(count($ttlpayrequest)); ?></h3>
                  <span><?php echo e(trans('labels.total_payout_request')); ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card bg-success">
          <div class="card-body">
            <div class="px-3 py-3">
              <div class="media">
                <div class="media-left align-self-center">
                  <i class="icon-pie-chart white font-large-2 float-left"></i>
                </div>
                <div class="media-body white text-right">
                  <h3><?php echo e(Helper::CurrencyFormatter($ttlvalueofsales)); ?></h3>
                  <span><?php echo e(trans('labels.total_value_of_sales')); ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card bg-primary">
          <div class="card-body">
            <div class="px-3 py-3">
              <div class="media">
                <div class="media-left align-self-center">
                  <i class="icon-graph white font-large-2 float-left"></i>
                </div>
                <div class="media-body white text-right">
                  <h3><?php echo e(Helper::getwalletbalance(Auth::user()->id)); ?></h3>
                  <span><?php echo e(trans('labels.your_balance')); ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row match-height">
      <div class="col-xl-4 col-lg-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Statistics</h4>
          </div>
          <div class="card-body">

            <p class="font-medium-2 text-muted text-center pb-2">Last 6 Months Sales</p>
            <div id="piechart" class="height-300 Stackbarchart mb-2">        
            </div>

          </div>
        </div>
      </div>
      <div class="col-xl-8 col-lg-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">New orders</h4>
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm text-center table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th class="text-center"><?php echo e(trans('labels.vendor_name')); ?></th>
                  <th class="text-center"><?php echo e(trans('labels.order_number')); ?></th>
                  <th class="text-center"><?php echo e(trans('labels.no_of_products')); ?></th>
                  <th class="text-center"><?php echo e(trans('labels.customer')); ?></th>
                  <th class="text-center"><?php echo e(trans('labels.order_total')); ?></th>
                  <th class="text-center"><?php echo e(trans('labels.date')); ?></th>
                  <th class="text-center"><?php echo e(trans('labels.action')); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $n=0 ?>
                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr id="del-<?php echo e($row->id); ?>">
                    <td class="text-center"><?php echo e(++$n); ?></td>
                    <td class="text-center"><?php echo e($row['vendors']->name); ?></td>
                    <td class="text-center"><?php echo e($row->order_number); ?></td>
                    <td class="text-center"><?php echo e($row->no_products); ?></td>
                    <td class="text-center"><?php echo e($row->full_name); ?></td>
                    <td class="text-center"><?php echo e(Helper::CurrencyFormatter($row->grand_total)); ?></td>
                    <td class="text-center"><?php echo e($row->date); ?></td>
                    <td class="text-center">
                        <a href="<?php echo e(URL::to('admin/orders/order-details/'.$row->order_number)); ?>" class="success p-0" data-original-title="<?php echo e(trans('labels.view')); ?>" title="<?php echo e(trans('labels.view')); ?>">
                            <span class="badge badge-warning">View</span>
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row match-height">
      <div class="col-xl-6 col-lg-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title mb-0">Monthly orders</h4>
          </div>
          <div class="card-body">
            <p class="font-medium-2 text-muted text-center pb-2">Last 6 Months Sales</p>
            <div class="card-block">
              <div id="barchart_material" class="height-400 lineAreaDashboard">
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php if(Auth::user()->type == 1): ?>
      <div class="col-xl-6 col-lg-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title mb-0">Monthly users</h4>
          </div>
          <div class="card-body">
            <p class="font-medium-2 text-muted text-center pb-2">Last 6 Months Sales</p>
            <div class="card-block">
              <div id="linechart" class="height-400 lineAreaDashboard">
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
    <!--Statistics cards Ends-->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripttop'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

          var data = google.visualization.arrayToDataTable([
              ['Month Name', 'amount'],

                  <?php
                  foreach($orders as $order) {
                      echo "['".$order->month_name."', ".$order->amount."],";
                  }
                  ?>
          ]);

          var options = {
            title: 'Monthly earnings',
            is3D: true,
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart'));

          chart.draw(data, options);
        }

        // 
        var role=$("#role").val();
        if (role == "super-admin") {
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(lineChart);

          function lineChart() {
              var dataa = google.visualization.arrayToDataTable([
                  ['Month Name', 'Users'],

                      <?php
                      foreach ($users as $key => $val) {
                          echo "['".$val->month_name."', ".(int)$val->total."],";
                      }
                      ?>
              ]);

              var optionsa = {
                  title: '',
                  curveType: 'function',
                  legend: {
                      position: 'bottom'
                  },
                  vAxis: {
                    viewWindow: {
                      min:0
                    }
                  }
              };
              var charts = new google.visualization.LineChart(document.getElementById('linechart'));
              charts.draw(dataa, optionsa);
          }
        }

        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(barChart);

        function barChart() {
          var datab = google.visualization.arrayToDataTable([
              ['Month Name', 'Orders'],

              <?php
                foreach($linereport as $product) {
                    echo "['".$product->month_name."', ".(int)$product->orders."],";
                }
              ?>
          ]);

          var optionb = {
            width: 730,
            chart: {
              title: '',
              subtitle: '',
            },
            bars: 'vertical'
          };
          var chart1 = new google.charts.Bar(document.getElementById('barchart_material'));
          chart1.draw(datab, optionb);
        }    
      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u560359188/domains/kinda.africa/public_html/resources/views/Admin/home.blade.php ENDPATH**/ ?>