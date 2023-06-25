<!DOCTYPE html>
<html>
  <head>
    <title>Surgery Requests - Orthopedic Surgery Hospital</title>
    <link rel="stylesheet" type="text/css" href="surgery.css">
  </head>
  <body>
    <header>
      <h1>Orthopedic Surgery Clinic</h1>
      <nav>
        <ul>
          
        </ul>
      </nav>
    </header>
    <section>
      <h2>Surgery Requests</h2>
      <table>
  <thead>
    <tr>
      <th>Patient Name</th>
      <th>ID</th>
      <th>Age</th>
      <th>Surgery Type</th>
      <th>Doctor Name</th>
      <th>Room for Surgery</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      // Connect to the database
      $host = "localhost:3307";
      $user = "root";
      $password = "";
      $database = "project";
      $conn = mysqli_connect($host, $user, $password, $database);

      // Check if the connection was successful
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Fetch the surgery requests from the database
      $sql = "SELECT * FROM surgery_requests";
      $result = mysqli_query($conn, $sql);

      // Loop through each row in the result set and display it in the table
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["patientname"] . "</td>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["surgerytype"] . "</td>";
        echo "<td>" . $row["doctor_name"] . "</td>";
        echo "<td>" . $row["room_for_surgery"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>";
        echo '<button type="button" class="btn btn-success">Accept</button>
              <button type="button" class="btn btn-danger">Reject</button>';
        echo "</td>";
        echo "</tr>";
      }

      // Close the database connection
      mysqli_close($conn);
    ?>
  </tbody>
</table>
    </section>
    <script src="surgery.js"></script>
  </body>
</html>