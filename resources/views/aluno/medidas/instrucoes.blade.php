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
                                <h4 class="mb-sm-0">Minhas Medidas</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Minhas Medidas</a></li>
                                        <li class="breadcrumb-item active">Instruções</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    
                    <div class="row">
                   
                    <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <div class="live-preview">

                                        <div>
                                            <img src="{{ url('assets/images/peso/peso1.jpg') }}" class="img-fluid" alt="Responsive image">
                                        </div>
                                       

                                    </div>

                                    
                                </div><!-- end card-body -->
                                <div class="card-body">

                                    <div class="live-preview">

                                        <div>
                                            <img src="{{ url('assets/images/peso/peso2.jpg') }}" class="img-fluid" alt="Responsive image">
                                        </div>
                                       

                                    </div>

                                    
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>  
                       

                    </div>
                    
                </div>
            </div>
    
@endsection