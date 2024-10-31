<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 60%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4CAF50;
            text-align: center;
        }

        label {
            font-size: 1.2em;
            margin-bottom: 10px;
            display: block;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1.2em;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            background-color: #e7f4e4;
            color: #333;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
        }

        .fail {
            background-color: #f8d7da;
            color: #721c24;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Penilaian Mahasiswa</h2>
        <form method="POST">
            <label for="mata_kuliah1">Mata Kuliah 1:</label>
            <input type="number" name="mata_kuliah1" required><br>

            <label for="mata_kuliah2">Mata Kuliah 2:</label>
            <input type="number" name="mata_kuliah2" required><br>

            <label for="mata_kuliah3">Mata Kuliah 3:</label>
            <input type="number" name="mata_kuliah3" required><br>

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai1 = $_POST['mata_kuliah1'];
            $nilai2 = $_POST['mata_kuliah2'];
            $nilai3 = $_POST['mata_kuliah3'];

            // Hitung rata-rata
            $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

            // Tentukan status kelulusan
            $status = ($rata_rata >= 60) ? "Lulus" : "Tidak Lulus";

            // Tentukan kelas CSS untuk hasil
            $class = ($rata_rata >= 60) ? "success" : "fail";

            // Tampilkan hasil
            echo "<div class='result $class'>";
            echo "<h3>Hasil Penilaian</h3>";
            echo "Nilai Rata-Rata: " . number_format($rata_rata, 2) . "<br>";
            echo "Status Kelulusan: " . $status;
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
