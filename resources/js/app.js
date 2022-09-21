require('./bootstrap');

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';

Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();

// import Swiper JS
import Swiper, {Navigation, Pagination} from 'swiper';
// import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);
new Swiper('.swiper', {
  direction: 'horizontal',
  loop: true,
  spaceBetween: 20,
  // Navigation arrows
  navigation: {
    nextEl: '.custom-swiper-button-next',
    prevEl: '.custom-swiper-button-prev',
  },
});

function imageViewer() {
  return {
    imageUrl: '',
    fileChosen(event) {
      this.fileToDataUrl(event, src => this.imageUrl = src)
    },
    fileToDataUrl(event, callback) {
      if (!event.target.files.length) return

      let file = event.target.files[0],
        reader = new FileReader()

      reader.readAsDataURL(file)
      reader.onload = e => callback(e.target.result)
    },
  }
}
