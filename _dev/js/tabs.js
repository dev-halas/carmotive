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