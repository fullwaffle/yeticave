<section class="promo">
            <h2 class="promo__title">Нужен стафф для катки?</h2>
            <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
            <ul class="promo__list">
                <?php foreach ($categories as $key => $category): ?>
                    <li class="promo__item promo__item--<?= htmlspecialchars($key) ?>">
                        <a class="promo__link" href="pages/all-lots.html"><?= htmlspecialchars($category) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="lots">
            <div class="lots__header">
                <h2>Открытые лоты</h2>
            </div>
            <ul class="lots__list">
                <!--заполните этот список из массива с товарами-->
                <?php foreach ($products as $product): ?>
                    <li class="lots__item lot">
                        <div class="lot__image">
                            <img src="<?= $product['url'] ?>" width="350" height="260" alt="<?= htmlspecialchars($product['name']) ?>">
                        </div>
                        <div class="lot__info">
                            <span class="lot__category"><?= htmlspecialchars($product['category']) ?></span>
                            <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= htmlspecialchars($product['name']) ?></a></h3>
                            <div class="lot__state">
                                <div class="lot__rate">
                                    <span class="lot__amount">Стартовая цена</span>
                                    <span class="lot__cost"><?= htmlspecialchars(format_price($product['price'])) ?></span>
                                </div>
                                <?php $res = get_dt_range($product['expiration']) ?>
                                <div class="lot__timer timer <?php if ($res[0] < 1): ?> timer--finishing <?php endif; ?>">
                                    <?= "$res[0]: $res[1]" ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
