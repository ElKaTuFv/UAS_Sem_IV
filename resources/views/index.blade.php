<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
    tailwind.config = {
        theme: {
    container: {
      center : true,
      padding: '14px',
    },
    extend: {
      fontFamily : {
        "poppins" :['poppins'],
        "itim" : ['itim'],
        "jura" : ['jura']
      },
      
      colors : {
        "hitam" : '#000000',
        "btn-contact" : '#4771AF',
        "grey" : '#939393',
        "grey-ft" : '#D8D8D8',
        "cyan" : '#0EFFC5',
        "birungu" : '#0500FF',
        "led-fill" : '#97A1FF',
        "led" : '#0066FF',
        "green" : '#0EFF34',
        "str-btn" : '#01193D',
        "biru" : '#004DC1',
        "card" : '#2B2C2B',
        "card-str" : '#2E5CA1',
        "led-green" : '#0EFFC5',
        "primary" :'#1d4ed8',
      },
      dropShadow : {
        'led' : '0px 0px 15px #001AFF',
        'led-green' : '0px 0px 15px #0EFFC5',
        'led-black' : '0px 0px 15px #000000',
      },
      letterSpacing: {
        lebar: '.5em',
      }
    },
  },
}
  </script>
   <style>
        .gradient{
            background: linear-gradient(90deg,#0066FF 0%, #000102 100%);
        }
        .my-image{
            background-image: url(../img/blue-bg.png);
        }
    </style>
    <link rel="shortcout icon" href="../img/icon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Jura&family=Poppins&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Portofolio LkMan</title>
</head>
<body class="my-image leading-normal tracking-normal text-white">
{{-- Header Start --}}
   @if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif

<nav class=" bg-transparent backdrop-blur-3xl border-b-black md:flex md:items-center md:justify-between w-full fixed xl:px-[300px] z-10">
  <div class="flex justify-between items-center">
    <a href="#home" class="flex text-center ">
    <div class="flex items-center">
                <h1 class="font-itim text-white text-[40px]">Lk-</h1>
                <h1 class="text-[#FF0303] font-itim hover:text-[#17FF03] text-[40px]">Up</h1>
            </div>
    </a>
    <span class=" inline text-5xl md:mb-50 cursor-pointer md:hidden mx-2">
      <ion-icon class="text-birungu" name="menu" onclick="Menu(this)"></ion-icon>
    </span>
  </div>
  <ul class="font-poppins md:flex md:items-center z-[1] md:top-100 md:z-auto md:static absolute bg-grey md:bg-transparent w-full left-0 pb-5 md:w-auto md:py-0 py-0 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
    <li class="mx-4 my-6 md:my-0">
      <a href="#" class="text-2xl hover:text-primary ">Home</a>
    </li>
    <li class="mx-4 my-6 md:my-0">
      <a href="#about" class="text-2xl hover:text-primary ">About Me</a>
    </li>
    <li class="mx-4 my-6 md:my-0">
      <a href="#porto" class="text-2xl hover:text-primary ">Portofolio</a>
    </li>
    <li class="mx-4 my-6 md:my-0">
      <a href="#service" class="text-2xl hover:text-primary ">Service</a>
    </li>
    <li class="mx-4 my-6 md:my-0">
      <a href="{{ url('/login') }}" class="text-2xl hover:text-primary ">Login</a>
    </li>
    
    
    <button class="stroke-str-btn drop-shadow-led hover:drop-shadow-led-black hover:text-gray-300 px-6 py-2 mx-4 bg-primary rounded-3xl hover:bg-blue-900 transform transition hover:scale-105 duration-300 ease-in-out"><a href="#contact">Contact Me</a>
      
    </button>
  </ul>
</nav>

{{-- Header Start --}}

{{-- Hero Section Start --}}
<section id="home" class="pt-36 w-full pb-16">
    <div class="container">
        <div class="flex flex-wrap py-16">
            <div class="w-full self-center px-16 lg:w-1/2">

                <h2 class="font-itim pt-2 text-grey text-5xl font-bold md:text-6xl lg:text-7xl">I'm a</h2>
                <h1 class="font-jura text-led-fill drop-shadow-led text-5xl font-bold mt-2 md:text-6xl lg:text-7xl stroke-white" >STUPID PEOPLE<br>FROM EARTH.</h1>
                <a href="#" class="mx-auto lg:mx-0">
                    <button class="bg-btn-contact hover:bg-str-btn hover:text-white drop-shadow-led hover:drop-shadow-led-black text-gray-800 font-bold rounded-full my-6 py-3 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out ">
                    Subscribe
                </button></a>
            </div>
            <div class="w-full self-end px-16 lg:w-1/2">
                <div class="mt-10 lg:mt-0">
                    <img class="rounded-3xl" src="img/wifi.png" class="rounded-3xl max-w-full mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Hero Section End --}}

{{-- About Start --}}

<section id="about" class="lg:pb-20 pt-32 w-full">
    <div class="container justify-around">
        <div class="flex flex-wrap py-5">
          <div class="w-full lg:pl-60 self-end lg:w-1/2">
                <div class="">
                    <img width="350" height="350" src="img/about.png" class="max-w-full mx-auto">
                </div>
            </div>
            <div class="mb-10 lg:w-[575px] md:px-32 h-full self-center px-16 lg:px-0 lg:pr-36">
              <div class="justify-center flex lg:justify-start md:justify-center pt-10 lg:pt-0">
                <h1 class="border-b-4 font-jura text-white text-[50px]  drop-shadow-led text-center" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
            About Me</h1>
              </div>
              @foreach ($abouts as $data)
              <p class="font-poppins text-lg mb-2 leading-relaxed border-b-2 text-justify pb-3">{{ $data->about }}</p>
            
              @endforeach
              <a href="#" class="mx-auto lg:mx-0">
                    <button class="bg-btn-contact hover:bg-str-btn hover:text-white drop-shadow-led hover:drop-shadow-led-black text-gray-800 font-bold rounded-full my-6 py-3 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out ">
                    Subscribe
                </button></a>
            </div>
        </div>
    </div>
</section>

{{-- About End --}}

{{-- Portofolio Start --}}
</section>
    <section class="py-8" id="porto">
        <div class="container max-w-5xl mx-auto m-8">
        <h1 class="font-jura text-white text-[50px] border-b-2 pt-0 drop-shadow-led text-center" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
            PORTOFOLIO</h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-50 my-0 py-0 rounded-t drop-shadow-led"></div>
            </div>
            <div class="flex flex-wrap pt-10">
                <div class="w-5/6 sm:w-1/2 p-6">
                <h1 class="font-jura text-white text-[30px]  drop-shadow-led mt-[29px]" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
                            PROJECT 1
                        </h1>
                        <h1 class="font-jura text-white text-[30px]">
                            BUKU-KU
                        </h1>
                        <p class="font-jura text-white text-[20px] ">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis veniam asperiores commodi doloremque?
                        </p>
                        <a href="#"><p class="font-jura text-grey-ft text-[20px] hover:text-grey">>Read More</p></a>
                </div>
                <div class="w-full sm:w-1/2 p-6 flex">
                    <img src="../img/RectangleP.png" class="relative" alt="">
                    <img src="../img/buku-ku.png" class="absolute" alt="">
                </div>
            </div>
            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="flex flex-wrap pt-10">
                <div class="w-5/6 sm:w-1/2 p-6 flex">
                <img src="../img/RectangleP.png" class="relative" alt="">
                <img src="" class="absolute" alt="">
                </div>
                <div class="w-full sm:w-1/2 py-6 pl-14">
                <h1 class="font-jura text-white text-[30px]  drop-shadow-led mt-[29px]" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
                            PROJECT 2
                        </h1>
                        <h1 class="font-jura text-white text-[30px]">
                            LOREM
                        </h1>
                        <p class="font-jura text-white text-[20px] ">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis veniam asperiores commodi doloremque?
                        </p>
                        <a href="#"><p class="font-jura text-grey-ft text-[20px] hover:text-grey">>Read More</p></a>
                </div>
            </div>
            </div>
            <div class="flex">
                <a href="#" class="mx-auto">
                    <button class=" hover:underline bg-gradient-to-r from-cyan to-birungu drop-shadow-led hover:drop-shadow-led-black text-white font-bold rounded-full my-6 py-3 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out font-jura">
                    View More
                </button>
                </a>
            </div>
        </div>
    </section>
{{-- Portofolio End --}}

{{-- Service Start --}}
    
<section class="py-8" id="service">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="font-jura text-white text-[50px] border-b-2 drop-shadow-led text-center mt-[40px] mx-auto" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
                SERVICE</h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-50 my-0 py-0 rounded-t"></div>
            </div>
            <div class="w-full lg:w-0.5 p-6 flex flex-col flex-grow flex-shrink">
                
            </div>
            <div class="w-full md:w-1/5 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-card rounded-[20px] border-card-str border-[3px] drop-shadow-led overflow-hidden shadow hover:drop-shadow-led-green hover:border-led-green">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <img class="mx-auto" src="./img/design.png" alt="">
                        <p class="w-full font-poppins text-white text-[20px] px-6 text-center">
                            Web Design
                        </p>
                        <h1 class="font-poppins text-[40px] "></h1>
                        
                        <p class="text-white font-poppins text-base px-6 mb-5 text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                        </p>
                    </a>
                <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-center">
                        <button class="mx-auto lg:mx-0 hover:underline bg-black drop-shadow-led-black border-[3px] border-gray-800 text-white font-bold rounded-full my-1 py-3 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out hover:drop-shadow-led">
                            Read More
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="w-full md:w-1/5 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-card rounded-[20px] border-card-str border-[3px] drop-shadow-led overflow-hidden shadow hover:drop-shadow-led-green hover:border-led-green">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <img class="mx-auto" src="./img/website.png" alt="">
                        <p class="w-full font-poppins text-white text-[20px] px-6 text-center">
                            Web Programming
                        </p>
                        <h1 class="font-poppins text-[40px] "></h1>
                        
                        <p class="text-white font-poppins text-base px-6 mb-5 text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                        </p>
                    </a>
                <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-center">
                        <button class="mx-auto lg:mx-0 hover:underline bg-black drop-shadow-led-black border-[3px] border-gray-800 text-white font-bold rounded-full my-1 py-3 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out hover:drop-shadow-led">
                            Read More
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="w-full md:w-1/5 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-card rounded-[20px] border-card-str border-[3px] drop-shadow-led overflow-hidden shadow hover:drop-shadow-led-green hover:border-led-green">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <img class="mx-auto" src="./img/market.png" alt="">
                        <p class="w-full font-poppins text-white text-[20px] px-6 text-center">
                            Web Market
                        </p>
                        <h1 class="font-poppins text-[40px] "></h1>
                        
                        <p class="text-white font-poppins text-base px-6 mb-5 text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                        </p>
                    </a>
                <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-center">
                        <button class="mx-auto lg:mx-0 hover:underline bg-black drop-shadow-led-black border-[3px] border-gray-800 text-white font-bold rounded-full my-1 py-3 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out hover:drop-shadow-led">
                            Read More
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="w-full lg:w-0.5 p-6 flex flex-col flex-grow flex-shrink">
            </div>
        </div>
    </section>
{{-- Service End --}}

{{-- Footer Start --}}


<section id="contact" class="bg-blue-950 bg-opacity-70 h-42 w-full">
  <div class="">
    <h5 class="text-center font-normal text-4xl pb-2 pt-5 border-b-2 border-gray-600">Contact Me</h5>
    <form method="post" class="m-[10px] w-full md:w-1/2 :w-1/3 mx-auto">
    @csrf  
    <div class="rounded-[30px] w-[auto] bg-gradient-to-tr from-led to-[#035541] drop-shadow-led-black p-[40px]">
        <input type="text" name="nama" id="" placeholder="Nama" class="h-[50px] w-full font-poppins text-[20px] text-[#686868] mb-[30px] bg-[#272727] rounded-[15px] drop-shadow-led-black pl-5" value="{{ (isset($tamu)) ? $tamu->nama:"" }}" required>
        <input type="email" name="email" id="" placeholder="Email" class="h-[50px] w-full font-poppins text-[20px] text-[#686868] mb-[30px] bg-[#272727] rounded-[15px] drop-shadow-led-black pl-5" value="{{ (isset($tamu)) ? $tamu->email:"" }}" required>
        <textarea name="pesan" id="" placeholder="Message" cols="30" rows="6" class="h-[150px] w-full font-poppins text-[20px] text-[#686868] bg-[#272727] rounded-[15px] drop-shadow-led-black p-5" value="{{ (isset($tamu)) ? $tamu->pesan:"" }}" required></textarea>
        <button type="submit" class="font-poppins text-biru h-[50px] w-1/3 bg-[#272727] drop-shadow-led-black rounded-[15px] border-gray-800 border-[5px] text-[20px] mt-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" >Send</button>
        </div>
      </form>
    <div class="flex justify-center gap-10 pt-5 pb-8">
    <a href="https://www.facebook.com/cimoldag.digdug/"><img width="30" height="30" src="img/facebook.png" alt=""></a>
    <a href="https://www.instagram.com/lkman.is/"><img width="30" height="30" src="img/instagram.png" algt=""></a>
    <a href="https://github.com/ElKaTuFv"><img width="30" height="30" src="img/github.png" algt=""></a>
    <a href="https://wa.me/6289501562673/"><img width="30" height="30" src="img/whatsapp.png" algt=""></a>
    </div>
  </div>
  <div class="border-t border-slate-700 bg-slate-800">
    <div class="md:text-center container mx-auto py-3 px-6">
      <p class="mb-0 text-grey ">
        @LkMan.is | 
        &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        
      </p>
    </div>
  </div>          
</section>

{{-- Footer End --}}

<script>

const swal = $('.swal').data('swal');

        if(swal){
            Swal.fire({
                'title':'Success',
                'text' : swal,
                'icon': 'success',
                'showConfirmButton':false,
                'timer':2000
            })
        }

        function Menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? (e.name = "close", list.classList.add('top-[87px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[87px]'), list.classList.remove('opacity-100'))
        }
    </script>
       @if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif

<script>
        function Menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? (e.name = "close", list.classList.add('top-[87px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[87px]'), list.classList.remove('opacity-100'))
        }
    </script>

</body>
</html>