<header class="mt-5">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.w3schools.com/w3images/la.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/w3images/ny.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/w3images/chicago.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
</div>
</header>
<main class="py-5" id="band">
  <div class="container">
    <div class="row p-4">
      <div class="col-12 col-md-10 mx-auto text-center">
        <h2 class=""><?= esc($title) ?></h2>
        <p class="text-justify f-16">
          We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <div class="row">
          <div class="col-md-4">
            <p class="py-4">Name</p>
            <img src="https://www.w3schools.com/w3images/bandmember.jpg" class="w-75" alt="">
          </div>
          <div class="col-md-4">
            <p class="py-4">Name</p>
            <img src="https://www.w3schools.com/w3images/bandmember.jpg" class="w-75" alt="">
          </div>
          <div class="col-md-4">
            <p class="py-4">Name</p>
            <img src="https://www.w3schools.com/w3images/bandmember.jpg" class="w-75" alt="">
          </div>
        </div>
      </div>
    </div>
   </div>
</main>
<section class="py-5 bg-dark" id="tour">
  <div class="container">
    <div class="row p-4">
      <div class="col-12 col-md-10 mx-auto">
        <h2 class="text-center text-light text-uppercase">Tour Dates</h2>
        <p class="text-secondary font-itali text-center py-3">Remember to book your tickets!</p>
        <ul class="list-group rounded-0 w-100">
          <li class="list-group-item">
            September
            <span class="btn-danger rounded-0 py-1 px-4 ml-4">Sold out</span>
          </li>
          <li class="list-group-item">
            October
            <span class="btn-danger rounded-0 py-1 px-4 ml-4">Sold out</span>
          </li>
          <li class="list-group-item">
            Nomenber
            <span class="bg-dark text-light rounded-circle py-1 px-2 float-right mr-3">3</span>
          </li>
        </ul>
        <div class="row d-flex justify-content-between mt-0 mt-md-4">
          <div class="col-md-4 mt-4 mt-md-0">
            <div class="card rounded-0">
              <img src="https://www.w3schools.com/w3images/newyork.jpg" alt="" class="card-img-top rounded-0">
              <div class="card-body">
                <h5 class="card-title">
                  New York
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                  Fri 27 Nov 2016
                </h6>
                <p class="card-text">
                  Praesent tincidunt sed tellus ut rutrum sed vitae justo.
                </p>
                <a href="#" class="card-link bg-dark text-light btn rounded-0">Buy Tickets</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4 mt-md-0">
            <div class="card rounded-0">
              <img src="https://www.w3schools.com/w3images/paris.jpg" alt="" class="card-img-top rounded-0">
              <div class="card-body">
                <h5 class="card-title">
                  Paris
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                  Sat 28 Nov 2016
                </h6>
                <p class="card-text">
                  Praesent tincidunt sed tellus ut rutrum sed vitae justo.
                </p>
                <a href="#" class="card-link bg-dark text-light btn rounded-0">Buy Tickets</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4 mt-md-0">
            <div class="card rounded-0">
              <img src="https://www.w3schools.com/w3images/sanfran.jpg" alt="" class="card-img-top rounded-0">
              <div class="card-body">
                <h5 class="card-title">
                  San Fransico
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                  Sun 29 Nov 2016
                </h6>
                <p class="card-text">
                  Praesent tincidunt sed tellus ut rutrum sed vitae justo.
                </p>
                <a href="#" class="card-link bg-dark text-light btn rounded-0">Buy Tickets</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5" id="contact">
  <div class="container">
    <div class="row p-4">
      <div class="col-12 col-md-10 mx-auto">
        <h2 class="text-center text-uppercase">Contact</h2>
        <p class="text-secondary text-center font-itali py-3">Fan? Drop a note!</p>
        <div class="row mt-md-4 mt-0">
          <div class="col-md-6 mt-4 mt-md-0">
            <ul class="list-group">
              <li class="list-group-item border-0">
                <i class="fa fa-map-marker f-28"></i>
                <p class="d-inline f-18 ml-2"> Chicago, US</p>
              </li>
              <li class="list-group-item border-0">
                <i class="fa fa-phone f-28"></i>
                <p class="d-inline f-18 ml-2"> Phone: +00 151515</p>
              </li>
              <li class="list-group-item border-0">
                <i class="fa fa-envelope f-28"></i>
                <p class="d-inline f-18 ml-2"> Email: mail@mail.com</p>
              </li>
            </ul>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <form action="">
              <div class="row">
                <div class="col">
                  <input class="form-control" type="text" placeholder="name" required>
                </div>
                <div class="col">
                  <input class="form-control" type="email" placeholder="email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="message" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn bg-dark text-light rounded-0 d-block ml-auto">send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <img src="https://www.w3schools.com/w3images/map.jpg" class="w-100" alt="">
</section>
