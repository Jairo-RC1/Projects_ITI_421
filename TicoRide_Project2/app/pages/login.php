<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the page -->
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS for login page -->
    <link rel="stylesheet" href="../public/css/stylesDashboard.css">
    <!-- Include JavaScript file -->
    <script src="../public/js/login.js"></script>
</head>

<body>
    <!-- Main content container for logo -->
    <div class="container text-center mt-5">
        <!-- Logo image -->
        <img src="../public/images/logo.png" alt="imagen" class="img-fluid" />
    </div>
    <!-- Main content container for login form -->
    <div class="container mt-5">
        <!-- Login form -->
        <form class="login-form" id="login-form" method="post" action="../models/login_query.php">
            <!-- Username input -->
            <div class="form-group">
                <label for="username">User</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            </div>
            <!-- Password input -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
            <!-- Login button -->
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <!-- Link to register page -->
        <p class="text-center mt-3">
            Not a user? <a href="register.php">Register here</a>
        </p>
    </div>

    <!-- Error message -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div class="error-message" style="display: none;"><?php echo $error; ?></div>
    <?php
    require '../shared/footer.php';
    ?>
</body>

</html>