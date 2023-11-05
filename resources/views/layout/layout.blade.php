<!DOCTYPE html>
<html lang="EN">

@include('layout.header')

<body>
    @include('layout.nav')
    <div class="container py-4">
      {{-- page contents --}}
      @yield('content')
      </div>
    @include('layout.script')
</body>

</html>