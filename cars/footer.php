<section class="section section-contacts">
	<div class="contacts">
		<div class="contacts__row row no-gutters">
			<div class="contacts__col col-md-6">
				<div class="contacts__body">
					<h2 class="contacts__title section-title">остались вопросы?</h2>
					<div class="contacts__item-callback item-callback">
						<div class="item-callback__title">Позвоните нам:</div>
						<a href="tel:+4917630408044" class="item-callback__btn-contact btn btn--secondary btn--icon-left btn--contact">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/call.svg" alt="alt" class="btn__icon img-responsive" />
							+49 176 30408044
						</a>
					</div>
					<div class="contacts__text-wrap">
						<p>
							или<br />
							Заполните форму ниже и мы свяжемся с вами в ближайшее время
						</p>
					</div>
					<form class="contacts__form form-contacts js-validate-form">
						<div class="form-contacts__group">
							<input type="text" class="form-contacts__control control" placeholder="Ваше имя" />
						</div>
						<div class="form-contacts__group">
							<input type="text" class="form-contacts__control control js-email" placeholder="Ваш e-mail" />
						</div>
						<div class="form-contacts__group">
							<input type="text" class="form-contacts__control control js-phone" placeholder="Ваш телефон" />
						</div>
						<div class="form-contacts__group">
							<textarea class="form-contacts__control control" placeholder="Текст сообщения"></textarea>
						</div>
						<div class="form-contacts__group">
							<button class="form-contacts__btn btn btn--secondary btn--icon-right" type="submit">
								отправить
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/circle-gray.svg" alt="alt" class="btn__icon img-responsive" />
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="contacts__col col-md-6">
				<div class="contacts__map-wrap">
					<iframe
						class="contacts__map"
						src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac9b761d8cf9a86fbc277c07462b94cab1189414ced6debf35786e2f15075b744&amp;source=constructor"
						loading="lazy"
					></iframe>
				</div>
			</div>
		</div>
	</div>
</section>


<footer class="footer">
    <div class="footer__container container">
        <div class="footer__row">
            <div class="footer__col footer__col--logo">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/dist/logo-green.svg" alt="alt" class="footer__logo img-responsive">
                <div class="footer__info info-footer">
                    <div class="info-footer__item">
                        <div class="info-footer__inner">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/map.svg" alt="alt" class="info-footer__icon img-responsive">
                            Адрес:125373, г. Москва,<br>
                            пр-д Походный, д. 4 к. 1, БЦ "Тушино"
                        </div>
                    </div>
                    <div class="info-footer__item">
                        <div class="info-footer__inner">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/map.svg" alt="alt" class="info-footer__icon img-responsive">
                            График работы:пн-пт: 9.00-19.00
                        </div>
                    </div>
                    <div class="info-footer__item">
                        <a href="#" class="info-footer__inner">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/map.svg" alt="alt" class="info-footer__icon img-responsive">
                            email@mail.ru
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer__col footer__col--menu">
                <div class="footer__menus">
                    <nav class="footer__menu menu-footer">
                        <ul>
                            <li><a href="#">О нас</a></li>
                            <li><a href="catalog.html">каталог</a></li>
                            <li><a href="services.html">Услуги</a></li>
                            <li><a href="#">Цены</a></li>
                            <li><a href="calculator.html">Калькулятор растаможки</a></li>
                            <li><a href="#">Гарантии</a></li>
                        </ul>
                    </nav>
                    <nav class="footer__menu menu-footer">
                        <ul>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Видео</a></li>
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="#">Инфо</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="footer__col footer__col--contacts">
                <div class="footer__contacts">
                    <div class="footer__contact contact-footer">
                        <a href="tel:+4917630408044" class="contact-footer__inner">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/call.svg" alt="alt" class="contact-footer__icon img-responsive">
                            +49 176 30408044
                        </a>
                    </div>
                    <div class="footer__contact contact-footer">
                        <a href="tel:+4917630408044" class="contact-footer__inner">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/call.svg" alt="alt" class="contact-footer__icon img-responsive">
                            +49 176 30408044
                        </a>
                    </div>
                </div>
                <div class="footer__socials">
                    <a href="#" class="footer__social social">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/ig-green.svg" alt="alt" class="social__icon img-responsive">
                    </a>
                    <a href="#" class="footer__social social">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/fb-green.svg" alt="alt" class="social__icon img-responsive">
                    </a>
                    <a href="#" class="footer__social social">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/tg-green.svg" alt="alt" class="social__icon img-responsive">
                    </a>
                    <a href="#" class="footer__social social">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/wa-green.svg" alt="alt" class="social__icon img-responsive">
                    </a>
                </div>
            </div>
        </div>
        <p class="footer__copyright">
            Copyright © 2022 AutoStock Все права защищены.<br>
            <a href="#">Политика конфиденциальности</a>
        </p>
    </div>
</footer>

<script src="<?= SITE_TEMPLATE_PATH ?>/libs/svg4everybody.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/libs/splide/splide.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/libs/slide-element.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/libs/enquire.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/libs/glightbox/glightbox.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/libs/imask.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/libs/just-validate.production.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/libs/choices/choices.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/libs/simplebar/simplebar.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/app.min.js"></script>

</body>
</html>
