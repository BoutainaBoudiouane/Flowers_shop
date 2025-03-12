<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="addEmployeeModalLabel">
                    <i class="bi bi-person-plus me-2"></i>Add New Employee
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('employee.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <!-- Employee Name -->
                        <div class="col-md-12 mb-3">
                            <label for="employeeName" class="form-label fw-semibold">Name</label>
                            <input type="text" class="form-control form-control-lg" id="employeeName" name="name"
                                placeholder="Enter employee name" required>
                        </div>

                        <!-- Employee CIN -->
                        <div class="col-md-6 mb-3">
                            <label for="employeeCIN" class="form-label fw-semibold">CIN</label>
                            <input type="text" class="form-control form-control-lg" id="employeeCIN" name="cin"
                                placeholder="Enter employee CIN" required>
                        </div>

                        <!-- Employee Gender -->
                        <div class="col-md-6 mb-3">
                            <label for="employeeGender" class="form-label fw-semibold">Gender</label>
                            <select class="form-select form-select-lg" id="employeeGender" name="gender" required>
                                <option value="" selected disabled>Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <!-- Employee Address -->
                        <div class="col-md-12 mb-3">
                            <label for="employeeAddress" class="form-label fw-semibold">Address</label>
                            <input type="text" class="form-control form-control-lg" id="employeeAddress" name="adresse"
                                placeholder="Enter employee address" required>
                        </div>

                        <!-- Employee Start Date -->
                        <div class="col-md-6 mb-3">
                            <label for="employeeDateDebut" class="form-label fw-semibold">Start Date</label>
                            <input type="date" class="form-control form-control-lg" id="employeeDateDebut" name="date_debut"
                                required>
                        </div>

                        <!-- Employee End Date -->
                        <div class="col-md-6 mb-3">
                            <label for="employeeDateFin" class="form-label fw-semibold">End Date</label>
                            <input type="date" class="form-control form-control-lg" id="employeeDateFin" name="date_fin">
                        </div>

                        <!-- Employee Post -->
                        <div class="col-md-12 mb-3">
                            <label for="employeePost" class="form-label fw-semibold">Post</label>
                            <input type="text" class="form-control form-control-lg" id="employeePost" name="post"
                                placeholder="Enter employee post" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i>Save Employee
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>