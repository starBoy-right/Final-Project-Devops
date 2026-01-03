var getHubergerIcon = document.getElementById("hamburger-menu");
var getHubergerCrossIcon = document.getElementById("hamburger-cross");
var getMobileMenu = document.getElementById("mobile-menu");

getHubergerIcon.addEventListener("click", function () {
    getMobileMenu.style.display = "flex";
    document.body.classList.add("no-scroll"); // Kunci scroll layar
    setTimeout(function () {
        getMobileMenu.style.transform = "translateX(0%)";
    }, 50);
});

getHubergerCrossIcon.addEventListener("click", function () {
    getMobileMenu.style.transform = "translateX(-100%)";
    document.body.classList.remove("no-scroll"); // Aktifkan kembali scroll
    setTimeout(function () {
        getMobileMenu.style.display = "none";
    }, 300);
});

// Check if screen size changes to desktop view and hide mobile menu
window.addEventListener("resize", function () {
    if (window.innerWidth > 1052) {
        getMobileMenu.style.display = "none";
        document.body.classList.remove("no-scroll");
    }
});

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
    if (window.scrollY > 10) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });

            // Otomatis tutup menu mobile setelah klik link (opsional)
            getMobileMenu.style.transform = "translateX(-100%)";
            setTimeout(() => {
                getMobileMenu.style.display = "none";
            }, 300);
        }
    });
});

// Fitur: Tombol kembali ke atas
const backToTopBtn = document.createElement("button");
backToTopBtn.innerHTML = "↑";
backToTopBtn.setAttribute("id", "backToTop");
document.body.appendChild(backToTopBtn);

window.addEventListener("scroll", () => {
    if (window.scrollY > 500) {
        backToTopBtn.style.display = "block";
    } else {
        backToTopBtn.style.display = "none";
    }
});

backToTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

// Fitur: Highlight menu saat scroll
const sections = document.querySelectorAll("section"); // dibungkus tag <section>
const navLinks = document.querySelectorAll(".nav-link, .form-control"); // Sesuaikan class link

window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        if (pageYOffset >= sectionTop - 60) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach((link) => {
        link.classList.remove("active");
        if (link.getAttribute("href").includes(current)) {
            link.classList.add("active");
        }
    });
});

navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
    if (window.scrollY > 10) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});