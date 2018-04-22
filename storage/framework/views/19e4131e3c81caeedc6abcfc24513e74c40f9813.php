<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> Topic
                    <a class="btn btn-success pull-right" href="<?php echo e(route('topics.create')); ?>"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                <?php if($topics->count()): ?>
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Title</th> <th>Body</th> <th>User_id</th> <th>Category_id</th> <th>Reply_count</th> <th>View_count</th> <th>Last_reply_user_id</th> <th>Order</th> <th>Excerpt</th> <th>Slug</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><strong><?php echo e($topic->id); ?></strong></td>

                                    <td><?php echo e($topic->title); ?></td> <td><?php echo e($topic->body); ?></td> <td><?php echo e($topic->user_id); ?></td> <td><?php echo e($topic->category_id); ?></td> <td><?php echo e($topic->reply_count); ?></td> <td><?php echo e($topic->view_count); ?></td> <td><?php echo e($topic->last_reply_user_id); ?></td> <td><?php echo e($topic->order); ?></td> <td><?php echo e($topic->excerpt); ?></td> <td><?php echo e($topic->slug); ?></td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="<?php echo e(route('topics.show', $topic->id)); ?>">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="<?php echo e(route('topics.edit', $topic->id)); ?>">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="<?php echo e(route('topics.destroy', $topic->id)); ?>" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo $topics->render(); ?>

                <?php else: ?>
                    <h3 class="text-center alert alert-info">Empty!</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>