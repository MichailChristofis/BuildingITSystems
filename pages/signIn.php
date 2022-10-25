<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../styling/signInUp.css">
</head>
<body>
    <!-- RecipeWise title -->
    <h1>RecipeWise</h1>

    <div class="centre">
        <!-- Sign in title -->
        <h2>Sign in</h2>

        <!-- Labels and fields -->
        <div class="alignLeft">
            <form>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email"><br>
                <label for="password">Password:</label><br>
                <input type="text" id="password" name="password"><br>
            </form>
        </div>
        
        <!-- Link to sign up page -->
        <div class="signUpDiv"><a class="signUpLink" href="signUp.php">New? Create an account!</a><br></div>

        <!-- Submit button -->
        <button><span>Sign In</spa></button>
    </div>
</body>
</html>