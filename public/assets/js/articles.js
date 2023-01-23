
let search = document.getElementById('search');
search.addEventListener('input',()=>{
        sendData(search.value);
})
let articleslist = document.getElementById("articles1");

function sendData($value){
    articleslist.innerHTML =`
    <tr class="top-0 position-sticky bg-light">
        <td class="mycolor fw-bold ">Title</td>
        <td class="mycolor fw-bold">Categorie</td>
        <td class="mycolor fw-bold">Content</td>
        <td class="mycolor fw-bold">Actions</td>
    </tr>`;

const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
   if(this.readyState===4 && this.status===200){
    articles =JSON.parse(this.responseText);
    articles.forEach(myFunction);

    function myFunction(article) {
        articleslist.innerHTML +=`
        <tr class="bg-light border-bottom-0">
        <td class="text-dark">${article.article_title}</td>
        <td class="text-dark">${article.categorie}</td>
        <td class="text-dark"><button type="button" data-bs-toggle="modal" data-bs-target="#view-Art"class="btn btn-primary btn-sm">full info</button></td>
        <td class="text-dark"><button type="button" class="btn btn-success btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>`;
}
   }
  }
 
  xhr.open("POST","", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("searchArt="+$value);
}
document.getElementById("categoriess").addEventListener("change", function() {
  let  selectedValue = this.value;
  sendcategorie(selectedValue);
});
function sendcategorie(value){
    articleslist.innerHTML =`
    <tr class="top-0 position-sticky bg-light">
        <td class="mycolor fw-bold ">Title</td>
        <td class="mycolor fw-bold">Categorie</td>
        <td class="mycolor fw-bold">Content</td>
        <td class="mycolor fw-bold">Actions</td>
    </tr>`;
const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
   if(this.readyState===4 && this.status===200){
    articles =JSON.parse(this.responseText);
    articles.forEach(myFunction);

    function myFunction(article) {
        articleslist.innerHTML +=`
        <tr class="bg-light border-bottom-0">
        <td class="text-dark">${article.article_title}</td>
        <td class="text-dark">${article.categorie}</td>
        <td class="text-dark"><button type="button" data-bs-toggle="modal" data-bs-target="#view-Art"class="btn btn-primary btn-sm">full info</button></td>
        <td class="text-dark"><button type="button" class="btn btn-success btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>`;
}
   }
  }
  xhr.open("POST","", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("filterArt="+value);
}