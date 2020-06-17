<!doctype html>
<html lang="pt">

<head>
    <!-- Meta tags obrigatórias  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Ícone do site -->
    <link rel="icon" href={{asset("images/Logo-Flat-Versao-Clara.png")}} type="image/png" sizes="16x16">

    <title>Membros</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Seu CSS customizado -->
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/style.css")}} />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>

    <script type="text/javascript">
        $(function() {
            $("#telefone").mask("(99)99999-9999");


        });
    </script>
</head>

<body>

    <div class="wrapper">

        <nav id="sidebar">
            <!-- Cabeçalho do menu lateral -->
            <div class="sidebar-header">
                <a href="/departments"><img src={{asset("images/Logo-Flat-Versao-Clara.png")}} alt="" height="75px"></a>
            </div>
            <div id="mensagem">Bem vindo, <strong>Anderson</strong></div>
            <!-- Links do menu lateral -->
            <ul class="list-unstyled components">

                <!-- Departamentos -->
                <li>
                    <a href="/departments">Departamentos</a>
                </li>

                <!-- Membros -->
                <li class="active">
                    <a href="/members">Membros</a>
                </li>

                <!-- Ferramentas -->
                <li>
                    <a href="/tools">Ferramentas</a>
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
            <h3> Cadastro de membros </h3>

            <form accept="#" method="post">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputNome">Nome</label>
                        <input name="nome" type="nome" class="form-control" id="nome" placeholder="Nome" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputStatus" id="status">Status</label>
                        <select name="cargo" class="form-control" id="cargo">
                            <option value="1">Ativo</option>
                            <option value="2">Afastado</option>
                            <option value="3">Desligado</option>
                            <option value="4">Pós-Júnior</option>
                            
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="departamento" id="departamento">Departamento</label>
                        <select name="departamento" class="form-control" id="departamento">
                            <option value="1">Presidência</option>
                            <option value="2">Vice-presidência</option>
                            <option value="3">Projetos</option>
                            <option value="4">Qualidade</option>
                            <option value="5">Marketing</option>
                            <option value="6">Gestão de Pessoas</option>
                            </select>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail">E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="E-mail" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTelefone">Telefone (Apenas números)</label>
                        <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Telefone" required>
                    </div>
                </div>


                <label for="tools">Ferramentas utilizadas:</label>
                <div class="form-check">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <input type="checkbox" class="form-check-input" id="check1" name="check1">
                            <label class="form-check-label" for="check1">HTML</label>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="checkbox" class="form-check-input" id="check2" name="check2">
                            <label class="form-check-label" for="check2">CSS</label>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="checkbox" class="form-check-input" id="check3" name="check3">
                            <label class="form-check-label" for="check3">JavaScript</label>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="checkbox" class="form-check-input" id="check4" name="check4">
                            <label class="form-check-label" for="check4">PHP</label>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="checkbox" class="form-check-input" id="check5" name="check5">
                            <label class="form-check-label" for="check5">Laravel</label>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="checkbox" class="form-check-input" id="check6" name="check6">
                            <label class="form-check-label" for="check6">Node JS</label>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="checkbox" class="form-check-input" id="check7" name="check7">
                            <label class="form-check-label" for="check7">React JS</label>
                        </div>


                    </div>


                </div>
                <label for="myFile">Selecione uma foto</label><br>
                <input type="file" id="imagem" name="imagem" accept="image/*"><br><br>

                <input type="submit" value="Salvar" class="btn btn-dark" onclick="confirmacao()">
            </form>
        </div>
        </nav>
    </div>
    </div>

    <!-- Modal -->

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
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="sair()">Sim</button>
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
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active')
                $(this).toggleClass('active')
            });
        });

        function sair() {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }

        function confirmacao() {
            var nome = document.getElementById("nome").value;
            var email = document.getElementById("email").value;
            var telefone = document.getElementById("telefone").value;
            if (nome !== '' && email != '' && telefone != '') {
                window.alert(`Membro: ${nome} \nCadastro realizado com sucesso!`)
            }

        }
    </script>
</body>

</html>