<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Monserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    </head>
    <body>
    <header>
        <div class="top-nav container">
            <div class="logo">CSS Grid Example</div>
            <ul>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Cart</a></li>
            </ul>
        </div> <!-- end top-nav -->

        <div class="hero container">
            <div class="hero-copy">
                <h1>CSS Grid Example</h1>
                <p>A practical example of using CSS Grid for a typical website layout.</p>
                <div class="hero-buttons">
                    <a href="#" class="button button-white">Button 1</a>
                    <a href="#" class="button button-white">Button 2</a>
                </div>
            </div> <!-- end hero-copy -->

            <div class="hero-image">
                <img src="public/img/macbook-pro-laravel.png" alt="hero image">
            </div>
        </div> <!-- end hero -->
    </header>
      <div class="featured-section">
          <div class="container">
              <h1 class="text-center">
                  CSS Grid Example
              </h1>
              <p class="section-description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eius esse est et incidunt ipsa, iste maiores nesciunt non numquam pariatur perferendis, perspiciatis possimus sint temporibus unde vero vitae voluptates!
              </p>
              <div class="text-center button-container">
                  <a href="" class="button">Featured</a>
                  <a href="" class="button">On Sale</a>
              </div>
          </div>
          <div class="products text-center">
              <div class="product">
                  <a href=""><img src="public/img/macbook-pro.png" alt="product"></a>
                  <a href=""><span class="product-name">Macbook Pro</span></a>
                  <div class="product-price">$2499.99</div>
              </div>
              <div class="product">
                  <a href=""><img src="public/img/macbook-pro.png" alt="product"></a>
                  <a href=""><span class="product-name">Macbook Pro</span></a>
                  <div class="product-price">$2499.99</div>
              </div>
              <div class="product">
                  <a href=""><img src="public/img/macbook-pro.png" alt="product"></a>
                  <a href=""><span class="product-name">Macbook Pro</span></a>
                  <div class="product-price">$2499.99</div>
              </div>
              <div class="product">
                  <a href=""><img src="public/img/macbook-pro.png" alt="product"></a>
                  <a href=""><span class="product-name">Macbook Pro</span></a>
                  <div class="product-price">$2499.99</div>
              </div>
              <div class="product">
                  <a href=""><img src="public/img/macbook-pro.png" alt="product"></a>
                  <a href=""><span class="product-name">Macbook Pro</span></a>
                  <div class="product-price">$2499.99</div>
              </div>
              <div class="product">
                  <a href=""><img src="public/img/macbook-pro.png" alt="product"></a>
                  <a href=""><span class="product-name">Macbook Pro</span></a>
                  <div class="product-price">$2499.99</div>
              </div>
              <div class="product">
                  <a href=""><img src="public/img/macbook-pro.png" alt="product"></a>
                  <a href=""><span class="product-name">Macbook Pro</span></a>
                  <div class="product-price">$2499.99</div>
              </div>
              <div class="product">
                  <a href=""><img src="public/img/macbook-pro.png" alt="product"></a>
                  <a href=""><span class="product-name">Macbook Pro</span></a>
                  <div class="product-price">$2499.99</div>
              </div>
          </div> <!--End Products-->
      </div>
      <div class="blog-section">
          <div class="container">
              <h1 class="text-center">From Our Blog</h1>
              <p class="section-description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam consequatur culpa
                      dignissimos eos error ex exercitationem illo ipsa laudantium magnam necessitatibus nobis nostrum
                      odio qui quibusdam quo quos, soluta?
              </p>

              <div class="blog-posts">
                  <div class="blog-post">
                      <a href=""><img src="public/img/blog1.png" alt="blog image"></a>
                      <a href=""><h2 class="blog-title">Blog Post Title 1</h2></a>
                      <div class="blog-description">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus laborum
                              provident! Adipisci aliquid enim natus? Aspernatur atque consectetur dicta expedita fugiat
                              impedit nihil nostrum pariatur quasi, qui vel, voluptate.
                      </div>
                  </div>
                  <div class="blog-post">
                      <a href=""><img src="public/img/blog1.png" alt="blog image"></a>
                      <a href=""><h2 class="blog-title">Blog Post Title 1</h2></a>
                      <div class="blog-description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus laborum
                          provident! Adipisci aliquid enim natus? Aspernatur atque consectetur dicta expedita fugiat
                          impedit nihil nostrum pariatur quasi, qui vel, voluptate.
                      </div>
                  </div>
                  <div class="blog-post">
                      <a href=""><img src="public/img/blog1.png" alt="blog image"></a>
                      <a href=""><h2 class="blog-title">Blog Post Title 1</h2></a>
                      <div class="blog-description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus laborum
                          provident! Adipisci aliquid enim natus? Aspernatur atque consectetur dicta expedita fugiat
                          impedit nihil nostrum pariatur quasi, qui vel, voluptate.
                      </div>
                  </div>
                  <div class="blog-post">
                      <a href=""><img src="public/img/blog1.png" alt="blog image"></a>
                      <a href=""><h2 class="blog-title">Blog Post Title 1</h2></a>
                      <div class="blog-description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus laborum
                          provident! Adipisci aliquid enim natus? Aspernatur atque consectetur dicta expedita fugiat
                          impedit nihil nostrum pariatur quasi, qui vel, voluptate.
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <footer>
          <div class="footer-content container">
              <div class="made-with">Made with <i class="fa fa-heart"></i> by Andre Madarang</div>
              <ul>
                  <li>Follow Me:</li>
                  <li><a href="#"><i class="fa fa-globe"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-github"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
          </div> <!-- end footer-content -->
      </footer>
    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    </body>
</html>
