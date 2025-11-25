
// header
 AOS.init();

window.onscroll = function() {
  myFunction()
};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >=120) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

 const displayImage = document.getElementById("displayImage");
  const caption = document.querySelector(".caption");
  const thumbnails = document.querySelectorAll(".thumb");

  thumbnails.forEach(thumb => {
    thumb.addEventListener("click", () => {
      displayImage.src = thumb.src;
      caption.textContent = thumb.dataset.caption;
    });
  });



  (function () {
  const tabs = document.querySelectorAll('#property-tabs .tab-btn');
  const boxes = document.querySelectorAll('#property-cards .tab-content-box');

  tabs.forEach(btn => {
    btn.addEventListener('click', () => {
      const id = btn.dataset.tab;

      // Tab active toggle
      tabs.forEach(t => {
        t.classList.remove('active');
        t.setAttribute('aria-selected','false');
      });
      btn.classList.add('active');
      btn.setAttribute('aria-selected','true');

      // Show corresponding box
      boxes.forEach(b => b.classList.remove('active'));
      document.getElementById(id).classList.add('active');
    });
  });

  // Show initial active tab
  const initial = document.querySelector('#property-tabs .tab-btn.active');
  if (initial) {
    document.getElementById(initial.dataset.tab).classList.add('active');
  }
})();  

(function(){
  const slider = document.querySelector('#discover-rental .vertical-slider');
  if(!slider) return;
  const slides = Array.from(slider.querySelectorAll('.vs-slide'));
  if(slides.length === 0) return;

  let idx = 0; // start index (0 -> first slide). You can change default here.

  // helper to set classes
  function refresh() {
    slides.forEach((s, i) => {
      s.classList.remove('prev','current','next','out');
      if(i === idx) {
        s.classList.add('current');
      } else if (i === (idx - 1 + slides.length) % slides.length) {
        s.classList.add('prev');
      } else if (i === (idx + 1) % slides.length) {
        s.classList.add('next');
      } else {
        s.classList.add('out');
      }
    });
  }

  // initial state
  refresh();

  // controls
  const btnUp = slider.querySelector('.vs-up');
  const btnDown = slider.querySelector('.vs-down');

  btnUp && btnUp.addEventListener('click', () => {
    // previous slide (up means show previous)
    idx = (idx - 1 + slides.length) % slides.length;
    refresh();
  });

  btnDown && btnDown.addEventListener('click', () => {
    // next slide (down means show next)
    idx = (idx + 1) % slides.length;
    refresh();
  });

  // optional: keyboard support (ArrowUp/ArrowDown)
  window.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowUp') {
      idx = (idx - 1 + slides.length) % slides.length;
      refresh();
    } else if (e.key === 'ArrowDown') {
      idx = (idx + 1) % slides.length;
      refresh();
    }
  });

  // optional: auto-play (uncomment to enable)
  // let autoplay = true, delay = 4000;
  // if(autoplay) setInterval(() => { idx = (idx + 1) % slides.length; refresh(); }, delay);

})();

// testimonials slider 

 $(document).ready(function(){
    $(".test-owl").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      stagePadding: 80,
      responsive: {
        0: { items: 1, margin: 10 ,stagePadding: 20, },
        768: { items: 2.2, stagePadding: 60 },
        992: { items: 2.5, stagePadding: 100 }
      }
    });
  });

//  counter js 
  const counters = document.querySelectorAll('.counter');

  counters.forEach(counter => {
    counter.innerText = '0';
    const updateCounter = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;
      const increment = target / 200; // speed adjust

      if(count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(updateCounter, 10);
      } else {
        counter.innerText = target.toLocaleString() + '+';
      }
    };
    updateCounter();
  });


  // service-detail slider 
  $('.property-slider').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  autoplay: true,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  items: 1
});  

// blog slider 

 $(document).ready(function(){
  $(".blog-owl").owlCarousel({
    loop: true,
    margin: 20,
    stagePadding: 40,  // 👈 side me thoda extra space (cards partially visible)
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
      0: { 
         margin: 10,
        items: 1, 
        stagePadding: 20, // 👈 mobile pe thoda kam padding
        nav: false 
      },
      768: { 
        items: 2,
        stagePadding: 30 
      },
      992: { 
        items: 3,
        stagePadding: 40 
      }
    }
  });
});

// latest articals 

$(document).ready(function(){
  $(".blog-latest-owl").owlCarousel({
    loop: true,
    margin: 20,
    stagePadding: 40,  // 👈 side me thoda extra space (cards partially visible)
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
      0: { 
        margin: 10,
        items: 1, 
        stagePadding: 20, // 👈 mobile pe thoda kam padding
        nav: false 
      },
      768: { 
        items: 2,
        stagePadding: 30 
      },
      992: { 
        items: 4,
        stagePadding: 40 
      }
    }
  });
});


  // blog text limit 

   document.querySelectorAll('.blog-text').forEach(el => {
    const words = el.textContent.trim().split(/\s+/);
    if (words.length > 13) {
      el.textContent = words.slice(0, 15).join(' ') + '...';
    }
  });


  // explore slider 

  $(document).ready(function(){
    $(".property-owl").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        stagePadding: 80, 
        autoplay: true,
        autoplayTimeout: 3500,
        responsive: {
            0: {
               margin: 10,
                items: 1,
                stagePadding: 30
            },
            576: {
                items: 2,
                stagePadding: 50
            },
            768: {
                items: 2,
                stagePadding: 60
            },
            992: {
                items: 3,
                stagePadding: 70
            },
            1200: {
                items: 4,
                stagePadding: 80
            }
        }
    });
});