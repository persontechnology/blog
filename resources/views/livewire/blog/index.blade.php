<div class="container">

    <!--Section: Content-->
    <section class="text-center">
      <h4 class="mb-5"><strong>Últimas noticias</strong></h4>
      <div class="input-group mb-3">
        <input type="text" class="form-control" wire:model="search" placeholder="Buscar blog.." aria-label="Recipient's username"
          aria-describedby="button-addon2" />
        @if ($search!='')
          <button wire:click="limpiar" class="btn btn-outline-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
            Limpiar
          </button>
        @endif
      </div>
      <div class="row">
        @foreach ($blogs as $blog)
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{ Storage::url($blog->photo) }}" class="img-fluid" />
                <a href="{{ route('detalleBlog',$blog->id) }}">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">
                  {{ Str::limit($blog->text, 95, '...') }}
                </p>
                <a href="{{ route('detalleBlog',$blog->id) }}!" class="btn btn-primary">Detalle</a>
              </div>
            </div>
          </div>
        @endforeach
        {{ $blogs->links() }}
      </div>

    </section>
    <!--Section: Content-->

  </div>