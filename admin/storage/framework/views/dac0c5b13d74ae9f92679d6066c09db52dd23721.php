
 
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
              <h3 class="box-title"><?php echo e($page_name." ".$title); ?></h3>
              <a href="<?php echo e(url('/admin')); ?>/add_<?php echo e($url_slug); ?>" class="btn btn-primary btn-sm" style="float: right;">Add Slider</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr.No.</th>
                  <th>Name</th>
                  <th>Order No</th>
                  <th>Slider Type</th>
                  <th>Link</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($key+1); ?></td>
                      <td><?php echo e($value['slider_name']); ?></td>
                      <td>
                        <form action="<?php echo e(url('/admin')); ?>/update_order_no/<?php echo e($value['slider_id']); ?>" method="post" role="form" data-parsley-validate="parsley" enctype="multipart/form-data"> 
                           <div class="input-group">
                           <div class="input-group">
                            <input type="text" class="form-control" name="order_no" value="<?php echo e($value['order_no']); ?>" required="">
                            <input type="hidden" class="form-control" name="url_slug" value="<?php echo e($url_slug); ?>">
                            <span class="input-group-addon" style="padding: 1px 1px !important;">
                              <button class="btn-sm btn-primary btn"  name="submit"><i class="fa fa-save"></i></button>
                            </span>
                          </div>
                        </form>
                      </td>
                      <td><?php if($value['slider_no']==1): ?>offer Banner <?php else: ?> Banner <?php endif; ?></td>
                      <td><?php echo e($value['link']); ?></td>
                      <?php if($url_slug=="slider"): ?>
                      <td><a href="<?php echo e(url('/')); ?>/upload/seva_banner/<?php echo e($value['slider_img']); ?>" data-fancybox="gallery" data-caption="Caption #1"><img src="<?php echo e(url('/')); ?>/upload/seva_banner/<?php echo e($value['slider_img']); ?>" width="50" height="50"></a></td>
                      <?php elseif($url_slug=="nexa_slider"): ?>
                       <td><a href="<?php echo e(url('/')); ?>/upload/nexa_banner/<?php echo e($value['slider_img']); ?>" data-fancybox="gallery" data-caption="Caption #1"><img src="<?php echo e(url('/')); ?>/upload/nexa_banner/<?php echo e($value['slider_img']); ?>" width="50" height="50"></a></td>
                      <?php elseif($url_slug=="commercial_slider"): ?>
                      <td><a href="<?php echo e(url('/')); ?>/upload/commercial_banner/<?php echo e($value['slider_img']); ?>" data-fancybox="gallery" data-caption="Caption #1"><img src="<?php echo e(url('/')); ?>/upload/commercial_banner/<?php echo e($value['slider_img']); ?>" width="50" height="50"></a></td>
                      <?php endif; ?>
                      <td>
                        <a href="<?php echo e(url('/admin')); ?>/edit_<?php echo e($url_slug); ?>/<?php echo e($value['slider_id']); ?>" title="Edit">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href="<?php echo e(url('/admin')); ?>/delete_<?php echo e($url_slug); ?>/<?php echo e($value['slider_id']); ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');">
                          <i class="fa fa-trash"></i>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marutiseva/public_html/rebuild/admin/resources/views/admin/slider/index.blade.php ENDPATH**/ ?>