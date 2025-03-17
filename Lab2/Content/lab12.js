let slideIndex = 0;
let slides;
let thumbnails = [];
let autoSlideTimeout;

function initSlideshow() {
    slides = document.querySelectorAll("#updated-slideshow .slide");
    showSlide(slideIndex);
    generateThumbnails();
    autoSlideTimeout = setTimeout(nextSlide, 4000);
}

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove("show"));
    slides[index].classList.add("show");
    updateThumbnailHighlight(index);
    slideIndex = index;
}

function nextSlide() {
    let nextIndex = slideIndex + 1;

    if (nextIndex >= slides.length) {
        nextIndex = 0;
    }

    showSlide(nextIndex);
    autoSlideTimeout = setTimeout(nextSlide, 4000);
}

function generateThumbnails() {
    const thumbnailContainer = document.getElementById("thumbnail-container");

    thumbnailContainer.innerHTML = "";
    slides.forEach((slide, index) => {

        const img = slide.querySelector("img");
        const thumb = document.createElement("img");
        thumb.classList.add("thumbnail");

        thumb.src = img.src;
        thumb.alt = img.alt;
        thumb.style.height = "60px";
        thumb.style.border = "2px solid black";
        thumb.style.cursor = "pointer";
        thumb.style.margin = "0 5px";
        thumb.style.borderRadius = "12px";

        thumb.setAttribute("data-index", index);

        thumb.addEventListener("click", function () {
            clearTimeout(autoSlideTimeout);

            const idx = parseInt(this.getAttribute("data-index"));

            showSlide(idx);
            autoSlideTimeout = setTimeout(nextSlide, 4000);

        });

        thumbnailContainer.appendChild(thumb);
        thumbnails.push(thumb);

    });


}


function updateThumbnailHighlight(activeIndex) {
    thumbnails.forEach((thumb, index) => {
        thumb.style.borderColor = (index === activeIndex) ? "orange" : "black";
        thumb.style.height = (index === activeIndex) ? "80px" : "60px";
    });
}


document.addEventListener("DOMContentLoaded", initSlideshow);
