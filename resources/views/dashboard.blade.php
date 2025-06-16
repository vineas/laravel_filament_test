<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
            <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('tasks.create') }}" class="btn btn-md btn-success mb-3">ADD TASK</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">DESCRIPTION</th>
                                    <th scope="col" style="width: 20%">STATUS</th>
                                    <th scope="col" class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->title }}</td>
                                        <td>{!! $task->description !!}</td>
                                        <td>{{ $task->status->name }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Task Not Found.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $tasks->links() }}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
