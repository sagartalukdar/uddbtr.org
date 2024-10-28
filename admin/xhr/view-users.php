<?php

require_once('../../classes2/DbConfig2.php');

if (isset($_POST['mb_selection'])) {

    $dbConfig = new DbConfig2();

    $mb_selection = $_POST['mb_selection'];
    $conn = $dbConfig->getDatabaseConnection($mb_selection);

    if ($conn !== null) {
        
        try {
        
            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo json_encode($users);
        } catch(PDOException $e) {
            echo json_encode(array('error' => 'Database query error: ' . $e->getMessage()));
        }
    } else {
        echo json_encode(array('error' => 'Failed to establish database connection'));
    }

    exit; 
}

echo json_encode(array('error' => 'mb_selection parameter not provided'));
exit;

?>
