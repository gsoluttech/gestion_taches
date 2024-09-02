<header class="w-11/12">
    <?php 
        $lettres = str_split($usernameC);
        $premiereLettre = $lettres[0];

    ?>
    <div class="explorer">Explorer</div>
    <div class="search-bar">
        <input type="text" placeholder="Search">
        <i class='bx bx-search'></i>
    </div>
    <div class="header-right">
        <button class="category-btn"><i class='bx bx-category'></i> Catégorie</button>
        <button class="sort-btn"><i class='bx bx-sort'></i> Trié : Déjà fait</button>
        <i class='bx bx-bell notification-icon'></i>
        <div class="profile-icon bg-gray-200" id="container_profils">
            <p class="text-white text-3xl font-bold text-center hidden" id="profil_image_default"><?php echo "A" ?></p>
            <img src="../src/assets/profilsPicture/<?php echo $profil_image;?>" alt="" class="relative w-full h-full object-cover rounded-full hidden" id="profileImage">
            <form action="" method="POST" enctype="multipart/form-data" id="uploadForm">
                <input type="file" name="profile_picture" id="showFilesDialog" class="hidden" accept="image/.jpeg, .png, .jpg, .gif">
                <label for="showFilesDialog" class="right-4 bottom-2 absolute text-2xl hover:bg-opacity-75" onclick="sendPiCheck();">
                    <i class='bx bx-edit-alt' id="profilchange"></i>
                </label>
                <button type="submit" name="send_profile_picture" id="send_profile_picture" class="hidden">send</button>
            </form>
        </div>
    </div>
</header>