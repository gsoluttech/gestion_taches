<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <form>
            <div class="mb-4">
                <label for="noms" class="block text-gray-700 font-medium mb-2">Noms</label>
                <input type="text" id="noms" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Entrez vos noms">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Entrez votre email">
            </div>
            <div class="mb-4">
                <label for="telephone" class="block text-gray-700 font-medium mb-2">Téléphone</label>
                <input type="tel" id="telephone" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Entrez votre téléphone">
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="genre" class="block text-gray-700 font-medium mb-2">Genre</label>
                    <input type="text" id="genre" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Entrez votre genre">
                </div>
                <div class="w-1/2">
                    <label for="poste" class="block text-gray-700 font-medium mb-2">Poste</label>
                    <input type="text" id="poste" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Entrez votre poste">
                </div>
            </div>
            <div class="mb-4">
                <label for="adresse" class="block text-gray-700 font-medium mb-2">Adresse</label>
                <textarea id="adresse" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Entrez votre adresse" rows="3"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md w-full hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Ajouter
            </button>
        </form>
    </div>
</div>
