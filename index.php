<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Manchester Community College | Style Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Roboto font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,400i,700" rel="stylesheet">

  <!-- Lato font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="https://www.manchestercc.edu/wp-content/themes/greatpath/library/css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <span class="sg-logo-initials">MCC</span>
        <span class="sg-logo-full">Manchester Community College</span> <em>Style Guide</em>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix page">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">About</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Getting Started</a>
        </li>
        <li>
          <a href="#sg-colors">Colors</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main row main" role="main">
      <div class="sg-container page">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Getting Started</h2>
            <p>A living style guide is a great tool to promote visual consistency, unify UX designers and front-end developers, as well as speed up development times. Add some documentation here on how to get started with your new style guide and start customizing this boilerplate to your liking.</p>
            <p>If you are looking for resources on style guides, check out <a href="http://styleguides.io">styleguides.io</a>. There are a ton of great articles, books, podcasts, talks, and other style guide tools!</p>
          </div><!--/.sg-about-->

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Colors</h2>
            <p>These need to be boiled down to less colors and less shades. The fewer the colors, the fewer accessiblity contrast issues.</p>
            <h3>Warm Grays</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #f2f1ed;"></div>
                <div class="sg-color-name">warm-gray-lightest</div>
                <div class="sg-color-value">#f2f1ed</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ded9d1;"></div>
                <div class="sg-color-name">warm-gray-lighter</div>
                <div class="sg-color-value">#ded9d1</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ab9e95;"></div>
                <div class="sg-color-name">warm-gray-light</div>
                <div class="sg-color-value">#ab9e95</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #766a63;"></div>
                <div class="sg-color-name">warm-gray</div>
                <div class="sg-color-value">#766a63</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #423832;"></div>
                <div class="sg-color-name">warm-gray-dark</div>
                <div class="sg-color-value">#423832</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #201b18;"></div>
                <div class="sg-color-name">warm-gray-darker</div>
                <div class="sg-color-value">#201b18</div>
              </div>
            </div><!--/.sg-color-grid-->
            <h3>Blues</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #e6f0fc;"></div>
                <div class="sg-color-name">blue-lightest</div>
                <div class="sg-color-value">#e6f0fc</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #a9d0fc;"></div>
                <div class="sg-color-name">blue-lighter</div>
                <div class="sg-color-value">#a9d0fc</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #3392ff;"></div>
                <div class="sg-color-name">blue-light</div>
                <div class="sg-color-value">#3392ff</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #003f87;"></div>
                <div class="sg-color-name">blue</div>
                <div class="sg-color-value">#003f87</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #002754;"></div>
                <div class="sg-color-name">blue-dark</div>
                <div class="sg-color-value">#002754</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #091c32;"></div>
                <div class="sg-color-name">blue-darker</div>
                <div class="sg-color-value">#091c32</div>
              </div>
            </div><!--/.sg-color-grid-->
            <h3>Oranges</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #faeee5;"></div>
                <div class="sg-color-name">orange-lightest</div>
                <div class="sg-color-value">#faeee5</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ffc399;"></div>
                <div class="sg-color-name">orange-lighter</div>
                <div class="sg-color-value">#ffc399</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #f58a42;"></div>
                <div class="sg-color-name">orange-light</div>
                <div class="sg-color-value">#f58a42</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #df5900;"></div>
                <div class="sg-color-name">orange</div>
                <div class="sg-color-value">#df5900</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #9c3900;"></div>
                <div class="sg-color-name">orange-dark</div>
                <div class="sg-color-value">#9c3900</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #5c2200;"></div>
                <div class="sg-color-name">orange-darker</div>
                <div class="sg-color-value">#5c2200</div>
              </div>
            </div><!--/.sg-color-grid-->
            <h3>Greens</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #e0eede;"></div>
                <div class="sg-color-name">green-lightest</div>
                <div class="sg-color-value">#e0eede</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #c2e6be;"></div>
                <div class="sg-color-name">green-lighter</div>
                <div class="sg-color-value">#c2e6be</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #7ecf78;"></div>
                <div class="sg-color-name">green-light</div>
                <div class="sg-color-value">#7ecf78</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #4ea649;"></div>
                <div class="sg-color-name">green</div>
                <div class="sg-color-value">#4ea649</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #22591e;"></div>
                <div class="sg-color-name">green-dark</div>
                <div class="sg-color-value">#22591e</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #0e2c0d;"></div>
                <div class="sg-color-name">green-darker</div>
                <div class="sg-color-value">#0e2c0d</div>
              </div>
            </div><!--/.sg-color-grid-->
            <h3>Cool Grays</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #f0f1f2;"></div>
                <div class="sg-color-name">cool-gray-lightest</div>
                <div class="sg-color-value">#f0f1f2</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #dde3eb;"></div>
                <div class="sg-color-name">cool-gray-lighter</div>
                <div class="sg-color-value">#dde3eb</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #c5cfd9;"></div>
                <div class="sg-color-name">cool-gray-light</div>
                <div class="sg-color-value">#c5cfd9</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #94a4b5;"></div>
                <div class="sg-color-name">cool-gray</div>
                <div class="sg-color-value">#94a4b5</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #444d54;"></div>
                <div class="sg-color-name">cool-gray-dark</div>
                <div class="sg-color-value">#444d54</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #242627;"></div>
                <div class="sg-color-name">cool-gray-darker</div>
                <div class="sg-color-value">#242627</div>
              </div>
            </div><!--/.sg-color-grid-->
            <h3>Purples</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #f6e9f6;"></div>
                <div class="sg-color-name">purple-lightest</div>
                <div class="sg-color-value">#f6e9f6</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #d8b4d9;"></div>
                <div class="sg-color-name">purple-lighter</div>
                <div class="sg-color-value">#d8b4d9</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #a35ea5;"></div>
                <div class="sg-color-name">purple-light</div>
                <div class="sg-color-value">#a35ea5</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #6f3271;"></div>
                <div class="sg-color-name">purple</div>
                <div class="sg-color-value">#6f3271</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #3c233d;"></div>
                <div class="sg-color-name">purple-dark</div>
                <div class="sg-color-value">#3c233d</div>
              </div>
            </div><!--/.sg-color-grid-->
            <h3>Yellows</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #fef7e7;"></div>
                <div class="sg-color-name">yellow-lightest</div>
                <div class="sg-color-value">#fef7e7</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #feefc1;"></div>
                <div class="sg-color-name">yellow-lighter</div>
                <div class="sg-color-value">#feefc1</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #fcdd74;"></div>
                <div class="sg-color-name">yellow-light</div>
                <div class="sg-color-value">#fcdd74</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ffc800;"></div>
                <div class="sg-color-name">yellow</div>
                <div class="sg-color-value">#ffc800</div>
              </div>
            </div><!--/.sg-color-grid-->
            <h3>Reds</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #fbecef;"></div>
                <div class="sg-color-name">red-lightest</div>
                <div class="sg-color-value">#fbecef</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #fac8d3;"></div>
                <div class="sg-color-name">red-lighter</div>
                <div class="sg-color-value">#fac8d3</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #dd627d;"></div>
                <div class="sg-color-name">red-light</div>
                <div class="sg-color-value">#dd627d</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #c62a3d;"></div>
                <div class="sg-color-name">red</div>
                <div class="sg-color-value">#c62a3d</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #721726;"></div>
                <div class="sg-color-name">red-dark</div>
                <div class="sg-color-value">#721726</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #38070f;"></div>
                <div class="sg-color-name">red-darker</div>
                <div class="sg-color-value">#38070f</div>
              </div>
            </div><!--/.sg-color-grid-->
          </div><!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Font Stacks</h2>
            <p>
              This will change to regular fonts. No need to slow down the site with two web fonts.
            </p>
            <dl class="sg-font-list">
              <dt>Primary Font:</dt>
              <dd style='font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;'>"Lato","Helvetica Neue",Helvetica,Arial,sans-serif;</dd>

              <dt>Primary Font Italic:</dt>
              <dd style='font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif; font-style: italic;'>"Lato","Helvetica Neue",Helvetica,Arial,sans-serif;</dd>

              <dt>Primary Font Bold:</dt>
              <dd style='font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif; font-weight: 800;'>"Lato","Helvetica Neue",Helvetica,Arial,sans-serif;</dd>

              <dt>Secondary Font:</dt>
              <dd style='font-family: "Roboto Slab","Cambria",Georgia,serif;'>"Roboto Slab","Cambria",Georgia,serif;</dd>

              <dt>Secondary Font Italic:</dt>
              <dd style='font-family: "Roboto Slab","Cambria",Georgia,serif; font-style: italic;'>"Roboto Slab","Cambria",Georgia,serif;</dd>

              <dt>Secondary Font Bold:</dt>
              <dd style='font-family: "Roboto Slab","Cambria",Georgia,serif; font-weight: 800;'>"Roboto Slab","Cambria",Georgia,serif;</dd>
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>
