<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$baseDir = '../ulb/'; 

if (isset($_POST['ulb']) && !empty($_POST['ulb'])) {   
    $ulb = $_POST['ulb'];
    $crudFile = $baseDir . $ulb . '/classes/Crud.php';

    if (file_exists($crudFile)) {
        include $crudFile;

        if (class_exists('Crud')) {
            $crud = new Crud();
            
            // Safely prepare and debug SQL query
            // $Schemes = $crud->Read('schemes', "`scheme_name` LIKE '%$query%' ORDER BY `id` DESC");
            $updates=$crud->Read('recent_updates',"1 order by `id` desc");
            // print_r($Schemes);
            
            // Fetch schemes based on the search query
            // $Schemes = $crud->Read('schemes', $sql, $params);
            
            if ($updates) {
                $output = '';
                $c=0;
                foreach ($updates as $row) {
                    $c++;
                    $updateId = htmlspecialchars($row['id']); 
                    $updateHead = htmlspecialchars($row['head']); 
                    $updateTitle = htmlspecialchars($row['title']);
                    $date = date('F j, Y', strtotime($row['date'])); 
                    $encodedUpdateId = base64_encode($updateId);
                    $encodedUlb = base64_encode($ulb);
                ?>    
                    <li>
                        <div class="tour-include-exclude radius-6 mb-3"
                            style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 20px;">

                            <div class="row">
                            
                                <div class="tour-details-content col-sm-12 col-md-9 col-lg-9" style="border-left: 2px solid red; padding: 15px;">
                                <a href="recent-update-details?ruid=<?= $encodedUpdateId; ?>&ulb=<?= $encodedUlb; ?>" >

                                    <div class="includ-exclude-point">
                                        <div class="d-flex gap-4">
                                            <h5 class=" title line-clamp-2" style="color: rgb(189, 157, 226) !important;">
                                                <?= $updateHead; ?>                                                
                                            </h5>    
                                            <div>
                                                <?php
                                                    if($c==1){
                                                        echo '<img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px">';
                                                    }
                                                ?>
                                            </div>                                                  
                                        </div>

                                        <p class="mt-2 fw-3 fs-5 pera" ><?= $updateTitle; ?></p>

                                        <div class="d-flex justify-content-between flex-wrap gap-8">
                                            <div class="d-flex align-items-center gap-8">

                                            <p class="date">
                                                <?= date('F j, Y', strtotime($date)) ?>
                                            </p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="divider"></div>                          
                                </a>
                                </div>                

                                <div class="col-sm-12 col-md-3 col-lg-3 mt-2 d-flex justify-content-center aligin-items-center d-flex ">
                                    <div>
                                        <a href="recent-update-details?ruid=<?= $encodedUpdateId; ?>&ulb=<?= $encodedUlb; ?>" >
                                            <p style="font-size: small; font-weight: bold; color: rgb(69, 139, 219); border-radius: 6px; border: 1px dotted rgb(19, 130, 194); padding: 7px;">See details</p>
                                        </a>
                                    </div>
                                </div>

                            </div>                                                                    

                        </div>
                    </li>
            <?php         
                }               
            } else {
                echo '<p style="color:red; font-weight:700">No Update found.</p>';
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
    $ulb = $_POST['ulb'];
    $UDDUpdates=$crud->Read('recent_updates',"1 order by `id` desc");
    
    // UDD SCHEME
    if ($UDDUpdates) {
                $output = '';
                $c=0;
                foreach ($UDDUpdates as $udd) {
                    $c++;
                    $updateId = htmlspecialchars($udd['id']); 
                    // $image = htmlspecialchars($udd['image']); 
                    $updateHead = htmlspecialchars($udd['head']);
                    $updateTitle = htmlspecialchars($udd['title']);
                    $date = date('F j, Y', strtotime($udd['date'])); 
                    $encodedUpdateId = base64_encode($updateId);
                    $encodedUlb = base64_encode($ulb);
                    ?>    
                    <li>
                        <div class="tour-include-exclude radius-6 mb-3"
                            style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 20px;">

                            <div class="row">
                            
                                <div class="tour-details-content col-sm-12 col-md-9 col-lg-9" style="border-left: 2px solid red; padding: 15px;">
                                <a href="recent-update-details?ruid=<?= $encodedUpdateId; ?>" >

                                    <div class="includ-exclude-point">
                                        <div class="d-flex gap-4">
                                            <h5 class=" title line-clamp-2" style="color: rgb(189, 157, 226) !important;">
                                                <?= $updateHead; ?>                                               
                                            </h5>    
                                            <div>
                                                <?php
                                                    if($c==1){
                                                        echo '<img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px">';
                                                    }
                                                ?>
                                            </div>                                    
                                        </div>

                                        <p class="mt-2 fw-3 fs-5 pera" ><?= $updateTitle; ?></p>

                                        <div class="d-flex justify-content-between flex-wrap gap-8">
                                            <div class="d-flex align-items-center gap-8">

                                            <p class="date">
                                                <?= date('F j, Y', strtotime($date)) ?>
                                            </p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="divider"></div>                          
                                </a>
                                </div>                

                                <div class="col-sm-12 col-md-3 col-lg-3 mt-2 d-flex justify-content-center aligin-items-center d-flex ">
                                    <div>
                                        <a href="recent-update-details?ruid=<?= $encodedUpdateId; ?>" >
                                            <p style="font-size: small; font-weight: bold; color: rgb(69, 139, 219); border-radius: 6px; border: 1px dotted rgb(19, 130, 194); padding: 7px;">See details</p>
                                        </a>
                                    </div>
                                </div>

                            </div>                                                                    

                        </div>
                    </li>
            <?php         
                } 
            } else {
                echo '<p style="color:red; font-weight:700">No Update found.</p>';
            }
    
}
?>
