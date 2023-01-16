<div class="container-fluid px-4">
<script src="https://cdn.tiny.cloud/1/ypzaobdfh51yafviec0ky10j3rnvii9y9684rp7u9516r708/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<section id="doctors">
<form id="article-form" method="post" action="addArticles" class="modal-body bg-white p-2 p-sm-5 " style="border-radius:5px">
  <div class="row">
  <div class="form-group col-6 mt-2">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title[]">
  </div>
  <div class="form-group col-3">
        <label class="form-label">Categorie</label>
        <select name="speciality[]" class="form-control">
          <option value="hellooo">ziuehfdz</option>
        </select>
  </div>
  <div class="form-group col-3 mt-2">
    <label for="title">Cover</label>
    <input type="file" class="form-control" id="cover" accept="image/png, image/jpeg, image/jpg" name="cover[]">
  </div>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control  textarea" id="content" class name="content[]"></textarea>
  </div>
  <button type="button" class="btn btn-primary btn-sm mt-2" onclick="addArticle()">Add Article</button>
  <input type="submit" class="btn btn-success btn-sm mt-2" value="Save Articles">
</form>
<script>
  let count = 0;
    function addArticle(){
  // Create a new article element with a delete button
  var article = document.createElement("div");
  article.innerHTML = `
  <div class="row">
  <div class="form-group col-6 mt-2">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title[]">
  </div>
  <div class="form-group col-6">
        <label class="form-label">Speciality</label>
        <select name="speciality[]" class="form-control" id="doctor-speciality">
          <option value="ze">ziuehfdz</option>
        </select>
  </div>

  </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" id="textarea${count}"  name="content[]"></textarea>
    </div>
    <button type="button" class="btn btn-danger btn-sm mt-2" onclick="deleteArticle(this)">Delete</button>
  `;
  
  // Add the new article element to the form
  document.getElementById("article-form").appendChild(article);
  tinymce.init({
    selector: '#textarea'+count,
    plugins: 'link image',
    toolbar: 'undo redo | bold italic | alignleft aligncenter alignright |color| link image',
    content_css: 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
  });
  count++;
}

function deleteArticle(element) {
  // Remove the article element from the form
  element.parentNode.remove();
}

  tinymce.init({
    selector: '#content',
    plugins: 'link image',
    toolbar: 'undo redo | bold italic | alignleft aligncenter alignright |color| link image',
    content_css: 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
  });


</script>
                     
                         
                         
</section>
</div>
