<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/output.css">
    <title>plainYsy Template</title>
</head>

<body>
    <div class="page">

        <div class="row">
            <div class="col-6 settings">
                <div class="settingsContent position-absolute p-3">
                    <h1><b>Settings</b></h1>
                    <p>Style</p>
                    <select class="form-control form-control-sm">
                        <option id="default">Default Style</option>
                        <option id="light">Light Style</option>
                        <option id="dark">Dark Style</option>
                </select>
                    <div class="pl-3 pt-3">
                        <input type="checkbox" class="form-check-input" onclick="editMode()" id="editMode">
                        <label class="form-check-label" type="checkbox" value="e">Edit Mode</label>
                    </div>
                    <div class="pt-3">
                        <button type="button" class="btn btn-danger m-1" id="save">Save</button>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="fas fa-chevron-up"></i>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <header class="row">
                <div class="col-12 d-flex justify-content-end">
                </div>
                <div class="col-12 d-flex justify-content-center py-4">
                    <img src="gfx/logo.png" class="img-fluid">
                </div>
            </header>

            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <div class="addContent1 position-absolute p-3">
                        <button type="button" class="btn btn-danger m-1" id="delBtn1">X</button>
                        <select class="form-control form-control-sm" name="dropdown" id="dropDown1" method="post" onchange="loadNewContent('#dropDown1')">
                            <option id="default" value="">Default</option>
                            <option id="gallery" value="gallery">Gallery</option>
                            <option id="news" value="news">News</option>
                            <option id="contact" value="contact">Contact</option>
                            <option id="social" value="social">Social</option>
                        </select>
                    </div>
                </div>
                <?php include('includes/nav.html'); ?>
                <div class="col-12 empty"></div>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <div class="addContent2 position-absolute p-3">
                        <button type="button" class="btn btn-danger m-1" id="delBtn1">X</button>
                        <select class="form-control form-control-sm" name="dropdown" method="post" id="dropDown2" onchange="loadNewContent('#dropDown2')">
                            <option id="default" value="">Default</option>
                            <option id="gallery" value="gallery">Gallery</option>
                            <option id="news" value="news">News</option>
                            <option id="contact" value="contact">Contact</option>
                            <option id="social" value="social">Social</option>
                        </select>
                    </div>
                </div>
                <?php include('includes/carousel.html'); ?>
                <?php include('components.php'); ?>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <div class="addContent3 position-absolute p-3">
                        <button type="button" class="btn btn-danger m-1" id="delBtn1">X</button>
                        <select class="form-control form-control-sm" name="dropdown" method="post" id="dropDown3" onchange="loadNewContent('dropDown3')">
                            <option id="default" value="">Default</option>
                            <option id="gallery" value="gallery">Gallery</option>
                            <option id="news" value="news">News</option>
                            <option id="contact" value="contact">Contact</option>
                            <option id="social" value="social">Social</option>
                        </select>
                    </div>
                </div>
                <?php include('includes/news.html'); ?>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <div class="addContent4 position-absolute p-3">
                        <button type="button" class="btn btn-danger m-1" id="delBtn1">X</button>
                        <select class="form-control form-control-sm" name="dropdown" method="post" id="dropDown4" onchange="loadNewContent('dropDown4')">
                            <option id="default" value="">Default</option>
                            <option id="gallery" value="gallery">Gallery</option>
                            <option id="news" value="news">News</option>
                            <option id="contact" value="contact">Contact</option>
                            <option id="social" value="social">Social</option>
                        </select>
                    </div>
                </div>
                <?php include('includes/gallery.html'); ?>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <div class="addContent5 position-absolute p-3">
                        <button type="button" class="btn btn-danger m-1" id="delBtn1">X</button>
                        <select class="form-control form-control-sm" name="dropdown" method="post" id="dropDown5" onchange="loadNewContent('dropDown5')">
                            <option id="default" value="">Default</option>
                            <option id="gallery" value="gallery">Gallery</option>
                            <option id="news" value="news">News</option>
                            <option id="contact" value="contact">Contact</option>
                            <option id="social" value="social">Social</option>
                        </select>
                    </div>
                </div>
                <?php include('includes/contact.html'); ?>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <div class="addContent6 position-absolute p-3">
                        <button type="button" class="btn btn-danger m-1" id="delBtn1">X</button>
                        <select class="form-control form-control-sm" name="dropdown" method="post" id="dropDown6" onchange="loadNewContent('dropDown6')">
                            <option id="default" value="">Default</option>
                            <option id="gallery" value="gallery">Gallery</option>
                            <option id="news" value="news">News</option>
                            <option id="contact" value="contact">Contact</option>
                            <option id="social" value="social">Social</option>
                        </select>
                    </div>
                </div>

                <?php include('includes/social.html'); ?>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <div class="addContent7 position-absolute p-3">
                        <button type="button" class="btn btn-danger m-1" id="delBtn1">X</button>
                        <select class="form-control form-control-sm" name="dropdown" method="post" id="dropDown7" onchange="loadNewContent('dropDown7')">
                            <option id="default" value="">Default</option>
                            <option id="gallery" value="gallery">Gallery</option>
                            <option id="news" value="news">News</option>
                            <option id="contact" value="contact">Contact</option>
                            <option id="social" value="social">Social</option>
                        </select>
                    </div>
                </div>

                <?php include('includes/spacerText.html'); ?>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <div class="addContent8 position-absolute p-3">
                        <button type="button" class="btn btn-danger m-1" id="delBtn1">X</button>
                        <select class="form-control form-control-sm" name="dropdown" method="post" id="dropDown8" onchange="loadNewContent('dropDown8')">
                            <option id="default" value="">Default</option>
                            <option id="gallery" value="gallery">Gallery</option>
                            <option id="news" value="news">News</option>
                            <option id="contact" value="contact">Contact</option>
                            <option id="social" value="social">Social</option>
                        </select>
                    </div>
                </div>

                <?php include('includes/spacerTextIcons.html'); ?>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/edit.js"></script>
    <script src="https://kit.fontawesome.com/22f961ddd5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>