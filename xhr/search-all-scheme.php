<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$baseDir = '../ulb/'; 

if (isset($_POST['query']) && !empty($_POST['query']) && isset($_POST['ulb']) && !empty($_POST['ulb'])) {
    $query = $_POST['query'];
    $ulb = $_POST['ulb'];
    $crudFile = $baseDir . $ulb . '/classes/Crud.php';

    if (file_exists($crudFile)) {
        include $crudFile;

        if (class_exists('Crud')) {
            $crud = new Crud();
            
            // Safely prepare and debug SQL query
            // $Schemes = $crud->Read('schemes', "`scheme_name` LIKE '%$query%' ORDER BY `id` DESC");
            $Schemes=$crud->Read('schemes',"`scheme_name` LIKE '%{$query}%' order by `id` desc");
            // print_r($Schemes);
            
            // Fetch schemes based on the search query
            // $Schemes = $crud->Read('schemes', $sql, $params);
            
            if ($Schemes) {
                $output = '';          
                foreach ($Schemes as $row) {        
                    $schemeId = htmlspecialchars($row['id']); 
                    $image = htmlspecialchars($row['image']); 
                    $pdf = htmlspecialchars($row['pdf']); 
                    $schemeName = htmlspecialchars($row['scheme_name']);
                    $date = date('F j, Y', strtotime($row['date'])); 
                    $encodedSchemeId = base64_encode($schemeId);
                    $encodedUlb = base64_encode($ulb);
                ?>
                    <li class="list" style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">
                        <a href="scheme-details?id=' <?= $encodedSchemeId; ?> '&ulb=' <?= htmlspecialchars($ulb); ?> '">
                            <div style="display: flex;align-items: center;gap: 2rem;">

                                <div>
                                    <?php
                                        if($row['image']){
                                    ?>                               
                                        <img src="ulb/<?= htmlspecialchars($ulb); ?>/admin/<?= $row['image']; ?>" style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
                                    <?php
                                        }else{
                                    ?>
                                        <img src="admin/img/others/empty.jpg" style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div>
                                    <div class="title line-clamp-2">                               
                                        <h6>                                        
                                            <?= $row['scheme_name'] ?> 
                                        </h6>                                                                  
                                    </div>
                                    <div class="d-flex justify-content-between flex-wrap gap-8">
                                        <div class="d-flex align-items-center gap-8">

                                        <p class="date">
                                            <?= date('F j, Y', strtotime($row['date'])) ?>
                                        </p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </a>    
                        <div>

                        <?php
                            if($row['pdf']){
                        ?>
                            <a href="ulb/<?= htmlspecialchars($ulb); ?>/admin/<?= $row['pdf']; ?>" target="_blank">
                            <img src="admin/img/organizationInfo/pdfcover.png" style="width: 30px;height: 30px;cursor: pointer;" alt="">
                            </a>
                        <?php
                            }
                        ?>

                        </div>
                    </li>
                <?php

                }
              
            } else {
                echo '<p style="color:red; font-weight:700">No schemes found.</p>';
            }
        } else {
            echo '<div class="card">Class `Crud` not found.</div>';
        }
    } else {
        echo '<div class="card">Crud.php not found at ' . htmlspecialchars($crudFile) . '</div>';
    }
} else {
    include '../classes/Crud.php';
    $crud = new Crud();
    $query = $_POST['query'];
    $UDDSchemes=$crud->Read('schemes',"`scheme_name` LIKE '%{$query}%' order by `id` desc");
    
    // UDD SCHEME
    if ($UDDSchemes) {
            $output = '';
            foreach ($UDDSchemes as $udd) {
                $schemeId = htmlspecialchars($udd['id']); 
                $image = htmlspecialchars($udd['image']); 
                $schemeName = htmlspecialchars($udd['scheme_name']);
                $date = date('F j, Y', strtotime($udd['date'])); 
                $encodedSchemeId = base64_encode($schemeId);
            ?>
                <li class="list" style="display: flex;justify-content: space-between;align-items: center;padding-left: 22px;padding-right: 22px;">
                    <a href="scheme-details?id=' <?= $encodedSchemeId; ?> '">
                        <div style="display: flex;align-items: center;gap: 2rem;">

                            <div>
                                <?php
                                    if($udd['image']){
                                ?>                           
                                    <img src="admin/<?= $udd['image']; ?>" style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
                                <?php
                                    }else{
                                ?>
                                    <img src="admin/img/others/empty.jpg" style="width: 6rem;height: 5rem;border-radius:6px;" alt="">
                                <?php
                                    }
                                ?>
                            </div>
                            <div>
                                <div class="title line-clamp-2">
                            
                                    <h6>                                      
                                        <?= $udd['scheme_name'] ?>
                                    </h6>
                                                                
                                </div>
                                <div class="d-flex justify-content-between flex-wrap gap-8">
                                    <div class="d-flex align-items-center gap-8">

                                    <p class="date">
                                        <?= date('F j, Y', strtotime($udd['date'])) ?>
                                    </p>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </a>
                    <div>

                    <?php
                        if($udd['pdf']){
                    ?>
                        <a href="admin/<?= $udd['pdf']; ?>" target="_blank">
                        <img src="admin/img/organizationInfo/pdfcover.png" style="width: 30px;height: 30px;cursor: pointer;" alt="">
                        </a>
                    <?php
                        }
                    ?>

                    </div>
                </li>
            <?php
                
            }
            
        } else {
            echo '<p style="color:red; font-weight:700">No schemes found.</p>';
        }
    
}
?>
