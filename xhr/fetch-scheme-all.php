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
                $c=0;
                foreach ($Schemes as $row) {
                    $c++;
                    $schemeId = htmlspecialchars($row['id']); 
                    $image = htmlspecialchars($row['image']); 
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
                                        <?php
                                            if($c==1){
                                                echo '<img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px">';
                                            }
                                        ?>
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
