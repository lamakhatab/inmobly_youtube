<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,700,0,0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>inmobly</title>

    <style>
        /* .top-bar{
            background-color: #bdbdbd;
        } */

        img-vedio{
            padding-left: 0%;
            padding-right: 0%;
        }

    </style>
    @yield('css')
  </head>
  <body>
    <div class="top-bar navbar-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand"style="font-weight:bold;" href="{{ route('index')}}">inMobly</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
       <div class=" img-vedio" >
            <iframe src="https://www.youtube.com/embed/{{ $singleVideo->items[0]->id }}"width="100%" height="400px" frameborder="0" allowfullscreen></iframe>
            {{-- <iframe src="https://scontent.fcai11-1.fna.fbcdn.net/v/t1.6435-9/90120120_3007129402656471_1607773376070287360_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=e3f864&_nc_ohc=Xzh5YEymVukAX-ryZ_n&_nc_oc=AQntVpsynCKoPbd0wRQ18rpjAwYXY99cSH0-HZEEbmbwC9JqS-r92VnpUHXUx19DVC0&_nc_ht=scontent.fcai11-1.fna&oh=00_AT9iXsUjQ6fLcmvKOa_VXAaBB2toDlyafMZ0aIlXlXSRSg&oe=63500CE5"  style="width:100%;max-height:350px;" class="img-fluid" alt="..."> --}}
       </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-9">
                <h5>{{ $singleVideo->items[0]->snippet->title }}</h5>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-danger">Add of favorites</button>
            </div>
            <span class=" mt-3 border-bottom"></span>
       </div>
       <div class="row mt-3">
            <div class="col-4">
                <span style="font-weight:bold;">Rate Now</span>
                <i><span class="material-symbols-outlined">star_rate</span></i>
                <i><span class="material-symbols-outlined">star_rate</span></i>
                <i><span class="material-symbols-outlined">star_rate</span></i>
                <i><span class="material-symbols-outlined">star_rate</span></i>
                <i><span class="material-symbols-outlined">star_rate</span></i>
            </div>
            <div class="col-4">
                <p style="font-weight:bold;">Duration <span>01:30:33</span></p>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col"><i><span class="material-symbols-outlined">
                        visibility
                        </span> 9,777,198</i></div>
                    <div class="col"><i><span class="material-symbols-outlined">
                        thumb_up
                        </span> 1,333,100</i></div>

                </div>
            </div>
            <span class=" mt-3 border-bottom"></span>
       </div>
       <div class=" mt-3">
        <p style="font-weight:bold;color:red;">Publish on {{ date('d M Y', strtotime($singleVideo->items[0]->snippet->publishedAt)) }}</p>
        <p>{{ $singleVideo->items[0]->snippet->description }}</p>
       </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

