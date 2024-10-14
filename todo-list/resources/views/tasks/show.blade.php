<div class="container">
    <h1>Detalhes do Usuario</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Conclusão</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $tasks->id }}</td>
                <td>{{ $tasks->title }}</td>
                <td>{{ $tasks->description }}</td>
                <td>{{ $tasks->ends_at }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('tasks.index') }}">Voltar para a lista de tarefas</a>
</div>
