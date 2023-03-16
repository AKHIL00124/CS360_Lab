<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
   
    <title>ImageGallery</title>
</head>
<!-- Body starts here -->
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
        <div class="container">
            <a href="https://uidahophoto.photoshelter.com/galleries/C0000lrZ0lSPpbgQ/Media-Library-2020-2022" class="navbar-logo">JoeVandal Studio</a>
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
                        <a href="contact" class="nav-link">Contact</a>
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
    <!-- Gallery -->
    <section class="gallery min-vh-100">
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <img src="https://plus.unsplash.com/premium_photo-1677234282671-ed835a226405?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDJ8Q0R3dXdYSkFiRXd8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="https://plus.unsplash.com/premium_photo-1677152199976-08e624852fa2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDEwfENEd3V3WEpBYkV3fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="https://plus.unsplash.com/premium_photo-1677189225215-4136142577f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDE1fENEd3V3WEpBYkV3fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="https://images.unsplash.com/photo-1676354201012-0ca201c52490?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDI2fENEd3V3WEpBYkV3fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="https://plus.unsplash.com/premium_photo-1677152199857-4151a3c00fad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM2fENEd3V3WEpBYkV3fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="https://plus.unsplash.com/premium_photo-1676637656210-390da73f4951?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM4fENEd3V3WEpBYkV3fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="https://images.unsplash.com/photo-1677039460059-b300a6a8657f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ2fENEd3V3WEpBYkV3fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="https://images.unsplash.com/photo-1677138963397-fa2d54dd1f2f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDUxfENEd3V3WEpBYkV3fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="https://images.unsplash.com/photo-1677118992598-8de5d7261e47?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDYxfENEd3V3WEpBYkV3fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="gallery-item" alt="gallery">
                </div>

            </div>
        </div>    
    </section>
    
  <!-- Modal -->
  <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered-lg">
      <div class="modal-content">
        <div class="modal-body">
            <img src="https://plus.unsplash.com/premium_photo-1677234282671-ed835a226405?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDJ8Q0R3dXdYSkFiRXd8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" class="modal-img" alt="modal img">
        </div>
      </div>
    </div>
  </div>
     <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>

