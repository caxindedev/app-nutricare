@extends('templates.auth')

@section('title', 'NUTRICARE - BEM VINDO')


@section('left-menu')
    @include('templates.layout.parts.left-menu')
@endsection


@section('content')

<div class="page-content" >
    <div class="container-fluid">
        <div class="profile-foreground position-relative mx-n4 mt-n4" >
            <div class="profile-wid-bg" style="background-color: #aabe7d">
                <img src="" alt="" class="profile-wid-img">
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        <img src="{{ 'https://ui-avatars.com/api/?name='.$user->name }}" alt="user-img" class="img-thumbnail rounded-circle">
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h3 class="text-white mb-1">{{ $user->name }}</h3>
                        <p class="text-white text-opacity-75"> {{ $user->email }}</p>
                        <div class="hstack text-white-50 gap-1">                           
                            <div>
                                <i class="ri-phone-line me-1 text-white text-opacity-75 fs-16 align-middle"></i> {{ $user->aluno->telefone }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="d-flex profile-wrapper">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab" aria-selected="true">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Visao Geral</span>
                                </a>
                            </li>
                            
                        </ul>
                        <div class="flex-shrink-0">
                            <a href="{{ route('aluno.edit', $user->aluno) }}" class="btn btn-info"><i class="ri-edit-box-line align-bottom"></i> Editar</a>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active show" id="overview-tab" role="tabpanel">
                            <div class="row">
                                

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Info.</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Nome :</th>
                                                            <td class="text-muted">{{ $user->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Genero :</th>
                                                            <td class="text-muted">{{ $user->aluno->genero }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Data de Nascimento :</th>
                                                            <td class="text-muted">{{ $user->aluno->data_nascimento }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                            <td class="text-muted">{{ $user->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Contacto :</th>
                                                            <td class="text-muted">+(244) {{ $user->aluno->telefone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Whatsapp :</th>
                                                            <td class="text-muted">+(244) {{ $user->aluno->whatsapp }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Altura :</th>
                                                            <td class="text-muted">{{ $user->aluno->altura }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th class="ps-0" scope="row">Empresa :</th>
                                                            <td class="text-muted">{{ $user->aluno->empresa }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                             
                            </div>
                            <!--end row-->
                        </div>
                        
                        
                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div>

    
@endsection