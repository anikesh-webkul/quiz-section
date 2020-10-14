<!DOCTYPE html>
<html>
<head>
<title>Create Your Form</title>
<style>
.container{
    width:50%;
    border: 2px solid green;
    margin-right:auto;
    margin-left:auto;
    font-size:1.7vw;
}
#link{
    width:10%;
    margin-right:auto;
    margin-left:auto;
    font-size:15px;
}

#btn{
    width:20%;
    margin-right:auto;
    margin-left:auto;
    border:2px orange solid;
    height:50px;
    font-size:1.2vw;

}
#block2{
    display:none;
}
</style>
</head>
<body>


       
        <form action="" method="post">

        
        
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container">
        <h3> <?php echo e($d->q_name); ?></h3><br>
           
            <input type="radio" name="choice" value="<?php echo e($d->opt1); ?>" required> <label for="opt1"><?php echo e($d->opt1); ?></label><br>
            <input type="radio" name="choice" value="<?php echo e($d->opt2); ?>" required> <label for="opt2"><?php echo e($d->opt2); ?></label><br>
            <input type="radio" name="choice" value="<?php echo e($d->opt3); ?>" required> <label for="opt3"><?php echo e($d->opt3); ?></label><br>
            <input type="radio" name="choice" value="<?php echo e($d->opt4); ?>" required> <label for="opt4"><?php echo e($d->opt4); ?></label><br>
          
          
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <center>
            <button id="btn">Submit Answer</button>
       </center>
       
        </form>>


       
            
                 
      
        

       
</body>
</html><?php /**PATH C:\xampp\htdocs\Form\resources\views/createFormView.blade.php ENDPATH**/ ?>