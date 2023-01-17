









function scrollTo(id) {
  // Get the element with the specified id
  var element = document.getElementById(id);
  // Scroll to the top of the element
  element.scrollIntoView({ behavior: 'smooth', block: 'start' });
}
