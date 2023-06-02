<h3>Fornecedores</h3>


@isset($fornecedores)

	@forelse($fornecedores as $indice => $fornecedor)

		Fornecedor: {{$fornecedor['nome']}}
		<br>
		Status: {{$fornecedor['status']}}
		<br>
		CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
		<br>
		Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
		<br>
		<hr>

	@empty

		Não existe fornecedores cadastrados!!!

	@endforelse
	
@endisset
