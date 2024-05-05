<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css" integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
    <script src="https://unpkg.com/vanilla-tags-input"></script>
</head>
<body>
    <header>
        @include('cv::layouts.menu')
</header>
<article>
<section>
<div class="col-2">
    <div class="text-col-1">
<div class="text-1"><h3>Danh sách ứng viên</h3></div>
</div>
    <div class="text-clo-2">
        <div class="vitri">
<button class="btn5">Xuất file </button>
<button class="btn5">Tải Cv</button>
<button class="btn2"> <a href="/cv/add"> Thêm Cv </a></button>
</div>
</div>
<hr>

<div class="text-clo-1">
    <div class="search">
    <form class="example"  style="max-width:295px">
  <input type="text" placeholder="Tìm kiếm " name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<br>
            <div class="tab2" >
                <button class="tablinks" onclick="openCity(event, 'Đăng nhập')" id="defaultOpen">Danh sách vị trí</button>
                <button class="tablinks" onclick="openCity(event, 'Đăng ký')">Vị trí đã lọc </button>
            </div>
        <br>
</div>

   
   
<div class="text-col-2">
<label for="cars">Trạng thái</label>
<select id="cars" name="cars">
  <option value="volvo">Tất cả</option>
  <option value="saab">Saab 95</option>
  <option value="mercedes">Mercedes SLK</option>
  <option value="audi">Audi TT</option>
</select>
</form>
<label for="cars">Ngày tạo</label>
<input type="date" name="" id="">
</div>
</div>
</div>
</section>
<div class="boder"></div>
<section>
    <div id="Đăng nhập" class="tabcontent">
            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Vị trí</th>
                            <th scope="col">Số lần lọc</th>
                            <th scope="col">Nhà Tuyển dụng</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Ngày hết hạn</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($jobs as $job)
                            <td>{{$job->id}}</td>
                            <td><div class="text-xanh td1" >{{$job->company}}</td>
                            <td><div class="text-xanh td1 ">{{03}}</td>
                            <td>{{$job->locations}}</td>
                            <td><div class="text-xanh td ">{{$job->status}}</div> </td>
                            <td> {{$job->updated_at }}</td>
                            <td>{{$job->updated_at}} <span class="text-Yello-light-2"></span> </div></td>
                            <td>
                                
                            <button type="submit" id="filter-button" onclick="handleFilterClick({{ $job->id }})" class="btnk"><img src="/Image/favorite-chart.jpg" alt="" style="width: 20px">LỌC</button>
                                <a href="{{ route('job.edit', $job->id) }}"style="    color: #bf0000;">xz</a>
                                <form action="{{ route('job.destroy', $job->id) }}" method="POST" style="display: inline;">
                            @csrf
                              @method('DELETE')
                            <button type="submit" class="btnk" onclick="return confirm('Bạn có chắc chắn muốn xóa Job này?')"><img src="/Image/trash.png" alt="" style="width: 20px">XÓA</button>
                        </form>
                    </td>
            </tr>   
            @endforeach
                    </tbody>
                </table>
               </div>
    </div>
</section>
</article>
</section>

<div id="filter-form" class="filter-form1">
<div class="loc">

<div class="khung-1">
<button type="submit" id="filter-button" onclick="handleFilterClick({{ $job->id }})" class="btnk"><i class="fa-solid fa-xmark" style="color: #000000;"></i></button>
<div class="" style="text-align: center"><h4>Lọc ứng viên </h4></div>
<div class="" style="text-align: center"><h4>Lọc ứng viên </h4></div>
</div>
<hr>
<div class="filter-col-2">
    {{-- <form action="{{ route('job.filter') }}" method="post"> <!-- Changed action to 'job.filter' -->
        @csrf --}}
        <div class="filter-1">1 lần lọc ứng viên = 3 credit.</div>
    
        <div class="">
            <h3>Vị trí:</h3>
        </div>
        <p>
            {{-- <div class="from-job">
                <label>Kinh nghiệm <span class="text-red-light-1">*</span></label>
                <div class="from-txt">
                    <input type="text" name="kinang" class="txt" placeholder="Nhập">
                </div>
            </div>
            <p>
                <div class="from-job">
                    <label>Kỹ năng<span class="text-red-light-1">*</span></label>
                    <div class="from-txt">
                        <input type="text" name="kinang" class="txt" placeholder="Nhập"> <!-- Fixed name to 'kinang' -->
                    </div>
                    <label>Ngành nghề <span class="text-red-light-1">*</span></label>
                    <div class="from-txt">
                        <input type="text" name="kinang" class="txt" placeholder="Nhập"> <!-- Fixed name to 'kinang' -->
                    </div>
                </div>
    
                <p>
                    <div class="from-job">
                        <label>Mức lương <span class="text-red-light-1">*</span></label>
                        <div class="from-txt">
                            <input type="text" name="luong" class="txt" placeholder="Nhập"> <!-- Fixed name to 'luong' -->
                        </div>
                        <p>
                            <div class="from-job">
                                <label>Khu vực <span class="text-red-light-1">*</span></label>
                                <div class="from-txt">
                                    <input type="text" name="kinang" class="txt" placeholder="Nhập"> <!-- Fixed name to 'kinang' -->
                                </div>
                                <p>
                                    <div class="from-job">
                                        <label>Địa chỉ <span class="text-red-light-1">*</span></label>
                                        <div class="from-txt">
                                            <input type="text" name="kinang" class="txt" placeholder="Nhập"> <!-- Fixed name to 'kinang' -->
                                        </div>
                                    </div>
</p>
    </div>
    <button type="submit" class="btn btn-primary">Filter</button> --}}

    <form action="{{ route('job.filter.post') }}" method="POST">
        @csrf
        <input type="hidden" name="job_id" value="{{ $job->id }}">
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" placeholder="Location">
        <label for="skill">Skill:</label>
        <input type="text" name="skill" id="skill" placeholder="Skill">
        <label for="wage">Minimum Wage:</label>
        <input type="number" name="wage" id="wage" placeholder="Minimum Wage">
        <label for="keyword">Keyword:</label>
        <input type="text" name="keyword" id="keyword" placeholder="Keyword">
        <button type="submit">Search</button>
    </form>
    
</div>
</div>
    
</div>
</section>




</body>
</html>
<script src="/js/javascript.js"></script>
<script>
    function handleFilterClick(jobId) {
        var form = document.getElementById("filter-form");
      if (form.style.display === "none") {
        form.style.display = "block";
        setTimeout(function(){ form.style.opacity = "1"; }, 100);
      } else {
        form.style.opacity = "0";
        setTimeout(function(){ form.style.display = "none"; }, 1000);
      }
        event.preventDefault();
    }
    </script>