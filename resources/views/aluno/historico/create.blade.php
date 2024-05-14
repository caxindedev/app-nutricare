@extends('templates.auth')

@section('title', 'NUTRICARE - BEM VINDO')


@section('left-menu')
    @include('templates.layout.parts.left-menu')
@endsection


@section('content')

<div class="page-content">

     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Histórico de Doenças</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <div class="row">
                            <div class="col-md-4">
                                <div>

                                
                                    <!-- Bootstrap Custom Checkboxes color -->
                                    <div>
                                        <div class="form-check mb-6">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" checked>
                                            <label class="form-check-label" for="formCheck6">
                                                Diabetes
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-4">
                                <div>

                                    
                                    <!-- Bootstrap Custom Checkboxes color -->
                                    <div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" checked>
                                            <label class="form-check-label" for="formCheck6">
                                                HIV
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mt-4 mt-md-0">
                                
                                    <!-- Bootstrap Custom Outline Checkboxes -->
                                    <div>
                                        <div class="form-check form-check-outline form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck13" checked>
                                            <label class="form-check-label" for="formCheck13">
                                                Tuberculose
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>


                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

       




       

   </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    
@endsection