document.addEventListener('DOMContentLoaded', () => {
    const offcanvasMenu = document.getElementById('offcanvas-menu')

    document.querySelectorAll('.js-menu-toggle').forEach((toggler) => {
        toggler.addEventListener('click', (e) => {
            e.preventDefault()

            document.body.classList.toggle('overflow-hidden')
            offcanvasMenu.classList.toggle('hidden')
        })
    })

    document.querySelectorAll('#offcanvas-menu nav a').forEach((link) => {
        link.addEventListener('click', (e) => {
            document.body.classList.remove('overflow-hidden')
            offcanvasMenu.classList.add('hidden')
        })
    })
})