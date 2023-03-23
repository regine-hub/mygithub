<?php
    require("../read.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Master the Basic - HTML</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../static/css/bootstrap.min.css" />
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../static/css/content.css" />

    <!-- Font Awesome JS -->
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
      integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
      crossorigin="anonymous"
    ></script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
      integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <div class="wrapper bg-warning ">
      <!-- Sidebar Holder -->
      <nav class="slide" id="sidebar" >
        <div class="sidebar-header bg-dark ">
          <h3 class="text-center text-warning fw-bold">HTML</h3>
        </div>

        <ul class="list-unstyled components">
          <li>
            <a
              href="#firstSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Chapter 1: Introduction</a
            >
            <ul class="collapse list-unstyled px-4" id="firstSubmenu">
              
              <li>
                <a href="#Elements">Elements</a>
              </li>
              <li>
                <a href="#Attributes">Attributes</a>
              </li>
              <li>
                <a href="#Headings">Headings</a>
              </li>
              <li>
                <a href="#Paragraphs">Paragraphs</a>
              </li>
              <li>
                <a href="#Styles">Styles</a>
              </li>
              <li>
                <a href="#Formatting">Formatting</a>
              </li>
              <li>
                <a href="#Quotations">Quotations</a>
              </li>
              <li>
                <a href="#Comments">Comments</a>
              </li>
              <li>
                <a href="#Colors">Colors</a>
              </li>
              <li>
                <a href="#CSS">CSS</a>
              </li>
              <li>
                <a href="#Links">Links</a>
              </li>
              <li>
                <a href="#Images">Images</a>
              </li>
              <li>
                <a href="#Favicon">Favicon</a>
              </li>
              <li>
                <a href="#Tables">Tables</a>
              </li>
              <li>
                <a href="#Lists">Lists</a>
              </li>
              <li>
                <a href="#Block&Inline">Block & Inline</a>
              </li>
              <li>
                <a href="#Classes">Classes</a>
              </li>
              <li>
                <a href="#Id">Id</a>
              </li>
              <li>
                <a href="#Iframes">Iframes</a>
              </li>
              <li>
                <a href="#JavaScript">JavaScript</a>
              </li>
              <li>
                <a href="#FilePaths">File Paths</a>
              </li>
              <li>
                <a href="#Head">Head</a>
              </li>
              <li>
                <a href="#Layout">Layout</a>
              </li>
              <li>
                <a href="#Responsive">Responsive</a>
              </li>
              <li>
                <a href="#Computercode">Computercode</a>
              </li>
              <li>
                <a href="#Semantics">Semantics</a>
              </li>
              <li>
                <a href="#StyleGuide">Style Guide</a>
              </li>
              <li>
                <a href="#Entities">Entities</a>
              </li>
              <li>
                <a href="#Symbols">Symbols</a>
              </li>
              <li>
                <a href="#Emojis">Emojis</a>
              </li>
              <li>
                <a href="#Charset">Charset</a>
              </li>
              <li>
                <a href="#URLEncode">URL Encode</a>
              </li>
              <li>
                <a href="#vs.XHTML">vs.XHTML</a>
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#secSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Chapter 2: Forms</a
            >
            <ul class="collapse list-unstyled px-4" id="secSubmenu">
              <li>
                <a href="html-chapter2Forms.php">Forms</a>
              </li>
              <li>
                <a href="html-chapter2Forms.php">Form Attributes</a>
              </li>
              <li>
                <a href="html-chapter2Forms.php">Form Elements</a>
              </li>
              <li>
                <a href="html-chapter2Forms.php">Input Types</a>
              </li>
              <li>
                <a href="html-chapter2Forms.php">Input Attributes</a>
              </li>
              <li>
                <a href="html-chapter2Forms.php">Input Form Attributes</a>
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#thirdSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Chapter 3: Graphics</a
            >
            <ul class="collapse list-unstyled px-4" id="thirdSubmenu">
              <li>
                <a href="html-chapter3Graphics.php">Canvas</a>
              </li>
              <li>
                <a href="html-chapter3Graphics.php">SVG</a>
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#fourthSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Chapter 4: Media</a
            >
            <ul class="collapse list-unstyled px-4" id="fourthSubmenu">
              <li>
                <a href="html-chapter4Media.php">Media</a>
              </li>
              <li>
                <a href="html-chapter4Media.php">Video</a>
              </li>
              <li>
                <a href="html-chapter4Media.php">Audio</a>
              </li>
              <li>
                <a href="html-chapter4Media.php">Plug-ins</a>
              </li>
              <li>
                <a href="html-chapter4Media.php">YouTube</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

      <!-- Page Content Holder -->
      <div id="content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <button
              type="button"
              id="sidebarCollapse"
              class="navbar-btn bg-dark"
            >
              <span></span>
              <span></span>
              <span></span>
            </button>
            <button
              class="btn btn-dark d-inline-block d-lg-none ml-auto"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-align-justify"></i>
            </button>
            <div class="sidebar-header bg-dark">
              <h3 class="navbar-brand text-warning font-weight-bold px-3">
                MastertheBasics
              </h3>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../templates/home-page.php#home_tutorial">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../templates/home-page.php#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../templates/home-page.php#contact">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="text-center fw-bold">Introduction</h2>
        

        <div class="line"></div>

        <div class="container">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Hello User</h4>
            <p>HTML is the standard markup language for Web pages.</p>

            <hr />
            <p class="mb-0">With HTML you can create your own Website.</p>
            <p class="mb-0">HTML is easy to learn - You will enjoy it!</p>
          </div>
          <div class="row d-flex flex-row justify-content-around" >
            <?php  while($result = mysqli_fetch_array($sqlFiles)) {?>
              <div class="col-lg-3 mt-sm-4" id="Elements">
                <div class="card" style="width: 18rem">
                  <video width="285" height="200" controls>
                    <source src="../video/<?php echo $result['data']; ?>" type="video/mp4">
                  </video>
                  <div class="card-body">
                    <h5 class="card-title">Sample HTML #<?php echo $result['id']?></h5>
                    <p class="card-text">Some quick example of Elements.</p>
                    <a href="#" class="btn btn-primary">Learn more</a>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <!-- Popper.JS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
      integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS -->
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
      integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
      crossorigin="anonymous"
    ></script>

    <script type="text/javascript">
      $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
          $("#sidebar").toggleClass("active");
          $(this).toggleClass("active");
        });
      });
    </script>
  </body>
</html>
