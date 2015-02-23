<?php
    if(isset($_POST['offset'])) $offset = $_POST['offset'];
?>
<?php for($i = 0; $i < 5; $i++) { ?>
    <div class="review dashed b-radius hidden">
        <div class="quote-arrow"></div>
        <p class="content">
            Повседневная практика показывает, что укрепление и развитие структуры в значительной степени обуславливает создание модели развития. Повседневная практика показывает, что рамки и место обучения кадров представляет собой интересный эксперимент проверки существенных финансовых и административных условий.
        </p>
        <div class="rating-field" data-value="8" data-scale="10"></div>
        <div class="author">
            <div class="photo">
                <img src="images/photos/02.jpg" alt="" />
            </div>
            <div class="text">
                <p>
                    <span class="author-name">Иван Иванов</span> оставил отзыв о консультанте <span class="user-name">Братановой Марии</span>
                </p>
            </div>
            <div class="clr"></div>
        </div>
        <div class="toolbar">
            <div class="review-menu">
                <a href="#" class="dotts">
                    <i class="fa fa-circle"></i>
                    <i class="fa fa-circle"></i>
                    <i class="fa fa-circle"></i>
                </a>
            </div>
            <p class="review-date">три дня назад</p>
            <a href="#" class="readmore">Читать весь отзыв</a>
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
<?php } ?>
