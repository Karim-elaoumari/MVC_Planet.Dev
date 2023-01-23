<div class="container-fluid px-4">

<section >
<form   method="post" id="fullForm" action="" class="modal-body bg-white p-2 p-sm-5 " style="border-radius:5px" enctype='multipart/form-data'>
<div id="article-form">
<hr>
  <div class="row">
  <div class="form-group col-6 mt-2">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title[]">
  </div>
  <div class="form-group col-3">
        <label class="form-label">Categorie</label>
        <select name="speciality[]" class="form-control">
         <?php if(is_array($categories)){
          foreach($categories as $categorie){
            ?>
          <option value="<?=$categorie['id'] ?>"><?=$categorie['name'] ?></option>
          <?php }} ?>
        </select>
  </div>
  <div class="form-group col-3 mt-2">
    <label for="title">Cover</label>
    <input type="file" class="form-control" id="cover" accept="image/png, image/jpeg, image/jpg" name="cover[]">
  </div>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control  textarea" class name="content[]"></textarea>
  </div>
  </div>
  <button type="button" class="btn btn-primary btn-sm mt-2" onclick="addArticle()">Add Article</button>
  <input type="submit" class="btn btn-success btn-sm mt-2" name="addArt" value="Save Articles">
  
</form>

                     
                         
                         
</section>
</div>
