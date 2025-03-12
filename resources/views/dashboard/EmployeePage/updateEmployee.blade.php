<!-- Edit Employee Modal -->
<div class="modal fade" id="editEmployeeModal{{ $employee->id }}" tabindex="-1" aria-labelledby="editEmployeeModalLabel{{ $employee->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="editEmployeeModalLabel{{ $employee->id }}">
                    <i class="bi bi-pencil-square me-2"></i>Edit Employee: {{ $employee->name }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <!-- Employee Name -->
                        <div class="col-md-12 mb-3">
                            <label for="name{{ $employee->id }}" class="form-label fw-semibold">Name</label>
                            <input type="text" class="form-control form-control-lg" id="name{{ $employee->id }}" name="name"
                                value="{{ $employee->name }}" required>
                        </div>

                        <!-- Employee CIN -->
                        <div class="col-md-6 mb-3">
                            <label for="cin{{ $employee->id }}" class="form-label fw-semibold">CIN</label>
                            <input type="text" class="form-control form-control-lg" id="cin{{ $employee->id }}" name="cin"
                                value="{{ $employee->cin }}" required>
                        </div>

                        <!-- Employee Gender -->
                        <div class="col-md-6 mb-3">
                            <label for="gender{{ $employee->id }}" class="form-label fw-semibold">Gender</label>
                            <select class="form-select form-select-lg" id="gender{{ $employee->id }}" name="gender" required>
                                <option value="male" {{ $employee->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $employee->gender == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <!-- Employee Address -->
                        <div class="col-md-12 mb-3">
                            <label for="adresse{{ $employee->id }}" class="form-label fw-semibold">Address</label>
                            <input type="text" class="form-control form-control-lg" id="adresse{{ $employee->id }}" name="adresse"
                                value="{{ $employee->adresse }}" required>
                        </div>

                        <!-- Employee Start Date -->
                        <div class="col-md-6 mb-3">
                            <label for="date_debut{{ $employee->id }}" class="form-label fw-semibold">Start Date</label>
                            <input type="date" class="form-control form-control-lg" id="date_debut{{ $employee->id }}" name="date_debut"
                                value="{{ $employee->date_debut }}" required>
                        </div>

                        <!-- Employee End Date -->
                        <div class="col-md-6 mb-3">
                            <label for="date_fin{{ $employee->id }}" class="form-label fw-semibold">End Date</label>
                            <input type="date" class="form-control form-control-lg" id="date_fin{{ $employee->id }}" name="date_fin"
                                value="{{ $employee->date_fin }}">
                        </div>

                        <!-- Employee Post -->
                        <div class="col-md-12 mb-3">
                            <label for="post{{ $employee->id }}" class="form-label fw-semibold">Post</label>
                            <input type="text" class="form-control form-control-lg" id="post{{ $employee->id }}" name="post"
                                value="{{ $employee->post }}" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i>Update Employee
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>