

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
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
     <script src="https://unpkg.com/@yaireo/tagify"></script>
</head>
<body>
    <header>
        @include('cv::layouts.menu')
</header>
<article>
<form action="{{ route('cv.update', $cv->id) }}" method="POST">
    @csrf
    @method('PUT')
<section>
<div class="col-1">
<div class="text-1"> Danh sách CV / Thêm thông tin</div>
<div class="text-1">Thông tin CV</div>
<div class="left">
   <div class="tab1">
   <button type="button"class="tablinks"> <a href="/js_job/list">  Danh Sách job</button></a>
    <button type="button"class="tablinks"> <a href="/cv/listcv">  Danh Sách ứng viên</button></a>
</div>
<div id="Đăng nhập" class="tabcontent"></div>
<div id="Đăng ký" class="tabcontent"></div>
</div>
</div>

@if(session('success'))
    {!! session('success') !!}
@endif


<div id="TTCB" class="tabcontent"></div>
<div id="TTBS" class="tabcontent"></div>

<div class="main-left">
<div class="from-register">
<div class="text-from"><h3>Thông tin ứng viên</h3></div>
<div class="form-txt">
<div class="from-col-password">
  <p><div class="from"></p>
    <label>Tên ứng viên <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
        <input type="text" id="name" name="name" class="txt" value="{{ $cv->name }}">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Giới tính <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
        <input type="text" id="gioitinh" name="sex" class="txt" value="{{ $cv->sex }}">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Số điện thoại <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
        <input type="text" class="txt" placeholder="Nhập" name="phone" value="{{ $cv->phone }}">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Email <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
        <input type="email" class="txt" placeholder="Nhập" name="email" value="{{ $cv->email }}">
    </div>
    </div>
 <!-- f -->
 <p><div class="from"></p>
    <label>ngày sinh <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
        <input type="date" class="txt" placeholder="Nhập" name="date" value="{{ $cv->date }}">
    </div>
    </div>

 <!-- f -->
 <p><div class="from"></p>
    <label>Địa chỉ hiện tại </label>
    <div class="from-txt">
        <input type="text" class="txt" placeholder="Nhập" name="address" value="{{ $cv->address }}">
    </div>
    </div>


</div>

    <div class="text-from"><h3>Trình độ học vấn </h3></div>
<div class="form-txt">
<div class="from-col-password">
  <p><div class="from"></p>
  <label>Trình độ học vấn </label>
    <div class="from-txt">
    <input type="radio" name="education" id="daihoc" value="daihoc" {{ $cv->education == 'daihoc' ? 'checked' : '' }}>
      <label for="0">đại học</label>
      <input type="radio" name="education" id="daihoc" value="daihoc" {{ $cv->education == 'daihoc' ? 'checked' : '' }}>
      <label for="1">cao đẳng</label>
      <input type="radio" name="education" id="daihoc" value="daihoc" {{ $cv->education == 'daihoc' ? 'checked' : '' }}>
      <label for="2">trung cấp</label>
      <input type="radio" name="education" id="daihoc" value="daihoc" {{ $cv->education == 'daihoc' ? 'checked' : '' }}>
      <label for="3">khác</label>
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Trường học </label>
    <div class="from-txt">
        <input type="text" class="txt" list="items" placeholder="Nhập" name="school" value="{{ $cv->school }}">
        <datalist id="items">
      <option value="Trường công nghệ thông">
      <option value="Trường đại học mở">
      <option value="Sư phạm kĩ thuật">
      <option value="Cao thắng">
      <option value="Đại học FPT">
      <option value="Cao đẳng điện lực">
      <option value="Cao đẳng việt mỹ">
</datalist>
    </div> 
    <div id="inputs-container" style="padding-bottom: 3%;">
  <!-- Initial input -->
</div>
 <input type="button"  onclick="addInput()" name="school[]" class="btn3" value="+">
    </div>
    <!-- f -->


    <p><div class="from"></p>
    <label>Ngoại Ngữ </label>
    <div class="from-txt">
        <input type="text" class="txt"  placeholder="nhập" name="language" value="{{ $cv->language }}">
    </div>
</div>
        <p><div class="from"></p>
    <label>Chứng chỉ khác</label>
    <div class="from-txt">
        <input type="text" class="txt" placeholder="Nhập" name="certificate" value="{{ $cv->certificate }}">
    </div>
</div>

<p><div class="from"></p>
    <label> vị trí </label>
    <div class="from-txt">
   
    </div>
    <div id="inputs-container1" style="padding-bottom: 3%;" >
  <!-- Initial input -->
</div>
<input type="button"  onclick="addInput1()" class="btn3" value="+">

    </div>
    <!-- f -->


    <p><div class="from"></p>
    <label>Nghành nghề </label>
    <div class="from-txt">
        <input type="text" class="txt"  placeholder="nhập" name="career" value="{{ $cv->career }}">
    </div>
</div>
        <p><div class="from"></p>
    <label>kĩ năng</label>
    <div class="from-txt">
        <input type="text" class="txt" placeholder="Nhập" name="skills" value="{{ $cv->skills }}">
    </div>
</div>

<p><div class="from"></p>
    <label>Mức lương hiện tại </label>
    <div class="from-txt">
        <input type="text" class="txt" placeholder="Nhập" name="currentsalary" value="{{ $cv->currentsalary }}">
    </div>
</div>

<p><div class="from"></p>
    <label>Mức lương mong muốn</label>
    <div class="from-txt">
        <input type="text" class="txt" placeholder="Nhập" name="desiredsalary" value="{{ $cv->desiredsalary }}">
    </div>
</div>
</div>
</div>
  </div>
</div>
</div>
</div>





<div class="main-right">
<section>
<div class="from">
<label for="file" style="width: 30%;">
<div class="text-file">Ảnh đại diện</div>
<div class="txt-img">
    <div class="icons"><i class="fa-solid fa-upload fa-bounce" style="color: #000000;"></i></div>
     <div class=""><span class="txt-tetx">Tải ảnh lên</span></div>
     <input type="file" name="image" id="file"  value="{{ $cv->image }}">
    </label>
    </div>
    <div class="txt-text1">Chưa chọn 
  <p>chấn nhận định dạng:pdf, docx, doc,odt,pptx,txt,jpeg,png</p>
    </div>
    </div>
    </section> 



    <section>
<div class="from">
<label for="file" style="width: 30%;">
<div class="text-file"><h>File đính kèm</h></div>
<div class="txt-link">
    <div class="icons"></div>
     <div class=""><span class="txt-tetx">+</span></div>
    <input type="file" name="file" id="file">
    </label>
    </div>
    </div>

    </section>


    <section>
        <div class="from">
            <label class="text-file">Từ khóa *</label>
            <div class="from-txt1">
                <input type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa, phân tách bằng dấu phẩy" id="keywordInput" value="{{ $cv->keyword }}">
                <div id="keywords">
                    <span onclick="updateInput(this, '{{ $cv->keyword }}')"><button type="button">IT</button></span>
                    <span onclick="updateInput(this, '{{ $cv->keyword }}')"><button type="button">LOSIRP</button></span>
                    <span onclick="updateInput(this, '{{ $cv->keyword }}')"><button type="button">BACKEND</button></span>
                    <span onclick="updateInput(this, '{{ $cv->keyword }}')"><button type="button">FONEAND</button></span>
                </div>
            </div>
        </div>
        
    </section>


<section>
    
        <div class="from">
            <label class="text-file">Liên kết</label>
            <div class="from-txt1">
                <input type="text" class="txt1" placeholder="Nhập" name="link" value="{{ $cv->link }}">
                <input type="text" class="txt1" placeholder="Nhập" name="link" value="{{ $cv->link }}">
                <input type="text" class="txt1" placeholder="Nhập" name="link" value="{{ $cv->link }}">
                <div id="inputs-containerlink" style="padding-bottom: 3%;"></div>
                <input type="button" onclick="addInputlink()" class="btn3" value="">
            </div>
        </div>
    </div>
</section>
</article>
<br>
<footer>
<input type="submit" value="Lưu và thêm mới" class="btn">
<input type="reset" class="btn" value="Xóa">
</footer>
</form>

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
