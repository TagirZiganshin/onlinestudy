@extends('layout')
@section('content')
<div class="relative left-60 w-3/4 overflow-hidden rounded-lg border">
  <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
    <thead class="bg-gray-50">
      <tr>
      <th scope="col" class="px-6 py-4 font-large text-gray-900">
    <a href="{{ route('training.form') }}" class="flex items-center text-green-500 hover:text-green-700">
        <svg class="h-8 w-8 text-green-600" width="12" height="12" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z"/>
            <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
            <path d="M4 16v2a2 2 0 0 0 2 2h2" />
            <path d="M16 4h2a2 2 0 0 1 2 2v2" />
            <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
            <line x1="9" y1="12" x2="15" y2="12" />
            <line x1="12" y1="9" x2="12" y2="15" />
        </svg>
        <span class="ml-2">Добавить курс</span>
    </a>
</th>
        <th scope="col" class="px-6 py-4 font-large text-gray-900">Добавить модуль</th>
        <th scope="col" class="px-6 py-4 font-large text-gray-900">Добавить Лекцию</th>
        <th scope="col" class="px-6 py-4 font-large text-gray-900">Добавить Домашнее Задание</th>
        <th scope="col" class="px-6 py-4 font-large text-gray-900">Изменить/Удалить Курс</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      @foreach($trainings as $training)
      <tr class="hover:bg-gray-50">
        <td class="px-6 py-4">{{ $training->title }}</td>
        <td class="px-6 py-4"><div class="flex">
                 <a href="{{ route('module',['training_id' => $training->id]) }}" class="text-blue-500 mr-2">
                 <span class="plus-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus text-green-600 transform hover:scale-110 border border-gray-500 rounded-full p-1" viewBox="0 0 16 16">
                      <path stroke="currentColor" stroke-width="2" d="M8 4V8H4v1h4v4h1V9h4V8H9V4H8zm0-1h0-0-0-0-0-0-0-0H8zm0 1h0-0-0-0-0-0-0-0H8z"/>
                    </svg>
                  </span>
                </a>
                <a href="{{ route('module.table' , ['id' => $training->id])}}" class="text-blue-500 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil transform hover:scale-110" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                </a>
        </td>
        <td class="px-6 py-4"><div class="flex">
                <a href="{{ route('lecture', ['id' => $training->id]) }}" class="text-blue-500 mr-2">
                <span class="plus-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus text-green-600 transform hover:scale-110 border border-gray-500 rounded-full p-1" viewBox="0 0 16 16">
                      <path stroke="currentColor" stroke-width="2" d="M8 4V8H4v1h4v4h1V9h4V8H9V4H8zm0-1h0-0-0-0-0-0-0-0H8zm0 1h0-0-0-0-0-0-0-0H8z"/>
                    </svg>
                  </span>
                </a>

                <a href="{{ route('lecture.table' , ['id' => $training->id])}}" class="text-blue-500 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil transform hover:scale-110" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                </a>
        </td>
        <td class="px-6 py-4"><div class="flex">
                <a href="{{ route('homework', ['id' => $training->id]) }}" class="text-blue-500 mr-2">
                <span class="plus-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus text-green-600 transform hover:scale-110 border border-gray-500 rounded-full p-1" viewBox="0 0 16 16">
                      <path stroke="currentColor" stroke-width="2" d="M8 4V8H4v1h4v4h1V9h4V8H9V4H8zm0-1h0-0-0-0-0-0-0-0H8zm0 1h0-0-0-0-0-0-0-0H8z"/>
                    </svg>
                  </span>
                </a>

                <a href="{{ route('homework.table' , ['id' => $training->id])}}" class="text-blue-500 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil transform hover:scale-110" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                </a>
        </td>

        <td class="px-6 py-4">
          <div class="flex">
              <a href="{{ route('training.edit', ['training' => $training->id]) }}" class="text-blue-500 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil transform hover:scale-110" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                </a>
            <form action="{{ route('training.destroy', $training->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash transform hover:scale-110" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg>
              </button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
