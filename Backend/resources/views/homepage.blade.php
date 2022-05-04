{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Document</title>
</head>
<body>
    <div class="header">
        @include('navbar')
    </div>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/stylelp.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <title>Happy Meat</title>
  </head>
  <body class="body">
    <div class="header">
        @include('navbar')
    </div>
    <section class="section-hero">
      <div class="container-hero">
        <div class="flexbox-hero">
          <div class="left-block-hero">
            <h2 class="hero-heading">Apa itu Happy Meat?</h2>
            <p class="hero-paragraf">
              Project Discussions, important documents and get to know the news
              project earlier. Its easy to use and has a good Interface and
              comfortable with all good services.
            </p>
          </div>
          <div class="right-block-hero">
            <img class="image-hero" src="img/Image.png" />
          </div>
        </div>
      </div>
    </section>

    <section class="section-what">
      <div class="container-section-what">
        <div class="flexbox-section-what">
          <div class="section-what-img-box">
            <img src="img/daging.png" class="hero-img" alt="Daging merah" />
          </div>
          <div class="conten-wrapper-section-what">
            <h1 class="heading-primary">Kami menyediakan daging terbaik</h1>
            <p class="section-what-description">
              Project Discussions, important documents and get to know the news
              project earlier. Its easy to use and has a good Interface and
              comfortable with all good services.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-why">
      <div class="container-why">
        <h1 class="heading-section-why">Mengapa Happy Meat</h1>
        <p class="section-why-description">
          Project Discussions, important documents and get to know the news
          project earlier. Its easy to use and has a good Interface and
          comfortable with all good services.
        </p>
        <div></div>
      </div>
    </section>

    <section class="section-product">
      <div class="container-product">
        <h1>Produk terbaru</h1>
        <div class="product-grid">
          <div class="collection-list-wrapper">
            <div class="collection-list">
              <div class="collection-item">
                <div class="product-card">
                  <div class="card-thumbnail"></div>
                  <div class="card-content">
                    <div>
                      <h2 class="heading-card">
                        Boneless prime rib | Miyazakgyu Japanese Wagyu
                      </h2>
                    </div>
                    <div class="price-cart-card">
                      <div class="price-card">Rp.290000/kg</div>
                      <a href="#" class="buy"
                        ><i class="fas fa-shopping-cart"></i>Add to card</a
                      >
                    </div>
                  </div>
                </div>
                <div class="product-card">
                    <div class="card-thumbnail"></div>
                    <div class="card-content">
                      <div>
                        <h2 class="heading-card">
                          Boneless prime rib | Miyazakgyu Japanese Wagyu
                        </h2>
                      </div>
                      <div class="price-cart-card">
                        <div class="price-card">Rp.290000/kg</div>
                        <a href="#" class="buy"
                          ><i class="fas fa-shopping-cart"></i>Add to card</a
                        >
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-article">
      <div class="container-article">
        <h1>Artikel terbaru</h1>
        <div class="article-grid">
          <div class="collection-list-wrapper">
            <div class="collection-list">
              <div class="collection-item">
                <div class="article-card">
                  {{-- <div class="card-thumbnail"></div> --}}
                  <div class="card-content">
                    <div>
                      <img src="img/thumbnail.png" alt="thumb">
                      <h2 class="heading-card">
                        10 secret tips for managing report team
                      </h2>
                      <p class="caption-card">
                        There are 10 secret tips that you have to know for
                        managing your team remotely. Don’t let this situatuon
                        make the team feel uncomfortable
                      </p>
                    </div>
                    <div class="author-date-card">
                      <div class="avatar-1"></div>
                      <div class="author-name">Danielo Adnan</div>
                      <div class="publish-date">28 Juni 2020</div>
                    </div>
                  </div>
                </div>
                <div class="article-card">
                    {{-- <div class="card-thumbnail"></div> --}}
                    <div class="card-content">
                      <div>
                        <img src="img/thumbnail.png" alt="thumb">
                        <h2 class="heading-card">
                          10 secret tips for managing report team
                        </h2>
                        <p class="caption-card">
                          There are 10 secret tips that you have to know for
                          managing your team remotely. Don’t let this situatuon
                          make the team feel uncomfortable
                        </p>
                      </div>
                      <div class="author-date-card">
                        <div class="avatar-1"></div>
                        <div class="author-name">Danielo Adnan</div>
                        <div class="publish-date">28 Juni 2020</div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="article-card">
                {{-- <div class="card-thumbnail"></div> --}}
                <div class="card-content">
                  <div>
                    <img src="img/thumbnail.png" alt="thumb">
                    <h2 class="heading-card">
                      10 secret tips for managing report team
                    </h2>
                    <p class="caption-card">
                      There are 10 secret tips that you have to know for
                      managing your team remotely. Don’t let this situatuon
                      make the team feel uncomfortable
                    </p>
                  </div>
                  <div class="author-date-card">
                    <div class="avatar-1"></div>
                    <div class="author-name">Danielo Adnan</div>
                    <div class="publish-date">28 Juni 2020</div>
                  </div>
                </div>
              </div>
              <div class="article-card">
                {{-- <div class="card-thumbnail"></div> --}}
                <div class="card-content">
                  <div>
                    <img src="img/thumbnail.png" alt="thumb">
                    <h2 class="heading-card">
                      10 secret tips for managing report team
                    </h2>
                    <p class="caption-card">
                      There are 10 secret tips that you have to know for
                      managing your team remotely. Don’t let this situatuon
                      make the team feel uncomfortable
                    </p>
                  </div>
                  <div class="author-date-card">
                    <div class="avatar-1"></div>
                    <div class="author-name">Danielo Adnan</div>
                    <div class="publish-date">28 Juni 2020</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="section-footer">
      <div class="container-footer">
        <div class="flexbox-footer">
          <div class="footer-column-first">
            <img src="img/logo_meat.png" height="" />
            <div class="text-block-2">
              Shop that serves you so many quality meat
            </div>
          </div>
          <div class="footer-column-hide"></div>
          <div class="footer-column-second">
            <h3 class="heading-footer-second">Company</h3>
            <a href="#" class="link">About Us</a>
            <a href="#" class="link">FAQ</a>
            <a href="#" class="link">Contact Us</a>
          </div>
          <div class="footer-column-third">
            <h3 class="heading-footer-third">Features</h3>
            <a href="#" class="link">blog</a>
            <a href="#" class="link">produk</a>
            <a href="#" class="link">home</a>
          </div>
          <div class="footer-column-fourth">
            <h3 class="heading-footer-fourth">Contact Us</h3>
            <a href="#" class="link">happymeat@gmail.com</a>
            <a href="#" class="link">1-800- 023- 900</a>
            <a href="#" class="link">Setu Gang Masjid</a>
          </div>
          <div class="footer-column-fifth">
            <h3 class="heading-footer-fifth">Social Media</h3>
            <a href="#" class="link">linkedin</a>
            <a href="#" class="link">instagram</a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
