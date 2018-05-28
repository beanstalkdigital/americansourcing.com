/**
 * Handles the insertion of hero images and animating them in after a small delay.
 *
 * @author EvanAgee
 */

import _ from 'lodash'

let heroImage = () => {
  let heroHeader = document.querySelector('#hero-header > div')

  if (_.isUndefined(featuredImage) || _.isEmpty(featuredImage) || _.isNull(heroHeader)) {
    return false
  }

  // Append image to heroHeader
  let image = document.createElement('img')
  image.setAttribute('src', featuredImage.url)
  image.classList.add('hero-image')
  heroHeader.appendChild(image)

  setTimeout(() => {
    image.classList.add('--active')
  }, 1000)

}

document.addEventListener('DOMContentLoaded', heroImage)
