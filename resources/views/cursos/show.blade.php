@extends('layouts.app')

@section('content')

    @php
        $parcela_anterior = 0;
        $id_adm_tipo_consorcio = null;
        $cliente = $objeto->Cliente;
        $tabela_referencia = $objeto->TabelaReferencia;
        //dd($tabela_referencia);
        if($tabela_referencia){
            $id_adm_tipo_consorcio = $tabela_referencia->id_adm_tipo_consorcio;
            $adm_tipo_consorcio = App\Models\AdmTipoConsorcio::find($tabela_referencia->id_adm_tipo_consorcio);

            //$adm_tipo_consorcio = DB::table('adm_tipo_consorcio')->where('id', $tabela_referencia->id_adm_tipo_consorcio)->get()->first();
        }
        else {
            $adm_tipo_consorcio = null;
        }
        $relatorios = DB::table('relatorio')->where('id_tabela_referencia', $objeto->id_tabela_referencia)->get();
        //dd($relatorio);

    @endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dados do Cliente') }}</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Nome') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->nome or " - " }}">
                        </div>

                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Telefone') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->telefone or " - " }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('E-mail') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->email or " - " }}">
                        </div>

                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('CPF') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->cpf or " - " }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->dataNascimento or " - " }}">
                        </div>

                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('CEP') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->cep or " - " }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Cidade') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->cidade or " - " }}">
                        </div>

                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Bairro') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->bairro or " - " }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Logradouro') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->rua or " - " }}">
                        </div>

                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Numero') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->numero or " - " }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Complemento') }}</label>
                        <div class="col-md-10">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $cliente->complemento or " - " }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('Dados do Item Tabela Referência Escolhido') }}</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Administradora') }}</label>
                        <div class="col-md-10">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $adm_tipo_consorcio->Administradora->descricao or ""  }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Label') }}</label>
                        <div class="col-md-10">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $adm_tipo_consorcio->label or  "" }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Perfil') }}</label>
                        <div class="col-md-4">
                            @php if($adm_tipo_consorcio) $perfil = Perfil($adm_tipo_consorcio->id_tipo_perfil); @endphp
                            <input disabled="disabled" type="text" class="form-control" value="{{ $perfil or "" }}">
                        </div>

                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Tipo de Consórcio') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $adm_tipo_consorcio->Aux_tipo_consorcio->descricao or "" }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Taxa de Seguro Mensal') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $adm_tipo_consorcio->taxa_seguro or "" }} %">
                        </div>

                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Código') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $tabela_referencia->codigo or "" }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Fabricante') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $tabela_referencia->fabricante or "" }}">
                        </div>

                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Valor do Bem') }}</label>
                        <div class="col-md-4">
                            @php if($tabela_referencia) $credito_total = format_money_return($tabela_referencia->credito);  @endphp
                            <input disabled="disabled" type="text" class="form-control" value="{{ $credito_total or "" }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Descrição') }}</label>
                        <div class="col-md-10">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $tabela_referencia->descricao or "" }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('Dados da Simulação') }}</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Ofertar Lance') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="@if($objeto->ofertar_lance) Sim @else Não @endif">
                        </div>
                        @php
                            $valor_lance = format_money_return($objeto->valor_lance);
                        @endphp
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Valor do Lance') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{$valor_lance}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Tempo de Contemplação') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{$objeto->tempo_contemplacao}}">
                        </div>

                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Solicitou Visita?') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="@if($objeto->solicitar_visita) Sim @else Não @endif">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Simulação Por:') }}</label>
                        <div class="col-md-4">
                            @php
                                $flag = flag($objeto->caminho_flag);
                                $credito_simulado = format_money_return($objeto->credito);
                            @endphp
                            <input disabled="disabled" type="text" class="form-control" value="{{ $flag or "" }}">
                        </div>

                        <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Valor Máximo') }}</label>
                        <div class="col-md-4">
                            <input disabled="disabled" type="text" class="form-control" value="{{ $credito_simulado or "" }}">
                        </div>
                    </div>

                    @foreach ($relatorios as $relatorio)
                        @if($parcela_anterior != $relatorio->numero_parcelas)
                            @php
                                $parcela_anterior = $relatorio->numero_parcelas;
                                $taxaParcela = DB::table('taxa_por_parcela')->
                                where('id_adm_tipo_consorcio', $id_adm_tipo_consorcio)->
                                where('numero_de_parcelas', $relatorio->numero_parcelas)->
                                get()->first();
                                //dd($taxaParcela);
                            @endphp
                            <p class="separator"></p>
                            <div class="form-group row">
                                <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Taxa Adm Total') }}</label>
                                <div class="col-md-4">
                                    <input disabled="disabled" type="text" class="form-control" value="{{ $taxaParcela->taxa or "" }} %">
                                </div>
                                <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Numero de Parcelas') }}</label>
                                <div class="col-md-4">
                                    <input disabled="disabled" type="text" class="form-control" value="{{ $relatorio->numero_parcelas or "" }}">
                                </div>
                            </div>

                        @endif

                            <div class="form-group row">
                                <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Período') }}</label>
                                <div class="col-md-4">
                                    @if ($relatorio->periodo_perfil_final == null)
                                        <input disabled="disabled" type="text" class="form-control" value="De 1 a {{ $relatorio->numero_parcelas or "" }} meses">
                                    @else
                                        <input disabled="disabled" type="text" class="form-control" value="De {{ $relatorio->periodo_perfil_inicio }} a {{ $relatorio->periodo_perfil_final }} meses">
                                    @endif
                                </div>

                                <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Valor Mensal') }}</label>
                                <div class="col-md-4">
                                    @php $valor_mensal = format_money_return($relatorio->valor_mensal); @endphp
                                    <input disabled="disabled" type="text" class="form-control" value="{{ $valor_mensal or "" }}">
                                </div>
                            </div>

                    @endforeach

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-6 text-md-right">
                            <a class="btn btn-primary" href="{{ route('leads.index') }}">{{ __('Voltar') }}</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection

<style type="text/css">
    .card {
        background-color: white;
        margin-bottom: 10px;
    }
</style>
