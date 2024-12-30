
<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
</head>
<body>

    <h1>User Registration</h1>

    <form action="<?php $_PHP_SELF ?>" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" pattern="[A-Za-z\s]+" title="Only letters allowed" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" min="0" required><br><br>

        <label for="email">Group:</label><br>
        <input type="Group" id="Group" name="Group" required><br><br>

        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>

        <label>Agree</label><br>
        <input type="checkbox" name="Agree"> <br>
       

        <label>Languges</label><br>
        <select id="Languges" name="Languges[]" multiple required>
            <option value="html">html</option>
            <option value="css">css</option>
            <option value="javascript">javascript</option>
            <option value="php">php</option>
            <option value="node.js">node.js</option>
        </select><br><br>

        <input type="submit" value="Submit">

    </form>
    <?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $age = test_input($_POST["age"]);
    $Group = test_input($_POST["Group"]);
    $gender = test_input($_POST["gender"]);
    $Agree = test_input($_POST["Agree"]) ;
    $Languges = isset($_POST["Languges"]) ? implode(", ", $_POST["Languges"]) : "";

    

    echo "<h2>Your Information:</h2>";
    echo "<p>Name: " . $name . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Age: " . $age . "</p>";
    echo "<p>Group:".$Group."</p>";
    echo "<p>Gender: " . $gender . "</p>";
    echo "<p>Agree: " . $Agree . "</p>";
    echo "<p>Languges: " . $Languges . "</p>";

}

?>
    
</body>
</html>