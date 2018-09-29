<?php 
get_header(); 
global $fpid;
?>
    <main class="container-fluid content">

    <?php for($i=1;$i<=11;$i++){
        if(get_field('display_block_'.$i,$fpid)){
            echo get_template_part('template-parts/block'.$i);
        }
    }?>

          <!--популярное-->
          <section class="main-popular">
               <div class="container">
               <div class="section-side-title right-side p-side">Популярное</div>
               <div class="sec-title sec-p">Комплекты</div>
               <div class="sec-bg-title">Комплекты</div>
               <div class="popular-slider">
                    <div class="slide">
                         <div class="popular cs1">
                              <div class="img-block"><img src="<?=get_template_directory_uri()?>/img/pop1.jpg" alt="Pink dream" /></div>
                              <div class="title">Pink dream</div>
                              <div class="desc">белый, серый, прозрачный, розовый</div>
                         </div>
                    </div>
                    <div class="slide">
                         <div class="popular cs2">
                              <div class="img-block"><img src="<?=get_template_directory_uri()?>/img/pop2.jpg" alt="Monochrome" /></div>
                              <div class="title">Monochrome</div>
                              <div class="desc">белый, серый</div>
                         </div>
                    </div>
                    <div class="slide">
                         <div class="popular cs3">
                              <div class="img-block"><img src="<?=get_template_directory_uri()?>/img/pop3.jpg" alt="Tiffani" /></div>
                              <div class="title">Tiffani</div>
                              <div class="desc">серый, белый, розовый, мятный</div>
                         </div>
                    </div>
                    <div class="slide">
                         <div class="popular cs1">
                              <div class="img-block"><img src="<?=get_template_directory_uri()?>/img/pop1.jpg" alt="Pink dream" /></div>
                              <div class="title">Pink dream</div>
                              <div class="desc">белый, серый, прозрачный, розовый</div>
                         </div>
                    </div>
                    <div class="slide">
                         <div class="popular cs2">
                              <div class="img-block"><img src="<?=get_template_directory_uri()?>/img/pop2.jpg" alt="Monochrome" /></div>
                              <div class="title">Monochrome</div>
                              <div class="desc">белый, серый</div>
                         </div>
                    </div>
                    <div class="slide">
                         <div class="popular cs3">
                              <div class="img-block"><img src="<?=get_template_directory_uri()?>/img/pop3.jpg" alt="Tiffani" /></div>
                              <div class="title">Tiffani</div>
                              <div class="desc">серый, белый, розовый, мятный</div>
                         </div>
                    </div>
               </div>
               <a href="#" class="scroll-to"></a>
               <p>еще комплекты</p>
               </div>
          </section>
          <!--комплект-->
          <section class="main-set">
               <div class="container">
               <div class="section-side-title right-side w-side">Купить бассейн</div>
               <div class="sec-title sec-w">В комплект входят</div>
               <div class="sec-bg-title">Заказать</div>
               <div class="set-wrapper">
                    <div class="set-block set-block-2">
                         <div class="title">Бассейн 90 см</div>
                         <ol class="custom-counter">
                              <li>Сухой бассейн</li>
                              <li>200 шаров</li>
                              <li>Мешок для хранения бассейна</li>
                              <li>Мешок для хранения шаров</li>
                         </ol>
                         <div class="price-wrapper">
                              <div class="old-price">5990</div>
                              <div class="price">
                                   <div>Цена:</div>
                                   <div>4990</div>
                                   <div>рублей</div>
                              </div>
                         </div>
                         <button type="submit" class="styled-btn1 btn-view-pool">Заказать бассейн</button>
                    </div>
                    <div class="set-block center set-block-1">
                         <img src="<?=get_template_directory_uri()?>/img/set-main.png" alt="Комплект" />
                         <img src="<?=get_template_directory_uri()?>/img/set-block-img-1.png" class="set-block-number set-block-number-1" alt="1">
                         <img src="<?=get_template_directory_uri()?>/img/set-block-img-2.png" class="set-block-number set-block-number-2" alt="2">
                    </div>
                    <div class="set-block set-block-3">
                         <div class="title">Бассейн 120см</div>
                         <ol class="custom-counter">
                              <li>Сухой бассейн</li>
                              <li>400 шаров</li>
                              <li>Мешок для хранения бассейна</li>
                              <li>2 мешка для хранения шаров</li>
                         </ol>
                         <div class="price-wrapper">
                              <div class="price">
                                   <div>Цена:</div>
                                   <div>9990</div>
                                   <div>рублей</div>
                              </div>
                         </div>
                         <button type="submit" class="styled-btn1 btn-view-pool">Заказать бассейн</button>
                    </div>
               </div>
               </div>
          </section>
          <!--к комплекту-->
          <section class="main-additional">
               <div class="container main-additional-wrap">
               <div class="section-side-title left-side p-side">Горка к бассейну</div>
               <div class="sec-title sec-p">Еще вы можете купить</div>
               <div class="sec-subtitle">детскую горку</div>
               <div class="main-title">Изготовлена из безопасных материалов (дерево, нетоксичная краска), края у нее закруглены, наклон небольшой. </div>
               <div class="add-wrapper">
                    <div class="add-img img1"><img src="<?=get_template_directory_uri()?>/img/add-img1.png" alt="фото детской горки" /></div>
                    <div class="add-img img2"><img src="<?=get_template_directory_uri()?>/img/add-img2.png" alt="детская горка" /></div>
                    <div class="title">В чем еще преимущества горки?</div>
                    <ul class="custom-counter2">
                         <li>Для разного возраста. Подходит для детей от 1 года до 5 лет.</li>
                         <li>Компактная. Длина 145 см, высота в максимальной точке 67 см , ширина 45 см — поместится даже в небольшой детской.</li>
                         <li>Горка белая. Универсальный цвет подойдет под любой интерьер.</li>
                         <li>Дружелюбная. Ребенок сам может забраться и спуститься.</li>
                         <li>И для вас полезная. Пусть малыш катается, а вы занимайтесь своими делами. </li>
                    </ul>
                    <div class="add-price-wrapper">
                         <div class="price">
                              <div>Цена:</div>
                              <div>6490</div>
                              <div>руб.</div>
                         </div>
                         <button type="submit" class="styled-btn1 btn-view-hill">Заказать горку</button>
                    </div>
                    <div class="add-ball ball1"><img src="<?=get_template_directory_uri()?>/img/add-ball1.png" alt="ball1" /></div>
                    <div class="add-ball ball2"><img src="<?=get_template_directory_uri()?>/img/add-ball2.png" alt="ball2" /></div>
                    <div class="add-ball ball3"><img src="<?=get_template_directory_uri()?>/img/add-ball3.png" alt="ball3" /></div>
               </div>
               </div>
          </section>
          <!--пояснения-->
          <section class="main-example">
               <div class="container">
               <div class="example-wrapper">
                    <div class="example-block left purp">
                         <div class="ex-ask">
                              <div class="photo-block"><img src="<?=get_template_directory_uri()?>/img/user-photo1.png" alt="user photo 1" /></div>
                              <div class="desc">«Ой, ну не знаю… Потом все по дому будет валяться»</div>
                         </div>
                         <div class="ex-ans">
                              <div class="desc">
                                   Конечно, как и все игрушки. Идеальные детские существуют только в двух случаях: на фотографиях в Instagram и в воображении сценаристов фильмов. Дети — маленькие ураганчики, за которыми нужно убираться.
                                   <div class="quote">Зато представьте, какой восторг получат ваши дети от игр в сухом бассейне Valemi. Пираты, бороздящие океан… Принчипессы, живущие в bubble-мире… К играм можно подключить папу и маму. Малыши будут вспоминать именно эти моменты, а не то, как было чисто в комнате.</div>
                              </div>
                              <div class="ans-img"><img src="<?=get_template_directory_uri()?>/img/ans-img1.png" alt="photo" /></div>
                         </div>
                    </div>
                    <div class="example-block right pink">
                         <div class="ex-ask">
                              <div class="photo-block"><img src="<?=get_template_directory_uri()?>/img/user-photo2.png" alt="user photo 2" /></div>
                              <div class="desc">«Хорошо, а как хранить-то? Наверное, много места занимает?»</div>
                         </div>
                         <div class="ex-ans">
                              <div class="desc">
                                   Диаметр бассейна — <span>90</span> см. Высота бортиков — <span>40</span> см, а толщина — <span>6</span> см.
                                   <div class="quote">Сухой бассейн Valemi занимает всего <span>1 м<sup>2</sup></span>.</div>
                                   Нестрашно, если нет возможности выделить метр для игр. Наш бассейн складывается и раскладывается за 2 минуты. Шарики и бассейн хранятся в специальных мешках, которые помещаются в шкаф.
                              </div>
                              <div class="ans-img"><img src="<?=get_template_directory_uri()?>/img/ans-img2.png" alt="photo" /></div>
                         </div>
                    </div>
                    <div class="example-block left purp wash">
                         <div class="ex-ask">
                              <div class="photo-block"><img src="<?=get_template_directory_uri()?>/img/user-photo3.png" alt="user photo 3" /></div>
                              <div class="desc">«А чистить как? Представляю, сколько там микробов...»</div>
                         </div>
                         <div class="ex-ans">
                              <div class="desc">Чехлы бассейна Valemi легко снимаются и одеваются, их можно стирать в обычной машинке при температуре 30°C </div>
                              <div class="ans-img"><img src="<?=get_template_directory_uri()?>/img/ans-img3.png" alt="photo" /></div>
                         </div>
                    </div>
               </div>
               </div>
          </section>
          <!--отзывы-->
          <section class="main-reviews" id="reviews">
               <div class="container">
               <div class="sec-bg-title">Отзывы</div>
               <div class="hd-block">
                    <div class="section-side-title left-side p-side">Отзывы о нас</div>
                    <div class="con-title">«Звучит, конечно, здорово, но 5990 рублей — дороговато...» </div>
                    <div class="con-subtitle">просто посмотрите, что говорят клиенты о сухих бассейнах Valemi</div>
               </div>
               <div class="reviews-wrapper">
                    <div class="review rev-img">
                         <div class="img-block"><img src="<?=get_template_directory_uri()?>/img/rev-main.jpg" alt="review photo" /></div>
                         <a href="#" class="view-all">Смотреть все отзывы</a>
                    </div>
                    <div class="review rev-desc">
                         Спасибо @valemi.pool Наконец-то приобрели сухой бассейн, который я так давно хотела)) дети в восторге) Он супер мягкий, шарики яркие и такие классные)) Викатёнок уже два часа увлечена бассейном)) Уже перевернула... <a href="#">читать в инстаграм</a>
                         <div class="desc-bottom">
                              <div class="name">kotnikovaa</div>
                              <div class="inst-block">
                                   <a href="#"><img src="<?=get_template_directory_uri()?>/img/inst-icon.png" alt="инстаграм" /><span></span></a>
                              </div>
                         </div>
                    </div>
                    <div class="review rev-images">
                         <div class="img-block"><img src="<?=get_template_directory_uri()?>/img/rev-photo1.jpg" alt="review photo 2" /></div>
                         <div class="img-block"><img src="<?=get_template_directory_uri()?>/img/rev-photo2.jpg" alt="review photo 3" /></div>
                    </div>
               </div>
               </div>
          </section>
          <!--доставка-->
          <section class="main-delivery" id="paydel">
               <div class="container">
               <div class="section-side-title right-side">Доставка</div>
               <div class="hd-block">
                    <div class="con-title"></div>
                    <div class="sec-title sec-p">«Хорошо, а доставка есть?»</div>
               </div>
               <div class="del-wrapper">
                    <div class="del-block purp">
                         <div class="title">Доставка по Москве </div>
                         <div class="desc"><span>400</span> руб в пределах МКАД. Оплата при получении</div>
                         <img src="<?=get_template_directory_uri()?>/img/del-icon1.png" alt="" />
                    </div>
                    <div class="del-block red">
                         <div class="title">По Московской области</div>
                         <div class="desc"><span>700</span> руб. до <span>10</span> км <span>1000</span> руб. от <span>10-20</span> км Свыше <span>20</span> км транспортными компаниями Оплата при получении</div>
                         <img src="<?=get_template_directory_uri()?>/img/del-icon2.png" alt="" />
                    </div>
                    <div class="del-block yellow">
                         <div class="title">По России</div>
                         <div class="desc">отправляем транспортной компанией или Почтой России</div>
                         <img src="<?=get_template_directory_uri()?>/img/del-icon3.png" alt="" />
                    </div>
                    <div class="del-block purp">
                         <div class="title">По миру</div>
                         <div class="desc">отправляем EMS</div>
                         <img src="<?=get_template_directory_uri()?>/img/del-icon4.png" alt="" />
                    </div>
                    <div class="map"><img src="<?=get_template_directory_uri()?>/img/map.png" alt="map" /></div>
               </div>
               </div>
          </section>
          <!--форма заказа-->
          <section class="main-order">
               <div class="container">
               <div class="section-side-title left-side w-side">Заказать</div>
               <div class="sec-title">VALEMI — СУХОЙ БАССЕЙН <br>
                    <span>для детей от 6 месяцев до 5 лет</span>
               </div>
               <!-- <div class="hd-block">
                    <div class="con-title">VALEMI — СУХОЙ БАССЕЙН</div>
                    <div class="con-subtitle">для детей от 6 месяцев до 5 лет</div>
               </div> -->
               <div class="order-wrapper">
                    <div class="order-block order-desc">
                         <div class="title">В комплект входят:</div>
                         <ol class="custom-counter">
                              <li>Сухой бассейн 90-120см</li>
                              <li>200-400 шаров</li>
                              <li>Мешок для хранения бассейна</li>
                              <li>Мешок для хранения шаров</li>
                         </ol>
                         <p>Оставьте заявку, чтобы узнать точную стоимость и сроки доставки</p>
                         <a href="#" class="politics">Политика конфиденциальности</a>
                         <div class="styled-form order-desc-form">
                              <form>
                                   <div class="form-block price">
                                   <div>Цена от:</div>
                                   <div class="price-change">5990</div>
                                   <div>руб.</div>
                                   </div>
                                   <button type="submit" class="styled-btn1 btn-view">Заказать бассейн</button>
                              </form>
                         </div>
                         
                    </div>
                    <div class="order-block order-form styled-form">
                         <form >
                              <div class="form-block name">
                                   <input type="text" placeholder="Ваше имя" required pattern="[^0-9]+$"/>
                              </div>
                              <div class="form-block phone">
                                   <input type="text" placeholder="Ваш телефон" required pattern="^[ 0-9]+$"/>
                              </div> 
                              <div class="form-block city">
                                   <input type="text" placeholder="Ваш город" required pattern="[^0-9]+$" />
                              </div>
                              <div class="form-block promo">
                                   <input type="text" placeholder="Ваш ПРОМОКОД" />
                              </div>
                              <div class="form-block">
                                   <div class="form-block-name">Выбрать размер бассейна:</div>
                                   <input type="radio" name="size" class="radio" id="size1" checked data-price="8850"/>
                                   <label for="size1">90 см</label>
                                   <input type="radio" name="size" class="radio" id="size2" data-price="2576" />
                                   <label for="size2">120 см</label>
                              </div>
                              <div class="form-block price">
                                   <div>Цена от:</div>
                                   <div class="price-change">5990</div>
                                   <div>руб.</div>
                              </div>
                              <button type="submit" class="styled-btn1">Заказать бассейн</button>
                         </form>
                         <div class="form-subtitle">Мы перезвоним в течении <span>15</span> минут</div>
                    </div>
               </div>
               </div>
          </section>
     </main>
<?php get_footer(); ?>