<div class="modal fade" id="deleteTestimonialModal{{ $testimonial->id }}" tabindex="-1" aria-labelledby="deleteTestimonialModal{{ $testimonial->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title fw-bold" id="#deleteTestimonialModal{{ $testimonial->id }}">
                    <i class="bi bi-exclamation-triangle me-2"></i>Delete Testimonial
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">   
                    <h5>{{ $testimonial->message }}</h5> 
                </div>
                <div class="alert alert-warning">
                    <i class="bi bi-exclamation-circle me-2"></i>
                    Are you sure you want to delete this message? This action cannot be undone.
                </div>
            </div>
            <div class="modal-footer bg-light">
                <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
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
