/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(5);
/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_styles_scss__WEBPACK_IMPORTED_MODULE_0__);
__webpack_require__(1);
__webpack_require__(2);
__webpack_require__(3);
__webpack_require__(4);






/***/ }),
/* 1 */
/***/ (function(module, exports) {

const navSlide = () => {
    const burger = document.querySelector('.hamburger');
    const nav = document.querySelector('.header');
    const navLinks = document.querySelectorAll('.headerLinks li:not(.linkSubmenu)');

    const linkSubmenu = document.querySelector('.linkSubmenu');
    const submenu = document.querySelector('.sub-menu');



    // you can use forEach here too
    [].forEach.call(navLinks, link => {
        link.addEventListener('click', btnClick, false)
    })
    
    function btnClick() {
        // use Array function for lexical this
        [].forEach.call(navLinks, link => {
            // except for the element clicked, remove --active class
            if (link !== nav) link.classList.remove('--active');
        });
    
        // toggle active on the clicked button
        nav.classList.toggle('--active');
    }

    burger.addEventListener('click', () => {
        nav.classList.toggle('--active');
    });

    const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
    if (viewportWidth < 1024) {
        linkSubmenu.addEventListener('click', () => {
            submenu.classList.toggle('sumbenu--opened');
        });
    } 



}

navSlide();



const headerScroll = document.querySelector('.header');

window.onscroll = function() {
    let top = window.scrollY; 
    if (top >= 300) {
        headerScroll.classList.add('scrolled')
    }
    else {
        headerScroll.classList.remove('scrolled')
    }
}

/***/ }),
/* 2 */
/***/ (function(module, exports) {

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


/***/ }),
/* 3 */
/***/ (function(module, exports) {

const elements = document.querySelectorAll('.animate');
    const options = {
        root: null,
        threshhold: 0.5,
        rootMargin: '0px 0px -10% 0px'
     };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if(!entry.isIntersecting) {
                return;
            }
            entry.target.classList.add('animated');
            observer.unobserve(entry.target)
        })
    }, options)

    elements.forEach(element => observer.observe(element))


/***/ }),
/* 4 */
/***/ (function(module, exports) {

const tabsContainer = document.querySelector('.carOfferTabs'); 

if (tabsContainer !== null) {

    const tabsTitles = document.querySelectorAll('.carOfferHeader > .carOffer--tabTitle');
    const tabs = document.querySelectorAll('.carOffer--tab');

    tabsTitles[0].classList.add('--activeTitle');
    tabs[0].classList.add('--activeTab');

    const tabChange = () => {

        const removeActiveClasses = () => {
            tabsTitles.forEach(tabTitle => {
                tabTitle.classList.remove('--activeTitle');
            });
            tabs.forEach(tab => {
                tab.classList.remove('--activeTab');
            });
        }

        tabsTitles.forEach((tabTitle, tabIndex) => {
            tabTitle.addEventListener('click', () => {
                removeActiveClasses();
                tabTitle.classList.add('--activeTitle');
                tabs[tabIndex].classList.add('--activeTab');
            });
        });
    }

    tabChange();

}

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })
/******/ ]);