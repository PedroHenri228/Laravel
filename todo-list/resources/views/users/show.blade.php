<div class="container">
    <h1>Detalhes do Usuario</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $users->id }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->password }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('users.index') }}">Voltar para a lista de tarefas</a>
</div>
