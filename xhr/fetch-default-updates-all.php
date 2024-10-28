<?php

    include '../classes/Crud.php';
    $crud = new Crud();
    $uddUpdates=$crud->Read('recent_updates',"1 order by `id` desc");

    // UDD SCHEME
    if ($uddUpdates) {
        $output = '';
        $c=0;
        foreach ($uddUpdates as $row) {
            $c++;
            $updateId = htmlspecialchars($row['id']); 
            $updateHead = htmlspecialchars($row['head']);
            $title = htmlspecialchars($row['title']); 
            $date = date('F j, Y', strtotime($row['date']));
            $encodedUpdateId = base64_encode($updateId);  
        ?>           
        <li>
            <div class="tour-include-exclude radius-6 mb-3"
                style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 20px;">

                    <div class="row">
                    
                        <div class="tour-details-content col-sm-12 col-md-9 col-lg-9" style="border-left: 2px solid red; padding: 15px;">
                        <a href="recent-update-details?ruid=<?= $encodedUpdateId; ?>"  >

                        <div class="includ-exclude-point">
                            <div class="d-flex gap-4">
                                <h5 class=" title line-clamp-2" style="color: rgb(189, 157, 226) !important;">
                                    <?= $updateHead; ?></h5>
                                
                                <div>
                                    <?php
                                        if($c==1){
                                            echo '<img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px">';
                                        }
                                    ?>
                                </div>
                            </div>

                            <p class="mt-2 fw-3 fs-5 pera" ><?= $title; ?></p>

                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                <div class="d-flex align-items-center gap-8">

                                <p class="date">
                                    <?= date('F j, Y', strtotime($date)); ?>
                                </p>

                                </div>

                            </div>
                        </div>
                        <div class="divider"></div>
                     
                        </a>
                        </div>
                

                        <div class="col-sm-12 col-md-3 col-lg-3 mt-2 d-flex justify-content-center aligin-items-center d-flex ">
                        <div>
                            <a href="recent-update-details?ruid=<?= $encodedUpdateId; ?>"  >
                                <p style="font-size: small; font-weight: bold; color: rgb(69, 139, 219); border-radius: 6px; border: 1px dotted rgb(19, 130, 194); padding: 7px;">See details</p>
                            </a>
                        </div>
                        </div>

                    </div>                                                                    

                </div>
        </li>

    <?php  }
        
        } else {
            echo '<p style="color:red; font-weight:700">No schemes found.</p>';
        }

    ?>
