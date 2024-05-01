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
<div id="Đăng nhập" class="tabcontent">
    
<form method="POST" action="{{ route('login1') }}">
                          @csrf  
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
    <div class="name-sig"><a href="/login/forgetpass">Quên mật khẩu</a></div>
<div class="name-check"><input type="checkbox"> Ghi nhớ </div>

</div>
    <div class="from-col-submit">
    <input type="submit" class="btn" value="Submit">
    </div>
    </form>
</div>
 <!-- from sigin -->

<div id="Đăng ký" class="tabcontent">
<form id="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
 
        <label>Chọn mô hình </label>
        <div class="tap-input-1">
            <div class="name-check"> <input type="radio" name="role" value="doang-nghiep"> Doang Nghiệp</div>
            <div class="name-sig"> <input type="radio" name="role" value="ca-nhan"> Cá Nhân</div>
        </div>    
        <div class="from-col-email">
            <label>Email</label>
            <div class="email">
                <input type="text" class="txt" name="email" placeholder="Nhập Email">
            </div>
        </div>
        <div class="from-col-password">
            <label>Password</label>
            <div class="email">
                <input type="password" class="txt" name="password" placeholder="Nhập Mật khẩu">
            </div>
        </div>
        
        <div class="from-col-password">
            <label>Xác nhận mật khẩu</label>
            <div class="email">
                <input type="password" class="txt" name="password_confirmation" placeholder="Xác nhận Mật khẩu">
            </div>
        </div>
        
        <div class="from-col-code">
        <label>Nhập mã code</label>
        <div class="code">
            <input type="number" class="txt1" placeholder="code" name="code">
            <button  class="txt_code">Lấy mã</button>
        </div>
    </div>
    
        <div class="from-col-submit">
            <input type="submit" class="btn1" value="Submit">
        </div>
 
</div>
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
