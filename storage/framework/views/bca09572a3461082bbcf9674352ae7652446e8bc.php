<?php if(isset($pageConfigs)): ?>
<?php echo Helper::updatePageConfig($pageConfigs); ?>

<?php endif; ?>

<!DOCTYPE html>

<?php
$configData = Helper::applClasses();
?>

<html lang="<?php if(session()->has('locale')): ?><?php echo e(session()->get('locale')); ?><?php else: ?><?php echo e($configData['defaultLanguage']); ?><?php endif; ?>" data-textdirection="<?php echo e(env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr'); ?>" class="loading <?php echo e(($configData['theme'] === 'light') ? '' : $configData['layoutTheme']); ?>" <?php if($configData['theme'] === 'dark'): ?> data-layout="dark-layout" <?php endif; ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name=”robots” content=”noindex,nofollow”>
  <title><?php echo $__env->yieldContent('title'); ?> -  Wilson Ooi</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/logo/favicon.ico')); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

  
  <?php echo $__env->make('panels/styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>



<?php if(isset($configData["mainLayoutType"])): ?>

<?php endif; ?>

<?php echo $__env->make((( $configData["mainLayoutType"] === 'horizontal') ? 'layouts.horizontalLayoutMaster' :
'layouts.verticalLayoutMaster' ), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/1302218.cloudwaysapps.com/nqwggxwnxn/public_html/resources/views/layouts/contentLayoutMaster.blade.php ENDPATH**/ ?>