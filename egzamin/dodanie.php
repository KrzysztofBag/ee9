<?php
        $conn = mysqli_connect('localhost', 'root', '', 'ee09') or die("Problemy z połączeniem");
        $nrkaretki = $_POST['nrkaretki'];
        $pierwszy = $_POST['pierwszy'];
        $drugi = $_POST['drugi'];
        $trzeci = $_POST['trzeci'];
        $q = "INSERT INTO ratownicy  VALUES (NULL, '$nrkaretki', '$pierwszy', '$drugi', '$trzeci'); ";
        $wynik = mysqli_query($conn, $q);
        if($wynik)
            echo "Do bazy zostało wysłane zapytanie: $q";
        mysqli_close($conn);
    ?>