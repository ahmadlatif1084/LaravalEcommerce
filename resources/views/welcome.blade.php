<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS Grid Example</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
      <header>
          <div class="top-nav container">
              <div class="logo">
                  CSS grid example
                  <ul>
                      <li>
                          <a href="#">Shop</a>
                          <a href="#">About</a>
                          <a href="#">Blog</a>
                          <a href="#">Cart</a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="hero container">
              <div class="hero-copy">
                  <h1>CSS grid layout</h1>
                  <p>A practical example of using CSS grid layout.</p>
              </div>
          </div>
          <div class="hero-buttons">
              <a href="" class="button button-white">Button 1</a>
              <a href="" class="button button-white">Button 2</a>
          </div>

          <div class="hero-image">
              <img src="public/img/macbook-pro-laravel.png" alt="hero image" class="src">
          </div>
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
    </body>
</html>
