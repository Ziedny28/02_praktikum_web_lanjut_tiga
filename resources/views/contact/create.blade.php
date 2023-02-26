<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Form Contact us</title>
</head>

<body>

    <form action="/contact" method='post'>
        @csrf
        <div class="form-floating mb-3">
            <input type="email" name='email' class="form-control" id="floatingInput" placeholder="name@example.com" required autofocus>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name='title' class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Title</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name='body'placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 100px" required></textarea>
            <label for="floatingTextarea2">Insert Body Here</label>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
