const onClear = event => {
  event.preventDefault()
  const query = document.querySelectorAll('.field')
  query.forEach(field => field.value = '')
}
