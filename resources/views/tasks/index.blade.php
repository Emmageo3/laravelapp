<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des tâches        
          <a href="{{ route('tasks.create') }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">Créer une tâche</a>
        </h2>
    </x-slot>    
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-fixed">
              <thead>
                <tr>
                  <th class="px-4 py-2 w-1/4">Titre</th>
                  <th class="px-4 py-2 w-1/4">Etat</th>
                  <th class="px-4 py-2 w-1/6"></th>
                  <th class="px-4 py-2 w-1/6"></th>
                  <th class="px-4 py-2 w-1/6"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($tasks as $task)
                  <tr>
                    <td class="px-4 py-3">{{ $task->title }}</td>
                    <td class="px-4 py-3">@if($task->state) Accomplie @else A faire @endif</td>
                    <td class="px-4 py-3"><a href="{{ route('tasks.show', $task->id) }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Voir</a></td>
                    <td class="px-4 py-3"><a href="{{ route('tasks.edit', $task->id) }}" role="button" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Modifier</a></td>
                    <td class="px-4 py-3">
                      <form id="destroy{{ $task->id }}" action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')                      
                        <a role="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                          onclick="event.preventDefault();
                          this.closest('form').submit();">
                          Supprimer
                        </a>
                      </form>
                    </td class="px-4 py-3">
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>  
</x-app-layout>