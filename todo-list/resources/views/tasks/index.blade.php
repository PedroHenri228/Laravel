<table>
    <thead>
        <tr>
            <th>Idetificação</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Conclusão</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->end_at }}</td>
                <td>
                    <!-- Link para visualizar o usuário -->
                    <a href="{{ route('tasks.show', $task->id) }}">Ver Usuário</a>

                    <!-- Formulário para deletar o usuário -->
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
