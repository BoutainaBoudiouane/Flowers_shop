<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="addProductModalLabel">
                    <i class="bi bi-bag-plus me-2"></i>Add New Flower
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('flower.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <!-- Product Name -->
                        <div class="col-md-12 mb-3">
                            <label for="productName" class="form-label fw-semibold"> Name</label>
                            <input type="text" class="form-control form-control-lg" id="productName" name="name"
                                placeholder="Enter product name" required>
                        </div>
                        <!-- Product Type -->
                        <div class="col-md-6 mb-3">
                            <label for="productType" class="form-label fw-semibold">Type</label>
                            <select class="form-select form-select-lg" id="productType" name="type" required>
                                <option value="" selected disabled>Select flower type</option>
                                <option value="mini_bouquet">Mini Bouquet</option>
                                <option value="large_bouquet">Large Bouquet</option>
                                <option value="valentine">Valentine</option>
                                <option value="wedding">Wedding</option>
                                <option value="mother">Mother</option>
                                <option value="women">Women</option>
                            </select>
                        </div>
                        <!-- Product Price -->
                        <div class="col-md-6 mb-3">
                            <label for="productPrice" class="form-label fw-semibold">Price</label>
                            <div class="input-group">
                                <input type="number" class="form-control form-control-lg" id="productPrice"
                                    name="price" step="0.01" min="0" placeholder="0.00" required>
                                    <span class="input-group-text">DH</span>
                            </div>
                        </div>
                        <!-- Product Image -->
                        <div class="col-md-12 mb-3">
                            <label for="productImage" class="form-label fw-semibold">Flower Image</label>
                            <input type="file" class="form-control form-control-lg" id="productImage" name="image" accept="image/*">
                            <div class="form-text">Upload a clear image of your product (Max: 2MB)</div>
                        </div>
                        <!-- Product Description -->
                        <div class="col-md-12 mb-3">
                            <label for="productDescription" class="form-label fw-semibold">Description</label>
                            <textarea class="form-control" id="productDescription" name="description"
                                rows="4" placeholder="Enter flower description" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i>Save Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>