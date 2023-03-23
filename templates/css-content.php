<?php
    require("../read.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Master the Basic - CSS</title>

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
    <div class="wrapper bg-warning">
      <!-- Sidebar Holder -->
      <nav id="sidebar">
        <div class="sidebar-header bg-dark">
          <h3 class="text-center text-warning fw-bold">CSS</h3>
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
                <a href="#Syntax">Syntax</a>
              </li>
              <li>
                <a href="#Selectors">Selectors</a>
              </li>
              <li>
                <a href="#HowTo">How To</a>
              </li>
              <li>
                <a href="#Comments">Comments</a>
              </li>
              <li>
                <a href="#Colors">Colors</a>
              </li>
              <li>
                <a href="#Background">Background</a>
              </li>
              <li>
                <a href="#Borders">Borders</a>
              </li>
              <li>
                <a href="#Margin">Margin</a>
              </li>
              <li>
                <a href="#Padding">Padding</a>
              </li>
              <li>
                <a href="#Height/Width">Height/Width</a>
              </li>
              <li>
                <a href="#BoxModel">Box Model</a>
              </li>
              <li>
                <a href="#Outline">Outline</a>
              </li>
              <li>
                <a href="#Text">Text</a>
              </li>
              <li>
                <a href="#Fonts">Fonts</a>
              </li>
              <li>
                <a href="#Icon">Icon</a>
              </li>
              <li>
                <a href="#Links">Links</a>
              </li>
              <li>
                <a href="#Lists">Lists</a>
              </li>
              <li>
                <a href="#Tables">Tables</a>
              </li>
              <li>
                <a href="#Display">Display</a>
              </li>
              <li>
                <a href="#Max-width">Max-width</a>
              </li>
              <li>
                <a href="#Position">Position</a>
              </li>
              <li>
                <a href="#Z-index">Z-index</a>
              </li>
              <li>
                <a href="#Overflow">Overflow</a>
              </li>
              <li>
                <a href="#Float">Float</a>
              </li>
              <li>
                <a href="#Inline-block">Inline-block</a>
              </li>
              <li>
                <a href="#Align">Align</a>
              </li>
              <li>
                <a href="#Combinators">Combinators</a>
              </li>
              <li>
                <a href="#Pseudo-class">Pseudo-class</a>
              </li>
              <li>
                <a href="#Pseudo-element">Pseudo-element</a>
              </li>
              <li>
                <a href="#Opacity">Opacity</a>
              </li>
              <li>
                <a href="#navigationBar">navigation Bar</a>
              </li>
              <li>
                <a href="#Dropdowns">Dropdowns</a>
              </li>
              <li>
                <a href="#ImageGallery">Image Gallery</a>
              </li>
              <li>
                <a href="#ImageSprites">Image Sprites</a>
              </li>
              <li>
                <a href="#AttrSelectors">Attr Selectors</a>
              </li>
              <li>
                <a href="#Forms">Forms</a>
              </li>
              <li>
                <a href="#Counters">Counters</a>
              </li>
              <li>
                <a href="#WebsiteLayout">Website Layout</a>
              </li>
              <li>
                <a href="#Units">Units</a>
              </li>
              <li>
                <a href="#Specifity">Specifity</a>
              </li>
              <li>
                <a href="#!important">!important</a>
              </li>
              <li>
                <a href="#MathFunction">Math Function</a>
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#secSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Chapter 2: Advanced</a
            >
            <ul class="collapse list-unstyled px-4" id="secSubmenu">
              <li>
                <a href="css-chapter2Advanced.php">Rounded Corners</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Backgrounds</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Colors</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Color Keywords</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Gradients</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Shadows</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Text Effects</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Web Fonts</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">3D Transforms</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Transitions</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Animations</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Tooltips</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Style Images</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Image Reflection</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Object-fit</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Object-position</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Masking</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Buttons</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Pagination</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Multiple Columns</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">User Interface</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Variables</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Box Sizing</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Media Queries</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">MQ Examples</a>
              </li>
              <li>
                <a href="css-chapter2Advanced.php">Flexbox</a>
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#thirdSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Chapter 3: Responsive</a
            >
            <ul class="collapse list-unstyled px-4" id="thirdSubmenu">
              <li>
                <a href="css-chapter3Responsive.php">RWD Intro</a>
              </li>
              <li>
                <a href="css-chapter3Responsive.php">RWD Grid View</a>
              </li>
              <li>
                <a href="css-chapter3Responsive.php">RWD Media Queries</a>
              </li>
              <li>
                <a href="css-chapter3Responsive.php">RWD Images</a>
              </li>
              <li>
                <a href="css-chapter3Responsive.php">RWD Videos</a>
              </li>
              <li>
                <a href="css-chapter3Responsive.php">RWD Frameworks</a>
              </li>
              <li>
                <a href="css-chapter3Responsive.php">RWD Templates</a>
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#fourthSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Chapter 4: Grid</a
            >
            <ul class="collapse list-unstyled px-4" id="fourthSubmenu">
              <li>
                <a href="css-chapter4Grid.php">Grid Intro</a>
              </li>
              <li>
                <a href="css-chapter4Grid.php">Grid Container</a>
              </li>
              <li>
                <a href="css-chapter4Grid.php">Grid Item</a>
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

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="sidebar-header bg-dark">
                <h3 class="navbar-brand text-warning font-weight-bold px-3">
                  MastertheBasics
                </h3>
              </div>
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
            <p>
              CSS is the language we use to style an php document. CSS
              describes how php elements should be displayed.
            </p>
            <hr />
            <p class="mb-0">
              This tutorial will teach you CSS from basic to advanced.
            </p>
          </div>
          <div class="row d-flex flex-row justify-content-around">
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
