const aprobar__1 = document.getElementById("aprobar__1"),
      icon__1 = document.querySelector(".bx");

icon__1.addEventListener("click", e => {
    if (aprobar__1.type === "password") {
        aprobar__1.type = "text";
        icon__1.classList.remove('bx-show-alt')
        icon__1.classList.add('bx-hide')
    } else {
        aprobar__1.type = "password"
        icon__1.classList.add('bx-show-alt')
        icon__1.classList.remove('bx-hide')
    }
})

const aprobar__2 = document.getElementById("aprobar__2"),
      icon__2 = document.querySelector(".bx");

icon__2.addEventListener("click", e => {
    if (aprobar__2.type === "password") {
        aprobar__2.type = "text";
        icon__2.classList.remove('bx-show-alt')
        icon__2.classList.add('bx-hide')
    } else {
        aprobar__2.type = "password"
        icon__2.classList.add('bx-show-alt')
        icon__2.classList.remove('bx-hide')
    }
})

const aprobar__3 = document.getElementById("aprobar__3"),
      icon__3 = document.querySelector(".bx");

icon__1.addEventListener("click", e => {
    if (aprobar__3.type === "password") {
        aprobar__3.type = "text";
        icon__3.classList.remove('bx-show-alt')
        icon__3.classList.add('bx-hide')
    } else {
        aprobar__3.type = "password"
        icon__3.classList.add('bx-show-alt')
        icon__3.classList.remove('bx-hide')
    }
})