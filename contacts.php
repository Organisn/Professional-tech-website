<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="assets/logo.ico">
        <title data-i18n="pageTitle.contacts">
            Freschi Andrea > Contacts
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/eb458e1abe.js" crossorigin="anonymous"></script>
        <script src="translations.js"></script>
        <?php
			function validation($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
			use PHPMailer\PHPMailer\Exception;
		?>
    </head>
    <body style="background-image: url('assets/bg.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; min-height: 100vh;">
        <nav class="navbar sticky-top navbar-expand-md bg-body-tertiary bg-opacity-75 py-0 mb-3">
            <div class="container-fluid align-self-stretch">
                <a class="navbar-brand d-flex align-items-center my-2 ms-3" href="home.html">
                    <i class="fa-solid fa-cow fa-2x d-inline-block" alt="FA"></i>
                    <!-- <img src="assets/logo.ico" class="img-fluid d-inline-block float-start" style="max-height: 3rem;">
                    <p class="d-inline-block fs-3 m-0 ms-3"><em>FA</em></p> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--<div class="collapse navbar-collapse h-100" id="navbar">
                    <div class="navbar-nav h-100">
                        <a class="btn btn-outline-dark h-md-100 px-3 fs-5 text-nowrap border-0 rounded-0 d-flex align-items-center justify-content-center" href="about.html" data-i18n="nav.about">
                            About
                        </a>
                        <a class="btn btn-outline-dark h-md-100 px-3 fs-5 text-nowrap border-0 rounded-0 d-flex align-items-center justify-content-center" href="services.html" data-i18n="nav.services">
                            Services
                        </a>
                        <a class="btn btn-outline-dark h-md-100 px-3 fs-5 text-nowrap border-0 rounded-0 d-flex align-items-center justify-content-center" href="supplies.html" data-i18n="nav.supplies">
                            Supplies
                        </a>
                        <a class="btn btn-outline-dark h-md-100 px-3 fs-5 text-nowrap border-0 rounded-0 d-flex align-items-center justify-content-center" href="index.html" data-i18n="nav.solutions">
                            Solutions
                        </a>
                    </div>
                    <div class="d-flex align-items-center ms-auto me-3 gap-1">
                        <button type="button" class="btn btn-sm btn-outline-dark border-0 px-2" style="width: 40px;" data-lang-toggle="en" data-i18n="lang.en">
                            EN
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-dark border-0 px-2" style="width: 40px;" data-lang-toggle="it" data-i18n="lang.it">
                            IT
                        </button>
                    </div>
                </div>-->
                <div class="collapse navbar-collapse h-100" id="navbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-dark h-md-100 px-3 fs-5 text-nowrap border-0 rounded-0 d-flex align-items-center justify-content-center" href="about.html" data-i18n="nav.about">
                                About
                            </a>
                        </li>
                        <li class="nav-item h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-dark h-md-100 px-3 fs-5 text-nowrap border-0 rounded-0 d-flex align-items-center justify-content-center" href="services.html" data-i18n="nav.services">
                                Services
                            </a>
                        </li>
                        <li class="nav-item h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-dark h-md-100 px-3 fs-5 text-nowrap border-0 rounded-0 d-flex align-items-center justify-content-center" href="supplies.html" data-i18n="nav.supplies">
                                Supplies
                            </a>
                        </li>
                        <li class="nav-item h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-dark h-md-100 px-3 fs-5 text-nowrap border-0 rounded-0 d-flex align-items-center justify-content-center" href="index.html" data-i18n="nav.solutions">
                                Solutions
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center pb-2 pb-md-0 pe-md-3">
                        <button type="button" class="btn btn-sm btn-outline-dark border-0 px-2" style="width: 40px;" data-lang-toggle="en" data-i18n="lang.en">EN</button>
                        <button type="button" class="btn btn-sm btn-outline-dark border-0 px-2" style="width: 40px;" data-lang-toggle="it" data-i18n="lang.it">IT</button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container d-flex flex-column align-items-center min-vh-100 m-auto">
            <div class="alert alert-success" role="alert" id="successAlert" style="display: none;" data-i18n="contacts.successAlert">Message sent successfully. Thanks for contacting us!</div>
            <div class="alert alert-danger" role="alert" id="errorAlert" style="display: none;" data-i18n="contacts.errorAlert">An error occurred while sending the message. Please try again later or contact us directly using footer details.</div>
            <div class="container w-auto p-5 pt-4 bg-white bg-opacity-75 rounded-5">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="display-3 mb-3" data-i18n="contacts.heading">Contact me</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form id="contactForm" action="contacts.php" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label" data-i18n="contacts.name">
                                    Name
                                </label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="surname" class="form-label" data-i18n="contacts.surname">
                                    Surname
                                </label>
                                <input type="text" class="form-control" id="surname" name="surname" required>
                            </div>
                            <div class="mb-3">
                                <label for="mail" class="form-label" data-i18n="contacts.email">
                                    Email address
                                </label>
                                <input type="email" class="form-control" id="mail" name="mail" placeholder="host@domain.com" data-i18n-placeholder="contacts.domainPlaceholder"required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label" data-i18n="contacts.phone">
                                    Phone number with prefix
                                </label>
                                <div class="input-group" id="phone">
                                    <select class="form-select" style="width: auto; flex: 0 0 auto;" id="prefix" name="prefix" aria-label="Phone number prefix selector" data-i18n-attr="aria-label:contacts.prefix" required></select>
                                    <input type="number" class="form-control" id="number" name="number" aria-label="Phone number" data-i18n-attr="aria-label:contacts.phoneInput" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label" data-i18n="contacts.message">Tell me about your project.</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Describe your project in detail..." data-i18n-placeholder="contacts.messagePlaceholder" required></textarea>
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="policyCheck" required>
                                <label class="form-check-label" for="policyCheck">
                                    <span data-i18n="contacts.privacyText">I agree with the</span> <a tabindex="0" class="btn btn-link p-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="No personal data is collected or stored." data-i18n="footer.privacy" data-i18n-pop="footer.privacyPop">Privacy Policy</a> <span data-i18n="contacts.privacyTextAnd">and the</span> <a tabindex="0" class="btn btn-link p-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="Cookies are only used to enhance user experience." data-i18n="footer.cookie" data-i18n-pop="footer.cookiePop">Cookie Policy</a>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center pt-2">
                                <button type="submit" class="btn btn-outline-dark" data-i18n="contacts.submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 mt-5 bg-white bg-opacity-75 rounded-0">
            <div class="row">
                <div class="col p-0 d-flex align-items-center justify-content-center">
                    <p class=" text-body-secondary text-center fs-6 m-0 pt-2 pb-3">
                        2026 © Freschi Andrea<br>
                        P.IVA 02639960307<br>
                        Via Salita Pertoldi, 1/1, 33010 Pagnacco (UD), Italy<br>
                        <span data-i18n="footer.mobile">mobile</span> <a href="tel:+393356743897">+39 3356743897</a> | <span data-i18n="footer.fax">tel./fax</span> <a href="tel:+390432680384">+39 0432660394</a><br>
                        <span data-i18n="footer.mail">mail</span> <a href="mailto:info@freschi.org">info@freschi.org</a><br>
                        <a tabindex="0" class="btn btn-link p-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="No personal data is collected or stored." data-i18n="footer.privacy" data-i18n-pop="footer.privacyPop">Privacy Policy</a>  |  <a tabindex="0" class="btn btn-link p-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="Cookies are only used to enhance user experience." data-i18n="footer.cookie" data-i18n-pop="footer.cookiePop">Cookie Policy</a>
                    </p>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
        <script src="countryDialCodes.js"></script>
        <script>
            // Get global dial codes from external file
            const countryDialCodes = window.countryDialCodes || [];
            // Populate the prefix select element with country dial codes
            const prefixSelect = document.getElementById('prefix');
            prefixSelect.innerHTML = countryDialCodes
                .sort((a, b) => a.country.localeCompare(b.country))
                .map(({ country, code }) => `<option value="${code}" ${country === 'IT' ? 'selected' : ''}>${country} ${code}</option>`)
                .join('');

            // Initialize Bootstrap popovers
            const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
            const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl, {trigger: 'focus'}));
        </script>
        <?php
            // Handle form submission and send email using PHPMailer
            // REMEMBER: 
            // - Disable 2 factor auth on serving Google account
            // - Enable less secure app access
            // - customize the SMTP settings in the code below with your own credentials (stored in conf.php)
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = validation($_POST["name"]);
                $surname = validation($_POST["surname"]);
                $mailFrom = validation($_POST["mail"]);;
                $prefix = validation($_POST["prefix"]);
                $number = validation($_POST["number"]);
                $phoneNumber = "$prefix $number";
                $message = validation($_POST["message"]);

                // Send email using PHPMailer
                // Load Composer's autoloader (created by composer, not included with PHPMailer)
                // require 'vendor/autoload.php';
                require 'PHPMailer\Exception.php';
				require 'PHPMailer\PHPMailer.php';
				require 'PHPMailer\SMTP.php';
                include 'conf.php';

                $mail = new PHPMailer(true);
                try {
                    //Server settings
                    $mail->SMTPDebug = 0; // Set as '2' to enable verbose debug output
                    $mail->isSMTP(); // Send using SMTP
                    $mail->Host       = $mail_account_host; // Set the SMTP server to send through
                    $mail->SMTPAuth   = true; // Enable SMTP authentication
                    $mail->Username   = $mail_account_username; // SMTP username from conf.php
                    $mail->Password   = $mail_account_password; // SMTP password from conf.php
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit TLS encryption
                    $mail->Port       = $mail_account_port; // TCP port to connect to; use 587 for TLS, 465 for SSL

                    //Recipients
                    $mail->setFrom($mail_account_username, 'Freschi SMTP server');
                    $mail->addAddress('info@freschi.org'); // (name is optional)

                    //Content
                    $mail->isHTML(true); // Set email format to HTML
                    $mail->Subject = 'Website contact';
                    $mail->Body    = "
                        <p><strong>Name:</strong> $name</p>
                        <p><strong>Surname:</strong> $surname</p>
                        <p><strong>Phone:</strong> $phoneNumber</p>
                        <p><strong>Email:</strong> $mailFrom</p>
                        <hr>
                        <p><strong>Message:</strong></p>
                        <p>$message</p>
                    ";
                    $mail->AltBody = 'Name: ' . $name . "\n" .
                                     'Surname: ' . $surname . "\n" .
                                     'Phone: ' . $phoneNumber . "\n" .
                                     'Email: ' . $mailFrom . "\n\n" .
                                     '--------------------' . "\n\n" .
                                     'Message:' . "\n" . $message;

                    $mail->send();
                    echo '<script>
                    document.getElementById("errorAlert").style.display = "none";
                    document.getElementById("successAlert").style.display = "block";
                    </script>';
                } catch (Exception $e) {
                    echo '<script>
                    document.getElementById("successAlert").style.display = "none";
                    document.getElementById("errorAlert").style.display = "block";
                    console.error(' . json_encode("Message could not be sent. Mailer Error: {$mail->ErrorInfo}") . ');
                    </script>';
                    error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}", 0);
                }
            }
        ?>
    </body>
</html>