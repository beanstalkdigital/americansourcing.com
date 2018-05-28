/**
 * Overrides the default Visual Composer tab functionality (a little) by removing the accordion functionality on mobile.
 *
 * @author EvanAgee
 */

let tabsOverride = () => {
  let tabContainers = document.querySelectorAll('.vce-classic-tabs')

  for (let i = 0; i < tabContainers.length; i++) {
    tabContainers[i].setAttribute('data-vcv-tabs-state', 'tabs')
  }
}

document.addEventListener('DOMContentLoaded', tabsOverride)
