<?php

$host = 'sql12.freesqldatabase.com';
$dbname = 'sql12625052';
$dbuser = 'sql12625052';
$password = 'IrYI8vMNgQ';
$port = 3306;

try {
    $dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8";
    $db = new PDO($dsn, $dbuser, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$itemToUpdate = $_POST['itemToUpdate'];

switch ($itemToUpdate) {
    case 'name':
        $name = $_POST['name-input'];
        $username = $_POST['username'];
        $updateStmt = $db->prepare("UPDATE User_Info SET name = ? WHERE username = ?");
        $updateSuccess = $updateStmt->execute([$name, $username]);
        break;
    case 'password':
        $password = $_POST['password-input'];
        $username = $_POST['username7'];
        $updateStmt = $db->prepare("UPDATE User_Info SET password = ? WHERE username = ?");
        $updateSuccess = $updateStmt->execute([$password, $username]);
        break;
    case 'username':
        $newUsername = $_POST['username-input'];
        $username = $_POST['username1'];
        $updateStmt = $db->prepare("UPDATE User_Info SET username = ? WHERE username = ?");
        $updateSuccess = $updateStmt->execute([$newUsername, $username]);
        break;
    case 'email':
        $email = $_POST['email-input'];
        $username = $_POST['username2'];
        $updateStmt = $db->prepare("UPDATE User_Info SET email = ? WHERE username = ?");
        $updateSuccess = $updateStmt->execute([$email, $username]);
        break;
    case 'phone':
        $phone = $_POST['phone-input'];
        $username = $_POST['username3'];
        $updateStmt = $db->prepare("UPDATE User_Info SET phone = ? WHERE username = ?");
        $updateSuccess = $updateStmt->execute([$phone, $username]);
        break;
    case 'birthday':
        $birthday = $_POST['birthday-input'];
        $username = $_POST['username4'];
        $updateStmt = $db->prepare("UPDATE User_Info SET birthday = ? WHERE username = ?");
        $updateSuccess = $updateStmt->execute([$birthday, $username]);
        break;
    case 'gender':
        $gender = $_POST['gender-input'];
        $username = $_POST['username5'];
        $updateStmt = $db->prepare("UPDATE User_Info SET gender = ? WHERE username = ?");
        $updateSuccess = $updateStmt->execute([$gender, $username]);
        break;
    case 'picture':
        $picture = $_POST['picture-input'];
        $username = $_POST['username6'];
        $updateStmt = $db->prepare("UPDATE User_Info SET propic = ? WHERE username = ?");
        $updateSuccess = $updateStmt->execute([$picture, $username]);
        break;
    default:
        $updateSuccess = false;
        break;
}

if ($updateSuccess) {
    header('Location: /Pr/Adacc.html');
    
} else {
    echo "Update failed!";
}
?>
