/* eslint-disable */
// import external dependencies
// import 'jquery';

// Import everything from autoload
// import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
// import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
export const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  // aboutUs,
});

// Load Events
window.addEventListener('load', function () {
  common.containerInit();
  routes.loadEvents();
});
