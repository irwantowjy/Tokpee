function openCity(evt, cityName) {
    [...document.getElementsByClassName("tabcontent")].forEach(tabcontent => {
        tabcontent.style.display = "none"
    });
    [...document.getElementsByClassName("tablinks")].forEach(tablink => {
        tablink.classList.remove('active')
    });
    document.getElementById(cityName).style.display = "block"
    evt.currentTarget.classList.add("active")
}

function colorChanges(evt, cityName) {
    [...document.getElementsByClassName("tabcontents")].forEach(tabcontent => {
        tabcontent.style.display = "none"
    });
    [...document.getElementsByClassName("tablink")].forEach(tablink => {
        tablink.classList.remove('active')
    });
    document.getElementById(cityName).style.display = "block"
    evt.currentTarget.classList.add("active")
}

// const countDown = new Date("Jul 6, 2020 23:59:59").getTime()

// const x = setInterval(() => {
//     const now = new Date().getTime()
//     const distance = countDown - now
//     const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
//     const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
//     const seconds = Math.floor((distance % (1000 * 60)) / 1000)

//     document.getElementById("timer-1").innerHTML = hours > 9 ? hours : "0" + hours
//     document.getElementById("timer-2").innerHTML = minutes > 9 ? minutes : "0" + minutes
//     document.getElementById("timer-3").innerHTML = seconds > 9 ? seconds : "0" + seconds
//     if (distance < 0) {
//         clearInterval(x);
//         document.getElementById("timer-countdown").innerHTML = " EXPIRED"
//     }
// }, 1000);

function myFunction() {
    var dots = document.getElementById("dots")
    var moreText = document.getElementById("more")
    var btnText = document.getElementById("myBtn")

    if (dots.style.display === "none") {
        dots.style.display = "inline"
        btnText.innerHTML = "Selengkapnya..."
        moreText.style.display = "none"
    } else {
        dots.style.display = "none"
        btnText.innerHTML = "Singkatnya..."
        moreText.style.display = "inline"
    }
}

const openMore = () => {
    const dotss = document.getElementById("dots1")
    const moreTexts = document.getElementById("more1")
    const btnTexts = document.getElementById("view")
    const setTrue = document.querySelector("#navbarDropdown")

    if (dotss.style.display === "none") {
        dotss.style.display = "inline"
        btnTexts.innerHTML = "View All"
        moreTexts.style.display = "none"
    } else {
        dotss.style.display = "none"
        btnTexts.innerHTML = "View Less"
        moreTexts.style.display = "inline"
    }
    setTrue.dispatchEvent(new Event('click'))

    $('.dropdown-menu li').each(function() {
        $('li.notification-box.boxes').show()
    });

}

$('.dismiss-button').on("click", function(event) {
    $(this).parents("li.notification-box").remove()
    $('ul.dropdown-menu.boxes').css("display", "block")
    $('.dropdown-menu.boxes').show()
    const test = $('li.notification-box').length
    $('span#valueKeranjang').text(`Keranjang (${test})`)
    if ($('li.notification-box').length == 0) removeAll()
    else if ($('li.notification-box').length == 3) openMore()
});

const removeAll = () => {
    $('ul.dropdown-menu.boxes').css("display", "block")
    $('.dropdown-menu.boxes').show()
    $(".dropdown-menu.boxes").css("height", "350px")
    $(".dropdown-menu.boxes").html(`
    <div class="d-flex flex-column justify-content-center align-items-center mt-3">
      <img src="https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/zeus/production/103cf4bc.jpg" width="200" height="150">
      <p class="mt-2" style="font-family:'open-sans'; font-weight: bold; font-size: 14pt;">Wah, keranjang belanjamu kosong</p>
      <p class="text-center" style="font-size: 11pt;">Daripada dianggurin, mending isi dengan barang-barang impianmu. Yuk, cek sekarang!</p>
      <a type="button" id="belanja" class="btn" href="#ppp-1" style="background-color: orange; color: white; ">Mulai Belanja</a>
    </div>
  `)
    $('a#belanja').click(() => {
        $('.dropdown-menu.boxes').css("display", "none")
    })
}
const $dropdown = $(".dropdown")
const $dropdownToggle = $(".dropdown-toggle")
const $dropdownMenu = $(".dropdown-menu")
const showClass = "show"

$(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
        $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass)
                $this.find($dropdownToggle).attr("aria-expanded", "true")
                $this.find($dropdownMenu).addClass(showClass)
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass)
                $this.find($dropdownToggle).attr("aria-expanded", "false")
                $this.find($dropdownMenu).removeClass(showClass)
            }
        )
    } else {
        $dropdown.off("mouseenter mouseleave")
    }
})

