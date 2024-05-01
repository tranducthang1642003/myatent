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
            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 20px">SST</th>
                            <th scope="col">Ứng viên</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Email</th>
                            <th scope="col">Vị trí</th>
                            <th scope="col">Kinh nghiệm (năm)</th>
                            <th scope="col">Ngày tải lên</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($cvs as $cvs)
                            <td style="width: 30px">0{{$cvs->id}}</td>
                            <td style="width: 230px"><div class="text-xanh td1 ">{{$cvs->name}}</div> </td>
                            <td>{{$cvs->phone}}</td>
                            <td style="width: 300px">{{$cvs->email}}</td>
                        <td > {{htmlspecialchars($cvs->location)}}</td>
                            <td > {{$cvs->experience }}</td>
                            <td style="width: 230px">{{$cvs->updated_at}} <span class="text-Yello-light-2"><h7>NEW</h7></span> </div></td>
                            <td>
                                <a href="{{ route('cv.edit', $cvs->id) }}"><img src="/Image/edit-2.png" alt="" style="width: 20px">asdfa</a>
                                <form action="{{ route('cv.destroy', $cvs->id) }}" method="POST" style="display: inline;">
                            @csrf
                              @method('DELETE')
                            <button type="submit" class="btnk" onclick="return confirm('Bạn có chắc chắn muốn xóa CV này?')">4545646</button>
                        </form>
                    </td>
            </tr>   
            @endforeach
                    </tbody>
                </table>
               </div>
         
    </div>
    <!-- l -->
</body>
</html>
<script src="/js/javascript.js"></script>
