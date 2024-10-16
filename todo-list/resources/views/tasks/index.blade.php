<table>
    <thead>
        <tr>
            <th>Idetificação</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Conclusão</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->ends_at }}</td>
                <td>
                    <button onclick="window.location.href='{{ route('tasks.show', $task->id) }}'">Editar</button>

                    <form action="{{ route('tasks.delete', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este usuário?')">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
