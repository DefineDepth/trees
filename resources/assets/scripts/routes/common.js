import ThemeOnScroll from '../components/ThemeOnScroll'
// import animatedHeadline from '../autoload/animatedHeadline'
import FronPageText from '../components/FrontPageText'
import SectionSlider from '../components/SectionSlider'
import feather from 'feather-icons';

export default {
  init() {
    // JavaScript to be fired on all pages

    new ThemeOnScroll;
    new FronPageText;
    new SectionSlider;
    feather.replace();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
