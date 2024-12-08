<!-- Barra lateral -->
<aside class="sidebar">
    <ul>
        <li><a class=" {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i
                    class="far fa-lightbulb"></i>
                <span>Notas</span></a></li>
        <li><a class=" {{ Route::is('notes.archived') ? 'active' : '' }}" href="{{ route('notes.archived') }}"><i
                    class="far fa-box-alt"></i> <span>Arquivo</span></a></li>
        <li><a class=" {{ Route::is('notes.trash') ? 'active' : '' }}" href="{{ route('notes.trash') }}"><i
                    class="far fa-trash-alt"></i> <span>Lixeira</span></a></li>
    </ul>
</aside>
