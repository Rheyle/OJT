<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("Location: admin_dashboard.php"); // Redirect to dashboard if already logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('hondog.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .card {
            border: 3px solid red; /* Solid black border */
            border-radius: 10px; /* Optional: Rounded corners */
        }
        .form-control {
            border: 2px solid black !important; /* Thicker border for form fields */
            border-radius: 5px; /* Slight rounding */
        }
        .mini-box {
            border: 2px solid red;
            border-radius: 5px;
            padding: 10px 20px;
            text-align: center;
            background: white;
            margin: 10px;
            transition: 0.3s;
            font-weight: bold;
        }
        .mini-box:hover {
            background: #f0f0f0;
            cursor: pointer;
        }
        .mini-box a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card p-4 shadow">
                <div class="text-center mb-3">
                    <img src="images/bmg_resize.jpg" alt="Company Logo" class="img-fluid" style="max-width: 200px;">
                </div>
                <h3 class="text-center">Admin x Login</h3>
                <form action="admin_authenticate.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Admin Username</label>
                        <input type="text" name="admin_username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="admin_password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Admin Login</button>
                    <?php if (isset($_GET['error'])): ?>
                        <p class="text-danger text-center mt-2"><?php echo htmlspecialchars($_GET['error']); ?></p>
                    <?php endif; ?>
                    <div class="mini-box">
                        <a href="login.php" class="text-dark text-decoration-none">Back to User Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="..\libs\js_bootstrap.bundle.js"></script>
</body>
</html>
