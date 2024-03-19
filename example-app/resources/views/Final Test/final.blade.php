<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fianal Test Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/myStyle.css")}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
</head>
<body>
    <div class="container-fuild">
        <div class="row">
            <div class="col-sm-8"><h2>Customer <b>Details</b></h2></div>
            <div class="col-md-4"><a href=""><button type="button" class="btn btn-success">Add</button></a></div>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th  class="fs-5" scope="col">#</th>
                <th  class="fs-5" scope="col">Id</th>
                <th  class="fs-5" scope="col">Name</th>
                <th  class="fs-5" scope="col">Phone</th>
                <th  class="fs-5" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="fs-5"scope="row">1</th>
                <td class="fs-5">Mark</td>
                <td class="fs-5">Otto</td>
                <td class="fs-5">@mdo</td>
                <td style="width: 150px">
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
              </tr>
          </table>
    </div>
</body>
</html>
