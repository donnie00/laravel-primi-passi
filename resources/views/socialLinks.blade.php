<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Random Number</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="text-bg-dark">

   <header>
      <div class="navbar bg-success mb-3 p-3">
         <ul class="nav m-auto">
            <li class="nav-item">
               <a class="nav-link link-dark" href="{{ route('homepage') }}">Home page</a>
            </li>
            <li class="nav-item">
               <a class="nav-link link-dark" href="{{ route('contacts') }}">Who am I?</a>
            </li>
            <li class="nav-item">
               <a class="nav-link link-dark" href="{{ route('socials') }}">Social Links</a>
            </li>
         </ul>
      </div>
   </header>

   <main>
      <div class="container text-center">
         <h1 class="text-center text-success m-5">Main social link</h1>
         <div class="d-flex justify-content-between my-5">
            @foreach ($socials as $key => $social)
               <div>
                  <a href="{{ $social['link'] }}" class="link-{{ $social['color'] }} text-decoration-none">
                     <i class="{{ $social['icon'] }} display-1"></i>
                     <p class="display-6">{{ ucfirst($key) }}</p>
                  </a>
               </div>
            @endforeach
         </div>
      </div>
   </main>

</body>
</html>