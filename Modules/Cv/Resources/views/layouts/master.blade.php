<article>

  <section>
  @if(session('success'))
      {!! session('success') !!}
  @endif  
  <section>
  <div class="main-left">
  <div class="from-register">
  <div class="text-from"><h3>Thông tin ứng viên</h3></div>
  <div class="form-txt">
    <p><div class="from"></p>
      <label>Tên ứng viên <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="name" >
      </div>
    
      <!-- f -->
      <p><div class="from"></p>
      <label>Giới tính <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
        <input type="radio" name="sex" id="0" value="nam">
        <label for="0">Nam</label>
        <input type="radio" name="sex" id="1" name="sex" value="nu">
        <label for="1">Nữ</label>
        <input type="radio" name="sex" id="2" name="sex" value="khac">
        <label for="2">Khác</label>
      </div>
      <!-- f -->
      <p><div class="from"></p>
      <label>Số điện thoại <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="phone">
      </div>
  
      <!-- f -->
      <p><div class="from"></p>
      <label>Email <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="email" class="txt" placeholder="Nhập" name="email">
      </div>
    
   <!-- f -->
   <p><div class="from"></p>
      <label>ngày sinh <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="date" class="txt" placeholder="Nhập" name="date">
      </div>
   <!-- f -->
   <p><div class="from"></p>
      <label>Địa chỉ hiện tại </label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="address">
      </div>
  </div>
  </div>
  </div>
  
    </section>

    <div class="main-right">
      <section>
      <div class="from">
      <label for="file" style="width: 30%;">
      <div class="text-file">Ảnh đại diện</div>
      <div class="txt-img">
          <div class="icons"><i class="fa-solid fa-upload fa-bounce" style="color: #000000;"></i></div>
           <div class=""><span class="txt-tetx">Tải ảnh lên</span></div>
          <input type="file" name="image" id="file">
          </label>
          </div>
          <div class="txt-text1">Chưa chọn 
        <p>chấn nhận định dạng:pdf, docx, doc,odt,pptx,txt,jpeg,png</p>
          </div>
          </section> 
          <section>
      <div class="from">
      <label for="file" style="width: 30%;">
      <div class="text-file">File đính kèm</div>
      <div class="txt-link">
          <div class="icons"></div>
           <div class=""><span class="txt-tetx">+</span></div>
          <input type="file" name="file" id="file">
          </label>
          </div>
      
          </section>
  
  

        
  <section>

        <label class="text-file">Từ khóa *</label>
        <div class="from">
            <input type="text" class="txt-keyword" name="keyword" placeholder="Nhập từ khóa, phân tách bằng dấu phẩy" id="keywordInput" >
            <div id="keywords">
                <span onclick="updateInput(this, '')"><button type="button">IT</button></span>
                <span onclick="updateInput(this, '')"><button type="button">LOSIRP</button></span>
                <span onclick="updateInput(this, '')"><button type="button">BACKEND</button></span>
                <span onclick="updateInput(this, '')"><button type="button">FONEAND</button></span>
            </div>
        </div>

        </div>
    
        
  
     <section>
      <div class="main-right">
      <div class="from">
        <br>
          <label class="text-file">Liên kết</label>
          <div class="from-txt1">
            <div class="link"><i class="fa-brands fa-invision go"></i><input type="text" class="txt1" placeholder="Liên kết"  name="link" ></div>
            <div class="link"><i class="fa-brands fa-facebook go"></i><input type="text" class="txt1" placeholder="Liên kết"  name="link" ></div>
            <div class="link"><i class="fa-solid fa-globe go"></i><input type="text" class="txt1" placeholder="Liên kết"  name="link" ></div>
  
          <div id="inputs-containerlink" style="padding-bottom: 3%;" ></div>
      <input type="button"  onclick="addInputlink()" class="btn3" value="Thêm liên kết">
          </div>

          
          </div>
          
      </div>
      
      </section>

  <section>
    <div class="main-left">
      <div class="from-register">
      <div class="text-from"><h3>Trình độ học vấn </h3></div>
  <div class="form-txt">
  <div class="from-col-password">
    <p><div class="from"></p>
    <label>Trình độ học vấn </label>
      <div class="from-txt">
        <input type="radio" name="education" id="0">
        <label for="0">đại học</label>
        <input type="radio" name="education" id="1">
        <label for="1">cao đẳng</label>
        <input type="radio" name="education" id="2">
        <label for="2">trung cấp</label>
        <input type="radio" name="education" id="3">
        <label for="3">khác</label>
      </div>
      <p><div class="from"></p>
      <label>Trường học </label>
      <div class="from-txt">
      <input type="list" class="txt" list="items" placeholder="Nhập" name="school[]">
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
   <input type="button"  onclick="addInput()" name="school[]" class="btn3" value="+ Thêm Trường">
      <!-- f -->
      <p><div class="from"></p>
      <label>Ngoại Ngữ </label>
      <div class="from-txt">
      <input type="text" class="txt"  placeholder="nhập" name="language">
      </div>
   <p><div class="from"></p>
      <label>Chứng chỉ khác</label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="certificate">
      </div>
  </div>
  </div>
        </div>
      </div>
      
    </section>
  <section>
    <div class="main-left">
      <div class="from-register">
    <div class="text-from"><h3>Vị trí kinh nghiệm </h3>
  <p><div class="from"></p>
      <label> vị trí </label>
      <div class="from-txt">
      </div>
      <div id="inputs-container1" style="padding-bottom: 3%;" >
    <!-- Initial input -->
  </div>
  <input type="button"  onclick="addInput1()" class="btn3" value="+ Thêm vị trí">
      <!-- f -->
      <p><div class="from"></p>
      <label>Nghành nghề </label>
      <div class="from-txt">
      <input type="text" class="txt"  placeholder="nhập" name="career">
      </div>
          <p><div class="from"></p>
      <label>kĩ năng</label>
      <div class="from-txt">
        <input type="text"  class="txt" name="skills" placeholder="Nhập từ khóa, phân tách bằng dấu phẩy" id="" >

      </div>
  <p><div class="from"></p>
      <label>Mức lương hiện tại </label>
      <label style="float: right">USD | VND <span><h4 class="usd">USD/tháng</h4></span></label>
        <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="currentsalary">
      </div>
  <p><div class="from"></p>
      <label style="float: left">Mức lương mong muốn</label>
      <label style="float: right">USD | VND <span><h4 class="usd">USD/tháng</h4></span></label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="desiredsalary"  >
      
      </div>
  <p><div class="from"></p>
    <label>Kinh nghiệm</label>
    <div class="from-txt">
    <input type="text" class="txt" placeholder="Nhập" name="experience">
    </div>
  </div>
  </div>
    </div>
  </section>
    </article>
  </body>
  </html>
  <script src="/js/javascript.js"></script>
