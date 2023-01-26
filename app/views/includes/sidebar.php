
<link href="http://localhost/MVC_Planet.Dev/public/assets/css/admin-style.css" rel="stylesheet">

<div class="d-flex shadow-sm bg-light" id="wrapper">
        <div class="myBackground2" id="sidebar-wrapper">
            <div class="sidebar-heading text-center d-flex flex-column py-4 fs-5 border-bottom mt-5">
                <div class=" align-items-center">
                    <img src="http://localhost/MVC_Planet.Dev/public/assets/img/user.png" width="70px" class="rounded-circle me-3 mb-3" alt="">
                    <div class="mycolor">
                        <p style="margin:-5px;"><?= $_SESSION["name"]?></p>
                        <p class="text-secondary fs-6"><?= $_SESSION["email"]?></p>
                    </div>
                </div>
                <form action="" method="post">
                <button type="submit" name="logout" class="btn btn-lg btn-block btn-light my-3 mycolor button1 fs-6 w-100">Log out</button>
                </form>
</div>
               
          
                <a href="dashboard" type="submit"  class="list-group-item list-group-item-action text-white  <?=  $dashStatus?> "><i
                        class="uil uil-chart-bar fs-4 me-2"></i>Dashboard</a>
                <a href="articals" type="submit"  class="list-group-item list-group-item-action text-white   <?=  $artiStatus?>"><i
                        class="uil uil-medkit me-2 fs-4" ></i>Articals</a>
                <a href="users"  type="submit"  class="list-group-item list-group-item-action  text-white <?=  $userStatus?>"><i
                        class="uil uil-stopwatch me-2 fs-4" ></i>Users</a>        
                <a href="autors" name="appointments-displayer" type="submit"  class="list-group-item list-group-item-action text-white  <?=  $autorStatus?>"><i
                        class="uil uil-bookmark me-2 fs-4"></i>Autors</a>
           
        </div>