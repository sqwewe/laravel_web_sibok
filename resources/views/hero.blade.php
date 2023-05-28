@extends('layouts.main')
@section('Сибиряк', 'Page Title')
@section('header')
@parent

<div class="container  my-5">
  <div class="row">
    <div class="col text-center">
      <h1>Герои</h1>
    </div>
  </div>
  <div class="container my-5">

    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-4">
          <img src="storage/hero/vorona.png" class="rounded mx-auto d-block" style="max-width:100%;" alt="...">
        </div>
        <p>Ворона самая мудрая из всех мудрейших ворон на Байкале. 
          Ей больше трёхсот лет! Она присутствовала при рождении 
          Сибирячка, поэтому чувствует ответственность за него и 
          помогает своему любимцу познать мир и разобраться в нём.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <img src="storage/hero/sibok.png" class="rounded mx-auto d-block" style="max-width:100%;" alt="...">
        </div>
        <p>Сибирячок — это сказочный человечек, родившийся из кедровой шишки. Он весёлый, озорной и 
          очень любознательный! Сказку о нём написал замечательный иркутский писатель Марк Сергеев.
        </p>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <img src="storage/hero/taejka.png" class="rounded mx-auto d-block" style="max-width:100%;" alt="...">
        </div>
        <p>Таёжка — весёлая лесная девочка. Она живёт в лесу, знает все таёжные тропки, знакома со всеми зверюшками, 
          птичками, может рассказать всё о травках, цветочках, деревьях. Замечательные сказки читайте в рубрике «Таёжкины истории».</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <img src="storage/hero/bocman.png" class="rounded mx-auto d-block" style="max-width:100%;" alt="...">
        </div>
        <p>Боцман Фёдор Карпович Сарма — бывалый моряк. Байкал для него – дом родной. Все рыбы Сибири его знают и очень уважают! 
          Сарма всю жизнь пробыл в плаваниях, и знает много удивительных захватывающих историй. А ещё Сарма — это сильный и суровый байкальский ветер.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <img src="storage/hero/yrs.png" class="rounded mx-auto d-block" style="max-width:100%;" alt="...">
        </div>
        <p>Универсальный Робот Спасатель, сокращённо — УРС, ласково Урсик: самый забавный! Его жестянки имеют свойство попадать в самые 
          курьёзные ситуации. Весёлый и находчивый, единственный в своём роде. Во всём мире такого робота нет.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <img src="storage/hero/anti.png" class="rounded mx-auto d-block" style="max-width:100%;" alt="...">
        </div>
        <p>Аптекарь Анти-Ох — наш добрый лекарь. В тайге много кому нужна его помощь! Он лечит не горькими таблетками и
           неприятными микстурами, а веселыми пилюлями, шутками-прибаутками, стихами и загадками.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <img src="storage/hero/krito.png" class="rounded mx-auto d-block"  style="max-width:100%;" alt="...">
        </div>
        <p>Шито-Крыто — вредный и пакостный посетитель леса. Сделав что-нибудь нехорошее, он потирает руки от удовольствия и говорит: «У меня всё шито-крыто!»</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <img src="storage/hero/kesha.png" class="rounded mx-auto d-block" style="max-width:100%;" alt="...">
        </div>
        <p>Леший Кеша — мастер на все руки и большой знаток тайги! Лес знает как свои пять пальцев: все грибы и все ягоды, – нужно только смотреть, 
          чтобы он вам вместо груздя поганку не подсунул. Он может. Да не со зла, а ради шутки.</p>
      </div>
    </div>


@endsection