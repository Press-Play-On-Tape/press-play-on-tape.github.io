	<div id="footer">
		<p class="copyright">Copyright &copy; 2021 | <a href="https://webmail.syra.com.au">Web Mail</a></p>
		<p class="copyright" style="text-align: right; width: 614px; margin:0 px;""></p>
	</div>
</div>
</body>
<script>

// const mobileNavbar = document.querySelector(".mobile-navbar");
const desktopNavbar = document.querySelector(".desktop-navbar");
const stickyDesktop = desktopNavbar.offsetTop;
// const stickyMobile = mobileNavbar.offsetTop;

window.onscroll = function () {
    stickyNav()
};
function stickyNav() {
    if (window.pageYOffset >= stickyDesktop || window.pageYOffset >= stickyMobile) {
        desktopNavbar.classList.add("sticky");
        mobileNavbar.classList.add("sticky");
    }
    else {
        desktopNavbar.classList.remove("sticky");
        mobileNavbar.classList.remove("sticky");
    }
}

// ---------------------------------------- DESKTOP NAVBAR
document.addEventListener('click', e => {
	
    const isDropdownButton = e.target.matches("[data-dropdown-button]")
    if (!isDropdownButton && e.target.closest('[data-dropdown]') != null) return

    let currentDropdown;
    if (isDropdownButton) {
        currentDropdown = e.target.closest('[data-dropdown]')
        currentDropdown.classList.toggle('active')
    }

    document.querySelectorAll('[data-dropdown].active').forEach(dropdown => {
        if (dropdown === currentDropdown) return
        dropdown.classList.remove('active')
    })
})
</script>
</html>