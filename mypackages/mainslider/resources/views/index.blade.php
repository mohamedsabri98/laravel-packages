<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Slider</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item {
            height: 500px;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Main Slider -->
    <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
            <li data-target="#mainSlider" data-slide-to="1"></li>
            <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First Slide</h5>
                    <p>Description for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide</h5>
                    <p>Description for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third Slide</h5>
                    <p>Description for the third slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
