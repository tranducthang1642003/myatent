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
  
};



function addInput() {
  const inputsContainer = document.getElementById('inputs-container');

  // Tạo một input mới
  const newInputContainer = document.createElement('div');
  newInputContainer.classList.add('input-container');
  newInputContainer.innerHTML = `
  <input type="text" class="txt" placeholder="Nhập" name="school[]"  class="btn3">
    <button onclick="removeInput(this)" class="xoa"><i class="fa-solid fa-xmark"></i></button>
  `;
  inputsContainer.appendChild(newInputContainer);
};
document.getElementById("defaultOpen").click();
function removeInput(button) {
  // Lấy ra div chứa input và nút Xóa
  const inputContainer = button.parentNode;
  
  // Xóa div chứa input và nút Xóa
  inputContainer.parentNode.removeChild(inputContainer);
}
//





function addInput1() {
  const inputsContainer = document.getElementById('inputs-container1');

  // Tạo một input mới
  const newInputContainer = document.createElement('div');
  newInputContainer.classList.add('input-container1');
  newInputContainer.innerHTML = `
  <input type="text" class="txt" placeholder="Nhập" name="location[]"  class="btn3">
    <button onclick="removeInput(this)" class="xoa"><i class="fa-solid fa-xmark"></i></button>
  `;

  // Thêm input mới vào inputsContainer
  inputsContainer.appendChild(newInputContainer);
}

function removeInput(button) {
  // Lấy ra div chứa input và nút Xóa
  const inputContainer = button.parentNode;
  
  // Xóa div chứa input và nút Xóa
  inputContainer.parentNode.removeChild(inputContainer);
}
//
function addInputlink() {
  const inputsContainer = document.getElementById('inputs-containerlink');

  // Tạo một input mới
  const newInputContainer = document.createElement('div');
  newInputContainer.classList.add('input-containerlink');
  newInputContainer.innerHTML = `
  <div class="link"><i class="fa-solid fa-globe go"></i><input type="text" class="txt1" placeholder="URL LINH"  name="link" >
    <button onclick="removeInput(this)" class="xoa"><i class="fa-solid fa-xmark"></i></button>
    </div>
  `;

  // Thêm input mới vào inputsContainer
  inputsContainer.appendChild(newInputContainer);
}

function removeInput(button) {
  // Lấy ra div chứa input và nút Xóa
  const inputContainer = button.parentNode;
  
  // Xóa div chứa input và nút Xóa
  inputContainer.parentNode.removeChild(inputContainer);
};



   
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
