<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <title>Profile</title>
    @vite('resources/css/tailwind.css')
  </head>
  <body class="text-gray-800 antialiased">




    






    <main class="profile-page" >
      
      <section class="relative py-16 bg-gray-300 " style="padding-top: 30vh;">
        <div class="container mx-auto px-4">
          <div
            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
          >
            <div class="px-6" >
              <div class="flex flex-wrap justify-center">
                <div
                  class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
                >
                 
                </div>
                
              </div >
              
              <div class="pt-4"  >
                 @include('profile.partials.update-profile-information-form')
              </div>

              <div>
                  @include('profile.partials.update-password-form')
              </div> 

              <div class="mb-4">
                  @include('profile.partials.delete-user-form')
              </div>
              

              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    






  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
</html>







