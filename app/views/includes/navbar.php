
 <div id="page-content-wrapper" class="myBackground" style="height: 100vh; overflow: scroll;background-color:#3B353A">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent p-4 pt-1 justify-content-between" id="">
                
                    
                    <i class="uil uil-align-left fs-4 me-3 mycolor" id="menu-toggle"></i>
                  
             
            <div class="d-flex align-items-center ms-auto">
                <div class="pt-3 me-3">
                  <p class="fs-6 text-secondary" style="margin-bottom: -5px;">Today's date</p>
                  <p class="fs-6 text-white fw-bold" id="current-date">
                    <?php 
                      echo date("d-m-Y");
                    ?>
                  </p>
                </div>
                <i class="uil uil-calendar-alt fs-2 mt-1 box rounded p-2 mycolor"></i>
            </div>
</nav>