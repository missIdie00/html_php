<?php
define('dns', 'mysql:host=127.0.0.1;dbname=examen1; charset=UTF8');
define('user', 'root');
define('pass', '');
$conn = new PDO(dns, user, pass);
$success = false;
if (isset($_POST["post_id"])) {
    $idPost = $_POST["post_id"];
    $statement = $conn->prepare("DELETE FROM proprietaire WHERE idp = :id");
    $result = $statement->execute(array(':id' => $idPost));
    if (!empty($result)) {
        $success = true;
    }
}
echo json_encode(array(
    'success' => $success
));
