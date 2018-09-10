<h1>Excluir Registro</h1>
<hr>
<form action="/atividades/{{$atividade->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('DELETE') }}
	<p>Tem certeza que deseja excluir {{$atividade->id}}?</p>
	<input type="submit" value="Excluir">
</form>