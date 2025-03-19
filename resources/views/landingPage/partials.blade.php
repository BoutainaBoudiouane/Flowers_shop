@foreach($flowers as $flower)
               <div class="col-md-4 mb-4">
                  <div class="card shadow-sm border-0 h-100">
                     <img src="{{ asset($flower->image) }}"
                        class="card-img-top p-3"
                        style="height: 300px; object-fit: contain;">
                     <div class="card-body">
                        <h5 class="card-title d-flex align-items-center">
                           <span style="font-family: 'Gill Sans'; font-size: 25px; font-weight:bold;">
                              {{ $flower->name }}
                           </span>
                           <span class="type-badge ms-2">
                              {{ $flower->type }}
                           </span>
                        </h5>
                        <span class="text-muted small mb-0" style="line-height: 1.5;">
                           {{ $flower->description }}
                        </span>
                        <p class="text-danger fw-bold fs-5 mb-3">{{ $flower->price }}DH</p>
                        <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode("Hello! I would like to inquire about {$flower->name}. Please provide more details.") }}"
                           class="btn text-black"
                           target="_blank"
                           style="background-color: #fff; border: 2px solid #E5187B; border-radius: 20px;margin-left:220px;">
                           Send Message
                        </a>
                     </div>
                  </div>
               </div>
               @endforeach