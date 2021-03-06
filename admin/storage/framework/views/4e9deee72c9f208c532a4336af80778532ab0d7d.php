
 
<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e($page_name." ".$title); ?>

       
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/admin')); ?>/dashbord"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage <?php echo e($title); ?></a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $__env->make('admin.layout._status_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="box">
            <div class="box-header">
              <h3 class="m-0 pull-left box-title">Online Booking</h3>
              <a class="btn bg-navy pull-right" href="<?php echo e(url('/admin')); ?>/download_bookings">Download Excel</a>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Mobile No.</th>
                  <th>Booking Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td>
                        <?php echo e($key+1); ?>

                      </td>
                      <td class="user-name">
                        <?php echo e($value->name); ?>

                      </td>
                      <td>
                        <?php echo e($value->email); ?>

                      </td>
                      <td>
                        <?php echo e($value->mobile); ?>

                      </td>
                      <td>
                        <?php echo e($value->date); ?>

                      </td>
                      <td>
                        <?php echo e($value->status); ?>

                      </td>
                      <td>
                        
                        <a href="<?php echo e(url('/admin')); ?>/view_<?php echo e($url_slug); ?>/<?php echo e($value->id); ?>" data-toggle="tooltip" title="View" class="btn btn-default">
                          <i class="fa fa-eye"></i>
                        </a>
                        
                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
    </script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marutiseva/public_html/rebuild/admin/resources/views/admin/booking/index.blade.php ENDPATH**/ ?>