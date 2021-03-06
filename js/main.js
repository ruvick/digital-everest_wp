
const iconMenu = document.querySelector(".burger");
const body = document.querySelector("body");
const menuBody = document.querySelector(".mob-menu");
const menuListItemElems = document.querySelector(".mob-menu__list");
const mobsearch = document.querySelector(".mob-search");
const headsearch = document.querySelector(".header__search");

//BURGER
if (iconMenu) {
	iconMenu.addEventListener("click", function () {
		iconMenu.classList.toggle("active");
		body.classList.toggle("lock");
		menuBody.classList.toggle("active");
	});
}


// Закрытие моб меню при клике на якорную ссылку 
if (menuListItemElems) {
	menuListItemElems.addEventListener("click", function () {
		iconMenu.classList.toggle("burger--close");
		body.classList.toggle("lock");
		menuBody.classList.toggle("active");
	});
}


// Закрытие моб меню при клике вне области меню 
window.addEventListener('click', e => { // при клике в любом месте окна браузера
	const target = e.target // находим элемент, на котором был клик
	if (!target.closest('.burger') && !target.closest('.mob-menu') && !target.closest('.mob-search') && !target.closest('.header__search') && !target.closest('._popup-link') && !target.closest('.popup')) { // если этот элемент или его родительские элементы не окно навигации и не кнопка
		iconMenu.classList.remove('burger--close') // то закрываем окно навигации, удаляя активный класс
		menuBody.classList.remove('active')
		body.classList.remove('lock')
		headsearch.classList.remove('active')
	}
})


// Плавная прокрутка
const smotScrollElems = document.querySelectorAll('a[href^="#"]:not(a[href="#"])');

smotScrollElems.forEach(link => {
	link.addEventListener('click', (event) => {
		event.preventDefault()
		console.log(event);

		const id = link.getAttribute('href').substring(1)
		console.log('id : ', id);

		document.getElementById(id).scrollIntoView({
			behavior: 'smooth'
		});
	})
});


//BodyLock для Popup на JS
function body_lock(delay) {
	let body = document.querySelector("body");
	if (body.classList.contains('lock')) {
		body_lock_remove(delay);
	} else {
		body_lock_add(delay);
	}
}
function body_lock_remove(delay) {
	let body = document.querySelector("body");
	if (unlock) {
		let lock_padding = document.querySelectorAll("._lp");
		setTimeout(() => {
			for (let index = 0; index < lock_padding.length; index++) {
				const el = lock_padding[index];
				el.style.paddingRight = '0px';
			}
			body.style.paddingRight = '0px';
			body.classList.remove("lock");
		}, delay);

		unlock = false;
		setTimeout(function () {
			unlock = true;
		}, delay);
	}
}
function body_lock_add(delay) {
	let body = document.querySelector("body");
	if (unlock) {
		let lock_padding = document.querySelectorAll("._lp");
		for (let index = 0; index < lock_padding.length; index++) {
			const el = lock_padding[index];
			el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		}
		body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		body.classList.add("lock");

		unlock = false;
		setTimeout(function () {
			unlock = true;
		}, delay);
	}
}

// Popup JS
let unlock = true;
let popup_link = document.querySelectorAll('._popup-link');
let popups = document.querySelectorAll('.popup');
for (let index = 0; index < popup_link.length; index++) {
	const el = popup_link[index];
	el.addEventListener('click', function (e) {
		if (unlock) {
			let item = el.getAttribute('href').replace('#', '');
			let video = el.getAttribute('data-video');
			popup_open(item, video);
		}
		e.preventDefault();
	})
}
for (let index = 0; index < popups.length; index++) {
	const popup = popups[index];
	popup.addEventListener("click", function (e) {
		if (!e.target.closest('.popup__body')) {
			popup_close(e.target.closest('.popup'));
		}
	});
}
function popup_open(item, video = '') {
	let activePopup = document.querySelectorAll('.popup._active');
	if (activePopup.length > 0) {
		popup_close('', false);
	}
	let curent_popup = document.querySelector('.popup_' + item);
	if (curent_popup && unlock) {
		if (video != '' && video != null) {
			let popup_video = document.querySelector('.popup_video');
			popup_video.querySelector('.popup__video').innerHTML = '<iframe src="https://www.youtube.com/embed/' + video + '?autoplay=1"  allow="autoplay; encrypted-media" allowfullscreen></iframe>';
		}
		if (!document.querySelector('.menu__body._active')) {
			body_lock_add(500);
		}
		curent_popup.classList.add('_active');
		history.pushState('', '', '#' + item);
	}
}
function popup_close(item, bodyUnlock = true) {
	if (unlock) {
		if (!item) {
			for (let index = 0; index < popups.length; index++) {
				const popup = popups[index];
				let video = popup.querySelector('.popup__video');
				if (video) {
					video.innerHTML = '';
				}
				popup.classList.remove('_active');
			}
		} else {
			let video = item.querySelector('.popup__video');
			if (video) {
				video.innerHTML = '';
			}
			item.classList.remove('_active');
		}
		if (!document.querySelector('.menu__body._active') && bodyUnlock) {
			body_lock_remove(500);
		}
		history.pushState('', '', window.location.href.split('#')[0]);
	}
}
let popup_close_icon = document.querySelectorAll('.popup__close,._popup-close');
if (popup_close_icon) {
	for (let index = 0; index < popup_close_icon.length; index++) {
		const el = popup_close_icon[index];
		el.addEventListener('click', function () {
			popup_close(el.closest('.popup'));
		})
	}
}
document.addEventListener('keydown', function (e) {
	if (e.code === 'Escape') {
		popup_close();
	}
});
// Файлы Java Script End -----------------------------------------------------------------------------------------------------

$ = jQuery;

// Файлы jQuery---------------------------------------------------------------------------------------------------------------

// // Slider на главной
$('.slider-intro-caption').slick({
	arrows: false,
	dots: true,
	infinite: true,
	speed: 2000,
	slidesToShow: 1,
	autoplay: true,
	autoplaySpeed: 1800,
	adaptiveHeight: true,
		responsive: [
		{
			breakpoint: 770,
			settings: {
				dots: false,
			}
		}
	]
});


// Маска телефона
var inputmask_phone = { "mask": "+9(999)999-99-99" };
jQuery("input[type=tel]").inputmask(inputmask_phone);


// Открытие модального окна
$(".popup-quest").on('click', function (e) {
	e.preventDefault();
	jQuery(".windows_form h2").html(jQuery(this).data("winheader"));
	jQuery(".windows_form .subtitle").html(jQuery(this).data("winsubheader"));
	jQuery("#question").arcticmodal();
});


//Валидация + Отправщик
$('.newButton').click(function (e) {

	e.preventDefault();
	const name = $("#form-callback-name").val();
	const tel = $("#form-callback-tel").val();
	const email = $("#form-callback-email").val();

	if (jQuery("#form-callback-tel").val() == "") {
		jQuery("#form-callback-tel").css("border", "1px solid red");
		return;
	}

	// if (jQuery("#sig-inp-e").val() == ""){
	// 	jQuery("#sig-inp-e").css("border","1px solid red");
	// 	return;
	// }

	else {
		var jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'sendphone',
				nonce: allAjax.nonce,
				name: name,
				tel: tel,
				email: email,
			}
		);

		jqXHR.done(function (responce) {
			jQuery(".popup__form-block .headen_form_blk").hide();
			jQuery('.popup__form-block .SendetMsg').show();
		});

		jqXHR.fail(function (responce) {
			alert("Произошла ошибка. Попробуйте позднее.");
		});

	}
});


$('.questbutton').click(function (e) {

	e.preventDefault();
	const tel = $("#form-quest-tel").val();

	if (jQuery("#form-quest-tel").val() == "") {
		jQuery("#form-quest-tel").css("border", "1px solid red");
		return;
	}

	// if (jQuery("#sig-inp-e").val() == ""){
	// 	jQuery("#sig-inp-e").css("border","1px solid red");
	// 	return;
	// }

	else {
		var jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'sendquest',
				nonce: allAjax.nonce,
				tel: tel,
			}
		);

		jqXHR.done(function (responce) {
			jQuery(".feedback-form .headen_form_blk").hide();
			jQuery('.feedback-form .SendetMsg').show();
		});

		jqXHR.fail(function (responce) {
			alert("Произошла ошибка. Попробуйте позднее.");
		});

	}
});