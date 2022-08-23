<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODGO Main Page</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            color: white;
            background: url(burger.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: rgba(9, 9, 9, 0.73);
            color: #fff;
        }

        /* LOGO */
        .logo {
            font-size: 39px;
            padding-left: 20px;
            font-family: sans-serif;
        }

        .nav-links a {
            color: #fff;
        }

        /* NAVBAR MENU */
        .menu {
            display: flex;
            gap: 1em;
            font-size: 18px;
        }

        .menu li:hover {
            background-color: #000000;
            border-radius: 5px;
        }

        .menu li {
            padding: 5px 14px;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        /* css for box */
        .box {
            position: absolute;
            top: 25%;
            left: 10%;
            background: rgba(9, 9, 9, 0.508);
            padding: 2rem;
            border-radius: 0.6rem;

        }

        .box h2 {
            color: white;
            text-align: center;
            font-family: sans-serif;
        }

        .box .inputBox {
            position: relative;
        }

        .box .inputBox input {
            width: 100%;
            padding: 0.6;
            font-size: 1rem;
        }

        .box button[type="submit"] {
            border: none;
            outline: none;
            color: rgb(233, 233, 233);
            background-color: #b82e2e;
            padding: 0.625rem 1rem;
            cursor: pointer;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 1rem;
        }

        .box input[type=email] {
            padding: 10px;
            border-radius: 10px;
            border-style: none;
        }

        #countdown {
            color: #fff;
            padding: 10px;
            font-size: 2rem;
        }

        /* css for popup*/
        .btn {
            padding: 10px 60px;
            background-color: #fff;
            border: 0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius: 30px;
        }

        .popup {
            width: 350px;
            background: rgb(250, 247, 225);
            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            padding: #333;
            visibility: hidden;
            transition: transform 0.3s;
        }

        .popup img {
            width: 100px;
            margin-top: -50px;
            border-radius: 50%;
        }

        .popup h2 {
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
            color: black;
        }

        .popup button {
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background-color: #b82e2e;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
        }

        .open-popup {
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);

        }

        .footer {
            bottom: 0;
            position: absolute;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">FoodGo.</div>
        <ul class="nav-links">
            <div class="menu">
            
                <li><a href="plate.php">plate</a></li>
                <li><a href="hamburger.php">hamburger</a></li>
                <li><a href="cheeseburger.php">cheeseburger</a></li>

            </div>
        </ul>
    </nav>
    <br>