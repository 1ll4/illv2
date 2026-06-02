<main>
    <hr>
    <div class="breadcrumbs">
        <div class="br_first"><a href="/">Главная</a></div>
        <div class="br_first">/</div>
        <div class="br_last"><?= $newsData['title'] ?></div>
    </div>
    <div class="news_b">
        <h1>
            <?= $newsData['title'] ?>
        </h1>
        <div class="news_main">
            <div class="news_main_text">
                <div class="news_main_date">
                    <?= date('d.m.Y', strtotime($newsData['date'])); ?>
                </div>
                <div class="news_main_title">
                    <?= $newsData['announce'] ?>
                </div>
                <div class="news_main_content">
                    <?= $newsData['content'] ?>
                </div>
                <div class="news_main_button">
                    <button onclick="location.href='/'">
                        <svg width="26" class="arrow_back_icon" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.293015 8.07106C-0.0975094 7.68054 -0.0975094 7.04737 0.293014 6.65685L6.65698 0.292887C7.0475 -0.0976379 7.68067 -0.097638 8.07119 0.292886C8.46171 0.683411 8.46171 1.31658 8.07119 1.7071L2.41434 7.36395L8.07119 13.0208C8.46171 13.4113 8.46171 14.0445 8.07119 14.435C7.68067 14.8255 7.0475 14.8255 6.65698 14.435L0.293015 8.07106ZM26 8.36395L1.00012 8.36395L1.00012 6.36395L26 6.36395L26 8.36395Z" fill="#841844"/>
                        </svg>
                        Назад к новостям
                    </button>
                </div>
            </div>
            <div class="news_main_img">
                <img src="assets/images/news/<?= $newsData['image'] ?>" alt="">
            </div>
        </div>
    </div>
</main>