<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Fiche d'une tâche
        </h2>
    </x-slot>    
    <div class="py-12">
      <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
          <p class="text-2xl">Titre</p>
          <p>{{ $task->title }}</p>
          <p class="text-2xl">Détail</p>
          <p>{{ $task->detail }}</p>
          <p class="text-2xl">Etat</p>
          <p>
            @if($task->state)
              La tâche a été accomplie !
            @else
              La tâche n'a pas encore été accomplie.
            @endif
          </p>
          <p class="text-2xl">Date de création</p>
          <p>{{ $task->created_at->format('d/m/Y') }}</p>
          @if($task->created_at != $task->updated_at)
            <p class="text-2xl">Dernière mise à jour</p>
            <p>{{ $task->updated_at->format('d/m/Y') }}</p>
          @endif
        </div>
      </div>
    </div>
  </div>  
</x-app-layout>