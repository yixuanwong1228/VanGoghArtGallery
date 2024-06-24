<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>VanGoghArtGallery</title>
      <link href="/assets/img/favicon.png" rel="icon">
      <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="/assets/css/artassistance.css" rel="stylesheet">
   </head>
   <body>
      <section>
         <div class="row">
            <div class="col-7 p-4">
                <input id="artworkID" type="text" value="{{$data->id}}" hidden>
                <h2 class="p-1 text-white">{{$data->name}}</h2>
               <img class="gallery-img" src="{{$data->imageURL}}"/>
               <p class="text-white">*please use google chrome browser for art assistance to function properly.</p>
            </div>
            <div class="col-5" >
               <div class="wrapper">
                  <section class="chat-area" >
                     <header class="p-2">
                        <a href="#" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                        <img class="mx-2" src="/assets/img/artistCartoon.png">
                        <div class="details">
                           <span>Art Assistance</span>
                        </div>
                     </header>
                     <div class="chat-box" id="texts">
                        <!--<div class="chat outgoing">
                           <div class="details">
                              <p >asghu oijk kkkkkkkkkkkk jjjjjjjjjjjm llllllllllllllllllllllllllllllllllllllllllllllll</p>
                           </div>
                        </div>-->
                        <div class="chat incoming">
                           <img src="/assets/img/artistCartoon.png" alt="" class="">
                           <div class="details">
                              <p >Hey there! I'm your Art Assistance! Ask me some questions about The Starry Night!</p>
                           </div>
                        </div>
                     </div>
                     <div class="typing-area p-2">
                        <button id="voiceButton" class="circle-button">
                        <i class="bi bi-mic-fill"></i>
                        </button>
</div>
                     </div>
               </section>
            </div>
         </div>
         </div>
      </section>
   </body>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="/assets/js/artassistance.js"></script>
</html>