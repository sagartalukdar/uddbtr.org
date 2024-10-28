<?php

$baseDir = '../ulb/'; 

if (isset($_POST['ulb']) && !empty($_POST['ulb'])) {
    $ulb = $_POST['ulb'];
    $crudFile = $baseDir . $ulb . '/classes/Crud.php';

    // Check if the Crud.php file exists before including it
    if (file_exists($crudFile)) {
        include $crudFile;

        // Check if the Crud class is defined
        if (class_exists('Crud')) {
            $crud = new Crud();
            
            // Fetch schemes
            $Schemes = $crud->Read('schemes', '1 ORDER BY `id` DESC');
            
            if ($Schemes) {
                $output = '';
                foreach ($Schemes as $row) {
                    $schemeId = htmlspecialchars($row['id']); 
                    $image = htmlspecialchars($row['image']); 
                    $schemeName = htmlspecialchars($row['scheme_name']);
                    $date = date('F j, Y', strtotime($row['date'])); 
                    $encodedSchemeId = base64_encode($schemeId);
                    $encodedUlb = base64_encode($ulb);

                    $output .= '<div class="card">
                                    <div class="card-content">
                                        <div class="image-container">
                                            <a href="scheme-details?id=' . $encodedSchemeId . '&ulb=' . $encodedUlb . '">
                                                <img src="../ulb/' . htmlspecialchars($ulb) . '/admin/' . $image . '" alt="Scheme Image" class="scheme-image">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h4 class="title">
                                                <a href="scheme-details?id=' . $encodedSchemeId . '&ulb=' . $encodedUlb . '">
                                                    <h6>' . $schemeName . '</h6>
                                                </a>
                                            </h4>
                                            <a href="scheme-details?id=' . $encodedSchemeId . '&ulb=' . $encodedUlb . '">
                                                <div class="info">
                                                    <p class="date">' . $date . '</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>';
                }
                echo $output;
            } else {
                echo '<li>No schemes found.</li>';
            }
        } else {
            echo '<li>Class `Crud` not found in ' . htmlspecialchars($crudFile) . '</li>';
        }
    } else {
        echo '<li>Crud.php not found: ' . htmlspecialchars($crudFile) . '</li>';
    }
} else {
    echo '<li>No ULB specified.</li>';
}
?>
