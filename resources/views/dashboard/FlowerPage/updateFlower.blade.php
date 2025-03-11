<div class="modal fade" id="editFlowerModal{{ $flower->id }}" tabindex="-1" aria-labelledby="editFlowerModalLabel{{ $flower->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="editFlowerModalLabel{{ $flower->id }}">
                    <i class="bi bi-pencil-square me-2"></i>Edit Flower: {{ $flower->name }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('flower.update', $flower->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <!-- Flower Name -->
                        <div class="col-md-12 mb-3">
                            <label for="name{{ $flower->id }}" class="form-label fw-semibold">Name</label>
                            <input type="text" class="form-control form-control-lg" id="name{{ $flower->id }}" name="name"
                                value="{{ $flower->name }}" required>
                        </div>
                        
                        <!-- Flower Type -->
                        <div class="col-md-6 mb-3">
                            <label for="type{{ $flower->id }}" class="form-label fw-semibold">Type</label>
                            <select class="form-select form-select-lg" id="type{{ $flower->id }}" name="type" required>
                                <option value="mini_bouquet" {{ $flower->type == 'mini_bouquet' ? 'selected' : '' }}>Mini Bouquet</option>
                                <option value="large_bouquet" {{ $flower->type == 'large_bouquet' ? 'selected' : '' }}>Large Bouquet</option>
                                <option value="valentine" {{ $flower->type == 'valentine' ? 'selected' : '' }}>Valentine</option>
                                <option value="wedding" {{ $flower->type == 'wedding' ? 'selected' : '' }}>Wedding</option>
                                <option value="mother" {{ $flower->type == 'mother' ? 'selected' : '' }}>Mother</option>
                                <option value="women" {{ $flower->type == 'women' ? 'selected' : '' }}>Women</option>
                            </select>
                        </div>
                        
                        <!-- Flower Price -->
                        <div class="col-md-6 mb-3">
                            <label for="price{{ $flower->id }}" class="form-label fw-semibold">Price</label>
                            <div class="input-group">
                                <input type="number" class="form-control form-control-lg" id="price{{ $flower->id }}"
                                    name="price" step="0.01" min="0" value="{{ $flower->price }}" required>
                                    <span class="input-group-text">DH</span>
                            </div>
                        </div>
                        
                        <!-- Current Image Preview -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-semibold">Current Image</label>
                            <div class="text-center border p-3 mb-3">
                                <img src="{{ asset($flower->image) }}" alt="{{ $flower->name }}" class="img-fluid" style="max-height: 200px;">
                            </div>
                        </div>
                        
                        <!-- Flower Image (for update) -->
                        <div class="col-md-12 mb-3">
                            <label for="image{{ $flower->id }}" class="form-label fw-semibold">Update Image</label>
                            <input type="file" class="form-control form-control-lg" id="image{{ $flower->id }}" name="image" accept="image/*">
                            <div class="form-text">Leave empty to keep current image. (Max: 2MB)</div>
                        </div>
                        
                        <!-- Flower Description -->
                        <div class="col-md-12 mb-3">
                            <label for="description{{ $flower->id }}" class="form-label fw-semibold">Description</label>
                            <textarea class="form-control" id="description{{ $flower->id }}" name="description"
                                rows="4" required>{{ $flower->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i>Update Flower
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>