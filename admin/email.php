$create = $crud->Create($data, "stud_registration");

        if ($create) {
            $to = $email;
            $from = "no-reply@sitinternational.org";
            $subject = "Registration Successful: SIT International";
            // $message = "<h2>Mail Received!</h2>";
            $message .= "<p style='font-size:16px; line-height:18px'>Dear $name, <br><br>We are pleased to inform you that your application for registration at SmartBTR Institute of Technology International has been successfully received and processed. Congratulations on taking this important step towards furthering your education and career goals.<br><br> Your registration details have been duly noted, and you are now officially enrolled for the upcoming academic session. We appreciate the time and effort you invested in completing the application process.<br><br> Kindly use the following details to login to our portal:<br><br>

                Registration ID: <b>$registration_id</b><br>
                Password: <b>$birth_date</b><br><br><b>To complete your enrollment process, please log in to sitinternational.org and apply for your desired course.</b><br><br>Please ensure to keep this acknowledgment email for your records. It contains important information regarding your registration.<br><br>Once again, congratulations on your successful registration. We look forward to welcoming you to SmartBTR Institute of Technology International and wish you every success in your academic pursuits.<br><br>Best regards,<br><br>Admission Team,<br>SmartBTR Institute of Technology International</p>";

            $header = "From:SIT International <" . $from . "> \r\n";
            $header .= "MIME-Version: 1.0 \r\n";
            $header .= "Content-type: text/html;charset=UTF-8 \r\n";

            $result = mail($to, $subject, $message, $header);
            echo json_encode(['status' => 'success', 'message' => 'Registration successful']);
            exit;
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error during registration']);
            exit;
        }