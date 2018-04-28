<!DOCTYPE html>
<html lang="<?php echo config('application.language') ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php echo e($config->getOption('title', '') .' - '. config('administrator.title')); ?></title>

	<link href="<?php echo e(asset('packages/summerblue/administrator/css/app.css')); ?>" media="all" type="text/css" rel="stylesheet">
	<link href="<?php echo e(asset('packages/summerblue/administrator/css/main-extended.css')); ?>" media="all" type="text/css" rel="stylesheet">

	<!--[if lte IE 9]>
		<link href="<?php echo e(asset('packages/summerblue/administrator/css/browsers/lte-ie9.css')); ?>" media="all" type="text/css" rel="stylesheet">
	<![endif]-->

</head>
<body>
	<div id="wrapper">
		<?php echo $__env->make('administrator::partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php echo $content; ?>


		<?php echo $__env->make('administrator::partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>

	<script src="<?php echo e(asset('packages/summerblue/administrator/js/base.js')); ?>"></script>
	<?php $__currentLoopData = $myjs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<script src="<?php echo e($url); ?>"></script>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<script src="<?php echo e(asset('packages/summerblue/administrator/js/app.js')); ?>"></script>

	<!-- 生成二维码的 modal，在品牌页面使用到，需要有更好的价值机制。 -->
	<div class="modal fade" id="getQrcode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header text-center">
	        <h3>二维码信息</h3>
	      </div>
	      <div class="modal-body">
	        <div id="qrcode-img" class="text-center"></div>
	      </div>
	    </div>
	  </div>
	  </div>
	</div>

</body>
</html>
