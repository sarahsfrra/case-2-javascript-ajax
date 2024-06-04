<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DecaVision Chat App</title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <section class="form login">
        <header class="h2">DecaVision Chat App</header>
        <form action="index.php?action=handleLogin" method="post">
            <div class="user-details">
                <div class="field input form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                </div>
                <div class="field button">
                    <input type="submit" class="btn btn-primary" value="Continue to Chat">
                </div>
            </div>
        </form>
    </section>
</div>
</body>
</html>
