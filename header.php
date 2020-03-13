<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?php bloginfo( 'name' )?>-<?php bloginfo( 'description' )?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi&display=swap" rel="stylesheet">
    <?php wp_head(  ); ?>

</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"><h4  class="header-note">இலைகள் உதிரும் கிளைகள் ஒடியும் வேர்கள் விழாமல் காப்பாற்றும்</h4></div>
                <div class="col-sm-6"><img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="வேர்கள்" class="logo img-fluid"></div>
                <div class="col-sm-3"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav  nav-text">
                            <li class="nav-item active">
                              <a class="nav-link" href="<?php bloginfo('url' );?>">முகப்பு <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">ஆவணங்கள்</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">தேசிய தலைவர் சிந்தனைகள்</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">எம்மைப்பற்றி!</a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="body">
