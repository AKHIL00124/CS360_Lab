<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <title>Contact</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
        <div class="container">
            <a href="/" class="navbar-logo">JoeVandal Studio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">  
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="https://www.uidaho.edu/about" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.uidaho.edu/bio" class="nav-link">Bio</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://atp.uidaho.edu/blog/" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/uidaho/" class="nav-link"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/uidaho/?hl=en" class="nav-link"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    

    <div class="container-fluid">
        <div class="container">
            <div>
                <h3 class="text-center mb-5 shadow-sm p-3">Contact Us</h3>
            </div>
            <div class="row">
                <div class="cs col-md-7 shadow rounded p-5">
                    <div class="row_1">
                        <div class="col mb3">
                            <label class="form-label"> First Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col mb3">
                            <label class="form-label"> Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Email ID</label>
                            <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Message </label>
                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>