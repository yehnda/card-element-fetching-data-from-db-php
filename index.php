<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reveal";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database (replace with your query)
$sql = "SELECT id, job_title, employer, skills FROM reveal";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();
?>

<?php foreach ($data as $item) { ?>
    <div class="card">
        <div class="icons">
            <span>Edit Icon</span> | <span>Delete Icon</span>
        </div>
        <h2><?php echo $item['job_title']; ?></h2>
        <p><?php echo $item['employer']; ?></p>
        <p><?php echo $item['skills']; ?></p>

        <button class="verify-button" onclick="toggleVerification(this)">Verify</button>
        <div class="verification hidden">
            <!-- Verification content here -->
        </div>
    </div>
<?php } ?>


    
</body>
<script src="./script.js"></script>
</html>
