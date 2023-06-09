<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigMac | Admin Table</title>
    <link rel="icon" type="image/x-icon" href="../images/logoBigMac.png">
    <!-- Link to CSS -->
    <link rel="stylesheet" href="../dashboard/admin.css">

    <!-- Link Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="bodyPage">
<nav class="nav">
        <!-- top -->
        <div class="top-nav">
            <div class="logo">
                <!-- menu icon -->
                <i class='bx bx-menu icon'></i>
                <span class="logo-name">BigMac</span>
            </div>
            <div class="profile">

                <span class="admin-name">Luqman</span>
            </div>
        </div>
        <!-- sidebar -->
        <div class="sidebar">
            <div class="logo">
                <!-- menu icon -->
                <i class='bx bx-menu icon'></i>
                <span class="logo-name">BigMac</span>
            </div>
            <!-- content -->
         <div class="sideBar-content">
            <ul class="lists">
                <!-- dashboard -->
                <li class="list">
                    <a href="../Adacc.html" class="nav-link">
                        <!-- add icon -->
                        <i class='bx bxs-dashboard icon'></i>
                        <span class="link">Dashboard</span>
                    </a>
                </li>
                <!-- account -->
                <li class="list">
                    <a href="../Adacc.html" class="nav-link">
                        <i class='bx bxs-user-account icon' ></i>
                        <span class="link">Acount</span>
                    </a>
                </li>
                <!-- menu -->
                <li class="list">
                    <a href="adminMenu.php" class="nav-link">
                        <i class='bx bxs-food-menu icon' ></i>
                        <span class="link">Order</span>
                    </a>
                </li>
                <!-- table -->
                <li class="list">
                    <a href="adminTable.php" class="nav-link">
                        <i class='bx bxs-bookmark icon'></i>
                        <span class="link">Table</span>
                    </a>
                </li>
            </ul>

            <!-- bottom-sidebar -->
            <div class="bottom-sidebar-content">
                <!-- settings -->
                <ul class="lists">
                    <li class="list">
                        <a href="" class="nav-link">
                            <i class='bx bxs-cog icon'></i>
                            <span class="link">Settings</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="" class="nav-link">
                            <i class='bx bx-log-out bx-flip-horizontal icon' ></i>
                            <span class="link">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
         </div>
        </div>
    </nav>
    <!-- overlay -->
    <section class="overlay"></section>
    
    <script src="../dashboard/admin.js"></script>
</body>
</html>
<?php
// @include 'config.php';
// $host = "localhost";
// $database = "webprogramming";
// $user = "root";
// $pass = "";

// $connection = mysqli_connect($host, $user, $pass, $database);
// if (mysqli_connect_errno()) {
//     echo "Database connection failed";
//     die(mysqli_connect_error());
// }

// $sql = "SELECT b.*, c.Item, c.Quantity, c.Price FROM bookingdb b 
//         LEFT JOIN cartdb c ON b.Username = c.Username";
// $result = $connection->query($sql);

// if (mysqli_num_rows($result) > 0) {

//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "<tr>";
//         echo "<td>" . $row['BookingID'] . "</td>";
//         echo "<td>" . $row['Username'] . "</td>";
//         echo "<td>" . $row['Name'] . "</td>";
//         echo "<td>" . $row['Phone Number'] . "</td>";
//         echo "<td>" . $row['Date and Time'] . "</td>";
//         echo "<td>" . $row['Amount People'] . "</td>";
//         echo "<td>" . $row['Table Number'] . "</td>";
//         // echo "<td>" . $row['Item'] . "</td>";
//         // echo "<td>" . $row['Quantity'] . "</td>";
//         echo "<td>" . $row['Price'] . "</td>";
//         echo "</tr>";
// //     }

//     echo "</table>";
// } else {
//     echo "No available data.";
// }

// $connection->close();


$host = "localhost";
$database = "webprogramming";
$user = "root";
$pass = "";

$connection = mysqli_connect($host, $user, $pass, $database);
if (mysqli_connect_errno()) {
    echo "Database connection failed";
    die(mysqli_connect_error());
}

$sql = "SELECT * FROM bookingdb";
$result = $connection->query($sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['BookingID'] . "</td>";
        echo "<td>" . $row['Username'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Phone Number'] . "</td>";
        echo "<td>" . $row['Date and Time'] . "</td>";
        echo "<td>" . $row['Amount People'] . "</td>";
        echo "<td>" . $row['Table Number'] . "</td>";
        // echo "<td>" . $row['Item'] . "</td>";
        // echo "<td>" . $row['Quantity'] . "</td>";
        // echo "<td>" . $row['Price'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No available data.";
}

$connection->close();

?>