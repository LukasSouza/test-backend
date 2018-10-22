@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h2>Leads Captadas</h2>
    <p class="separator"></p>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="dataTable" aria-describedby="users_table" role="grid">
            <thead>
    			<tr>
                    <th>Id</th>
                    <th>Nome do Cliente</th>
                    <th>Descrição</th>
                    <th>Código</th>
                    <th>Tipo Consórcio</th>
                    <th>Crédito Máximo Solicitado</th>
                    <th>Opções</th>
                </tr>
    		</thead>
    		<tbody>
                @foreach ($objetos as $lead)
                    @php $tipo_consorcio = DB::table('aux_tipo_consorcio')->where('id', $lead->id_tipo_consorcio)->get()->first(); @endphp
                    @php $tabela_referencia = DB::table('tabela_referencia')->where('id', $lead->id_tabela_referencia)->get()->first(); @endphp

                    <tr role="row" class="odd @if($lead->novo_cadastro)new @endif">
                        <td>{{trim($lead->id)}}</td>
        				<td>{{ucwords(mb_strtolower($lead->Cliente->nome))}}</td>
        				<td>{{$tabela_referencia->descricao or 'Não Preenchido'}}</td>
        				<td>{{$tabela_referencia->codigo or ' - '}}</td>
        				<td>{{$tipo_consorcio->descricao}}</td>
        				<td>{{$lead->credito}}</td>
        				<td class="d-flex justify-content-center">

                            <form action="{{ route('leads.show', $lead->id) }}" method="GET" style="margin-right:10px;">
                                @csrf
               					<button type="submit" class="btn btn-sm btn-primary" title='Exibir Detalhes'>
               						<i class="material-icons">search</i>
               				    </button>
                            </form>

                            <form action="{{ route('leads.update', $lead->id) }}" method="POST" style="margin-right:10px;">
                                @csrf
                                {{ method_field('PUT') }}
               					<button type="submit" class="btn btn-sm btn-success" title='Marcar como Não Lido'>
                                    <i class="material-icons">check</i>
               				    </button>
                            </form>

        				</td>
        			</tr>
                @endforeach

            </tbody>
    	</table>
    </div>
    {{-- {{ $models->links() }} --}}
    <br>

@endsection

<style type="text/css">
    .container-fluid {
        background-color: white;
    }
    i.material-icons{
        font-size:24px !important;
    }
    .odd.new{
        background-color: #c0ffd4 !important;
    }
    .even.new{
        background-color: #d3ffe2 !important;
    }
</style>
