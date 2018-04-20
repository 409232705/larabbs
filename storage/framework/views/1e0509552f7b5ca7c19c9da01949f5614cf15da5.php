

<?php $__env->startSection('title', $user->name . ' 的个人中心'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h4><strong>个人简介</strong></h4>
                            <p><?php echo e($user->introduction); ?></p>
                            <hr>
                            <h4><strong>注册于</strong></h4>
                            <p>  <?php echo e($user->created_at->diffForHumans()); ?></p>
                        </div>
                        .                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <span>
                    <h1 class="panel-title pull-left" style="font-size:30px;"><?php echo e($user->name); ?> <small><?php echo e($user->email); ?></small></h1>
                </span>
                </div>
            </div>
            <hr>

            
            <div class="panel panel-default">
                <div class="panel-body">
                    暂无数据 ~_~
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>