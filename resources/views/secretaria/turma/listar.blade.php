@extends('templates.auth')

@section('title', 'NUTRICARE - AGENDAMENTO')


@section('left-menu')
    @include('templates.layout.parts.left-menu')
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Listagem das Turmas</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Turmas</a></li>
                                <li class="breadcrumb-item active">Listagem das Turmas</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">


                        <div class="card-body">
                            <div class="live-preview">
                                <div class="table-responsive table-card">
                                    <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Curso</th>
                                                <th scope="col">Data de Início</th>
                                                <th scope="col">Data de termino</th>
                                                
                                                <th scope="col" style="width: 150px;">Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($turmas as $turma)
                                                <tr>                                        
                                                    <td>{{ $turma->nome }}</td>
                                                    <td>{{ $turma->curso->nome }}</td>
                                                    <td>{{ $turma->data_inicio }}</td>
                                                    <td>{{ $turma->data_termino }}</td>
                                                   
                                                    <td>
                                                        <a href="{{ route('turma.edit', $turma) }}"
                                                            class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                                class="ri-map-pin-line"></i></a>
                                                        <form class="btn btn-danger btn-icon waves-effect waves-light"
                                                            action="{{ route('turma.destroy', $turma) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-icon waves-effect waves-light">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>

        </div>
    </div>

@endsection
