require('./bootstrap');
const { default: axios } = require('axios')

if(document.getElementById('upload-progress-image')) {
  document.getElementById('upload-progress-image').addEventListener('change', (e) => {
    const data = new FormData()
    data.append("file", e.target.files[0]);
    data.append("user_id", document.querySelector('input[name="user_id"]').value);
    axios.post('/api/progress-images', data)
      .then((res) => {
        const element = `<div class="w-48 h-48"><div class="h-full bg-center bg-cover bg-no-repeat" style="background-image: url('${res.data.file_path}')"></div></div>`
        document.getElementById('progres-images').innerHTML += element
      })
  })
}

if(document.getElementById('lightgallery')) {
  new LuminousGallery(document.querySelectorAll("#lightgallery a"));
}
