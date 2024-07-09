<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .feedback-section {
            padding: 60px 0;
        }

        .feedback-info {
            margin-bottom: 40px;
        }

        .feedback-info h5 {
            margin-bottom: 15px;
        }

        .feedback-info p {
            margin-bottom: 10px;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .testimonial {
            margin-bottom: 30px;
        }

        .testimonial img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
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
            <h1 class="display-4">Customer Feedback</h1>
            <p class="lead">We value your feedback</p>
        </div>
    </header>

    <!-- Feedback Form Section -->
    <section class="feedback-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Leave Your Feedback</h5>
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
                            <label for="feedback">Feedback</label>
                            <textarea class="form-control" id="feedback" rows="4" placeholder="Your Feedback" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Feedback</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h5>What Our Customers Say</h5>
                    <div class="testimonial">
                        <div class="media">
                            <img src="https://via.placeholder.com/80" alt="Customer 1" class="mr-3">
                            <div class="media-body">
                                <h6>John Doe</h6>
                                <p class="mb-0">Great service and friendly staff. Highly recommend!</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <img src="https://via.placeholder.com/80" alt="Customer 2" class="mr-3">
                            <div class="media-body">
                                <h6>Jane Smith</h6>
                                <p class="mb-0">Very satisfied with the quality and speed of service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <img src="https://via.placeholder.com/80" alt="Customer 3" class="mr-3">
                            <div class="media-body">
                                <h6>Emily Johnson</h6>
                                <p class="mb-0">Excellent customer support and timely responses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
