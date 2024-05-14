@extends('templates.auth')

@section('title', 'NUTRICARE - BEM VINDO')


@section('left-menu')
    @include('templates.layout.parts.left-menu')
@endsection


@section('content')

<div class="page-content">
   <div class="container-fluid">


       
       <div class="row">
         <div class="col-lg-12">
             <!-- Simple card -->
             <div class="card">
                 <img class="card-img-top img-fluid" src="{{ url('assets/images/plano1.jpg') }}" alt="Card image cap">
                 
             </div><!-- end card -->
         </div><!-- end col -->
         <div class="row">
            <div class="col-lg-12">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ url('assets/images/plano2.jpg') }}" alt="Card image cap">
                    
                </div><!-- end card -->
            </div><!-- end col -->
         
     </div><!-- end row -->

     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Carregar o Meu Plano</h4>
                    <div class="flex-shrink-0">

                    </div>
                </div><!-- end card header -->

                <div class="card-body">

                    <div class="live-preview">
                        <form method="POST" action="{{ route('turma.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="lastNameinput" class="form-label">Plano Alimentar</label>
                                        <input type="file" name="nome" required class="form-control"  id="lastNameinput">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <!--end col-->
                                
                               

                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Enviar Plano</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

    </div>

     <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="live-preview">
                        <div class="d-grid gap-2">
                            <a href="{{ url('assets/images/plano.pdf') }}" target="_blank" class="btn btn-primary" type="button">Ver Meu Plano</a>
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

       




       

   </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    
@endsection