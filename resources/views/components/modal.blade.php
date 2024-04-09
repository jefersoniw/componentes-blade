<div x-data="{
    open() {
        const myModal = new bootstrap.Modal('#myModal');
        myModal.show();
    }
}" class="modal fade" {{ $attributes }} tabindex="-1" @open1.window="open">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ $slot }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                @if ($showModalSaveButton == 'true')
                    <button type="button" class="btn btn-primary">Save changes</button>
                @endif
            </div>
        </div>
    </div>
</div>
