import ThemeOnScroll from '../components/ThemeOnScroll'
// import animatedHeadline from '../autoload/animatedHeadline'
import FronPageText from '../components/FrontPageText'
import SectionPostSlider from '../components/SectionPostSlider'
import SectionClientsSlider from '../components/SectionClientsSlider'
import PostFeaturesSlider from '../components/PostFeaturesSlider'
import PortfolioImageSlider from '../components/PortfolioImageSlider'
import InstagramSlider from '../components/InstagramSlider'
import MenuBarScroll from '../components/MenuBarScroll'
import Parallax from '../components/Parallax'
import Menu from '../components/Menu'
import feather from 'feather-icons';

import 'lazysizes';

export default {
  init() {
    // JavaScript to be fired on all pages

    new ThemeOnScroll;
    new FronPageText;
    new SectionPostSlider;
    new SectionClientsSlider;
    new PostFeaturesSlider;
    new PortfolioImageSlider;
    new InstagramSlider;
    new MenuBarScroll;
    new Menu;
    new Parallax;
    feather.replace();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
