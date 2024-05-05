<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css" integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
    <script src="https://unpkg.com/vanilla-tags-input"></script>
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
    <script src="https://unpkg.com/@yaireo/tagify"></script>
     
</head>
<style>
.email-preview {
    position: relative;
}

.logout-btn {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 5px;
}

.email-preview:hover .logout-btn {
    display: block;
}

</style>
<body>

<header>
    <div class="menu">
        <div class="img"><img src="/Image/logo.png" alt=""></div>
        <div class="left">
            <div class="tab">
                <button type="button" class="tablinks"> <a href="/cv/listcv">Danh Sách ứng viên</a></button>
                <button class="tablinks"> <a href="/js_job/list">Danh Sách vị trí</a></button>
            </div>
        </div>
        
        <div class="right">
            <input type="submit" value="30 Credits" class="btn2" style="width: 30%;background: white; height: 30px; font-size: 17px; color: black;">
            <input type="submit" value="VN" class="btn2" style="width: 15%;height: 30px;background: no-repeat;border: none;color: white;font-weight: 900;">
            <div class="step">
              @if (Auth::check())
<div class="step">
    <div class="email-preview" onmouseover="showLogout()" onmouseout="hideLogout()">
        <small class="email">{{ explode('@', Auth::user()->email)[0] }}</small>
        <div class="logout-btn" id="logout-btn">
            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</div>
@else
    <p>User is not authenticated.</p>
@endif

                
            </div>
        </div>
    </div>
</header>
<br>
<article>
    <section>
        <div class="col-1">
            <div class="text-2"> <span>Danh sách vị trí  </span> / Thêm CV </div>
            <div class="text-3"><i class="fa-solid fa-arrow-left"></i>  <span style="padding-left: 10px">Thông tin CV</span> </div>
            <div class="left">
               <div class="tab1">
                    <button class="tablinks" onclick="openCity(event, 'Đăng nhập')"id="defaultOpen">Thông tin cơ bản</button>
                    <button class="tablinks" onclick="openCity(event, 'Đăng ký')" >Thông tin bổ xung</button>
                    </div>
            </div>
            </div>
        </section>
        <form method="POST" action="{{ route('job.add.post') }}">
        @csrf
<section>
<div id="Đăng nhập" class="tabcontent">
    @include('job::layouts.master')
</div>
</section>

<section>
<div id="Đăng ký" class="tabcontent">
    @include('job::layouts.boSung')
</div>
</section>
    <section>
        <footer>
        </footer>
        </section>
        <div class="col-xoa">
           <div class="col-4"> <input type="reset" class="btnxoa"  value="Xóa "></div>
           <div class="col-3"> <button type="submit" class="btnthem">Lưu và thêm mới </button></div>
        </div>
        </from>
</body>
</html> 
<script src="/js/javascript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script>
    var input = document.querySelector('#keywordInput');
    var tagify = new Tagify(input);
    function updateInput(element, keyword) {
        if (keyword.trim() !== '') {
            var keywords = keyword.split(',');
            tagify.addTags(keywords);
        }
        var newKeyword = element.textContent.trim();
        tagify.addTags([newKeyword]);
    }
</script>

<script>
    var skillInput1 = document.querySelector('#skillInput1');
    var tagify = new Tagify(skillInput1);
</script>
</body>
</html>