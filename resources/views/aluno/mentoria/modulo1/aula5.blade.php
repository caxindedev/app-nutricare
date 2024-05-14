@extends('templates.auth')

@section('title', 'NUTRICARE - BEM VINDO')


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
                                <h4 class="mb-sm-0">Módulo 1</h4>
o
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Módulo 1</a></li>
                                        <li class="breadcrumb-item active">Aula 5</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    
                    <div class="row">
                   
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Aula 5 - Objetivos Reais</h4>
                                <div class="flex-shrink-0">
                                    <div class="form-check form-switch form-switch-right form-switch-md">
                                        
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <!-- 16:9 aspect ratio -->
                                    <div class="ratio ratio-16x9">
                                        <iframe class="rounded" src="https://player.vimeo.com/video/811212374?h=27ea2561d2&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" title="YouTube video" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                
                            </div><!-- end card-body -->
                        </div>
                    </div>  
                       

                    </div>
                    
                </div>
            </div>

@endsection
    