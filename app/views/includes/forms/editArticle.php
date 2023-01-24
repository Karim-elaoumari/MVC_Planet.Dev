
<div class="modal fade" id="editArticle">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
<form   method="post" id="fullForm" action="" class="modal-body bg-white p-2 p-sm-5 " style="border-radius:5px" enctype='multipart/form-data'>
<div id="article-form">
<hr>
  <div class="row">
  <div class="form-group col-6 mt-2">
    <input type="hidden" name="idOfEdit" id="idOfEdit">
    <input type="hidden" name="oldCover" id="oldCover">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="titleEdit" name="title" tabindex="-1">
  </div>
  <div class="form-group col-3" >
        <label class="form-label">Categorie</label>
        <select name="categorie" class="form-control" id="categorieEdit"  tabindex="-1">
         <?php if(is_array($categories)){
          foreach($categories as $categorie){
            ?>
          <option value="<?=$categorie['id'] ?>"><?=$categorie['name'] ?></option>
          <?php }} ?>
        </select>
  </div>
  <div class="form-group col-3 mt-2">
    <label for="title">Cover</label>
    <input type="file" class="form-control"  accept="image/png, image/jpeg, image/jpg" name="coverEdit"  tabindex="-1">
  </div>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control  textarea" class name="content" id="contentEdit"></textarea  tabindex="-1">
  </div>
  </div>
  <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-dismiss="modal">Discard</button>
  <input type="submit" class="btn btn-success btn-sm mt-2" name="updateArt" value="Save">
  
</form>
                           
            </div>
        </div>
</div>


   