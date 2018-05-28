const lineAnimateSpeed = 0.03
let middle
let animation
/**
 * The padding in pixels for determining if in the middle
 */
let mcjagger = 25
/**
 * True or false if the device is a mobile device or smaller than 768px
 * Fallbacks to support all browsers
 */
// let isMobile = 'ontouchstart' in window ||
//               ('onmsgesturechange' in window &&
//                 window.navigator.userAgent.indexOf("Edge") == -1) ||
//               window.innerWidth < 768
/**
 * Set the height of o-animation__scenes so the
 */
let setSceneHeight = () => {
  middle = (window.innerHeight || document.documentElement.clientHeight) - 200
}
/**
 * Will lock and begin the animation once the user is at the center of the div
 * Will unlock when certain conditions are met
 */
let checkCenter = () => {
  if (document.getElementById('j-animationTrigger').getBoundingClientRect().top <= middle) {
    animation.play()
  }
}

let animateLine = (line, animation, sceneNumber) => {
  let delay = line.getAttribute('speed') ? parseFloat(line.getAttribute('speed')) : lineAnimateSpeed
  let elements = line.childNodes
  for (let i = elements.length - 1; i >= 0; i--) {
    animation.append(TweenMax.fromTo(elements[i], delay, { opacity: 0 }, { opacity: 1 }))
  }
}

let benice = true
let setupListeners = () => {
  window.addEventListener('resize', setSceneHeight)
  window.addEventListener('scroll', (e) => {
    if (benice) {
      checkCenter()
      benice = false
    }
    setTimeout(() => {
      benice = true
    }, 500)
  })
}

let gogoGadget = () => {
  let scenes = document.getElementsByClassName('j-scene')
  animation = new TimelineMax()
  // Animate each scene
  for (let i = 0; i < scenes.length; i++) {
    let icon = scenes[i].querySelector('.j-sceneIcon'),
      text = scenes[i].querySelector('.j-sceneText'),
      line = scenes[i].querySelector('.j-sceneLine')
    animation.addLabel('scene' + i)
    animation.append(TweenMax.fromTo(icon, 2, { opacity: 0 }, { opacity: 1 }), 'scene' + i)
    animation.append(TweenMax.fromTo(text, 1, { opacity: 0 }, { opacity: 1 }), 'scene' + i)
    animateLine(line, animation, i)
  }
  // Large circle animation
  animation.append(TweenMax.fromTo(document.getElementById('circle'), 1, { strokeDashoffset: 1000 }, { strokeDashoffset: 0 }))
  animation.pause()
}

let isMobile = () => {
  if (!!window.MSInputMethodContext && !!document.documentMode) { // IE11
    return false;
  }

  return 'ontouchstart' in window ||
  ('onmsgesturechange' in window && window.navigator.userAgent.indexOf("Edge") == -1) ||
  window.innerWidth < 768;
}

let isIE11 = () => {
  return !!window.MSInputMethodContext && !!document.documentMode;
}

let displayAnimation = () => {
  let animationTrigger = document.getElementById('j-animationTrigger');

  if (!animationTrigger) {
    return false;
  }

  if (!isMobile() && !isIE11()) {
    document.getElementById('j-animationTrigger').style.backgroundImage = `url(/wp-content/themes/eversight/public/img/animation.jpg)`
    setSceneHeight()
    gogoGadget()
  } else if (isIE11()) {
    document.getElementById('j-animationTrigger').innerHTML = ''
    document.getElementById('j-animationTrigger').style.backgroundImage = `url(/wp-content/themes/eversight/public/img/animation_ie.jpg?ver=1)`
  } else {
    document.getElementById('j-animationTrigger').innerHTML = ''
    document.getElementById('j-animationTrigger').style.backgroundImage = `url(/wp-content/themes/eversight/public/img/animation_mobile.jpg)`
  }
}

document.addEventListener('DOMContentLoaded', displayAnimation)
window.addEventListener('resize', displayAnimation)
document.addEventListener('DOMContentLoaded', () => {
  if (document.getElementById('j-animationTrigger') && !isMobile()) {
    setupListeners()
  }
})
