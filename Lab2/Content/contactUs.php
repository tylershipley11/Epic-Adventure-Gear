<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us!</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include "../php/header.php"; ?>

    <div class="contact-container">
        <div class="info">
            <h1>Contact Us</h1>
            <p>
                Feel free to contact us via this web form or any of the following
                options:
            </p>

            <div class="forms-of-contact">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>
                <a href="tel:+17403132648">(740)-313-2648</a>
            </div>

            <div class="forms-of-contact">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon">
                    <rect width="20" height="16" x="2" y="4" rx="2" />
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                </svg>
                <a href="mailto:tylershipley@gmail.com">tylershipley@gmail.com</a>
            </div>

            <div>
                <address class="forms-of-contact">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon">
                        <path
                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                    456 Wilderness Trail Summit Peak, CO 80435
                </address>
            </div>

        </div>



        <div class="form">
            <form action="contactFormProcess.php" method="post" id="contact-form">

                <fieldset>
                    <label for="name">
                        Name*
                        <input id="name" name="name" type="text" placeholder="Enter Full Name">
                    </label>

                    <label for="email">
                        Email*
                        <input id="email" name="email" type="email"
                            placeholder="Enter Email Address">
                    </label>

                    <label for="phone">
                        Phone*
                        <input id="phone" name="phone" type="tel" placeholder="123-456-7899">
                    </label>

                    <label for="inquiry">
                        Inquiry Type*
                        <select name="inquiry" id="inquiry" required>
                            <option value="">Select</option>
                            <option value="general-issue">General Question</option>
                            <option value="product-issue">Product Inquiry</option>
                            <option value="order-issue">Order Inquiry</option>
                            <option value="advice">Adventure Advice</option>
                        </select>
                    </label>

                    <label for="message">
                        Tell us the issue or question you are experiencing!
                        <textarea name="message" id="message" rows="5"
                            cols="40%"></textarea>
                    </label>

                </fieldset>


                <fieldset>

                    <legend>
                        Preferred method of contact? (Select all that Apply)
                    </legend>


                    <label for="contact-method-phone" class="no-label">
                        <input class="inline" type="checkbox"
                             id="contact-method-phone" name="contactMethod[]" value="phone">
                        Phone
                    </label>
                    <label for="contact-method-email" class="no-label">
                        <input class="inline" type="checkbox"
                             id="contact-method-email" name="contactMethod[]" value="email">
                        Email
                    </label>
                </fieldset>


                <input type="submit" name="submit" id="submit">
                <input type="reset" name="reset" id="reset">

            </form>
        </div>
    </div>

   <!-- <script src="formvalidator.js"></script> -->


    <?php include "../php/footer.php"; ?>

</body>

</html>