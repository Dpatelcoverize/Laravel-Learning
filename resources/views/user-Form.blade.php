<!-- <div>
    <h2 class="form-title">Add New User</h2>
    <form action="/users" method="POST">
        <div class="form-group">
        @csrf
        <label for="name"></label>
        <input type="text" placeholder="Enter your name" id="name" name="name" required><br><br>

        <label for="email"></label>
        <input type="email" placeholder="Enter your email" id="email" name="email" required><br><br>

        <button type="submit">Add User</button>
</div>
<style>
    .form-group{
        display: flex;
        flex-direction: column;
        width: 300px;
    }
    label{
        font-size: 18px;
        margin-bottom: 5px;
    }
    input{
        padding: 8px;
        font-size: 16px;
        margin-bottom: 15px;
    }
    button{
        padding: 10px;
        font-size: 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover{
        background-color: #45a049;
    }
    .form-title{
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
        background-color: #f2f2f2;
        padding: 10px;
    }
    /* form{
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    } */
</style> -->
<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f4f4;
        }
    

        .form-container {
            width: 350px;
            margin: 80px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        input {
            width: 90%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .submit-btn {
            background: green;
            color: white;
        }

        .reset-btn {
            background: red;
            color: white;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Registration Form</h2>

    <form action="/submit" method="POST">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" placeholder="Enter your name">

        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email">

        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter password">

        <button type="submit" class="submit-btn">Submit</button>
        <button type="reset" class="reset-btn">Reset</button>
    </form>
</div>

</body>
</html>