document.addEventListener('DOMContentLoaded', function() {
    const sswitch = document.querySelector(".switch");

    if (localStorage.getItem('darkMode') === 'true') {
      sswitch.classList.add("active");
      document.body.classList.add("dark");
      const a_tags = document.querySelectorAll(".dropdown-item");
      a_tags.forEach((a_tag) => {
        a_tag.classList.toggle("dark");
      });
      let bg_whites = document.querySelectorAll(".selector-d");
      bg_whites.forEach((bg_white) => {
        bg_white.classList.toggle("bg-white");
      });
    }

    sswitch.addEventListener("click", e => {
      darkMode(sswitch);
    });

    function darkMode(sswitch) {
      let darkMode = localStorage.getItem('darkMode');

      if (darkMode === 'true') {
        localStorage.setItem('darkMode', 'false');
      } else {
        localStorage.setItem('darkMode', 'true');
      }

      sswitch.classList.toggle("active");
      document.body.classList.toggle("dark");
      const a_tags = document.querySelectorAll(".dropdown-item");
      a_tags.forEach((a_tag) => {
        a_tag.classList.toggle("dark");
      });
      let bg_whites = document.querySelectorAll(".selector-d");
      bg_whites.forEach((bg_white) => {
        bg_white.classList.toggle("bg-white");
      });
    }
  });