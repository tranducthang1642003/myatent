<article>
    <section>
  <div class="main-left">
  <div class="from-register">
  <div class="text-from"><h3>Thông tin cơ bản</h3></div>
  <div class="form-txt">
  <div class="from-col-password">
    <p><div class="from-job"></p>
      <label>Vị trí tuyển dụng <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="text" name="locations" class="txt" placeholder="Nhập">
      </div>
      </div>
      <!-- f -->
      <p><div class="from-job"></p>
      <label>Tên công ty<span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="text" name="company" class="txt" placeholder="Nhập">
      </div>
      </div>
      <!-- f -->
      <p><div class="from-job"></p>
      <label>Số lượng tuyển dụng  <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="text" name="quantity" class="txt" placeholder="Nhập">
      </div>
      </div>
      <!-- f -->
      <p><div class="from-job"></p>
      <label>Hình thức việc làm<span class ="text-red-light-1" >*</span></label>
      <div class="from-txt">
      <input type="text" class="txt" name="work" placeholder="Nhập" list="lamviec">
      <datalist id="lamviec">
        <option value="Trực tiếp">
      </datalist>
      </div>
      </div>
   <!-- f -->
   <p><div class="from-job"></p>
      <label>Địa chỉ <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="text" name="address" class="txt" placeholder="Nhập">
      </div>
      </div>
  
   <!-- f -->
   <p><div class="from-job"></p>
      <label for="loaihopdong">Loại hợp đồng</label>
      <div class="from-txt">
      <input type="text" name="contract" class="txt"  placeholder="Nhập" list="loaihopdong">
      <datalist id="loaihopdong">
        <option value="Thực Tập">
        <option value="Toàn Thời gian">
        <option value="Remmmot">
      </datalist>
  
      </div>
      </div>
  
      <p><div class="from-job"></p>
      <label>Mô tả công việc</label>
      <br>
      <div class="from-txt">
        <textarea id="freeform" name="jobdescription" rows="15" cols="80"> </textarea>
      </div>
    </section>
  
    <section>
      <div class="main-right">
        <p></p>
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
  </section>
      
        <section>
          <div class="main-right">
          
              <p><div class="from-job"></p>
              <label class="text-file">Liên kết bài đăng *</label>
              <div class="from-txt1">
                <div class="link"><i class="fa-solid fa-globe go"></i><input type="text" class="txt1" placeholder="URL LINK"  name="link" ></div>
                <div class="link"><i class="fa-solid fa-globe go"></i><input type="text" class="txt1" placeholder="URL LINH"  name="link" ></div>
                <div id="inputs-containerlink" style="padding-bottom: 3%;" ></div>
                <input type="button"  onclick="addInputlink()" class="btn3" value="Thêm liên kết">
                    </div>
                    </div>
            </section>
  
  
  
  
  
  
  
  
  
  
  
  
        <section>
          <div class="main-left">
            <div class="from-register">
          <div class="text-from"><h3>Thông tin vị trí</h3></div>
          <div class="form-txt">
            <p><div class="from-job"></p>
            <label>Kinh nghiệm yêu cầu </label>
              <div class="from-txt">
              <input type="text" name="experience" class="txt" placeholder="Nhập" value="Năm" >
              </div>
              <!-- f -->
              <p><div class="from-job"></p>
              <label>Kỹ Năng </label>
              <div class="from-txt">
              <input type="list" class="txt" name="skill"  list="tag" placeholder="Nhập" >
              <datalist id="tag" >
                <option value="Backend">
                <option value="Fonfend">
                <option value="Teamword">
                <option value="leadership">
                <option value="problemsolvings">
                <option value="interpersonal">
          </datalist>
              </div>
          
              <p><div class="from-job"></p>
              <label>Nghành nghề</label>
              <div class="from-txt">
              <input type="text" name="career" class="txt" >
              </div>
          
                  <p><div class="from-job"></p>
              <label>Mức lương</label>
              <div class="from-txt">
              <input type="text" name="wage" class="txt" placeholder="Nhập">
              </div>
          
          
          <p><div class="from-job"></p>
              <label>Hình thức lương <span class ="text-red-light-1">*</span></label>
              <div class="from-txt">
                <input type="radio" name="salary" id="0">
                <label for="0">NET</label>
                <input type="radio" name="salary" id="1">
                <label for="1">GROSS</label>
              </div>
              <br>
          </section>
  
         
  
       </article>