<div class="container">
    <h1>Detalhes da Tarefa</h1>

    <form action="{{ route('tasks.updated', $tasks->id) }}" method="post">
        @csrf
        <input type="text" name="title" value="{{ $tasks->title }}">
        <br>
        <input type="text" name="description" value="{{ $tasks->description }}">
        <br>
        <input type="datetime" name="ends_at" value="{{ $tasks->ends_at }}">

        <button type="submit">Editar</button>
    </form>


    <a href="{{ route('tasks.index') }}">Voltar para a lista de tarefas</a>
</div>
