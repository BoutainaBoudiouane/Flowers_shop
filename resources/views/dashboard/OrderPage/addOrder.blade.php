<!-- Add Order Modal -->
<div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="addOrderModalLabel">
                    <i class="bi bi-cart-plus me-2"></i>Add New Order
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <!-- Flower Selection -->
                        <div class="col-md-6 mb-3">
                            <label for="flower_id" class="form-label fw-semibold">Flower</label>
                            <select class="form-select form-select-lg" id="flower_id" name="flower_id" required>
                                <option value="" selected disabled>Select a flower</option>
                                @foreach ($flowers as $flower)
                                    <option value="{{ $flower->id }}" data-price="{{ $flower->price }}">{{ $flower->name }} - {{ $flower->type }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Quantity -->
                        <div class="col-md-6 mb-3">
                            <label for="quantity" class="form-label fw-semibold">Quantity</label>
                            <input type="number" class="form-control form-control-lg" id="quantity" name="quantity"
                                min="1" placeholder="Enter quantity" required>
                        </div>

                        <!-- Total Price -->
                        <div class="col-md-6 mb-3">
                            <label for="total_price" class="form-label fw-semibold">Total Price</label>
                            <div class="input-group">
                                <input type="number" class="form-control form-control-lg" id="total_price" name="total_price"
                                    step="0.01" min="0" placeholder="0.00" required>
                                <span class="input-group-text">DH</span>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label fw-semibold">Status</label>
                            <select class="form-select form-select-lg" id="status" name="status" required>
                                <option value="" selected disabled>Select status</option>

                                <option value="complete">Complete</option>
                                <option value="uncomplete">Uncomplete</option>
                            </select>
                        </div>

                        <!-- Type -->
                        <div class="col-md-12 mb-3">
                            <label for="type" class="form-label fw-semibold">Type</label>
                            <select class="form-select form-select-lg" id="type" name="type" required>
                                <option value="" selected disabled>Select type</option>
                                <option value="en_ligne">Online</option>
                                <option value="off_ligne">Offline</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i>Save Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const flowerSelect = document.getElementById('flower_id');
        const quantityInput = document.getElementById('quantity');
        const totalPriceInput = document.getElementById('total_price');

        // Function to calculate total price
        function calculateTotalPrice() {
            const selectedFlower = flowerSelect.options[flowerSelect.selectedIndex];
            const flowerPrice = parseFloat(selectedFlower.getAttribute('data-price'))||0;
            const quantity = parseFloat(quantityInput.value)||0;

            const totalPrice = flowerPrice * quantity;
            totalPriceInput.value = totalPrice.toFixed(2); // Update total price field
        }

        // Event listeners
        flowerSelect.addEventListener('change', calculateTotalPrice);
        quantityInput.addEventListener('input', calculateTotalPrice);
    });
</script>
