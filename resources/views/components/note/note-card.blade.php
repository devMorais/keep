@foreach ($notes as $note)
    <div class="col-xxl-3 col-md-6 col-xl-4">
        <div class="single_note">
            <a class="single_note_check" href="#"><i class="far fa-check"></i></a>
            <div class="single_note_content">
                <h2>{{ $note->title }}</h2>
                <p>{{ $note->content }}</p>
            </div>
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
                                <li><a class="red" href="#"></a></li>
                                <li><a class="blue" href="#"></a></li>
                                <li><a class="yellow" href="#"></a></li>
                                <li><a class="green" href="#"></a></li>
                                <li><a class="purple" href="#"></a></li>
                            </ul>
                            <ul class="theme_img">
                                <li><a class="img_1 close active" href="#"></a></li>
                                <li><a class="img_2" href="#"></a></li>
                                <li><a class="img_3" href="#"></a></li>
                                <li><a class="img_4" href="#"></a></li>
                                <li><a class="img_5" href="#"></a></li>
                                <li><a class="img_6" href="#"></a></li>
                                <li><a class="img_4" href="#"></a></li>
                                <li><a class="img_5" href="#"></a></li>
                                <li><a class="img_6" href="#"></a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="far fa-box-alt"></i></a>
                    </li>
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
                <!-- <a class="cancel_modal" href="#">cancel</a> -->
            </div>
        </div>
    </div>
@endforeach