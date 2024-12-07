<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Google Keep</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <header>
        <div class="header_left d-flex flex-wrap align-items-center">
            <div class="header_icon">
                <i class="fal fa-bars"></i>
            </div>
            <a href="#">
                <img src="{{ asset('assets/images/logo.jpg') }}" alt="logo" class="img-fluid">
            </a>
        </div>

        <ul class="header_right d-flex flex-wrap align-items-center">
            <li class="setting_area">
                <a class="setting">
                    <i class="fal fa-cog"></i>
                </a>
                <ul class="drop_menu drop_menu_setting">
                    <li><a href="#">Configurações</a></li>
                    <li><a href="#">Ativar tema escuro</a></li>
                    <li><a href="#">Enviar feedback</a></li>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Downloads do aplicativo</a></li>
                </ul>
            </li>

            <li class="user_area">
                <div class="user">
                    <img src="{{ asset('assets/images/user_icon.png') }}" alt="user" class="img-fluid">
                </div>
                <ul class="drop_menu drop_menu_user">
                    <li><a href="#">Configurações</a></li>
                    <li><a href="#">Ativar tema escuro</a></li>
                    <li><a href="#">Enviar feedback</a></li>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Downloads do aplicativo</a></li>
                </ul>
            </li>

        </ul>
    </header>


    <!-- Conteúdo principal -->
    <div class="content_area d-flex flex-wrap">

        <!-- Barra lateral -->
        <aside class="sidebar">
            <ul>
                <li><a class="active" href="#"><i class="far fa-lightbulb"></i> <span>Notes</span></a></li>
                <li><a href="#"><i class="far fa-bell"></i> <span>Lembretes</span></a></li>
                <li><a href="#"><i class="far fa-pen"></i> <span>Editar Etiquetas</span></a></li>
                <li><a href="#"><i class="far fa-box-alt"></i> <span>Arquivar</span></a></li>
                <li><a href="#"><i class="far fa-trash-alt"></i> <span>Lixeira</span></a></li>
            </ul>
        </aside>

        <main class="main_content">
            <!-- Área de pesquisa -->
            <div class="search_area">
                <input type="text" placeholder="Pesquisar...">
                <i class="far fa-search"></i>
            </div>

            <!-- Botão para criar nova nota -->
            <div class="create_note">
                <i class="far fa-plus"></i>
            </div>

            <!-- Modal para criar/editar nota -->
            <div class="custom_modal_area">
                <!-- Conteúdo do modal -->
                <div class="custom_modal_content">
                    <div class="pin_icon">
                        <img src="{{ asset('assets/images/pin_icons.png') }}" alt="Fixar" class="img-fluid">
                    </div>
                    <input type="text" placeholder="Título">
                    <textarea rows="4" placeholder="Anotação" id="editorjs"></textarea>

                    <div class="ions_area">
                        <ul>
                            <li>
                                <a class="modal_drop_theme"><i class="far fa-palette"></i></a>
                                <div class="theme_area">
                                    <ul class="theme_color">
                                        <li><a class="white active" href="#"><i class="far fa-tint-slash"></i></a>
                                        </li>
                                        <li><a class="red" href="#"></a></li>
                                        <li><a class="blue" href="#"></a></li>
                                        <li><a class="yellow" href="#"></a></li>
                                        <li><a class="green" href="#"></a></li>
                                        <li><a class="purple" href="#"></a></li>
                                        <li><a class="orange" href="#"></a></li>
                                    </ul>
                                    <ul class="theme_img">
                                        <li><a class="img_1 close active" href="#"></a></li>
                                        <li><a class="img_2" href="#"></a></li>
                                        <li><a class="img_3" href="#"></a></li>
                                        <li><a class="img_4" href="#"></a></li>
                                        <li><a class="img_5" href="#"></a></li>
                                        <li><a class="img_6" href="#"></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#"><i class="far fa-box-alt"></i></a></li>
                            <li>
                                <a class="modal_drop_list"><i class="far fa-ellipsis-v"></i></a>
                                <ul class="drop_list">
                                    <li><a href="#">Excluir nota</a></li>
                                    <li><a href="#">Adicionar etiqueta</a></li>
                                    <li><a href="#">Adicionar desenho</a></li>
                                    <li><a href="#">Fazer uma cópia</a></li>
                                    <li><a href="#">Histórico de versão</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a class="cancel_modal" href="#">Cancelar</a>
                    </div>
                </div>
            </div>

            <!-- Notas -->
            <div class="row">
                <!-- Nota 1 -->
                <div class="col-xxl-3 col-md-6 col-xl-4">
                    <div class="single_note active">
                        <a class="single_note_check" href="#"><i class="far fa-check"></i></a>
                        <div class="single_note_content">
                            <h2>Título da nota</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/Font-Awesome.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
