<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <a href="#default" class="logo">Lorem Ipsum</a>
        <div class="header-right">
            <a class="active" href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
    </div>
    <div class="cards">
        <?php
        $dir = 'img/';
        foreach (glob($dir . '*') as $file) { ?>
            <a href="" class="card">
                <img src="<?php echo $file; ?>" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <img class="card__thumb" src="https://www.w3schools.com/w3images/avatar5.png" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">John Doe</h3>
                            <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>
                            <span class="card__status">1 hour ago</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                        blanditiis?</p>
                </div>
            </a>
        <?php } ?>

    </div>
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Lorem<span>Ipsum</span></h3>
            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Contact</a>
            </p>
            <p class="footer-company-name">Lorem Ipsum &copy; 2022</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>10 Southfield Grange</span> Benevento, Italy</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>(+39) 123 456 7890</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:email@email.email">loremipsum@email.email</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the site</span>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error quisquam esse quod eveniet quis maiores,
                sapiente et atque delectus eligendi quo aspernatur doloremque fugit sint dolorem eius reiciendis
                incidunt possimus.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>