<!DOCTYPE html>
<html>
<head>

    <title>Laravel 7 Ajax Request example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

</head>

<body>

 
    <div class="container">
        <h1>Ajax Data Insert</h1>
        <form action="" class="btn-submit" method="POST">
        <?php echo csrf_field(); ?>

           <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title" class="form-control" placeholder="title" required="">

            </div>

            <div class="form-group">
                <label>Details:</label>
                <input type="text" name="details" class="form-control" placeholder="details" required="">
            </div>

           
            <div class="form-group">
                <button class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>
</body>
<script type="text/javascript">
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
   
});
$(".btn-submit").click(function(e){
        e.preventDefault();
        var title=$("input[name=title]").val();
        var details=$("input[name=details]").val();
        var url='<?php echo e(url('postinsert')); ?>';

        $.ajax({
            url:url,
            method:'POST',
            data:{
                Code:title,
                Chief:details

            },
            success:function(response){
                if(response.success){
                    alert(response.message)
                }else{
                    alert("Error")
                }

            },
            error:function(error){
                console.log(error)
            }

        });
    });
</script><?php /**PATH /home/steve/ajax_insert/resources/views/welcome.blade.php ENDPATH**/ ?>