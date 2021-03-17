import ThemeOnScroll from '../components/ThemeOnScroll'
import FronPageText from '../components/FrontPageText'

export default {
  init() {
    // JavaScript to be fired on all pages

    new ThemeOnScroll;
    new FronPageText;
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
