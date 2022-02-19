<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Création d'une tâche
        </h2>
    </x-slot>    
    <div class="py-12">
      <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
          <x-jet-validation-errors class="mb-4" />
          @if (session()->has('message'))
            <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3">
              {{ session('message') }}
            </div>
          @endif
          <form method="POST" action="{{ route('tasks.store') }}">
              @csrf
              <div class="mt-4">
                  <x-jet-label value="Titre" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=title name="title" :value="old('title')" placeholder="Titre de la tâche" required autofocus />
              </div>
              <div class="mt-4">
                  <x-jet-label value="Détail" />
                  <textarea class="form-input rounded-md shadow-sm mt-1" style="width: 100%" id="detail" name="detail" placeholder="Détail de la tâche">{{ old('detail') }}</textarea>
              </div>
              <div class="flex items-center justify-end mt-4">
                  <x-jet-button class="ml-4">
                      Envoyer
                  </x-jet-button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>  
</x-app-layout>