
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="Headline">
        <div class="sigin-name">
        <h1 class="h text-Blue  f">MyTalent</h1>
        <p class="h">Nền tản tuyển dụng thông minh công nghệ Al</p>
        </div>
    <div class="sigin-col-1">  
<div class="tab">
<button class="tablinks" onclick="openCity(event, 'Đăng nhập')">Đăng nhập</button>
<button class="tablinks" onclick="openCity(event, 'Đăng ký')" id="defaultOpen">Đăng ký</button>
</div>
<div class="da"></div>
<!-- form sigin -->
<<<<<<< HEAD:Modules/Auth/Resources/views/layouts/master.blade.php
<div id="Đăng nhập" class="tabcontent">
    
<form method="POST" action="{{ route('login') }}">
                          @csrf  
=======
<div id="Đăng nhập" class="tabcontent" >
    <form method="POST" action="{{ route('login') }}"  >
        @csrf
>>>>>>> 9974ce73e96bdc02e4a8dc105d1a75f0291e75fe:Modules/Auth/Resources/views/register.blade.php
    <div class="from-col-email">
    <label>Email</label>
    <div class="email">
    <input type="text" class="txt"  placeholder=" Nhập Email" name="email">
    </div>
    </div>
    <div class="from-col-password">
    <label>Password</label>
    <div class="email">
    <input type="password" class="txt" placeholder="Nhập Mật khẩu " name="password">
    </div>
    </div>
    <br>
    <div class="tap-input-1">
    <div class="name-sig"><a href="{{ route('password.request') }}">Quên mật khẩu</a></div>
    <div class="name-check">
            <input id="remember_me" type="checkbox" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Ghi nhớ ') }}</span>
    </div>

</div>
    <div class="from-col-submit">
    <input type="submit" class="btn" value="Submit">
    </div>
    </form>
</div>
 <!-- from sigin -->
<div id="Đăng ký" class="tabcontent">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Chọn mô hình </label>
        <div class="tap-input-1">
            <div class="name-check"> <input type="radio" name="role" value="doang-nghiep"> Doang Nghiệp</div>
            <div class="name-sig"> <input type="radio" name="role" value="ca-nhan"> Cá Nhân</div>
        </div> 
        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="txt" type="email" name="email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="txt"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="txt"
                            type="password"
                            name="password_confirmation" required />
        </div>
        <div class="">
         
            <div class="from-col-submit">
                <input type="submit" class="btn" value="Register"> 
                
                </div>
            {{-- <x-button class="btn">
                {{ __('Register') }}
            </x-button> --}}
          
        </div>
        {{-- <a class="" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a> --}}

      
    </form>
</form>
</div>
</body>
</html> 
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
