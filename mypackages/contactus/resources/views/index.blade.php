<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contact-section {
            padding: 60px 0;
        }

        .contact-info {
            margin-bottom: 40px;
        }

        .contact-info h5 {
            margin-bottom: 15px;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        .footer {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Contact Us</h1>
            <p class="lead">Get in touch with us</p>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 contact-info">
                    <h5>Contact Information</h5>
                    <p><strong>Address:</strong> 123 Street, City, Country</p>
                    <p><strong>Phone:</strong> +123 456 7890</p>
                    <p><strong>Email:</strong> info@yourcompany.com</p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-responsive">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.086488703172!2d144.9560543157429!3d-37.817209742021926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5775945b477a9c7!2sYour%20Company%20Address!5e0!3m2!1sen!2sus!4v1603922077871!5m2!1sen!2sus"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Your Company Name. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
