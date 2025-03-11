<!-- resources/views/FlowerPage/deleteFlower.blade.php -->
<!-- Delete Flower Modal -->
<div class="modal fade" id="deleteFlowerModal{{ $flower->id }}" tabindex="-1" aria-labelledby="deleteFlowerModalLabel{{ $flower->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title fw-bold" id="deleteFlowerModalLabel{{ $flower->id }}">
                    <i class="bi bi-exclamation-triangle me-2"></i>Delete Flower
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img src="{{ asset($flower->image) }}" alt="{{ $flower->name }}" class="img-fluid mb-3" style="max-height: 150px;">
                    <h5>{{ $flower->name }}</h5>
                    <p class="text-muted">{{ ucfirst(str_replace('_', ' ', $flower->type)) }} - ${{ number_format($flower->price, 2) }}</p>
                </div>
                
                <div class="alert alert-warning">
                    <i class="bi bi-exclamation-circle me-2"></i>
                    Are you sure you want to delete this flower? This action cannot be undone.
                </div>
            </div>
            <div class="modal-footer bg-light">
                <form action="{{ route('flower.destroy', $flower->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-danger px-4">
                        <i class="bi bi-trash me-1"></i>Delete Permanently
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
