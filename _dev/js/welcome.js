const welcome = document.querySelector('.welcome'); 

if(welcome !== null) {

const welcomeTexts = document.querySelectorAll('.welcomeCarousel--item');
const welcomeOffers = document.querySelectorAll('.welcomeOffer--item');
const welcomeNavs = document.querySelectorAll('.welcomeNav--dot');

welcomeTexts[0].classList.add('--active');
welcomeNavs[0].classList.add('--active');
welcomeOffers[0].classList.add('--hidden');

const numberOfItems = welcomeTexts.length;
let currentItem = 0;

const welcomeRemoveClasses = () => {
    for (const welcomeText of welcomeTexts) {
        welcomeText.classList.remove('--active');
     }
     
    for (const welcomeOffer of welcomeOffers) {
         welcomeOffer.classList.remove('--hidden');
    }

    for (const welcomeNav of welcomeNavs) {
        welcomeNav.classList.remove('--active');
   }
}

const welcomeAddClasses = (index) => {
    welcomeTexts[index].classList.add('--active');
    welcomeOffers[index].classList.add('--hidden');
    welcomeNavs[index].classList.add('--active');
}

const nextItem = () => {

    welcomeRemoveClasses();
    currentItem++;

    if(currentItem > (numberOfItems - 1)) {
        currentItem = 0;
    }

    welcomeAddClasses(currentItem);
}


let playSlider;

let slideRepeater = () => {
    playSlider = setInterval(nextItem, 6000)
};
slideRepeater();


welcomeOffers.forEach((welcomeOffer, offerIndex) => {
        
    welcomeOffer.addEventListener('click', () => {

        clearInterval(playSlider);
        slideRepeater();

        currentItem = offerIndex;
        
        welcomeRemoveClasses();

        welcomeAddClasses(offerIndex);
        
    });
});

welcomeNavs.forEach((welcomeNav, offerIndex) => {
        
    welcomeNav.addEventListener('click', () => {
        console.log('test');

        clearInterval(playSlider);
        slideRepeater();

        currentItem = offerIndex;
        
        welcomeRemoveClasses();

        welcomeAddClasses(offerIndex);
        
    });
});

}
