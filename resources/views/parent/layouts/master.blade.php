<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <title>Parent Dashboard | Rehab Care</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: poppins;
        }

        body{
            overflow-x: hidden;
        }
        .c-dashboard-header{
            width: calc(100vw - 200px); /* Added space after the '-' */
            height: 50px;
            background-color: #3498db;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0; /* Added to keep the header at the top */
            left: 200px; /* Adjusted to align with the sidebar */
            right: 0; /* Added to ensure full width */
        }

        .c-logo-bar{
            height: 50px ;
            background-color:#16a085 ;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .c-logo-text{
            color: white;
            text-transform: uppercase;
        }

        .c-dashboard-header h3{
            color: white;
            text-align: center;
            text-transform: uppercase;
        }

        .c-left-sidebar{
            position: fixed;
            width: 200px;
            height: calc("100vh-5opx"); /* Removed calculation for simplicity */
            background-color: #27ae60;
            top: 0; /* Added to align with the top */
            left: 0; /* Adjusted to start from the left */
            bottom: 0; /* Added to ensure full height */
        }

        .c-dashboard-content{
            margin-left: 200px;
            padding-top: 50px;
            width: calc(100vw - 200px);
            overflow-x: hidden;
            overflow-y: auto;
        }

        .c-left-sidebar ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .c-left-sidebar ul li {
            padding: 10px; /* Added padding to list items */
        }

        .c-left-sidebar ul li a {
            text-decoration: none;
            color: white;
            display: block;
        }

        .c-left-sidebar ul li a:hover {
            color: beige;
        }
    </style>
</head>
<body>

<header class="c-dashboard-header">
    <h3>Parent Dashboard</h3>
</header>

<main>
    <div class="c-left-sidebar">
        <div class="c-logo-bar">
        <h3 class="c-logo-text"><a href="/">Rehab Care</a></h3>
        </div>
        <ul>
            <li><a href="/parent/entry-form">Pre-Admit Form</a></li>
            <li><a href="/parent">Patient Activity</a></li>
            <li><a href="/parent">Leave A Review</a></li>
        </ul>
    </div>

    <div class="c-dashboard-content">
        @yield('content')
    </div>
</main>

</body>
</html>
