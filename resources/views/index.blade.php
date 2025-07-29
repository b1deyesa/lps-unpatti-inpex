<x-layout.app>
    <img src="{{ asset('img/unpatti-build.jpg') }}" class="background">
    @livewire('form')
    <script>
        window.addEventListener('scroll', function () {
          const bg = document.querySelector('.background');
          const scrollY = window.scrollY;
          bg.style.transform = `translateY(-${scrollY * 0.2}px)`;
        });
      </script>
</x-layout.app>