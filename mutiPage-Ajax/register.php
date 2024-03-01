<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<!-- <style>
    ::selection {
        background-color: gray;
    }

    .container {
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form {
        width: 400px;
        height: 400px;
        background-image: linear-gradient(to bottom, #424242, #212121);
        display: flex;
        align-items: center;
        flex-direction: column;
        border-radius: 0.5rem;
    }

    .title {
        color: wheat;
        margin: 3rem 0;
        font-size: 2rem;
    }

    .input {
        margin: 0.5rem 0;
        padding: 1rem 0.5rem;
        width: 20rem;
        background-color: inherit;
        color: wheat;
        border: none;
        outline: none;
    }

    .username {
        border-bottom: 1px solid wheat;
        transition: all 400ms;
    }

    .username:hover {
        background-color: #424242;
        border: none;
        border-radius: 0.5rem;
    }

    .password {
        border-bottom: 1px solid wheat;
        transition: all 400ms;
    }

    .password:hover {
        background-color: #424242;
        border: none;
        border-radius: 0.5rem;
    }

    .btn {
        height: 3rem;
        width: 20rem;
        margin-top: 3rem;
        background-color: wheat;
        border-radius: 0.5rem;
        border: none;
        font-size: 1.2rem;
        transition: all 400ms;
        box-shadow: 0 0 10px antiquewhite, 0 0 10px antiquewhite;
    }

    .btn:hover {
        background-color: antiquewhite;
        box-shadow: none;
    }
</style> -->

<body>

    <div id="register-container">
        <h2>Register New User</h2>
        <div id="response" style="color: red;">

        </div>
        <form id="register-form">
            <input type="text" id="new-username" name="new-username" placeholder="New Username" ><br>
            <input type="password" id="new-password" name="new-password" placeholder="New Password" ><br>
            <button type="submit">Register</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>