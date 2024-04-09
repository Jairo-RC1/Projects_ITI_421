<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the page -->
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/stylesDashboard.css">
</head>

<body>
    <!-- Logo container -->
    <div class="container text-center mt-5">
        <img src="../public/images/logo.png" alt="imagen" class="img-fluid" />
    </div>
    <!-- Register form container -->
    <div class="container mt-5">
        <form class="register-form" id="register-form" method="post" action="../utils/register_query.php">
            <!-- First Name input -->
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Input text" required>
            </div>
            <!-- Last Name input -->
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Input text" required>
            </div>
            <!-- Phone input -->
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="(XXX) XXXX-XXXX" required>
            </div>
            <!-- Username input -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Input text" required>
            </div>
            <!-- Password input -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Input text" required>
            </div>
            <!-- Repeat Password input -->
            <div class="form-group">
                <label for="repeatPassword">Repeat Password</label>
                <input type="password" class="form-control" id="repeatPassword" name="repeatPassword" placeholder="Input text" required>
            </div>
            <!-- Register button -->
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <!-- Already a user message -->
    <div class="container text-center mt-3">
        <p>Already a user? <a href="login.php">Login here</a></p>
    </div>
    <!-- Include JavaScript file -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include register script -->
    <script src="../public/js/register.js"></script>
</body>

</html>