<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p>Dear Mr./Ms. <?php echo e($name); ?></p>
    <p>thank you for registering!</p>
    <p>To start, please access the site <a href="<?php echo e($appUrl); ?>">here</a>.</p>
    <p>Thank you!</p>
</body>
</html><?php /**PATH /Users/kanbayashidaiki/Desktop/dev3-laravel/backend/resources/views/users/emails/register-confirmation.blade.php ENDPATH**/ ?>