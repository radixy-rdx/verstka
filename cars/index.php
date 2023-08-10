<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header");
$_APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
 ?>
<section class="section section-showcase">
	<div class="container">
		<div class="slider-cards slider splide slider-cards--showcase">
			<div class="slider-cards__track slider__track splide__track">
				<div class="slider-cards__list slider__list splide__list">
					<div class="slider-cards__slide slider__slide splide__slide">
						<a href="#" class="card">
							<div class="card__img-wrap">
								<img src="images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
							</div>
							<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
						</a>
					</div>
					<div class="slider-cards__slide slider__slide splide__slide">
						<a href="#" class="card">
							<div class="card__img-wrap">
								<img src="images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
							</div>
							<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
						</a>
					</div>
					<div class="slider-cards__slide slider__slide splide__slide">
						<a href="#" class="card">
							<div class="card__img-wrap">
								<img src="images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
							</div>
							<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
						</a>
					</div>
					<div class="slider-cards__slide slider__slide splide__slide">
						<a href="#" class="card">
							<div class="card__img-wrap">
								<img src="images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
							</div>
							<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
						</a>
					</div>
				</div>
			</div>
			<ul class="slider-cards__pagination slider__pagination splide__pagination"></ul>
		</div>
		<a href="#" class="banner" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/dist/preview-lg.jpg)"></a>
		<div class="main-categories">
			<div class="main-categories__row row">
				<div class="main-categories__col col-md-6">
					<div class="main-categories__item" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/dist/main-category.jpg)">
						<div class="main-categories__title section-title">новые АВТО</div>
						<ul class="main-categories__list">
							<li><a href="#">Легковые</a></li>
							<li><a href="#">Грузовые</a></li>
							<li><a href="#">Жилые</a></li>
						</ul>
					</div>
				</div>
				<div class="main-categories__col col-md-6">
					<div class="main-categories__item" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/dist/main-category.jpg)">
						<div class="main-categories__title section-title">С пробегом</div>
						<ul class="main-categories__list">
							<li><a href="#">Легковые</a></li>
							<li><a href="#">Грузовые</a></li>
							<li><a href="#">Жилые</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-headline">
			<h2 class="section-title">Доставленные авто</h2>
		</div>
		<div class="cards" data-tabs>
			<div class="cards__filters">
				<button class="cards__filter is-active" type="button" data-tabs-btn>С аукциона</button>
				<button class="cards__filter" type="button" data-tabs-btn>По заявкам</button>
			</div>
			<div class="cards__tabs">
				<div class="cards__row row is-active" data-tabs-item>
					<div class="cards__col col-xl-4 col-md-6">
						<div class="cards__card card">
							<a href="#" class="card__img-wrap">
								<img src="images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
							</a>
							<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
							<div class="card__body">
								<div class="card__details">
									<div class="card__detail detail-card">
										<img src="images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										13 085
									</div>
									<div class="card__detail detail-card">
										<img src="images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										2018
									</div>
									<div class="card__detail detail-card">
										<img src="images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										Бензин
									</div>
								</div>
								<div class="card__divider"></div>
								<div class="card__text-wrap">
									<p>Автомобиль в отличном состоянии и с отличной ценой</p>
								</div>
								<a href="#" class="card__btn btn btn--outline-dark btn--icon-left">
									<img src="images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
									подробнее...
								</a>
							</div>
						</div>
					</div>
					<div class="cards__col col-xl-4 col-md-6">
						<div class="cards__card card">
							<a href="#" class="card__img-wrap">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
							</a>
							<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
							<div class="card__body">
								<div class="card__details">
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										13 085
									</div>
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										2018
									</div>
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										Бензин
									</div>
								</div>
								<div class="card__divider"></div>
								<div class="card__text-wrap">
									<p>Автомобиль в отличном состоянии и с отличной ценой</p>
								</div>
								<a href="#" class="card__btn btn btn--outline-dark btn--icon-left">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
									подробнее...
								</a>
							</div>
						</div>
					</div>
					<div class="cards__col col-xl-4 col-md-6">
						<div class="cards__card card">
							<a href="#" class="card__img-wrap">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
							</a>
							<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
							<div class="card__body">
								<div class="card__details">
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										13 085
									</div>
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										2018
									</div>
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										Бензин
									</div>
								</div>
								<div class="card__divider"></div>
								<div class="card__text-wrap">
									<p>Автомобиль в отличном состоянии и с отличной ценой</p>
								</div>
								<a href="#" class="card__btn btn btn--outline-dark btn--icon-left">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
									подробнее...
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="cards__row row" data-tabs-item>
					<div class="cards__col col-xl-4 col-md-6">
						<div class="cards__card card">
							<a href="#" class="card__img-wrap">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
							</a>
							<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
							<div class="card__body">
								<div class="card__details">
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										13 085
									</div>
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										2018
									</div>
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										Бензин
									</div>
								</div>
								<div class="card__divider"></div>
								<div class="card__text-wrap">
									<p>Автомобиль в отличном состоянии и с отличной ценой</p>
								</div>
								<a href="#" class="card__btn btn btn--outline-dark btn--icon-left">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
									подробнее...
								</a>
							</div>
						</div>
					</div>
					<div class="cards__col col-xl-4 col-md-6">
						<div class="cards__card card">
							<a href="#" class="card__img-wrap">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
							</a>
							<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
							<div class="card__body">
								<div class="card__details">
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										13 085
									</div>
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										2018
									</div>
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										Бензин
									</div>
								</div>
								<div class="card__divider"></div>
								<div class="card__text-wrap">
									<p>Автомобиль в отличном состоянии и с отличной ценой</p>
								</div>
								<a href="#" class="card__btn btn btn--outline-dark btn--icon-left">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
									подробнее...
								</a>
							</div>
						</div>
					</div>
					<div class="cards__col col-xl-4 col-md-6">
						<div class="cards__card card">
							<a href="#" class="card__img-wrap">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
							</a>
							<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
							<div class="card__body">
								<div class="card__details">
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										13 085
									</div>
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										2018
									</div>
									<div class="card__detail detail-card">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
										Бензин
									</div>
								</div>
								<div class="card__divider"></div>
								<div class="card__text-wrap">
									<p>Автомобиль в отличном состоянии и с отличной ценой</p>
								</div>
								<a href="#" class="card__btn btn btn--outline-dark btn--icon-left">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
									подробнее...
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cards__btn-wrap">
				<a href="#" class="cards__btn btn btn--accent btn--icon-left">
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
					оставить заявку на подбор авто
				</a>
			</div>
		</div>
	</div>
</section>

<section class="section section-services-gallery">
	<div class="container">
		<div class="section-headline">
			<h2 class="section-title">услуги</h2>
		</div>
		<div class="services-gallery">
			<div class="services-gallery__row row">
				<div class="services-gallery__col col-md-9">
					<div class="services-gallery__row row">
						<div class="services-gallery__col col-md-4 col-6">
							<a href="#" class="services-gallery__item hover hover--overlay hover--pattern">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="services-gallery__img img-responsive" />
							</a>
						</div>
						<div class="services-gallery__col col-md-4 col-6">
							<a href="#" class="services-gallery__item hover hover--overlay hover--pattern">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="services-gallery__img img-responsive" />
							</a>
						</div>
						<div class="services-gallery__col col-md-4 col-6">
							<a href="#" class="services-gallery__item hover hover--overlay hover--pattern">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="services-gallery__img img-responsive" />
							</a>
						</div>
						<div class="services-gallery__col col-md-4 col-6">
							<a href="#" class="services-gallery__item hover hover--overlay hover--pattern">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="services-gallery__img img-responsive" />
							</a>
						</div>
						<div class="services-gallery__col col-md-4 col-6">
							<a href="#" class="services-gallery__item hover hover--overlay hover--pattern">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="services-gallery__img img-responsive" />
							</a>
						</div>
						<div class="services-gallery__col col-md-4 col-6">
							<a href="#" class="services-gallery__item hover hover--overlay hover--pattern">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="services-gallery__img img-responsive" />
							</a>
						</div>
					</div>
				</div>
				<div class="services-gallery__col col-md-3">
					<a href="#" class="services-gallery__item services-gallery__item--fullheight hover hover--overlay hover--pattern">
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="services-gallery__img img-responsive" />
					</a>
				</div>
			</div>
		</div>
		<div class="callback">
			<div class="callback__row row">
				<div class="callback__col callback__col--title">
					<h2 class="callback__title section-title">остались вопросы?</h2>
				</div>
				<div class="callback__col callback__col--body">
					<div class="callback__items">
						<div class="callback__item item-callback">
							<div class="item-callback__title">Позвоните нам:</div>
							<a href="tel:+4917630408044" class="item-callback__btn-contact btn btn--secondary btn--icon-left btn--contact">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/call.svg" alt="alt" class="btn__icon img-responsive" />
								+49 176 30408044
							</a>
						</div>
						<div class="callback__item item-callback">
							<div class="item-callback__title">или напишите:</div>
							<a href="#" class="item-callback__btn btn btn--secondary btn--icon-right">
								бесплатная консультация
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-headline">
			<h2 class="section-title">Новости</h2>
		</div>
		<div class="cards">
			<div class="cards__row row">
				<div class="cards__col col-lg-4 col-sm-6">
					<a href="#" class="cards__card card">
						<div class="card__img-wrap hover hover--overlay hover--pattern">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
						</div>
						<div class="card__body">
							<div class="card__text-wrap">
								<p>Автомобиль в отличном состоянии и с отличной ценой</p>
							</div>
						</div>
					</a>
				</div>
				<div class="cards__col col-lg-4 col-sm-6">
					<a href="#" class="cards__card card">
						<div class="card__img-wrap hover hover--overlay hover--pattern">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
						</div>
						<div class="card__body">
							<div class="card__text-wrap">
								<p>Автомобиль в отличном состоянии и с отличной ценой</p>
							</div>
						</div>
					</a>
				</div>
				<div class="cards__col col-lg-4 col-sm-6">
					<a href="#" class="cards__card card">
						<div class="card__img-wrap hover hover--overlay hover--pattern">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
						</div>
						<div class="card__body">
							<div class="card__text-wrap">
								<p>Автомобиль в отличном состоянии и с отличной ценой</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="cards__btn-wrap">
				<a href="#" class="cards__btn btn btn--accent btn--icon-right">
					смотреть все новости
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
				</a>
			</div>
		</div>
	</div>
</section>

<section class="section section-brands">
	<div class="container">
		<div class="cards-double">
			<div class="cards-double__row row">
				<div class="cards-double__col col-lg-6">
					<a href="#" class="cards-double__card card-double">
						<div class="card-double__media">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/brand.svg" alt="alt" class="card-double__logo card-double__logo--left img-responsive" />
							<img src="images/dist/brand.svg" alt="alt" class="card-double__logo card-double__logo--right img-responsive" />
							<div class="card-double__img-wrap">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card-double__img img-responsive" />
							</div>
							<div class="card-double__img-wrap">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card-double__img img-responsive" />
							</div>
						</div>
						<div class="card-double__info">
							<div class="card-double__title">MERCEDES-BENZ KLASA E 200</div>
							<div class="card-double__price">2 524 584 р.</div>
						</div>
					</a>
				</div>
				<div class="cards-double__col col-lg-6">
					<a href="#" class="cards-double__card card-double">
						<div class="card-double__media">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/brand.svg" alt="alt" class="card-double__logo card-double__logo--left img-responsive" />
							<img src="images/dist/brand.svg" alt="alt" class="card-double__logo card-double__logo--right img-responsive" />
							<div class="card-double__img-wrap">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card-double__img img-responsive" />
							</div>
							<div class="card-double__img-wrap">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card-double__img img-responsive" />
							</div>
						</div>
						<div class="card-double__info">
							<div class="card-double__title">MERCEDES-BENZ KLASA E 200</div>
							<div class="card-double__price">2 524 584 р.</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="brands">
			<div class="brands__items">
				<div class="brands__item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/brand.svg" alt="alt" class="brands__img img-responsive" />
				</div>
				<div class="brands__item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/brand.svg" alt="alt" class="brands__img img-responsive" />
				</div>
				<div class="brands__item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/brand.svg" alt="alt" class="brands__img img-responsive" />
				</div>
				<div class="brands__item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/brand.svg" alt="alt" class="brands__img img-responsive" />
				</div>
				<div class="brands__item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/brand.svg" alt="alt" class="brands__img img-responsive" />
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-headline">
			<h2 class="section-title">Отзывы</h2>
		</div>
		<div class="reviews">
			<div class="reviews__row row">
				<div class="reviews__col col-xl-6 col-lg-5">
					<div class="reviews__video video">
						<a href="https://www.youtube.com/watch?v=KJwYBJMSbPI" class="video__inner glightbox" data-gallery="reviews-video">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/video-preview.jpg" alt="alt" class="video__img img-responsive" />
							<span class="video__play">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/play.svg" alt="alt" class="img-responsive" />
							</span>
						</a>
					</div>
				</div>
				<div class="reviews__col col-xl-6 col-lg-7">
					<div class="reviews__items">
						<div class="reviews__item review">
							<a href="#" class="review__img-wrap hover hover--overlay hover--pattern">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="review__img img-responsive" />
							</a>
							<div class="review__body">
								<div class="review__title">
									<a href="#"
										>История о покупке VW Passat в<br />
										Германии</a
									>
								</div>
								<div class="review__text-wrap">
									<p>Меня зовут Артем и я счастливый клиент Destacar!В октябре 2017 года, я купил VW Passat 2014 года в Германии с помощью Destacar и импортировал его в Украину.</p>
								</div>
								<a href="#" class="review__link">подробнее...</a>
							</div>
						</div>
						<div class="reviews__item review">
							<a href="#" class="review__img-wrap hover hover--overlay hover--pattern">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="review__img img-responsive" />
							</a>
							<div class="review__body">
								<div class="review__title">
									<a href="#"
										>История о покупке VW Passat в<br />
										Германии</a
									>
								</div>
								<div class="review__text-wrap">
									<p>Меня зовут Артем и я счастливый клиент Destacar!В октябре 2017 года, я купил VW Passat 2014 года в Германии с помощью Destacar и импортировал его в Украину.</p>
								</div>
								<a href="#" class="review__link">подробнее...</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="reviews__btn-wrap">
				<a href="#" class="reviews__btn btn btn--accent btn--icon-right">
					смотреть все отзывы
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
				</a>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="faq">
			<div class="faq__row row">
				<div class="faq__col col-lg-4">
					<div class="faq__completed-orders completed-orders">
						<div class="completed-orders__title">Выполненные заказы</div>
						<div class="completed-orders__value">
							<span>4</span>
							<span>4</span>
							<span>4</span>
							<span>4</span>
						</div>
					</div>
					<div class="faq__slider-sells slider-sells slider splide">
						<h2 class="slider-sells__title">последние купленные авто</h2>
						<div class="slider-sells__track slider__track splide__track">
							<div class="slider-sells__list slider__list splide__list">
								<div class="slider-sells__slide slider__slide splide__slide">
									<a href="#" class="card">
										<div class="card__img-wrap">
											<div class="card__date">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/calendar.svg" alt="alt" class="img-responsive" />
												24.25.2022
											</div>
											<img src="images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
										</div>
										<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
										<div class="card__body">
											<div class="card__details">
												<div class="card__detail detail-card">
													<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
													13 085
												</div>
												<div class="card__detail detail-card">
													<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
													2018
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="slider-sells__slide slider__slide splide__slide">
									<a href="#" class="card">
										<div class="card__img-wrap">
											<div class="card__date">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/calendar.svg" alt="alt" class="img-responsive" />
												24.25.2022
											</div>
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
										</div>
										<div class="card__title">MERCEDES-BENZ KLASA E 200</div>
										<div class="card__body">
											<div class="card__details">
												<div class="card__detail detail-card">
													<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
													13 085
												</div>
												<div class="card__detail detail-card">
													<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="detail-card__icon img-responsive" />
													2018
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
						<ul class="slider-sells__pagination slider__pagination splide__pagination"></ul>
					</div>
				</div>
				<div class="faq__col col-lg-8">
					<div class="faq__body">
						<div class="section-headline">
							<h2 class="section-title">вопрос-ответ</h2>
						</div>
						<div class="faq__accordions accordions">
							<div class="accordions__item accordion" data-accordion>
								<div class="accordion__btn" data-accordion-btn>
									<div class="accordion__title">История о покупке VW Passat в Германии</div>
									<div class="accordion__plus"></div>
								</div>
								<div class="accordion__body" data-accordion-body>
									<div class="accordion__text-wrap">
										<p>
											Меня зовут Артем и я счастливый клиент Destacar!В октябре 2017 года, я купил VW Passat 2014 года в Германии с помощью Destacar и импортировал его в Украину.
										</p>
									</div>
								</div>
							</div>
							<div class="accordions__item accordion" data-accordion>
								<div class="accordion__btn" data-accordion-btn>
									<div class="accordion__title">История о покупке VW Passat в Германии</div>
									<div class="accordion__plus"></div>
								</div>
								<div class="accordion__body" data-accordion-body>
									<div class="accordion__text-wrap">
										<p>
											Меня зовут Артем и я счастливый клиент Destacar!В октябре 2017 года, я купил VW Passat 2014 года в Германии с помощью Destacar и импортировал его в Украину.
										</p>
									</div>
								</div>
							</div>
							<div class="accordions__item accordion" data-accordion>
								<div class="accordion__btn" data-accordion-btn>
									<div class="accordion__title">История о покупке VW Passat в Германии</div>
									<div class="accordion__plus"></div>
								</div>
								<div class="accordion__body" data-accordion-body>
									<div class="accordion__text-wrap">
										<p>
											Меня зовут Артем и я счастливый клиент Destacar!В октябре 2017 года, я купил VW Passat 2014 года в Германии с помощью Destacar и импортировал его в Украину.
										</p>
									</div>
								</div>
							</div>
							<div class="accordions__item accordion" data-accordion>
								<div class="accordion__btn" data-accordion-btn>
									<div class="accordion__title">История о покупке VW Passat в Германии</div>
									<div class="accordion__plus"></div>
								</div>
								<div class="accordion__body" data-accordion-body>
									<div class="accordion__text-wrap">
										<p>
											Меня зовут Артем и я счастливый клиент Destacar!В октябре 2017 года, я купил VW Passat 2014 года в Германии с помощью Destacar и импортировал его в Украину.
										</p>
									</div>
								</div>
							</div>
							<div class="accordions__item accordion" data-accordion>
								<div class="accordion__btn" data-accordion-btn>
									<div class="accordion__title">История о покупке VW Passat в Германии</div>
									<div class="accordion__plus"></div>
								</div>
								<div class="accordion__body" data-accordion-body>
									<div class="accordion__text-wrap">
										<p>
											Меня зовут Артем и я счастливый клиент Destacar!В октябре 2017 года, я купил VW Passat 2014 года в Германии с помощью Destacar и импортировал его в Украину.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="faq__btn-wrap">
							<a href="#" class="faq__btn btn btn--accent btn--icon-right">
								смотреть все вопросы
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="benefits">
			<div class="benefits__row row">
				<div class="benefits__col col-lg-6">
					<div class="benefits__img-wrap">
						<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/main-category.jpg" alt="alt" class="benefits__img img-responsive" />
					</div>
				</div>
				<div class="benefits__col col-lg-6">
					<div class="benefits__body">
						<div class="section-headline">
							<h2 class="section-title">Преимущества работы с нами</h2>
						</div>
						<div class="benefits__items">
							<div class="benefits__item item-benefits">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="item-benefits__icon img-responsive" />
								<div class="item-benefits__body">
									<div class="item-benefits__title">Проверка по базам</div>
									<div class="item-benefits__text">Используем актуальные базы данных ГИБДД и банков</div>
								</div>
							</div>
							<div class="benefits__item item-benefits">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="item-benefits__icon img-responsive" />
								<div class="item-benefits__body">
									<div class="item-benefits__title">Проверка по базам</div>
									<div class="item-benefits__text">Используем актуальные базы данных ГИБДД и банков</div>
								</div>
							</div>
							<div class="benefits__item item-benefits">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="item-benefits__icon img-responsive" />
								<div class="item-benefits__body">
									<div class="item-benefits__title">Проверка по базам</div>
									<div class="item-benefits__text">Используем актуальные базы данных ГИБДД и банков</div>
								</div>
							</div>
							<div class="benefits__item item-benefits">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="item-benefits__icon img-responsive" />
								<div class="item-benefits__body">
									<div class="item-benefits__title">Проверка по базам</div>
									<div class="item-benefits__text">Используем актуальные базы данных ГИБДД и банков</div>
								</div>
							</div>
							<div class="benefits__item item-benefits">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="item-benefits__icon img-responsive" />
								<div class="item-benefits__body">
									<div class="item-benefits__title">Проверка по базам</div>
									<div class="item-benefits__text">Используем актуальные базы данных ГИБДД и банков</div>
								</div>
							</div>
							<div class="benefits__item item-benefits">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-dark-blue.svg" alt="alt" class="item-benefits__icon img-responsive" />
								<div class="item-benefits__body">
									<div class="item-benefits__title">Проверка по базам</div>
									<div class="item-benefits__text">Используем актуальные базы данных ГИБДД и банков</div>
								</div>
							</div>
						</div>
						<div class="benefits__btn-wrap">
							<a href="#" class="benefits__btn btn btn--accent btn--icon-right">
								оставить заявку на подбор автомобиля
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section-video">
	<div class="container">
		<div class="video">
			<a href="https://www.youtube.com/watch?v=KJwYBJMSbPI" class="video__inner glightbox" data-gallery="single-video">
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/video-preview.jpg" alt="alt" class="video__img img-responsive" />
				<span class="video__play">
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/play.svg" alt="alt" class="img-responsive" />
				</span>
			</a>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-headline">
			<h2 class="section-title">статьи</h2>
		</div>
		<div class="cards">
			<div class="cards__row row">
				<div class="cards__col col-lg-4 col-sm-6">
					<a href="#" class="cards__card card">
						<div class="card__img-wrap hover hover--overlay hover--pattern">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
						</div>
						<div class="card__body">
							<div class="card__text-wrap">
								<p>Автомобиль в отличном состоянии и с отличной ценой</p>
							</div>
						</div>
					</a>
				</div>
				<div class="cards__col col-lg-4 col-sm-6">
					<a href="#" class="cards__card card">
						<div class="card__img-wrap hover hover--overlay hover--pattern">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
						</div>
						<div class="card__body">
							<div class="card__text-wrap">
								<p>Автомобиль в отличном состоянии и с отличной ценой</p>
							</div>
						</div>
					</a>
				</div>
				<div class="cards__col col-lg-4 col-sm-6">
					<a href="#" class="cards__card card">
						<div class="card__img-wrap hover hover--overlay hover--pattern">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/card.jpg" alt="alt" class="card__img img-responsive" />
						</div>
						<div class="card__body">
							<div class="card__text-wrap">
								<p>Автомобиль в отличном состоянии и с отличной ценой</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="cards__btn-wrap">
				<a href="#" class="cards__btn btn btn--accent btn--icon-right">
					смотреть все статьи
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
				</a>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-headline">
			<h2 class="title-lg">Самостоятельное приобретение: оправдан ли риск</h2>
		</div>
		<div class="content">
			<p>
				Если Вы желаете купить авто бу в Германии самостоятельно, задумайтесь о возможных последствиях столь опрометчивого шага. Даже в столь развитой стране встречаются «черные овцы»
				(«Schwarze Schafen») – недобросовестные продавцы, желающие продать угнанную, находящуюся под арестом либо машину без документов, со скрытыми дефектами, а может просто не вернут Вам НДС
				после вывоза авто. Чтобы не попасться на таких, не чистых на руку, автодилеров, советуем обратиться в проверенную компанию-посредника.
				<br /><br />
				Также Вам не нужно беспокоиться о самостоятельном осмотре автомобиля, месте проведения его технического осмотра, правильности оформления сделки и прочих нюансов. Мы все берем на себя!
				<br /><br />
				Остались еще вопросы о том, как купить машину в Германии? Свяжитесь с нами, и вопрос будет решен!
			</p>
		</div>
	</div>
</section>

<?require($_SERVER[DOCUMENT_ROOT]."/bitrix/footer.php"); ?>