<!DOCTYPE html>
<html>
<head>
    <title>Add Order</title>
    <style>

    #container{
        width:auto;
        height:450px;
        margin-left:15%;
        margin-right:15%;
        margin-top:5%;
        border:2px solid green;
    }

    label{
        font-size:1.5vw;
        margin-left:25%;
    }
    input{
        width:25%;
        height:30px;
        border:1px solid green;
        margin-left:25%;
    }

    button{
        width:10%;
        height:50px;
        border-radius:5px;
        margin-left:33%;
        font-size:1.2vw;
    }

    </style>
</head>
<body>

<div id="container">

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

    <form action="submit"  method="POST" >
    <?php echo csrf_field(); ?>
        <br><br>
        <label>Form ID</label><br>
        <input type="number" name="form_id" placeholder="Enter form ID.."><br><br>

        <label>Name</label><br>
        <input type="text" name="name" placeholder="Enter Name.."><br><br>

        
     <a href="/createFormView"   <button type="submit" name="submit">Create Form</button></a>
    <form>

</div>

</body>
</html>
<?php 

               
               
?><?php /**PATH C:\xampp\htdocs\Form\resources\views/homeView.blade.php ENDPATH**/ ?>