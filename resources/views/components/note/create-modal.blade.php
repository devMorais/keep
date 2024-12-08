<div class="custom_modal_area create-note-model">
    <div class="custom_modal_content">
        <div class="pin_icon">
            <img src="{{ asset('assets/images/pin_icons.png') }}" alt="pin" class="img-fluid">
        </div>
        <form action="{{ route('notes.store') }}" method="POST" class="create-note">
            @csrf
            <input type="text" placeholder="Título" name="title">
            <textarea rows="4" placeholder="Nota" name="content" id="editorjs"></textarea>
        </form>
        <div class="ions_area">
            <ul>
            </ul>
            <a class="btn btn-sm btn-dark" href="javascript:;" onclick="$('.create-note').submit()">Salvar</a>
        </div>
    </div>
</div>
