<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Contacts</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body class="text-bg-dark">

   <header>
      <div class="navbar bg-info mb-3 p-3">
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
      <div class="container">
         <h1 class="text-center text-info m-5">Contact me!</h1>
         <div class="row">
            <div class="col">
               <h3>
                  <span class="text-primary">First name:</span>
                  {{ $user['firstName'] }}
               </h3>
               <h3 class="mb-5">
                  <span class="text-primary">Last name:</span>
                  {{ $user['lastName'] }}
               </h3>
               <h3>
                  <span class="text-info">Email:</span>
                  {{ $user['email'] }}
               </h3>
            </div>
            <div class="col">
               <h3 class="mb-5">
                  <span class="text-success">Phone Number:</span>
                  {{ $user['phone'] }}
               </h3>
               <h3>
                  <span class="text-danger">City: </span>
                  {{ $user['city'] }}
               </h3>
               <h3>
                  <span class="text-danger">Address:</span>
                  {{ $user['address'] }}
               </h3>
            </div>
         </div>
      </div>
   </main>

</body>
</html>