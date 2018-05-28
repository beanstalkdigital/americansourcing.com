/**
 * Handles the show/hide of the mobile nav menu
 *
 * @author EvanAgee
 */

let mobileNav = () => {
  let mobileNavContainer = document.querySelector('.site-header__mobileNav');
  let mobileNavTrigger = mobileNavContainer.querySelector('.site-header__mobileNav__trigger');
  let mobileNav = mobileNavContainer.querySelector('.site-header__mobileNav__menu');

  mobileNavTrigger.addEventListener('click', function() {
    return mobileNavContainer.classList.toggle('-active');
  })
}

document.addEventListener('DOMContentLoaded', mobileNav);
