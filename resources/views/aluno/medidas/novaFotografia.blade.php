@extends('templates.auth')

@section('title', 'NUTRICARE - BEM VINDO')


@section('left-menu')
    @include('templates.layout.parts.left-menu')
@endsection


@section('content')

<div class="page-content">
   

       <div class="row">
           <div class="col-xxl-12">
               <div class="card">
                   <div class="card-header align-items-center d-flex">
                       <h4 class="card-title mb-0 flex-grow-1">Fotografia</h4>
                       
                   </div><!-- end card header -->

                   <div class="card-body">
                       
                       <div class="live-preview">
                        <form method="POST" action="{{ route('fotografia.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ForminputState" class="form-label">Ordem</label>
                                        <select id="ForminputState" name="semana" class="form-select" data-choices data-choices-sorting="true">
                                            <option value="Primeira">Primeira</option>
                                            <option value="Segunda">Segunda </option>
                                            <option value="Terceira">Terceira </option>
                                        </select>
                                    </div>
                                </div>

                                <!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="compnayNameinput" class="form-label">Parte de Frente</label>
                                        <input type="file" name="frente" required class="form-control"  id="compnayNameinput">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phonenumberInput" class="form-label">Parte de Trás</label>
                                        <input type="file" name="tras" required class="form-control"  id="phonenumberInput">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="emailidInput" class="form-label">Parte do Lado</label>
                                        <input type="file"  name="lado" class="form-control"  id="emailidInput">
                                    </div>
                                </div>
                               
                                <!--end col-->
                               
                                <div class="col-lg-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Enviar Dados</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                       </div>
                       <div class="d-none code-view">
                          
                       </div>
                   </div>
               </div>
           </div> <!-- end col -->
       </div>
       <!--end row-->

       




       

   </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    
@endsection