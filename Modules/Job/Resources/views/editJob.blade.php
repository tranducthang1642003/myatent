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
  
    <script src="https://unpkg.com/vanilla-tags-input"></script>
</head>
<body>

    <header>
        @include('cv::layouts.menu')
</header>
<br>

<section>
    <div class="col-1">
        <div class="text-2"><span>Danh sách vị trí</span> / Thêm Vị trí</div>
        <div class="text-3"><i class="fa-solid fa-arrow-left"></i> <span style="padding-left: 20px">Thông tin vị trí</span></div>
        <div class="left">
            <div class="tab1">
              
            </div>
        </div>
    </div>
</section>
<article>
    <form action="{{ route('job.edit', $job->id) }}" method="GET">
        @csrf
        @method('PUT')
<div class="main-left">
<div class="from-register">
<div class="text-from"><h3>Thông tin cơ bản</h3></div>
<div class="form-txt">
<div class="from-col-password">
  <p><div class="from"></p>
    <label>Vị trí tuyển dụng <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" name="locations" class="txt" placeholder="Nhập" value="{{ $job->locations }}">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Tên công ty<span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" name="company" class="txt" placeholder="Nhập"   value="{{ $job->company }}" >
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Số lượng tuyển dụng  <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" class="txt" name="quantity" placeholder="Nhập"   value="{{ $job->quantity }}">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Hình thức việc làm<span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" class="txt" name="work" placeholder="Nhập"   value="{{ $job->work }}">
    </div>
    </div>
 <!-- f -->
 <p><div class="from"></p>
    <label>Địa chỉ <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" name="address" class="txt" placeholder="Nhập"   value="{{ $job->address }}">
    </div>
    </div>

 <!-- f -->
 <p><div class="from"></p>
    <label>Loại hợp đồng</label>
    <div class="from-txt">
    <input type="text" name="contract" class="txt"  placeholder="Nhập"   value="{{ $job->contract }}">
    </div>
    </div>

    <p><div class="from"></p>
    <label>Mô tả công việc</label>
    <div class="from-txt">
    <input type="text" name="jobdescription" class="txt" placeholder="Nhập" value="{{ $job->jobdescription }}">
    </div>
    </div>
    <br>
  </div>
</div>
</div>
</div>

<div class="main-right">
    <p><div class="from"></p>
    <label class="text-file">Từ khóa *</label>
    <div class="from-txt">
    <input type="text" class="form-control"  name="keyword" placeholder="Nhập từ khóa, phân tách bằng dấu phẩy" id="keywordInput" value="{{ $job->keyword }}">

    <div id="keywords">
    <span onclick="updateInput(this)"><button type="button">IT</button></span>
    <span onclick="updateInput(this)"><button type="button">LOSIRP</button></span>
    <span onclick="updateInput(this)"><button type="button">BACKEND</button></span>
    <span onclick="updateInput(this)"><button type="button">FONEAND</button></span>
</div>
    </div>
    </div>
    <p><div class="from"></p>
    <label class="text-file">link *</label>
    <div class="from-txt">
    <input type="text" name="link" class="txt1" placeholder="Nhập" value="{{ $job->link }}">
    </div>
    </div>
</div>
<div class="main-left">
<section>
<div class="from-register">
<div class="text-from"><h3>Thông tin vị trí</h3></div>
<div class="form-txt">
<div class="from-col-password">
  <p><div class="from"></p>
  <label>Kinh nghiệm yêu cầu </label>
    <div class="from-txt">
    <input type="text" name="experience" class="txt" placeholder="Nhập" value="{{ $job->experience }}">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Kỹ Năng </label>
    <div class="from-txt">
    <input type="list" class="txt" name="skill"   placeholder="Nhập" value="{{ $job->skill }}" >
   
    </div>
    </div>

    <p><div class="from"></p>
    <label>Nghành nghề</label>
    <div class="from-txt">
    <input type="text" name="career" class="txt"  value="{{ $job->career }}">
    </div>
</div>

        <p><div class="from"></p>
    <label>Mức lương</label>
    <div class="from-txt">
    <input type="text" name="wage" class="txt" placeholder="Nhập" value="{{ $job->wage }}">
    </div>
</div>


<p><div class="from"></p>
    <label>Trạng thái </label>
    <div class="from-txt">
    <input type="text" name="status" class="txt" placeholder="Nhập" value="{{ $job->status }}">
    </div>
</div>
<p><div class="from"></p>
    <label>Hình thức lương <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
      <input type="radio" name="salary" id="0" value="{{ $job->salary }}">
      <label for="0">NET</label>
      <input type="radio" name="salary" id="1" value="{{ $job->salary }}">
      <label for="1">GROSS</label>
    </div>
    <br>
    </div>
</div>
</div>
</div>
</div>
</section>
</article>
<br>

<footer>
<button type="submit" class="btn">Lưu và thêm mới </button>
<input type="reset" class="btn1"  value="Xóa ">
              </div>
            </form>
            </div>
</footer>

</body>
</html>
<script src="/js/javascript.js"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>   


<script>
    var input = document.querySelector('#keywordInput');
    var tagify = new Tagify(input);
    function updateInput(element) {
        var keyword = element.textContent;
        tagify.addTags([keyword]);
    }
</script>

