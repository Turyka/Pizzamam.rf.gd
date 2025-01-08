  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
          <a class="navbar-brand" href="index.html"><img src="images/logocska.png" style="width: 30%"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
              aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="/" class="nav-link">Kezdőlap</a></li>
                  <li class="nav-item"><a href="etlap" class="nav-link">Étlap</a></li>
                  <li class="nav-item"><a href="kosar" class="nav-link"><i class="fa"
                              id="listingCount">+{{ $listingCount > 0 ? $listingCount : 0 }} </i> <i class="fa fa-lg">
                              &#xf07a;</i>
                          </i></a></li>
              </ul>
          </div>
      </div>
  </nav>
  <!-- END nav -->
