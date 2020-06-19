<!doctype html>
<html lang="pt">

<head>
    <!-- Meta tags obrigatórias  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Ícone do site -->
    <link rel="icon" href={{asset("images/Logo-Flat-Versao-Clara.png")}} type="image/png" sizes="16x16">

    <title>Departamentos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Seu CSS customizado -->
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/style.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/mobile.css")}} media="screen and (min-width:300px) and (max-width:700px)">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">

        <nav id="sidebar">
            <!-- Cabeçalho do menu lateral -->
            <div class="sidebar-header">
                <a href="departments"><img src={{asset("images/Logo-Flat-Versao-Clara.png")}} alt="" height="75px"></a>
            </div>
            <div id="mensagem">Bem vindo, <strong>{{auth()->user()->name}}</strong></div>
            <!-- Links do menu lateral -->
            <ul class="list-unstyled components">

                <!-- Departamentos -->
                <li class="active">
                    <a href="/departments">Departamentos</a>
                </li>

                <!-- Membros -->
                <li>
                    <a href="/members">Membros</a>
                </li>

                <!-- Ferramentas -->
                <li>
                    <a href="/tools">Ferramentas</a>
                </li>

            </ul>
            </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li class="botao">

                    <!-- Link que aparecerá o modal -->
                    <a href="#" class="article" data-toggle="modal" data-target="#modalExemplo">
                        SAIR 
                        <svg class="bi bi-box-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 0 1 0-.708L14.293 8l-2.647-2.646a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
                            <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
                            <path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 0 1 .5 12V4A1.5 1.5 0 0 1 2 2.5h7A1.5 1.5 0 0 1 10.5 4v1.5a.5.5 0 0 1-1 0V4a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-1.5a.5.5 0 0 1 1 0V12A1.5 1.5 0 0 1 9 13.5H2z"/>
                          </svg>
                    </a>

                </li>
            </ul>
        </nav>

        <div id="content">
            <button type="button" id="sidebarCollapse" class="navbar-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>


            <!-- Departamentos -->
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive-md">
                        <h3> Departamentos </h3>
                        <a href="/departments/create">
                            <button type="button" id="novoDep" class="btn btn-dark">+ Novo departamento</button>
                        </a>
                        <table class="table" id="table" width="80%">
                            <thead>
                                <tr>
                                    <th scope="col" id="col1">Departamento</th>
                                    <th scope="col" id="col2">Descrição</th>
                                    <th scope="col" id="col4"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                    <tr>
                                        <td>{{$department->name}}</td>
                                        <td>{{$department->description}}</td>
                                        <td>
                                            <a href={{ route("departments.edit", $department->id)}}>
                                                <button type="button" class="btn btn-success btn-sm">Editar</button>
                                            </a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalExcluir" onclick="deleteData({{$department->id}})">Excluir</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Excluir -->
    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="exempleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir Departamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir este departamento ?
                </div>
                <div class="modal-footer">
                    <form action='' id='deleteForm' method='post'>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-light">Sim</button>
                    </form>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal sair -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exempleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sair do sistema</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja sair do sistema ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal" onclick="sair()">Sim</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Logout Form --}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

        function sair() {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }

        function deleteData(id) {
            var id = id;
            var url = '{{ route("departments.destroy", ":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }
    </script>
</body>

</html>