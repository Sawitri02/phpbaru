<html>
    <body>
    welcome <?php echo $_POST["firstname"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>

    $servername="localhost";
    $username="ntirsnwobilwzk";
    $password="08b4ff182483f29b018680682fda403db0d22af5ec0066844fccbdb45f2a5ec1";
    $sort="5432";
        
    $dbname="dcnqh7lcj6d95o";
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];

    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check Connection
    if ($conn->connect_error) {
        die("Connection Failed: ". $conn -> connect_error);
    }
    $sql = "INSERT INTO data_penjualan (Hari,Tanggal,Kegiatan,curah_hujan,Penjualan)
    VALUE ('$firstname', '$lastname', '$email')";

    if ($conn -> query($sql) === TRUE) {
        echo "New Records Created Successfully";
    } else {
        echo 'Error' . $sql . "<br>". $conn->error;
    }

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT id, firstname, lastname, FROM MyGuests"
    ?>
    </body>
</html>
