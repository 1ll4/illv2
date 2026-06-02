<main>
    <div class="banner" style="background-image: url('<?='assets//images//news//' . $lastNews['image']; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="info">
            <h1 class="info_title"><?= htmlspecialchars($lastNews['title']) ?></h1>
            <p class="info_subtitle"><?= strip_tags($lastNews['announce']) ?></p>
        </div>
    </div>
    <h1 class="title">Новости</h1>
    <div class="news">
        <?php foreach ($news as $item) : ?>
            <div class="news_item">
                <div class="news_date">
                    <?= date('d.m.Y', strtotime($item['date'])); ?>
                </div>
                <div class="news_title">
                    <?= htmlspecialchars($item['title']); ?>
                </div>
                <div class="news_announce">
                    <?= strip_tags($item['announce']); ?>
                </div>
                <div class="news_btn">
                    <button onclick="location.href='/news?id=<?= $item['id'] ?>'">Подробнее
                        <svg width="26" height="15" viewBox="0 0 26 15" class="arrow_icon" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.707 8.07106C26.0975 7.68054 26.0975 7.04737 25.707 6.65685L19.343 0.292887C18.9525 -0.0976379 18.3193 -0.097638 17.9288 0.292886C17.5383 0.683411 17.5383 1.31658 17.9288 1.7071L23.5857 7.36395L17.9288 13.0208C17.5383 13.4113 17.5383 14.0445 17.9288 14.435C18.3193 14.8255 18.9525 14.8255 19.343 14.435L25.707 8.07106ZM-8.74228e-08 8.36395L24.9999 8.36395L24.9999 6.36395L8.74228e-08 6.36395L-8.74228e-08 8.36395Z" fill="#841844"/>
                        </svg>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="pagination">
            <?php for ($page = 1; $page <= $pageCount; $page++) : ?>
                <div>
                    <button onclick="location.href='/page?id=<?= $page ?>'" <?= $page == $currentPage ? "class=\"btn_page pagination_active\"" : "class=\"btn_page\"" ?>><?= $page ?></button>
                </div>
            <?php endfor; ?>
            <div class="">
                <?php if ($pageCount != $currentPage) : ?>
                    <button class="btn_last" onclick="location.href='/page?id=<?= ++$currentPage ?>'">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 6.36401C0.447715 6.36401 -4.82823e-08 6.81173 0 7.36401C4.82823e-08 7.9163 0.447715 8.36401 1 8.36401L1 6.36401ZM16.466 8.07112C16.8565 7.68059 16.8565 7.04743 16.466 6.65691L10.102 0.292945C9.7115 -0.0975793 9.07834 -0.0975792 8.68781 0.292945C8.29729 0.68347 8.29729 1.31663 8.68781 1.70716L14.3447 7.36401L8.68781 13.0209C8.29729 13.4114 8.29729 14.0446 8.68781 14.4351C9.07834 14.8256 9.7115 14.8256 10.102 14.4351L16.466 8.07112ZM1 8.36401L15.7589 8.36401L15.7589 6.36401L1 6.36401L1 8.36401Z" fill="#841844"/>
                        </svg>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>