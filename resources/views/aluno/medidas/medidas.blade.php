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
                        <h4 class="mb-sm-0">Minha Evolução</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Minhas Medidas</a></li>
                                <li class="breadcrumb-item active">Ver Evolução</li>
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
                                                <th scope="col">Semana</th>
                                                <th scope="col">peso</th>
                                                <th scope="col">Parte do Tórax</th>
                                                <th scope="col">Parte do Antebraço</th>
                                                <th scope="col">Parte da Cintura</th>
                                                <th scope="col">Parte da Anca</th>
                                                <th scope="col">IMC</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <tr>                                                    
                                                    <td>Primeira</td>
                                                    <td>79</td>
                                                    <td>15</td>
                                                    <td>13</td>
                                                    <td>9</td>
                                                    <td>13</td>
                                                    <td>13</td>                                                   
                                                </tr>
                                                <tr>                                                    
                                                    <td>Primeira</td>
                                                    <td>79</td>
                                                    <td>15</td>
                                                    <td>13</td>
                                                    <td>9</td>
                                                    <td>13</td> 
                                                    <td>13</td>                                                  
                                                </tr>
                                                <tr>                                                    
                                                    <td>Primeira</td>
                                                    <td>65</td>
                                                    <td>15</td>
                                                    <td>13</td>
                                                    <td>9</td>
                                                    <td>13</td> 
                                                    <td>13</td>                                                  
                                                </tr>
                                                <tr>                                                    
                                                    <td>Primeira</td>
                                                    <td>60</td>
                                                    <td>15</td>
                                                    <td>13</td>
                                                    <td>10</td>
                                                    <td>13</td>
                                                    <td>13</td>                                                   
                                                </tr>
                                                <tr>                                                    
                                                    <td>Primeira</td>
                                                    <td>63</td>
                                                    <td>15</td>
                                                    <td>13</td>
                                                    <td>9</td>
                                                    <td>13</td>
                                                    <td>13</td>                                                   
                                                </tr>
                                                <tr>                                                    
                                                    <td>Primeira</td>
                                                    <td>58</td>
                                                    <td>13</td>
                                                    <td>13</td>
                                                    <td>8</td>
                                                    <td>13</td>
                                                    <td>13</td>                                                   
                                                </tr>
                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>

@endsection
