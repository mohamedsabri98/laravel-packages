<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Work</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .work-section {
            padding: 60px 0;
        }

        .work-item {
            margin-bottom: 30px;
        }

        .work-item img {
            width: 100%;
            height: auto;
        }

        .work-caption {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .work-item:hover .work-caption {
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Our Work</h1>
            <p class="lead">A showcase of our recent projects</p>
        </div>
    </header>

    <!-- Our Work Section -->
    <section class="work-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 work-item">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400" alt="Project 1">
                        <div class="work-caption">
                            <h5>Project 1</h5>
                            <p>Brief description of Project 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 work-item">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400" alt="Project 2">
                        <div class="work-caption">
                            <h5>Project 2</h5>
                            <p>Brief description of Project 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 work-item">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400" alt="Project 3">
                        <div class="work-caption">
                            <h5>Project 3</h5>
                            <p>Brief description of Project 3.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 work-item">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400" alt="Project 4">
                        <div class="work-caption">
                            <h5>Project 4</h5>
                            <p>Brief description of Project 4.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 work-item">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400" alt="Project 5">
                        <div class="work-caption">
                            <h5>Project 5</h5>
                            <p>Brief description of Project 5.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 work-item">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400" alt="Project 6">
                        <div class="work-caption">
                            <h5>Project 6</h5>
                            <p>Brief description of Project 6.</p>
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
