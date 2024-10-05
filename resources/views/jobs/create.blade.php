<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job</title>
</head>
<body>
    <div class="container">
        <h1>Create a New Job</h1>
        <form action="/jobs" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Job Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="description">Job Description</label>
                <input type="text" id="description" name="description" class="form-control" required placeholder="Title">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>