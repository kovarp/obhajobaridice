import Swiper, { Navigation } from 'swiper'
import 'swiper/css'

import './Styles.css'

const graphicsCarousel = new Swiper('.graphics-carousel', {
	modules: [Navigation],
	speed: 500,
	loop: true,
	spaceBetween: 20,
	slidesPerView: 4,
	slidesPerGroup: 1,
	navigation: {
		nextEl: '.carousel-button-next',
		prevEl: '.carousel-button-prev'
	}
})
