@section('loader')
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
@endsection

<div class="tm-top-header">
    <div class="container">
      <div class="row">
        <div class="tm-top-header-inner">
          <div class="tm-logo-container">
            <img src="img/logo.png" alt="Logo" class="tm-site-logo">
            <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
          </div>
          <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
          <nav class="tm-nav">
            <ul>
              <li><a href="{{ url('/') }}" class="{{ $active == 'home' ? 'active' : ''}}">Home</a></li>
              <li><a href="{{ url('/today-special') }}" class="{{ $active == 'home' ? 'active' : ''}}">Today Special</a></li>
              <li><a href="{{ url('/menu') }}" class="{{ $active == 'home' ? 'active' : ''}}">Menu</a></li>
              <li><a href="{{ url('/contact') }}" class="{{ $active == 'home' ? 'active' : ''}}">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <section class="tm-welcome-section">
    <div class="container tm-position-relative">
      <div class="tm-lights-container">
        <img src="img/light.png" alt="Light" class="light light-1">
        <img src="img/light.png" alt="Light" class="light light-2">
        <img src="img/light.png" alt="Light" class="light light-3">
      </div>
      <div class="row tm-welcome-content">
        <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
        <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
        <p class="gray-text tm-welcome-description">Cafe House template is a mobile-friendly responsive <span class="gold-text">Bootstrap v3.3.5</span> layout by <span class="gold-text">templatemo</span>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculusnec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
        <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>
      </div>
      <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">
    </div>
  </section>
