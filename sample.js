// Top画像で使う関数//
const picArray = [
  {src: '../../../../wp-content/themes/My-Theme/images/Top.jpeg', title: 'NORWEGIAN NATURE'},
  {src: '../../../../wp-content/themes/My-Theme/images/Bergen.jpeg', title: 'BERGEN'},
  {src: '../../../../wp-content/themes/My-Theme/images/Oslo.jpeg', title: 'OSLO'},
  {src: '../../../../wp-content/themes/My-Theme/images/Stavanger.jpeg', title: 'STAVANGER'}
];

let counter = 0;

function changePicture() {
  if (counter < picArray.length) {
    document.getElementById('pics').src = picArray[counter].src;
    document.getElementById('pic-title').innerHTML = picArray[counter].title;
    counter++;
  } else {
    document.getElementById('pics').src = picArray[0].src;
    document.getElementById('pic-title').innerHTML = picArray[0].title;
    counter = 1;
  } 
}

setInterval(changePicture, 5000);
// Top画像で使う関数//
