<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('backim.webp') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
        #btn1 {
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(75, 14, 154, 1) 35%, rgba(0, 212, 255, 1) 100%);
        }
        .form-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .form-title {
            font-size: 24px;
            font-weight: bold;
        }
        .form-description {
            font-size: 16px;
            color: #6c757d;
        }
    </style>
    <title>Signup - ILClot</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-sm-9">
                <div class="form-container">
                    <h2 class="form-title text-center">Signup Now</h2>
                    <p class="form-description text-center">It's Free And Takes a Minute</p>
                    <form method="post" action="home.php">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
                            <span class="text-danger" id="s1"></span>
                        </div>
                        <div class="mb-3">
                            <label for="password1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password1" placeholder="Confirm Password" required>
                            <span class="text-danger" id="s2"></span>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success" id="btn1">Signup now</button>
                        </div>
                        <p class="text-center mt-3">By registering, you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
