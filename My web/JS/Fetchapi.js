const API_KEY = 'oA81cTs6tqbOVYHIaW1PuYxHlN79kSnn'
url = 'https://api.giphy.com/v1/gifs/';
const userInput = document.getElementById("search_query")
var index = 0;
//getdata
async function getdata(i) {
  const FULL_url = url + 'search?q=' + userInput.value + '&api_key=' + API_KEY
  const result = await fetch(FULL_url)
    .then(res => res.json())
    .catch(err => console.log(err))
  console.log(result.data[i].images.fixed_height.url)
  return result.data[i].images.fixed_height.url
}
async function gettrending(i) {
  const FULL_url = url + 'trending?api_key=' + API_KEY
  const result = await fetch(FULL_url)
    .then(res => res.json())
    .catch(err => console.log(err))
  image = result.data[i].images.fixed_height.url
  var img = document.createElement("img")
  img.setAttribute('src', image)
  document.body.appendChild(img)
}
//Get more
function getmoredata() {
  index++
  run(index)
}
function getmoretrending() {
  index++
  gettrending(index)
}
//Reset data
function remove() {
  let img = document.getElementsByTagName("img")
  img[img.length - 1].remove()
  index--
}
//set data into .html
async function run(i) {
  const image = await getdata(i)
  var img = document.createElement("img")
  console.log(image)
  img.setAttribute('src', image)
  document.body.appendChild(img)
}