// Look ma, no jQuery!
import setupVue from './vue'
import 'normalize.css'
import './assets/css/style.css'
import './assets/js/animation'

setupVue.init()

import heroImage from './assets/js/components/heroImage'
import mobileNav from './assets/js/components/mobileNav'
import modal from './assets/js/components/modal'
import navArrows from './assets/js/components/navArrows'
import tabsOverride from './assets/js/components/tabs'
import testimonials from './assets/js/components/testimonials'
import howItWorksSections from './assets/js/components/howItWorksSections'

jQuery(function() {
  howItWorksSections.init();
});
