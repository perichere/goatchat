<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Goat Chat</title>
</head>
<body>
    <div class="wrapper">
        <section class="form singup">
            <header>Welcome To Goat Chat</header>
            <form action="#">
                <div class="error-txt">This is error</div>
                <div class="name-detels">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="email" name="" id="register.email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="" id="register.password" placeholder="Enter your password">
                    </div>
                    <div class="field image">
                        <label for="">Select Image</label>
                        <input type="file">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                </div>
            </form>
            <div class="link">Alredy signed up? <a href="login.html">Login Now</a></div>
        </section>
    </div>
    <script src="main.js"></script>
</body>
</html>