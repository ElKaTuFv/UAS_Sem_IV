<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="shortcout icon" href="../img/icon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Jura&family=Poppins&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login || LkMan.Is</title>
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
  </head>
  <body>
    <div class="flex items-center justify-center min-h-screen my-image">
       
      <div
        class="relative flex flex-col m-6 space-y-8 transparent backdrop-blur-sm border-card-str border-[3px] rounded-2xl md:flex-row md:space-y-0 bg-gradient-to-tr from-led to-[#035541] drop-shadow-led-black"
      >
      @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="flex flex-col justify-center p-8 md:p-14 font-poppins text-gray-400 mb-8">
        @error('login_gagal')
        {{-- <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span> --}}
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
            <span class="alert-inner--text"><strong>Warning!</strong>  {{ $message }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror
        <a href="{{ url('/') }}"><h1 class="mb-3 text-2xl font-itim text-white hover:drop-shadow-led-green">BACK</h1></a>
          <span class="mb-3 text-4xl font-itim text-neutral-400">Welcome</span>
          <span class="font-poppins text-gray-400 mb-8">
            Welcome Admin! Semangat Ngeditnya ya :)
          </span>
          <form action="{{url('proses_login')}}" method="POST">
          {{ csrf_field() }}
              <div class="py-4">
                <input
                  type="text"
                  class="h-[45px] w-full font-poppins text-[20px] text-[#686868] mb-[10px] bg-[#272727] rounded-[10px] drop-shadow-led-black pl-5 placeholder:text-[#686868]"
                  name="username"
                  id="username"
                  placeholder="Username"
                />
                @if($errors->has('username'))
                <span class="error">{{ $errors->first('username') }}</span>
                @endif
              </div>
              <div class="py-4">
                <input
                  type="password"
                  name="password"
                  id="pass"
                  placeholder="Password"
                  class="h-[45px] w-full font-poppins text-[20px] text-[#686868] mb-[10px] bg-[#272727] rounded-[10px] drop-shadow-led-black pl-5 placeholder:text-[#686868]"
                />
                @if($errors->has('password'))
                <span class="error">{{ $errors->first('password') }}</span>
                @endif
              </div>
              <button
                class="bg-str-btn text-led-fill p-2 rounded-lg w-1/2 mb-6  hover:bg-white hover:text-black hover:border hover:border-gray-300"
                type="submit"
              >
                Sign in
              </button>
          </form>
        </div>
        <!-- {/* right side */} -->
        
      </div>
    </div>
  </body>
</html>