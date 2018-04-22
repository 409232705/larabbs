<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">
                    <h2 class="text-center">
                        <i class="glyphicon glyphicon-edit"></i>
                        <?php if($topic->id): ?>
                            编辑话题
                        <?php else: ?>
                            新建话题
                        <?php endif; ?>
                    </h2>

                    <hr>

                    <?php echo $__env->make('common.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php if($topic->id): ?>
                        <form action="<?php echo e(route('topics.update', $topic->id)); ?>" method="POST" accept-charset="UTF-8">
                            <input type="hidden" name="_method" value="PUT">
                            <?php else: ?>
                                <form action="<?php echo e(route('topics.store')); ?>" method="POST" accept-charset="UTF-8">
                                    <?php endif; ?>

                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                                    <div class="form-group">
                                        <input class="form-control" type="text" name="title" value="<?php echo e(old('title', $topic->title )); ?>" placeholder="请填写标题" required/>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="category_id" required>
                                            <option value="" hidden disabled selected>请选择分类</option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="body" class="form-control" id="editor" rows="3" placeholder="请填入至少三个字符的内容。" required><?php echo e(old('body', $topic->body )); ?></textarea>
                                    </div>

                                    <div class="well well-sm">
                                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 保存</button>
                                    </div>
                                </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>