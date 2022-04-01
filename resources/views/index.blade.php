<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashBard Template</title>
    {{-- style css --}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    {{-- fontawsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <input type="checkbox" id="check">
    {{-- header aera start --}}
    <header>
        <label for="check">
            <i class="fa-solid fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Coding <span>Show</span></h3>
        </div>
        <div class="right_area">
            <a href="logout_btn" class="logout_btn">Logout</a>
        </div>
    </header>
    {{-- header area end --}}
    {{-- sidebar start --}}
    <div class="sidebar">
        <center>
            <img src="/storage/img/ai-kao-36.png" class="profile_image" alt=""> 
            <h4>Mossica</h4>
        </center>
       
        <a href=""><i class="fa-solid fa-display"></i><span>Dashboard</span></a>
        <a href=""><i class="fas fa-cogs"></i><span>Components</span></a>
        <a href=""><i class="fas fa-table"></i><span>Table</span></a>
        <a href=""><i class="fas fa-th"></i><span>Forms</span></a>
        <a href=""><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href=""><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    {{-- sidebar end --}}

    <div class="content"></div>
</body>

</html>
