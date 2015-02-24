<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>

<body>
    <div class="wrapper">
        <section class="typography">
            <h3>Typography</h3>
            <h1>H1 - font: 500 3.6rem "Roboto"</h1>
            <h2>H2 - font: 500 3.0rem "Roboto"</h2> 
            <h3>H3 - font: 500 2.4rem "Roboto"</h3> 
            <h4>H4 - font: 500 1.8rem "Roboto"</h4> 
            <h5>H5 - font: 500 1.4rem "Roboto"</h5> 
            <h6>H6 - font: 500 1.2rem "Roboto"</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos officia voluptatum totam ratione? Unde cum, ut commodi hic aliquam, impedit architecto ullam porro vel. Repellat ipsam quo ad? Voluptates, voluptatem quas quasi, possimus eaque corrupti perspiciatis laborum ab rem quo reiciendis! Nesciunt, excepturi veniam laboriosam aliquam iure illo! Hic explicabo nemo, fugit voluptatibus odit id ducimus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus dolorem qui expedita, incidunt atque quae rerum minus hic. Libero, iusto, ipsum. Recusandae suscipit corporis aliquid, corrupti labore rem animi asperiores aut provident. Quia nulla impedit ad corrupti beatae nobis tempore odio aliquam, voluptates tempora esse eius rerum explicabo unde! Deleniti aliquam dolor, praesentium error excepturi. Expedita aut maxime nobis, quia. Corporis quasi obcaecati pariatur harum minima quae, accusantium dicta vitae mollitia quia ut eius ipsam excepturi laboriosam cumque magni consequatur voluptas ad, cum error expedita!</p>
        </section>
        <section class="colors">
            <h3>Colors</h3>
            <div class="main-colors">
                <div class="color" id="sky">
                    <p>@sky<br />#dbefe5</p>
                </div>
                <div class="color" id="sea">
                    <p>@sea<br />#35504e</p>
                </div>
                <div class="color" id="blue_light">
                    <p>@blue_light<br />#dbefe5</p>
                </div>
                <div class="color" id="sky_dark">
                    <p>@sky_dark<br />#41b6ad</p>
                </div>
                <div class="color" id="sea_light">
                    <p>@sea_light<br />#8aa4a2</p>
                </div>
                <div class="color" id="white">
                    <p>@white<br />#ffffff</p>
                </div>
            </div>
            <div class="accent-colors">
                <div class="color" id="green_light">
                    <p>@green_light<br />#33b679</p>
                </div>
                <div class="color" id="red_light">
                    <p>@red_light<br />#f85649</p>
                </div>
                <div class="color" id="yellow">
                    <p>@yellow<br />#fac944</p>
                </div>
                <div class="color" id="green">
                    <p>@green<br />#0f9b58</p>
                </div>
                <div class="color" id="red">
                    <p>@red<br />#eb5245</p>
                </div>
                <div class="color" id="yellow_dark">
                    <p>@yellow_dark<br />#ffaa3e</p>
                </div>
            </div>
        </section>
        <section class="elements">
            <h3>Elements</h3>
            <div class="buttons">
                <div class="item">
                    <p class="label">.btn.ghost</p>
                    <a href="#" class="btn ghost">Принять</a>
                    <p class="label">.btn.ghost.small</p>
                    <a href="#" class="btn ghost small">Принять</a>
                </div>
                <div class="item">
                    <p class="label">.btn</p>
                    <a href="#" class="btn">Принять</a>
                    <p class="label">.btn.small</p>
                    <a href="#" class="btn small">Принять</a>
                </div>
                <div class="item">
                    <p class="label">.btn.red</p>
                    <a href="#" class="btn red">Отмена</a>
                    <p class="label">.btn.red.small</p>
                    <a href="#" class="btn red small">Отмена</a>
                </div>
                <div class="item">
                    <p class="label">.btn.yellow</p>
                    <a href="#" class="btn yellow">Принять</a>
                    <p class="label">.btn.yellow.small</p>
                    <a href="#" class="btn yellow small">Принять</a>
                </div>
                <div class="item">
                    <p class="label">.btn.green</p>
                    <a href="#" class="btn green">Отправить</a>
                    <p class="label">.btn.green.small</p>
                    <a href="#" class="btn green small">Отправить</a>
                </div>
            </div>
            <div class="checkboxes">
                <div class="item">
                    <p>input[type="checkbox"].toggle</p>
                    <input type="checkbox" class="toggle" name="confirm">
                    <br>
                    <input type="checkbox" class="toggle" checked="checked" name="confirm-checked">
                </div>
                <div class="item">
                    <p>input[type="checkbox"]</p>
                    <input type="checkbox" name="confirm">
                    <br>
                    <input type="checkbox" checked="checked" name="confirm-checked">
                </div>
            </div>
            <h3>Other elements</h3>
            <h4>Текущий рейтинг</h4>
            <p>div.rating-field<br />Обязательные аттрибуты:<br />data-scale="10" - количество звёзд<br />data-value="3" - текущий рейтинг</p>
            <p>Пример:</p>
            <pre>&lt;div class=&quot;raiting-field&quot; data-scale=&quot;5&quot; data-value=&quot;2&quot;&gt;&lt;/div&gt;</pre>
            <div class="rating-field" data-scale="5" data-value="2"></div>
            <h4>Поле ввода рейтинга.</h4>
            <p>input[name="raiting"]<br />Обязательные аттрибуты:<br />data-scale="10" - количество звёзд<br />Значение инпута name="rating" устанавливается при клике</p>
            <p>Пример:</p>
            <pre>&lt;input type=&quot;hidden&quot; name=&quot;rating&quot; data-scale=&quot;10&quot;/&gt;</pre>
            <input type="hidden" name="rating" data-scale="10"/>
        </section>
        <section class="forms">
            <h3>Forms</h3>
            <p>Чтобы появлялась иконка очистки поля ввода присвойте input'у класс 'allow-clear'. Иконка появляется, если поле не пустое</p>
            <div class="item">
                <label>input[type="text"].allow-clear</label>
                <input type="text" class="allow-clear" placeholder="Placeholder" value="Текст для примера"/>
            </div>
            <div class="item">
                <label>textarea.allow-clear</label>
                <textarea class="allow-clear" placeholder="Placeholder"></textarea>
            </div>
            <div class="item">
                <label>select.select2</label>
                <select class="select2">
                    <option value="1">Раз</option>
                    <option value="2">Два</option>
                    <option value="3">Три</option>
                </select>
            </div>
            <div class="item">
                <label for="search">input[type="text"].search</label>
                <p>Аттрибут data-action - Адрес для отправки данных<br />Аттрибут data-method - метод отправки данных</p>
                <input type="text" name="search" class="search" data-action="index.php" data-method="POST">
            </div>
        </section>
    </div>
    
</body>
</html>