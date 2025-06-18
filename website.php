<html>
<head>
<title>Student Record System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

<h1>Student Registration</h1>

<form method ="POST" action="website.php">
    <input type="text" name="name" placeholder="Name*" style="width: 300px;" required>
    <input type="number" name="age" placeholder="Age*" style="width: 300px;"min="1" max="150" required>
    <input type="email" name="email" placeholder="Email*" style="width: 300px;" required>
    <input type="submit" name ="sb" value="Add Student" style="width: 300px; height: 30px;">
    <p class="note">All fields are required* </p>
</form>

</div>
<script src="form.js"></script>
<?php
$con = mysqli_connect("localhost","root","Anushka@123","school_db");

 // Handle Delete via GET
    if (isset($_GET['delete'])) {
        $delete_id = intval($_GET['delete']);
        mysqli_query($con, "DELETE FROM students WHERE id = $delete_id");
        echo "<p style='color: green;'>Student with ID $delete_id deleted.</p>";
    }
if(isset($_POST["sb"]))
{

$name= $_POST["name"];
$age= $_POST["age"];
$email= $_POST["email"];

$query= "INSERT INTO students(name,age,email) VALUES('$name','$age','$email')";

$execute=mysqli_query($con,$query);

echo "<p style='color: green;'>Student added successfully!</p>";


}



$result = mysqli_query($con, "SELECT * FROM students");

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Email</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td><a class='delete' href='website.php?delete={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No student records found.</p>";
    }

    mysqli_close($con);
    ?>


</body>
</html>