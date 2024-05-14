<h2>
    <?php echo e($job->title); ?>

</h2>
<p>
    Congrats! Your job is now live on our website!
</p>
<p>
    <a href="<?php echo e(url('/jobs/'.$job->id)); ?>">View your job listing </a>
</p>
<?php /**PATH F:\Projects\laravel\laracast11\resources\views/mail/job-posted.blade.php ENDPATH**/ ?>