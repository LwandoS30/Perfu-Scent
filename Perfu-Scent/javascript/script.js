
//Products JavaScript
let products = {
    data:
    [
        {
            productName: "Bae",
            category: "All",
            price: "150",
            image: "images/60ml/bae.jpg",
        },
        {
            productName: "Bell-Bell",
            category: "Ladies",
            price: "150",
            image: "images/60ml/belle-belle.jpg",
        },
        {
            productName: "Low White",
            category: "Gentlemen",
            price: "150",
            image: "images/60ml/Low-White.jpg",
        },
        {
            productName: "Black Oud",
            category: "Oud",
            price: "150",
            image: "images/60ml/black_oud.jpg",
        },
        {
            productName: "Berry-berry",
            category: "Oud",
            price: "150",
            image: "images/60ml/berry-berry.jpg",
        },
        {
            productName: "Blue Savage",
            category: "Oud",
            price: "150",
            image: "images/60ml/bluesavage.jpg",
        },

        {
            productName: "Blue  Sea",
            category: "Oud",
            price: "150",
            image: "images/60ml/blueSea.jpg",
        },
        {
            productName: "Dezire Blue",
            category: "Oud",
            price: "150",
            image: "images/60ml/dezireBlue.jpg",
        },
        {
            productName: "Diezel",
            category: "Oud",
            price: "150",
            image: "images/60ml/diezel.jpg",
        },
        {
            productName: "Dezire Red",
            category: "Oud",
            price: "150",
            image: "images/60ml/dezireRed.jpg",
        },
        {
            productName: "Extreme",
            category: "Oud",
            price: "150",
            image: "images/60ml/Extreme.jpg",
        },
        {
            productName: "Flawless",
            category: "Oud",
            price: "150",
            image: "images/60ml/flawless.jpg",
        },
        {
            productName: "Golden Boy",
            category: "Oud",
            price: "150",
            image: "images/60ml/goldenBoy.jpg",
        },
        {
            productName: "Gorgeus Girl",
            category: "Oud",
            price: "150",
            image: "images/60ml/gorgeusGirl.jpg",
        },
        {
            productName: "Green Oud",
            category: "Oud",
            price: "150",
            image: "images/60ml/Green-Oud.jpeg",
        },
        {
            productName: "Green Secret",
            category: "Oud",
            price: "150",
            image: "images/60ml/greenSecret.jpg",
        },
        {
            productName: "Her Poison",
            category: "Oud",
            price: "150",
            image: "images/60ml/herPoison.jpg",
        },
        {
            productName: "Hot For Her",
            category: "Oud",
            price: "150",
            image: "images/60ml/hotForHer.jpg",
        },
        {
            productName: "Hot For Him",
            category: "Oud",
            price: "150",
            image: "images/60ml/hotForHim.jpg",
        },
        {
            productName: "Kalimaat",
            category: "Oud",
            price: "150",
            image: "images/60ml/Kalimaat.jpg",
        },
        {
            productName: "Kashmiri Oud",
            category: "Oud",
            price: "150",
            image: "images/60ml/Kashmiri-Oud.jpg",
        },
        {
            productName: "On my Wayy",
            category: "Oud",
            price: "150",
            image: "images/60ml/on_my_wayy.jpg",
        },
        {
            productName: "Oud D Great",
            category: "Oud",
            price: "150",
            image: "images/60ml/oud-d-great.jpg",
        },
        {
            productName: "Oud Musk",
            category: "Oud",
            price: "150",
            image: "images/60ml/Oud-Musk.jpg",
        },
        {
            productName: "SAAD",
            category: "Oud",
            price: "150",
            image: "images/60ml/saad.jpg",
        },
        {
            productName: "S-Candle Man",
            category: "Oud",
            price: "150",
            image: "images/60ml/S-Candle-men.jpg",
        },
        {
            productName: "Selver Sense",
            category: "Oud",
            price: "150",
            image: "images/60ml/selver-sense.jpg",
        },
        {
            productName: "Sky Oud",
            category: "Oud",
            price: "150",
            image: "images/60ml/sky-oud.jpg",
        },
        {
            productName: "Stallion",
            category: "Oud",
            price: "150",
            image: "images/60ml/stallion.jpg",
        },
        {
            productName: "Sweet Candle",
            category: "Oud",
            price: "150",
            image: "images/60ml/sweetCandle.jpg",
        },
        {
            productName: "Tiger Classic",
            category: "Oud",
            price: "150",
            image: "images/60ml/Tiger-2-scaled.jpg",
        },
        {
            productName: "Vertex",
            category: "Oud",
            price: "150",
            image: "images/60ml/vertex.jpg",
        },
        {
            productName: "Wicked Lady",
            category: "Oud",
            price: "150",
            image: "images/60ml/Wicked-female.jpg",
        },
        {
            productName: "Wicked Man",
            category: "Oud",
            price: "150",
            image: "images/60ml/Wicked-male.jpg",
        },
        {
            productName: "Wild Energy",
            category: "Oud",
            price: "150",
            image: "images/60ml/Wild-Energy.jpg",
        },
        {
            productName: "Woody Oud",
            category: "Oud",
            price: "150",
            image: "images/60ml/Woody-Oud.jpg",
        },
        {
            productName: "Yellow Oud",
            category: "Oud",
            price: "150",
            image: "images/60ml/yellow_oud.jpg",
        },
    ],
};

for(let i of products.data)
{
    //create card
    let card = document.createElement("div");

    //card must have category and must stay hidden
    card.classList.add("card", i.category, "hide");

    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");

    //img tag
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);
    //container
    let container = document.createElement("div");
    container.classList.add("container");

    //displays the product name 
    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText = i.productName.toUpperCase();
    container.appendChild(name);

    //displays the product price
    let price = document.createElement("h6");
    price.innerText = "R" + i.price;
    container.appendChild(price);

    card.appendChild(container);
    document.getElementById("products").appendChild(card);
}

//Function that will use parameter to determine what action to happen

function filterProduct(value)
{
    //button class code for all the buttons
    let buttons = document.querySelectorAll(".button-value");

    buttons.forEach((button) => {
        //checks if the value is equal to the innerText
        if(value.toUpperCase() == button.innerText.toUpperCase())
        {
            button.classList.add("active");
        }
        else
        {
            button.classList.remove("active");
        }
    });

    //sellect all the cards
    let elements = document.querySelectorAll(".card");

    // loop throgh all cards 
    elements.forEach((element) => 
    {
        //display all cards when 'all' button clicked
        if(value == "all")
        {
            element.classList.remove("hide");
        }
        else
        {
            // check if element contains category class
            if(element.classList.contains(value))
            {
                //display elements based on category
                element.classList.remove("hide");
            }
            else
            {
                //hide other elements that are not selected
                element.classList.add("hide");
            }
        }
    });
}

//search product when button clicked
document.getElementById("search").addEventListener("click", () =>
{
    //initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");

    //loop through all element
    elements.forEach((element, index) => {
        //check if the text includes the value to search
        if(element.innerTextincludes(serachInput.toUpperCase())){
            //display the matching card
            cards[index].classList.remove("hide");
        }
        else
        {
            //hide others
            cards[index].classList.add("hide");
        }
    });
});

//Display all products
window.onload = () => 
{
    filterProduct("all");
};


//LogIn and SignUp Javascript
const signInForm = document.getElementById('signInForm');
const logInForm = document.getElementById('logInForm');

