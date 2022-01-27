<!DOCTYPE html>
<html lang="en">
    <body>

        <?php
            echo "<pre>";

                print_r($_POST);

            echo "</pre>";



            if (isset($_POST['submit'])) {
                $surname = $_POST['surname'];
                $firstname = $_POST['firstname'];
                $mailFrom = $_POST['email'];
                //$course = $_POST['course'];
                $message = $_POST['message'];
    

                $mailTo = "thobegak@gmail.com";
                $subject = "Just asking";
                $headers = "From: ".$mailFrom;
                $txt = "Received mail from ".$firstname .$surname"\n\n".$message;

                mail($mailTo, $subject, $txt, $headers);
                header("Location: contact_form_process.php?mailsend");
                echo "Your message has been sent";

            }

        ?>

    </body>
</html>


