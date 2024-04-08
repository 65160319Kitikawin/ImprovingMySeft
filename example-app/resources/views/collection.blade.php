<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<!-- Comment button -->
<button type="button" class="btn btn-secondary d-flex align-items-center me-2" style="width: 110px; height:30px; border-radius:5px 0px 0px 5px" onclick="toggleComment()">
    <i class="fa-regular fa-comment" style="color: #EF5B25;"></i><label for="" class="ms-1 cursor" style="font-size:14px font-weight:600; color: #EF5B25;">Comment</label>
</button>

<!-- Comment DIV -->
<div id="commentDiv" class="collapse card" style="z-index: 1; position: absolute; right: 0; bottom: 0; width: 300px; height: 900px;">
    <div class="card-body">
        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    function toggleComment() {
        var commentDiv = document.getElementById('commentDiv');
        if (commentDiv.classList.contains('show')) {
            commentDiv.classList.remove('show');
        } else {
            commentDiv.classList.add('show');
        }
    }
</script>

</body>
</html>

