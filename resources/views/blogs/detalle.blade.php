@extends('layouts.api')

@section('header')
<div id="intro" class="p-5 text-center bg-light">
    <h1 class="mb-3 h2">
        {{ $blog->title }}
    </h1>        
</div>
@endsection
@section('content')
<div class="container">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-md-8 mb-4">
        <!--Section: Post data-mdb-->
        <section class="border-bottom mb-4">
          <img src="{{ Storage::url($blog->photo) }}"
            class="img-fluid shadow-2-strong rounded mb-4" alt="" />

          <div class="row align-items-center mb-4">
            <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded shadow-1-strong me-2"
                height="35" alt="" loading="lazy" />
              <span> Publicado <u>{{ $blog->created_at }}</u> Por</span>
              <br>
              <a href="" class="text-dark">
                  {{ $blog->user->name }}
              </a>
            </div>

            <div class="col-lg-6 text-center text-lg-end">
              <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #3b5998;">
                <i class="fab fa-facebook-f"></i>
              </button>
              <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #55acee;">
                <i class="fab fa-twitter"></i>
              </button>
              <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #0082ca;">
                <i class="fab fa-linkedin"></i>
              </button>
              <button type="button" class="btn btn-primary px-3 me-1">
                <i class="fas fa-comments"></i>
              </button>
            </div>
          </div>
        </section>
        <!--Section: Post data-mdb-->

        <!--Section: Text-->
        <section>
          {{ $blog->text }}
        </section>
        <!--Section: Text-->

        <!--Section: Share buttons-->
        <section class="text-center border-top border-bottom py-4 mb-4">
          <p><strong>Compartir con tus amigos:</strong></p>

          <button type="button" class="btn btn-primary me-1" style="background-color: #3b5998;">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button type="button" class="btn btn-primary me-1" style="background-color: #55acee;">
            <i class="fab fa-twitter"></i>
          </button>
          <button type="button" class="btn btn-primary me-1" style="background-color: #0082ca;">
            <i class="fab fa-linkedin"></i>
          </button>
          <button type="button" class="btn btn-primary me-1">
            <i class="fas fa-comments me-2"></i>Add comment
          </button>
        </section>
        <!--Section: Share buttons-->

        <!--Section: Author-->
        <section class="border-bottom mb-4 pb-4">
          <div class="row">
            <div class="col-3">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(23).jpg"
                class="img-fluid shadow-1-strong rounded" alt="" />
            </div>

            <div class="col-9">
              <p class="mb-2"><strong>Anna Maria Doe</strong></p>
              <a href="" class="text-dark"><i class="fab fa-facebook-f me-1"></i></a>
              <a href="" class="text-dark"><i class="fab fa-twitter me-1"></i></a>
              <a href="" class="text-dark"><i class="fab fa-linkedin me-1"></i></a>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
              </p>
            </div>
          </div>
        </section>
        <!--Section: Author-->

        <!--Section: Comments-->
        <section class="border-bottom mb-3">
          <p class="text-center"><strong>Comments: 3</strong></p>

          <!-- Comment -->
          <div class="row mb-4">
            <div class="col-2">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(24).jpg"
                class="img-fluid shadow-1-strong rounded" alt="" />
            </div>

            <div class="col-10">
              <p class="mb-2"><strong>Marta Dolores</strong></p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
              </p>
            </div>
          </div>

          <!-- Comment -->
          <div class="row mb-4">
            <div class="col-2">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg"
                class="img-fluid shadow-1-strong rounded" alt="" />
            </div>

            <div class="col-10">
              <p class="mb-2"><strong>Valeria Groove</strong></p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
              </p>
            </div>
          </div>

          <!-- Comment -->
          <div class="row mb-4">
            <div class="col-2">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
                class="img-fluid shadow-1-strong rounded" alt="" />
            </div>

            <div class="col-10">
              <p class="mb-2"><strong>Antonia Velez</strong></p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
              </p>
            </div>
          </div>
        </section>
        <!--Section: Comments-->

        <!--Section: Reply-->
        <section>
          <p class="text-center"><strong>Leave a reply</strong></p>

          <form>
            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="form4Example1" class="form-control" />
              <label class="form-label" for="form4Example1">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form4Example2" class="form-control" />
              <label class="form-label" for="form4Example2">Email address</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form4Example3" rows="4"></textarea>
              <label class="form-label" for="form4Example3">Text</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
              <label class="form-check-label" for="form4Example4">
                Send me a copy of this comment
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Publish
            </button>
          </form>
        </section>
        <!--Section: Reply-->
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-4 mb-4">
        <!--Section: Sidebar-->
        <section class="sticky-top" style="top: 80px;">
          <!--Section: Ad-->
          <section class="text-center border-bottom pb-4 mb-4">
            <div class="bg-image hover-overlay ripple mb-4">
              <img
                src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/standard/about/assets/mdb5-about.webp"
                class="img-fluid" />
              <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
              </a>
            </div>
            <h5>Material Design for Bootstrap 5</h5>

            <p>
              500+ components, free templates, 1-min installation, extensive tutorial, huge
              community. MIT license - free for personal & commercial use
            </p>
            <a role="button" class="btn btn-primary" href="https://mdbootstrap.com/docs/standard/"
              target="_blank">Download for free<i class="fas fa-download ms-2"></i></a>
          </section>
          <!--Section: Ad-->

          <!--Section: Video-->
          <section class="text-center">
            <h5 class="mb-4">Learn the newest Bootstrap 5</h5>

            <div class="embed-responsive embed-responsive-16by9 shadow-4-strong">
              <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/c9B4TPnak1A"
                allowfullscreen></iframe>
            </div>
          </section>
          <!--Section: Video-->
        </section>
        <!--Section: Sidebar-->
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
@endsection