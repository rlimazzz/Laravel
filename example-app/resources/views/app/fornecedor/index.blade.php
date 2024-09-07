<h1>Fornecedores Ativos no Sistema</h1>

@isset($fornecedores) 

    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual : {{$loop -> iteration}}
        <br>
        <a>Fornecedor : {{$fornecedor['nome'] ?? ' '}}</a>
        <br>
        <a>Situação : {{$fornecedor['status'] ?? ''}} </a>
        <br>    
        <a>CNPJ : {{$fornecedor['cnpj'] ?? 'oiii'}}<a>
        <br>
        <a>Telefone : {{$fornecedor['telefone'] ?? 'Indefinido'}}, DDD = {{$fornecedor['ddd']}}</a>
        <br>
        @switch($fornecedor['ddd'])
            @case('11')
                <a> Você é de São Paulo</a>
                @break
            @case('62')
                <a> Você é de Goiás </a>
                @break
            @case('85')
                <a> Você é de Fortaleza</a>
                @break
            @default
                <a>Estado não identificado</a>
                @break
        @endswitch
        <br>
        @if($loop -> first) 
            Primeira iteração do loop
        @elseif($loop -> last) 
            Ultima iteração do loop
            <br> 

            Total de clientes {{$loop -> count}}
        @endif
        <hr>

        @empty
            Não existem pessoas cadastradas!!!
    @endforelse
    
@endisset

@foreach($fornecedores as $indice => $fornecedor)
    @dd($fornecedor)
@endforeach