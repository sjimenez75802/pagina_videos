<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Video Gallery Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Galería de Videos <small>Teleconsultorio</small></h1>
</div>

<!-- Video Gallery - START -->
<div class="container-fluid pb-video-container">
    <div class="col-md-10 col-md-offset-1">
        <h3 class="text-center"> Seleccione</h3>
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/KQ1iYnBhZ98" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Video Introductorio</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/9XVY_jK8njs" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Tutorial-página</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame " width="100%" height="230" src="https://www.youtube.com/embed/WjLnQpJ_m44" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Tutorial-temperatura</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/5zS8jroHn8E" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Tutorial-oxímetro</label>
            </div>
        </div>
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/3HgGlXGPwu0" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Tutorial- Peso corporal</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/XOHWSBl9T78" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Tutorial- Presion Arterial</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/R5Y1SO1YMWI" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center">Tutorial- Glucómetro</label>
            </div>
        </div>
    </div>
</div>

<style>
    .pb-video-container {
        padding-top: 20px;
        background: #bdc3c7;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

        .pb-video:hover {
            background: #2c3e50;
        }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

        .pb-video-frame:hover {
            height: 300px;
        }

    .pb-row {
        margin-bottom: 10px;
    }
</style>

<!-- Video Gallery - END -->

</div>

</body>
</html>