@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Home</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Home</a></li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right mb-2 mt-2" style="">
                            <a class="btn btn-sm btn-primary button button-3d" href="">
                                Novo Usuário <i class="fa fa-plus-square"> </i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            {{-- <p class="text-primary"> Total de registros: <b> {{ $dados->total() }} </b> </p> --}}
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th> Nome </th>
                                <th> Login </th>
                                <th> Grupo </th>
                                <th> Status </th>
                                <th width="15%" class="text-center"> Ações </th>
                            </thead>

                            <tbody>
                                {{-- @foreach ($dados as $dado) --}}
                                    <tr>
                                        {{-- <td> {{ }} </td>
                                        <td> {{ $dado->usu_nom_login ?? '' }} </td>
                                        <td> {{ $dado->grupo->gru_nom_grupo ?? '' }} </td>

                                        <td width="2%">
                                            <span class="badge badge-{{  'success' : 'danger' }}">
                                                {{ 'Ativo' : 'Inativo' }}
                                            </span>
                                        </td>

                                        <td class="text-center">
                                            <a
                                                class="btn btn-primary btn-rounded btn-sm" title="Editar Usuário">
                                                <i class="fa fa-edit"> </i>
                                            </a>

                                            <a class="btn btn-warning btn-rounded btn-sm"

                                                title="Associar Menus ao Usuário">
                                                <i class="fa fa-desktop"> </i>
                                            </a>

                                            {{-- @if ($dado->usu_flg_ativo) --}}
                                                {{-- <a class="btn btn-danger btn-rounded btn-sm btnInativarUsuario"
                                                    id="{{ }}">
                                                    <i class="fa fa-close"> </i>
                                                </a>
                                            @e lse
                                                <a class="btn btn-success btn-rounded btn-sm btnAtivarUsuario"
                                                    id="{{ }}">
                                                    <i class="fa fa-check"> </i>
                                                </a>
                                            @ endif

                                            <a class="btn btn-default btn-rounded btn-sm btnResetarSenha"
                                                href="javascript:void(0)" id="{{  }}"
                                                title="Resetar Senha">
                                                <i class="fa fa-lock"> </i>
                                            </a>
                                        </td> --}} 
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                        <div>
                            {{-- {{ $dados->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section dashboard">
        <!-- Conteúdo do dashboard aqui -->
    </section>
@endsection