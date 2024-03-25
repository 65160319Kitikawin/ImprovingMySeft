<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
    <title>Add Student Form</title>
</head>
<body>
    <div class="col d-flex flex-column align-items-center">
        <form action="/students" method="POST" class="body d-flex flex-column justify-center align-items-center">
            @csrf
            <label for="" class="mb-4 " style="font-size: 32px;">Student Form</label>
            <div class="input-group mb-4">
                <label style="margin-left: 25px" for="">Student Id : </label>
                <label style="margin-left: 40px" for="">{{ $stu_data -> stu_student_id }}</label>
            </div>
            <div class="input-group mb-4">
                <label style="margin-left: 25px" for="">Name : </label>
                <label style="margin-left: 71px" for="">{{ $stu_data -> stu_name }}</label>
            </div>
            <div class="input-group mb-4">
                <label style="margin-left: 25px" for="">Phone : </label>
                <label style="margin-left: 69px" for="">{{ $stu_data -> stu_phone }}</label>
            </div>
            <div class="d-grid gap-5 d-md-flex justify-content-md-end">
                <button class="btn btn-danger" style="font-weight:400; height: 45px;" type="button"><a style="color: white; text-decoration: none;" href="/students">Back</a></button>
            </div>
        </form>
    </div>
</body>
</html>
