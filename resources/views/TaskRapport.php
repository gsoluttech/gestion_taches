<!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->

<div id="taskrapport" class="w-full h-full bg-gray-50 flex items-center justify-center p-4 hidden">
  <div class="bg-white shadow rounded-lg p-6 w-full h-full">
    <div class="flex justify-between items-center mb-1">
      <div class="flex items-center">
        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
          <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7l9-5-9-5-9 5 9 5z"></path></svg>
        </div>
        <div class="ml-4">
          <h4 class="text-sm font-semibold text-gray-900">Promesse Musay</h4>
          <p class="text-xs text-gray-600">Superviseur technique</p>
        </div>
      </div>
      <div class="flex items-center">
        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
          <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7l9-5-9-5-9 5 9 5z"></path></svg>
        </div>
        <div class="ml-4 mb-8">
          <h4 class="text-sm font-semibold text-gray-900">Besodia kabambi</h4>
          <p class="text-xs text-gray-600">Superviseur Administratif</p>
        </div>
      </div>
    </div>


    <div class="w-full bg-gray-50 min-h-screen flex items-center justify-center flex" id="addNewProject">
    <div class="bg-white w-full rounded-lg shadow-lg p-8">
        <!-- Section du projet en cours -->
        <div>
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Projet en cours</h2>
            <div class="bg-gray-100 p-4 rounded-lg mb-8">
                <h1 class="text-xl font-bold text-gray-800">Nom du projet</h1>
                <p class="text-gray-600 mt-2">Description du projet.</p>
            </div>
        </div>

        <!-- Section du rapport récent -->
        <div>
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Rapport récent</h2>
            <div class="bg-gray-100 p-6 rounded-lg h-64 overflow-y-auto">
                <!-- Template du rapport récent -->
                <div class="flex items-center justify-between bg-white p-4 mb-4 rounded-lg shadow">
                    <div class = "flex flex-row">
                        <h3 class="text-md font-semibold text-gray-800">Nom du fichier</h3>
                        <p class="text-sm text-gray-600 px-16">Ceci est une brève description du fichier.</p>
                    </div>
                    <a href="#" class="text-blue-600 hover:text-blue-800">
                    <i class='bx bx-cloud-download text-4xl'></i>
                    </a>
                </div>
                <!-- Fin du template du rapport récent -->

                <!-- Vous pouvez dupliquer ce bloc pour chaque rapport -->
            </div>
        </div>
    </div>
</div>
  </div>
</div>
