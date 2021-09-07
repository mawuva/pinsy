<nav class="navbar navbar-expand-lg navbar-light bg-light border border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" width="100" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link to-app-text-on-hover" href="{{ url('/') }}">
                        {{ __('pages.home.name') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle to-app-text-on-hover" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @php
                            $currentLocaleCode = (LaravelLocalization::getCurrentLocale() === 'en') ? 'gb' : LaravelLocalization::getCurrentLocale();
                        @endphp
                        <span class="flag-icon flag-icon-{{ $currentLocaleCode }}"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                @php
                                    $localeCode = ($localeCode === 'en') ? 'gb' : $localeCode;
                                @endphp
                                <span class="flag-icon flag-icon-{{ $localeCode }}"></span>
                                {{ ucfirst($properties['native']) }}
                            </a>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>