<header class="w-11/12">
    <div class="explorer">Explorer</div>
    <div class="search-bar">
        <input type="text" placeholder="Search">
        <i class='bx bx-search'></i>
    </div>
    <div class="header-right">
        <button class="category-btn"><i class='bx bx-category'></i> Catégorie</button>
        <button class="sort-btn"><i class='bx bx-sort'></i> Trié : Déjà fait</button>
        <i class='bx bx-bell notification-icon'></i>
        <div class="profile-icon">
            <img src="../src/assets/profilsPicture/<?php echo $photo_profil_name?>" alt="" class="relative w-full h-full object-cover object-center hidden" id="couvertureImage">          
            <form action="" method="POST" enctype="multipart/form-data" id="uploadCouvertureForm">
                <input type="file" name="couverture_picture" id="showFilesDialogCouv" class="hidden" accept="image/.jpeg, .png, .jpg, .gif">
                <label for="showFilesDialogCouv" class="right-4 bottom-2 absolute text-2xl hover:bg-opacity-75" onclick="sendPiCheck();">
                    <i class="fa-solid fa-pen-to-square" id="profilchange"></i>
                </label>
                <button type="submit" name="send_couverture_picture" id="send_couverture_picture" class="hidden">send</button>
            </form> 
        </div>
    </div>
</header>