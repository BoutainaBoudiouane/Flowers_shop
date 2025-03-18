@foreach($flowers as $flower)
<div class="col-md-4 mb-4">
    <div class="card shadow-sm border-0 h-100">
        <img src="{{ asset( $flower->image) }}" 
             class="card-img-top p-3" 
             style="height: 300px; object-fit: contain;">
        <div class="card-body">
            <h5 class="card-title d-flex align-items-center">
                <span style="font-family: 'Gill Sans'; font-size: 1.1rem">
                    {{ $flower->name }}
                </span>
                <span class="type-badge ms-2">
                    {{ $flower->type }}
                </span>
            </h5>
            <p class="text-danger fw-bold fs-5 mb-3">{{ $flower->price }}DH</p>
            <a href="#" class="btn w-100 text-black" 
               style="background-color: #fff; border: 2px solid #E5187B; border-radius: 20px">
                Send Message
            </a>
        </div>
    </div>
</div>
@endforeach