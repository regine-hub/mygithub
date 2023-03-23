<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../static/css/style.css" type="text/css" media="all" />
    <title>Master the Basics - Home</title>

    <style>
      #home_tutorial {
        background: url('../static/img/bg1.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
 
      } 
    </style>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="../templates/index.php" class="navbar-brand fw-bold text-warning">MasterTheBasics</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-target="#mynav"
          data-bs-toggle="collapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynav">
          <ul class="navbar-nav ms-lg-auto">
            <li class="nav-item">
              <a href="#home_tutorial" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section
      id="home_tutorial"
      class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center"
    > 
      <section class="tutorial p-5">
        <div class="container">
          <div class="row text-center p-5 g-4">
            <div class="col-md">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3 p-3">
                    <img src="../static/img/html 1 1.svg" alt="HTML" />
                  </div>
                    <h3 class="card-title mb-3">HTML</h3>
                      <p class="card-text">For Structuring the Page</p>
                      <a href="html-content.php" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3 p-3">
                    <img src="../static/img/css-3 1.svg" alt="HTML" />
                  </div>
                    <h3 class="card-title mb-3">CSS</h3>
                      <p class="card-text">For Designing the Page</p>
                      <a href="css-content.php" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
            <div class="col-md">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3 p-3">
                    <img src="../static/img/java-script 1.svg" alt="HTML" />
                  </div>
                    <h3 class="card-title mb-3">JAVASCRIPT</h3>
                      <p class="card-text">To make Interactive Page</p>
                      <a href="js-content.php" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
       </section>
    </section>
   
    
    <!-- About -->
    <section id="about" class="about bg-dark text-light">
      <div class="container">
        <div class="row align-items-center justify-content-center p-5">
          <div class="col-md col-sm-12 text-sm-center p-5">
            <img
              src="../static/img/profile.jpg"
              class="rounded-circle"
              alt="profile pic"
            />
          </div>
          <div class="col-md p-5">
            <p class="lead">Name: Regine Silab</p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
              voluptatem possimus id, velit praesentium sit harum quo excepturi
              ipsam repudiandae soluta eaque magnam iste nihil, doloribus odio!
              Quam nostrum totam dolor id tenetur maiores excepturi quasi ullam
              veniam. Sapiente cum mollitia veniam explicabo amet, voluptatum in
              quae non libero eligendi?
            </p>
          </div>
        </div>
        <p class="lead">The Story</p>
        <p class="p-3">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo
          minima repellendus omnis harum. Exercitationem sint soluta, facere,
          porro saepe dolorem dicta aliquam repellendus assumenda, dignissimos
          sed praesentium repellat at animi molestiae vero obcaecati asperiores
          corrupti non expedita laborum. Cum laboriosam distinctio non repellat
          aperiam amet hic harum totam ea adipisci excepturi error praesentium,
          sint culpa illum? Nesciunt expedita quasi excepturi aut alias,
          doloremque sit error explicabo quaerat, sint perspiciatis, blanditiis
          magnam inventore ea dolore similique numquam cum exercitationem
          reprehenderit magni recusandae. Eum quia non doloribus necessitatibus.
          Est assumenda voluptatem fugit ullam ipsam, sequi consequuntur neque
          tempora, sapiente temporibus maxime illo!
        </p>
      </div>
    </section>
    <!-- Contact -->
    <section id="contact" class="contact p-5 p-lg-0 pt-lg-5 r">
      <div class="container">
        <h3 class="fw-bold text-sm-start text-lg-center p-5">Contact Us</h3>
        <form action="#" class="form-group">
          <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" name="name" id="name" class="form-control" />
              <label for="address" class="form-label">Your Address</label>
              <input
                type="text"
                name="address"
                id="address"
                class="form-control"
                
              />
              <label for="email" class="form-label">Your Email</label>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control"
              />
            </div>
            <div class="col-md p-5">
              <label for="message" class="form-label">Send Message</label>
              <textarea
                name="message"
                id=""
                cols="30"
                rows="10"
                class="form-control"
              ></textarea>
              <button type="submit" class="btn btn-primary form-control mt-3">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <footer class="p-3 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Copyright &copy; 2022 Master The Basics</p>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>

  </body>
</html>