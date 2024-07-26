
// Array of content for buttons
const contentArray = [
    {
        imageSrc: "pics/msclass.jpg",
        title: "S Class",
        description: `
        <i class="fa-solid fa-chair"></i><span> 4 passangers </span>
        <i class="fa-solid fa-suitcase"></i><span> 2 Suitcases </span>
        <i class="fa-solid fa-bolt-lightning"></i><span> Hybrid availble </span>
        <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
            <div class="description-heading"><br></div>
            <div class="description-icons">
                <span><i class="fa-regular fa-circle-check"></i> First class chauffeur</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot parking</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free 60 mins waiting time for airpot pickups, 15 mins all others</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Include meet & greet</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free cancellation within 24 hours</span><br>
            </div>
        `,
        priceTitle: "",
        priceDescription: `
        <div class="price-container">
            <table id="price-description" class="price-table">
                <tr>
                    <td>Hourly rate (minimum 3 hours)</td>
                    <td>£65</td>
                </tr>
                <tr>
                    <td>Day rate (8 hours)</td>
                    <td>£520</td>
                </tr>
                <tr>
                    <td>Heart throw to central London</td>
                    <td>£15</td>
                </tr>
            </table>
        </div>
        `
    },
    {
        imageSrc: "mvclass.png",
        title: "V Class",
        description: `
        <i class="fa-solid fa-chair"></i><span> 7 passangers </span>
        <i class="fa-solid fa-suitcase"></i><span> 8 Suitcases </span>
        <i class="fa-solid fa-bolt-lightning"></i><span> Electric Option </span>
        <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
            <div class="description-heading"><br></div>
            <div class="description-icons">
                <span><i class="fa-regular fa-circle-check"></i> First class chauffeur</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot parking</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free 60 mins waiting time for airpot pickups, 15 mins all others</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Include meet & greet</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free cancellation within 24 hours</span><br>
            </div>
        `,
        priceTitle: "",
        priceDescription: `
        <div class="price-container">
            <table id="price-description" class="price-table">
                <tr>
                    <td>Hourly rate (minimum 3 hours)</td>
                    <td>£65</td>
                </tr>
                <tr>
                    <td>Day rate (8 hours)</td>
                    <td>£520</td>
                </tr>
                <tr>
                    <td>Heart throw to central London</td>
                    <td>£150</td>
                </tr>
            </table>
        </div>
        `
    },
    {
        imageSrc: "3.png",
        title: "E Class",
        description: `
        <i class="fa-solid fa-chair"></i><span> 4 passangers </span>
        <i class="fa-solid fa-suitcase"></i><span> 2 Suitcases </span>
        <i class="fa-solid fa-bolt-lightning"></i><span> Hybrid availble </span>
        <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
            <div class="description-heading"><br></div>
            <div class="description-icons">
                <span><i class="fa-regular fa-circle-check"></i> First class chauffeur</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot parking</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free 60 mins waiting time for airpot pickups, 15 mins all others</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Include meet & greet</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free cancellation within 24 hours</span><br>
            </div>
        `,
        priceTitle: "",
        priceDescription: `
        <div class="price-container">
            <table id="price-description" class="price-table">
                <tr>
                    <td>Hourly rate (minimum 3 hours)</td>
                    <td>£55</td>
                </tr>
                <tr>
                    <td>Day rate (8 hours)</td>
                    <td>£440</td>
                </tr>
                <tr>
                    <td>Heart throw to central London</td>
                    <td>£135</td>
                </tr>
            </table>
        </div>
        `
    },
    {
        imageSrc: "4.png",
        title: "",
        description: `
        <i class="fa-solid fa-chair"></i><span> 7 passangers </span>
        <i class="fa-solid fa-suitcase"></i><span> 8 Suitcases </span>
        <i class="fa-solid fa-bolt-lightning"></i><span> Electric Option </span>
        <i class="fa-solid fa-wifi"></i><span> Onboard Wi-Fi </span>
        <div class="description-heading"><br></div>
            <div class="description-icons">
                <span><i class="fa-regular fa-circle-check"></i> First class chauffeur</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free 60 mins airpot parking</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free 60 mins waiting time for airpot pickups, 15 mins all others</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Include meet & greet</span><br>
                <span><i class="fa-regular fa-circle-check"></i> Free cancellation within 24 hours</span><br>
            </div>
        `,
        priceTitle: "",
        priceDescription: `
        <div class="price-container">
            <table id="price-description" class="price-table">
                <tr>
                    <td>Hourly rate (minimum 3 hours)</td>
                    <td>£65</td>
                </tr>
                <tr>
                    <td>Day rate (8 hours)</td>
                    <td>£520</td>
                </tr>
                <tr>
                    <td>Heart throw to central London</td>
                    <td>£150</td>
                </tr>
            </table>
        </div>
        `
    }
];

let currentIndex = 0;
const image = document.getElementById("image");
const title = document.getElementById("title");
const description = document.getElementById("description");
const priceTitle = document.getElementById("price-title");
const priceDescription = document.getElementById("price-description");
const container = document.getElementById("container");

function changeContent(index) {
    currentIndex = index - 1; // Adjust index to be 0-based
    const content = contentArray[currentIndex];
    image.src = content.imageSrc;
    title.textContent = content.title;
    description.innerHTML = content.description;
    priceTitle.textContent = content.priceTitle;
    priceDescription.innerHTML = content.priceDescription;

    // Remove active class from all buttons
    const buttons = document.querySelectorAll(".button");
    buttons.forEach(button => button.classList.remove("active"));

    // Add active class to the clicked button
    const clickedButton = document.querySelector(`.button:nth-child(${index})`);
    clickedButton.classList.add("active");
}

function autoChangeContent() {
    currentIndex = (currentIndex + 1) % contentArray.length;
    const content = contentArray[currentIndex];
    image.src = content.imageSrc;
    title.textContent = content.title;
    description.innerHTML = content.description;
    priceTitle.textContent = content.priceTitle;
    priceDescription.innerHTML = content.priceDescription;

    // Remove active class from all buttons
    const buttons = document.querySelectorAll(".button");
    buttons.forEach(button => button.classList.remove("active"));

    // Add active class to the corresponding button
    const activeButtonIndex = currentIndex + 1;
    const activeButton = document.querySelector(`.button:nth-child(${activeButtonIndex})`);
    activeButton.classList.add("active");
}

// Activate the first button initially
changeContent(1);

// Automatically change content every 3 seconds unless hovering
let intervalId;
container.addEventListener("mouseenter", () => {
    clearInterval(intervalId);
});
container.addEventListener("mouseleave", () => {
    intervalId = setInterval(autoChangeContent, 3000);
});

// Start the automatic content change
intervalId = setInterval(autoChangeContent, 3000);

// Function to toggle the background and blur of the navbar when scrolling
function handleScroll() {
    const navbar = document.getElementById('navbar');
    var logo = document.getElementById('logo1');
    var logo1 = document.getElementById('logo'); 
    const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;

    if (scrollPercentage >= 5) {
        navbar.style.backgroundColor = 'blur(10px)'; // Change background color when scrolled 30%
        navbar.style.backdropFilter = 'blur(10px)'; // Add blur effect when scrolled 30%
        logo.style.display = "none";
        
       
        logo1.style.display = "flex";
    } else {
        navbar.style.backgroundColor = 'rgba(255, 255, 255, 0)'; // Reset to transparent background
        navbar.style.backdropFilter = 'blur(0)'; // Reset to no blur
        logo.style.display = "flex";
        logo1.style. transition ="visibility 0s, opacity 5s linear";
        logo1.style.display = "none";
    }
}
var logo1 = document.getElementById('logo'); 
window.addEventListener('scroll', handleScroll);


