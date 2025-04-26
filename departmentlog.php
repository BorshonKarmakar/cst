<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header {
    background: #2c3e50;
    color: white;
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px; /* লোগো ও টেক্সটের মাঝে কিছু গ্যাপ যোগ করবে */
}

        nav { background: #34495e; padding: 10px; text-align: center; }
        nav a { color: white; text-decoration: none; padding: 10px 20px; }
        .container { padding: 20px; text-align: center; }
        footer { background: #2c3e50; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
        @media screen and (max-width: 600px) {
    .hcst {
        font-size: 20px !important;
    }
}
   

        .admin{
            font-size: 20px;
        }
        .logout{
            padding: 10px 40px;
            background-color: black;
            border: 1px solid white;
            border-radius: 15px 0px 5px 0px;
        }
        .logout:hover{
            background-color: white;
            color: black;
            transition: .5s;
        }
        .logout a:hover{
            color: black;
            transition: .5s;
        }
        .logout a{
            text-decoration: none;
            color: white;
        }
        @media screen and (max-width: 992px){
            .admin{
                font-size: 15px;
            }
            .logout{
                padding: 6px 20px;
            }
        }
        .mid{
            font-size: 30px;
            padding: 10px 150px;
            background: linear-gradient(black, pink, gray);
            border: 2px solid white;
            border-radius: 20px;

        }
        .mid:hover{
            box-sizing: border-box;
            box-shadow: 3px 4px 3px black;
            transition: .5s;
        }
        .mid a{
            text-decoration: none;
            color: white;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <img src="Dpi logo.png" style="height: 100px; width: 250px;" alt="">
        <h1 class="hcst">Computer Science and Technology</h1>
    </header>
    <div class="log p-4 text-center text-white" style="background-color: black;">
        <p class="admin text-center">You are logged as a Department Admin.</p>
        <button class="logout"><a href="http://localhost/Php/Computer%20Science%20And%20Technology/logout.php">Logout</a></button>
    </div>

    <div class="loginuser-part">
        <button class="mid mx-auto d-block mt-3"><a href="http://localhost/Php/Computer%20Science%20And%20Technology/midresult.php">Update Mid-term result</a></button>
    </div>
   


      <footer>
        <p>&copy; 2025 Computer Science and Technology Department</p>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>