document.addEventListener("DOMContentLoaded", () =>{
    mobileMenu();
    autoSlider();
    productGallery();
    cart();
})

function mobileMenu(){
    const open = document.querySelector(".header_mobile_menu");
    const menu = document.querySelector(".header_mobile_hidden");
    const close = document.querySelector(".close");
    const drk_window = document.querySelector(".hidden");
    const body = document.body;

    open.addEventListener("click", ()=>{
        menu.classList.add("visible");
        drk_window.classList.add("visible");
        body.style.overflow = "hidden";
        
    })

    close.addEventListener("click", () =>{
        menu.classList.remove("visible");
        drk_window.classList.remove("visible");
        body.style.overflow = "auto";
    })

    drk_window.addEventListener("click", ()=>{
        menu.classList.remove("visible");
        drk_window.classList.remove("visible");
        body.style.overflow = "auto"; 
    })


}

function autoSlider(){

    if(window.location.href === "http://localhost:3000/index.php"){
        let currentSlide = 0;
        const slides = document.querySelectorAll(".grid_test_slides");
        const totalSlides = slides.length;
        const slider = document.querySelector(".section_featured_grid_test_slide");
        const container = document.querySelector(".section_featured_grid_test");

        

        setInterval(() =>{
            
            currentSlide += 1;
            if (currentSlide >= totalSlides){
                currentSlide = 0;
            };

            slider.style.transform = `translateX(calc(-${currentSlide*100}% - ${20*currentSlide}px))`;

            

        },3000)
        }
        
    
}

function productGallery(){
    const allImgs = document.querySelectorAll(".gal-img");
    const sliderP = document.querySelector(".content_element_slider");
    const lenImgs = allImgs.length;
    for(let i = 0; i < lenImgs; i++){
        
        allImgs[i].addEventListener("mouseover", () =>{
            allImgs.forEach(elements =>{
                elements.style.opacity = "0.5";
            })
            allImgs[i].style.opacity = "1";
            sliderP.style.transform = `translateX(calc(-${i*100}%))`
        })
        
    }
    
}


function cart(){
    const cart = document.querySelectorAll(".cart");
    cartP = document.querySelector(".index_cart");
    const closeCart = document.querySelector(".x_mark");
    
    cart[0].addEventListener("click",()=>{
        cartP.classList.add("cart_visible");
    })

    cart[1].addEventListener("click",()=>{
        cartP.classList.add("cart_visible");
    })
    closeCart.addEventListener("click",()=>{
        cartP.classList.remove("cart_visible");
    })

    
}