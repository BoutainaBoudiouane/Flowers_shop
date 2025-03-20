<!-- Update Order Modal -->
<div class="modal fade" id="editOrderModal{{ $order->id }}" tabindex="-1" aria-labelledby="editOrderModal{{ $order->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="editOrderModal{{ $order->id }}">
                    <i class="bi bi-pencil-square me-2"></i>Edit Order: {{ $order->id }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('order.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <!-- Flower Selection -->
                        <div class="col-md-6 mb-3">
                            <label for="flower_id{{ $order->id }}" class="form-label fw-semibold">Flower</label>
                            <select class="form-select form-select-lg" id="flower_id{{ $order->id }}" name="flower_id" required>
                                <option value="" disabled>Select a flower</option>
                                @foreach ($flowers as $flower)
                                    <option value="{{ $flower->id }}" data-price="{{ $flower->price }}" {{ $order->flower_id == $flower->id ? 'selected' : '' }}>{{ $flower->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Quantity -->
                        <div class="col-md-6 mb-3">
                            <label for="quantity{{ $order->id }}" class="form-label fw-semibold">Quantity</label>
                            <input type="number" class="form-control form-control-lg" id="quantity{{ $order->id }}" name="quantity"
                                min="1" value="{{ $order->quantity }}" required>
                        </div>

                        <!-- Total Price -->
                        <div class="col-md-6 mb-3">
                            <label for="total_price{{ $order->id }}" class="form-label fw-semibold">Total Price</label>
                            <div class="input-group">
                                <input type="number" class="form-control form-control-lg" id="total_price{{ $order->id }}" name="total_price"
                                    step="0.01" min="0" value="{{ $order->total_price }}" readonly required>
                                <span class="input-group-text">DH</span>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6 mb-3">
                            <label for="status{{ $order->id }}" class="form-label fw-semibold">Status</label>
                            <select class="form-select form-select-lg" id="status{{ $order->id }}" name="status" required>
                                <option value="complete" {{ $order->status == 'complete' ? 'selected' : '' }}>Complete</option>
                                <option value="uncomplete" {{ $order->status == 'uncomplete' ? 'selected' : '' }}>Uncomplete</option>
                            </select>
                        </div>

                        <!-- Type -->
                        <div class="col-md-12 mb-3">
                            <label for="type{{ $order->id }}" class="form-label fw-semibold">Type</label>
                            <select class="form-select form-select-lg" id="type{{ $order->id }}" name="type" required>
                                <option value="en_ligne" {{ $order->type == 'en_ligne' ? 'selected' : '' }}>Online</option>
                                <option value="off_ligne" {{ $order->type == 'off_ligne' ? 'selected' : '' }}>Offline</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i>Update Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to calculate total price for a specific modal
        function calculateTotalPrice(flowerSelectId, quantityInputId, totalPriceInputId) {
            const flowerSelect = document.getElementById(flowerSelectId);
            const quantityInput = document.getElementById(quantityInputId);
            const totalPriceInput = document.getElementById(totalPriceInputId);

            // Function to update total price
            function updateTotalPrice() {
                const selectedFlower = flowerSelect.options[flowerSelect.selectedIndex];
                const flowerPrice = parseFloat(selectedFlower.getAttribute('data-price'))||0;
                const quantity = parseFloat(quantityInput.value)||0;

                const totalPrice = flowerPrice * quantity;
                totalPriceInput.value = totalPrice.toFixed(2); // Update total price field
            }

            // Event listeners for flower and quantity changes
            flowerSelect.addEventListener('change', updateTotalPrice);
            quantityInput.addEventListener('input', updateTotalPrice);

            // Initialize total price calculation
            updateTotalPrice();
        }

        // Apply the function to each order modal
        @foreach ($orders as $order)
            calculateTotalPrice('flower_id{{ $order->id }}', 'quantity{{ $order->id }}', 'total_price{{ $order->id }}');
        @endforeach
    });
</script>