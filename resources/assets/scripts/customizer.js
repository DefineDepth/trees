// import $ from 'jquery';

// wp.customize('blogname', (value) => {
//   value.bind(to => $('.brand').text(to));
// });

wp.customize('blogname', (value) => {
  value.bind(to => document.querySelector('.brand').innerHTML =  to);
});
