<?php
session_start();


?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Dobrodošli</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background: url('3.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #666;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Dobrodošli, <?= htmlspecialchars($_SESSION['username']) ?></h2>
        <p>Prijavljeni ste!</p>
        <a href="logout.php" class="btn btn-danger">Odjavi se</a>
        <br><br>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="xmlFile" class="form-label">XML datoteka</label>
                <input class="form-control" type="file" id="xmlFile" name="xml_file" required>
            </div>
            <div class="mb-3">
                <label for="xsdFile" class="form-label">XSD datoteka</label>
                <input class="form-control" type="file" id="xsdFile" name="schema_file" required>
            </div>
            <button type="submit" class="btn btn-primary">Provjeri!</button>
        </form>
        <br>
        <p><a href="index.php">Povratak na početnu stranicu</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
