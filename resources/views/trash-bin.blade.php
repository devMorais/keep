<x-app-layout>
    <div class="search_area">
        <input type="text" placeholder="Pesquisar...">
        <i class="far fa-search"></i>
    </div>

    <div class="create_note">
        <i class="far fa-plus"></i>
    </div>

    <x-note.create-modal />

    <div class="row">
        <x-note.note-card :notes="$notes" :trash="true" />
    </div>
</x-app-layout>
