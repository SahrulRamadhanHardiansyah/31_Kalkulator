<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Online</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <form>
        <h1>Hasil Perhitungan Kalkulator Online</h1>
        <?php 
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            if ($angka1 === null || $angka2 === null || $angka1 === '' || $angka2 === '') {
                echo "<p style='color: red;'>Error: Semua input harus diisi!</p>";
                echo "<a href='index.php'>Kembali</a>";
                exit;
            }

            if (!is_numeric($angka1) || !is_numeric($angka2)) {
                echo "<p style='color: red;'>Error: Semua input harus diisi!</p>";
                echo "<a href='index.php'>Kembali</a>";
                exit;
            }

            switch ($operator) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                case 'x':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    if ($angka2 == 0) {
                        echo "<p style='color: red;'>Error: Tidal bisa dibagi dengan nol!</p>";
                        echo "<a href='index.php'>Kembali</a>";
                        exit;
                    }
                    $hasil = $angka1 / $angka2;
                    break;
                default:
                    echo "<p style='color: red;'>Error: Operator tidak valid!</p>";
                    echo "<a href='index.php'>Kembali</a>";
                    error_log("Invalid Operotor");
                    exit;
            }

            echo $angka1 . ' ' . $operator . ' ' . $angka2 . ' ' . '=' . ' ' . $hasil

        ?>

        <a href='index.php'>Kembali</a>
        <a type="button" onclick="return window.print()">Cetak</a>
        
    </form>
    
</body>
</html>