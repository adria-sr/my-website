var scroll = window.requestAnimationFrame ||
  // IE Fallback
  function(callback) {
    window.setTimeout(callback, 1000 / 60)
  };
var elementsToShow = document.querySelectorAll('.show-on-scroll');

function loop() {

  Array.prototype.forEach.call(elementsToShow, function(element) {
    if (isElementInViewport(element)) {
      element.classList.add('is-visible');
      console.log('added is-visible')
    } else {
      element.classList.remove('is-visible');
      console.log('removed is-visible');
    }
  });

  scroll(loop);
}

// Call the loop for the first time
loop();

const callback = function(entries) {
  entries.forEach(entry => {
    entry.target.classList.toggle("is-visible");
  });
};

const observer = new IntersectionObserver(callback);

const targets = document.querySelectorAll(".show-on-scroll");
targets.forEach(function(target) {
  observer.observe(target);
});