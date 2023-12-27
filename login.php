<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment_01</title>
    <!-- tailwind CSS link  -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.24/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <header>
        <!-- nav start -->
        <div class="navbar bg-base-300 shadow-2xl">
            <div class="navbar-start">
              <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                  <li><a>Home</a></li>
                  <li><a>About</a></li>
                  <li><a>Contact</a></li>
                </ul>
              </div>
              <a class="btn btn-ghost text-xl font-[poppins] font-bold">IVM Development</a>
            </div>
            <div class="navbar-center hidden lg:flex">
              <ul class="menu menu-horizontal px-1">
                  <li class="text-xl font-[poppins] font-bold"><a href="index.php">Home</a></li>
                  <li class="text-xl font-[poppins] font-bold" ><a href="main.php">About</a></li>
                  <li class="text-xl font-[poppins] font-bold" ><a href="footer.php">Contact</a></li>
              </ul>
            </div>
            <div class="navbar-end">
              <a class="btn bg-cyan-700 text-xl font-[poppins] text-white" href="login.php">Log In</a>
            </div>
          </div>
        <!-- nav End -->

    </header>
    <main>
        <!-- log in form  -->
        <div class="bg-base-200 pt-10 ">
            <h3 class="text-5xl text-center font-extrabold">Log In</h3>
    </div>
        <div class="hero min-h-screen bg-base-200 px-20 -mt-20">
            
  <div class="hero-content flex-col lg:flex-row-reverse">
    
    <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
      <form class="card-body">
        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" placeholder="email" class="input input-bordered" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input type="password" placeholder="password" class="input input-bordered" required />
          <label class="label">
            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
          </label>
        </div>
        <div class="form-control mt-6">
          <button class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
    </main>


      <!-- footer section  -->
      <footer class="footer footer-center p-4 bg-base-300 text-base-content pt-10 text-xl">
    <aside>
    <p>Copyright © 2023 xyz Ltd. All right reserved</p>
    </aside>
    </footer>
</body>
</html>