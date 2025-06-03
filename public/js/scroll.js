document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll("section[id]");
  const anchorLinks = document.querySelectorAll(".nav-link[href^='#']"); // only links like #about

  window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      if (pageYOffset >= sectionTop - sectionHeight / 3) {
        current = section.getAttribute("id");
      }
    });

    // Only remove 'active' from anchor links
    anchorLinks.forEach(link => {
      link.classList.remove("active");
      if (link.getAttribute("href") === "#" + current) {
        link.classList.add("active");

        // Optional: also remove 'active' from other route links (optional)
        document.querySelectorAll(".nav-link:not([href^='#'])").forEach(routeLink => {
          routeLink.classList.remove("active");
        });
      }
    });
  });
});
