<div>
    <!-- resources/views/tasks/index.blade.php -->

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Conclusão</th>
            <th>Ações</th>
            <!-- Outras colunas -->
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->ends_at }}</td>
            <td><a href="{{ route('tasks.show', $task->id) }}">Ver Tarefas</a></td>
            <!-- Outras colunas -->
        </tr>
        @endforeach
    </tbody>
</table>

</div>
