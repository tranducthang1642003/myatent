<header>
    <div class="menu">
        <div class="img"><img src="/Image/logo.png" alt=""></div>
        <div class="left">
       <div class="tab">
     
       <button type="button"class="tablinks"> <a href="/cv/listcv">  Danh Sách ứng viên</button></a>
       <button class="tablinks" > <a href="/js_job/list">Danh Sách vị trí </button></a>
    </div>
    <div id="Đăng" class="">
    
    </div>
    <div id="Đăng" class=""></div>
    </div>
    
    <div class="right">
        
  <input type="submit" value="30 Credist" class="btn2" style="width: 30%;background: white; height: 30px; font-size: 17px; color: black;">
        <input type="submit" value="VN" class="btn2" style="width: 15%;
        height: 30px;
        background: no-repeat;
        border: none;
        color: white;
        font-weight: 900;">
    <div class="step">@php
    use Illuminate\Support\Facades\Auth;
    @endphp
    @auth
        <small class="">
         <h4>{{ Auth::user()->email }}</h4>  
        </small>
   
        @csrf
        @else
        
        @endauth
    </div>
    </div>
</header>