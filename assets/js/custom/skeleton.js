const cardImage = document.querySelectorAll('.card-image')
const cardTitle = document.querySelectorAll('.card-title')
const cardDesc = document.querySelectorAll('.card-description')

const renderCard = () => {
    for (let i = 0; i < cardImage.length; i++) {
        cardTitle[i].textContent = 'Iphone Xr'
        cardDesc[i].textContent = '143rb produk'
        const img = new Image()
        img.classList.add("img-for-skeleton")
        img.setAttribute('alt', 'image')
        img.setAttribute('src', 'https://ecs7.tokopedia.net/img/cache/200-square/product-1/2019/9/18/563361625/563361625_f15acbfd-97f1-4503-bcdf-3b53ec306d64_700_700.jpg.webp')
        cardImage[i].appendChild(img)
        cardTitle[i].classList.remove('loading')
        cardDesc[i].classList.remove('loading')
        cardImage[i].classList.remove('loading')
    }
};

const renderskeleton = () => {
    for (let i = 0; i < cardImage.length; i++) {
        cardTitle[i].textContent = ''
        cardDesc[i].textContent = ''
        const img = document.querySelector(".img-for-skeleton")
        if (img) img.remove()
        cardTitle[i].classList.add('loading')
        cardDesc[i].classList.add('loading')
        cardImage[i].classList.add('loading')
    }
}

const renderMostRecentSearches = () => {
    renderskeleton()
    setTimeout(() => {
        renderCard()
    }, 3000);
}

renderMostRecentSearches()

document.querySelector('#muat-ulang').addEventListener("click", () => {
    renderMostRecentSearches()
})