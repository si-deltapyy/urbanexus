<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UrbanNexus</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/css/bootstrap.min.css') }}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/css/fontawesome-all.min.css') }}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/css/iofrm-style.css') }}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/css/iofrm-theme29.css') }}"
    />
  </head>
  <body>
    <div class="form-body without-side">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{ asset('assets/images/graphic3.svg') }}" alt="" />
                </div>
              </div>

          @yield('content')

        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/form.js') }}"></script>
  </body>
</html>
