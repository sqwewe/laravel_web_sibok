@extends('layouts.main')
@section('Сибиряк', 'Page Title')

@section('header')
@parent

<div class="container my-3">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="storage/6-2022.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="storage/3-2022.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="storage/4-0222.jpg" class="d-block w-100" alt="...">
      </div>  
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Назад</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Далее</span>
    </button>
  </div>
</div>

<div class="container my-3">
  <div class="container text-center">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row bg-access">
      <div class="col-md-8">
        <h3>Сибирячок в Братске</h3>
        <p>В школе № 46 города Братска прошла встреча в рамках Всероссийского проекта «Культура для школьников».
          Сотрудники редакции познакомили ребят с пятым номером этого года и вкладкой «Маленький воин с большой историей».</p>
        <p>Школьники узнали интересные факты об оловянных солдатиках, прочитали стихотворения, а ещё рассказали о своих любимых игрушках.</p>
        <h3>А вы мечтатель?</h3>
        <p>Мы продолжаем акцию «Читаем с Сибирячком» и сегодня познакомимся с отрывком из повести Георгия Иннокентьевича Замаратского «Этот мечтатель и фантазёр Егорка».</p>
        <p>Георгий Иннокентьевич родился в деревне Погодаева Нижнеилимского района Иркутской области. С детства любил рисовать и сочинять стихи. Живописная природа Приилимья
          сформировалась его как художника и писателя. «Этот мечтатель и фантазёр Егорка» —
          автобиографическая повесть, её действие происходит в 30-е годы XX века. Юный герой повести осознаёт место своей малой и большой Родины в мире.</p>
      </div>
      <div class="col-6 col-md-4">
        <div class="card " style="width: 18rem;">
          <img src="storage/workers/3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-start">11\11 community</p>
            <p class="card-text text-end">Приятного чтения, друзья!</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row my-5">
      <div class="col-6 col-md-4">
        <h3>Аукцион педагогических идей "Учусь с Сибирячком"</h3>
        <p>15 ноября редакция журнала «Сибирячок» провела аукцион педагогических идей «Учусь с Сибирячком».
          Свои проекты представили иркутяне:
          Татьяна Белорусова и Наталья Уфилина воспитатели детского сада №180,
          Татьяна Бизикова учитель начальных классов школы №64,
          Светлана Василькова учитель начальных классов школы №27,
          а также Ольга Шахабудинова учитель начальных классов школы №29 районного посёлка Чунский.</p>
      </div>
      <div class="col-6 col-md-4">
        <h3>Методическое пособие "Урок воинской славы" (по литературным материалам журнала "Сибирячок")</h3>
        <p>Настоящее пособие адресовано учителям начальной школы, педагогам дополнительного образования. Представленные разработки
          могут быть полезны как в урочной, так и во внеурочной деятельности на занятиях, посвящённых истории Великой Отечественной войны.
          Приложение включает мультимедийные презентации, аудиозаписи и другие иллюстративные материалы, способствующие качественной организации
          деятельности учащихся, направленные на воспитание патриотизма, любви к малой Родине, совершенствование навыков анализа художественного произведения и др.</p>
      </div>
      <div class="col-6 col-md-4">
        <h3>Творческая мастерская "Читаем с Сибирячком"</h3>
        <p>В рамках мероприятий, посвящённых юбилею журнала, 17.11.2021 прошла творческая мастерская «Читаем с Сибирячком». Педагоги Иркутской области поделились
          опытом работы по использованию материалов журнала «Сибирячок», обсудили интерактивные формы взаимодействия редакции и образовательных организаций области.
          Выступающие продемонстрировали авторские методические материалы: электронные гугл-тесты, викторину «По Сибири с Сибирячком», рабочую тетрадь «Школа Сибирячка», игры
          «Кедровая шишка для именинников», календари и карты по материалам из журнала.</p>
      </div>
    </div>

    <!-- Columns are always 50% wide, on mobile and desktop -->
    <div class="row my-5 ">
      <div class="col-6">
        <h3 class="text-start">Областное государственное бюджетное учреждение культуры
          редакция журнала «Сибирячок»</h3>
        <p class="text-start">Адрес: 664033, г. Иркутск, ул. Лермонтова, д. 253, оф. 303-306</p>
        <p class="text-start">e-mail: sibiryachok@sibiryachok.net</p>
        <p class="text-start">Телефоны: 48-66-80, доб.: 300</p>
      </div>
      <div class="col-6">
        <p class="text-end">Редакция детского литературно-художественного журнала «Сибирячок» приглашает вас принять
          участие в ежегодной благотворительной акции «Подписка в подарок». Организации и частные благотворители могут оформить годовые
          подписки на журнал для ребятишек, которые хотели бы читать «Сибирячок», но не имеют такой возможности. Это мальчишки и девчонки
          из центров помощи детям, оставшимся без попечения родителей, воспитанники школ-интернатов, ученики коррекционных школ, многодетные
          семьи, маленькие пациенты больниц г. Иркутска. Участвуя в нашей акции, вы дарите юному читателю шесть увлекательных номеров «Сибирячка»,
          которые порадуют его рассказами, стихами, загадками, играми… Не оставайтесь в стороне, позвольте детям почувствовать радость встречи с любимым журналом!</p>
      </div>
    </div>
  </div>
</div>
@endsection