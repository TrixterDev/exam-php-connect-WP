  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true, 
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
      280: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 4,
      },
      970: {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 4,
      },
      1280: {
        slidesPerView: 4,
        slidesPerGroup: 2,
        spaceBetween: 10,
      },
    }
      });
    </script>
</body>
</html>