/**
 * Injects SVG icon into nav items that have children
 *
 * @author Evan Agee
 */
let navArrows = () => {
  let navItemsWithChildren = document.querySelectorAll('.site-header__navigation .menu-item-has-children > a')
  let arrow = document.createElement('i')
  arrow.classList.add('fal', 'fa-angle-down', 'fill-black')

  for (let i = 0; i < navItemsWithChildren.length; i++) {
    let arrowClone = arrow.cloneNode()
    navItemsWithChildren[i].appendChild(arrowClone)
  }

  return true
}

document.addEventListener('DOMContentLoaded', navArrows)
