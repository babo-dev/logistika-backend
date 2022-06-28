<html>

<body>
  <div class="main_container">
    <section class="section_1">
      <div>
        <span> Sene </span> <br>
        <b> {{$custom_request->date1->format('Y-m-d')}} - {{$custom_request->date2->format('Y-m-d')}} </b>
      </div>
      <div>
        <span> Nireden </span> <br>
        <b> {{$custom_request->source}} </b>
      </div>
      <div>
        <span> Nira </span> <br>
        <b> {{$custom_request->destination}} </b>
      </div>
      <div>
        <span> Hususy Karhana </span> <br>
        <b>Ahlisi</b>
      </div>
      <div>
        <span> Yagdayy </span> <br>
        <b>Garasylyar</b>
      </div>
    </section>

    <section class="section_2">
      <div>
        <p class="first">Haryt</p>
        <p> <b> {{$custom_request->title}} </b></p>
      </div>
      <div>
        <p class="first">Agramy</p>
        <p><b> {{$custom_request->weight_min}} - {{$custom_request->weight_max}}</b></p>
      </div>
      <div>
        <p class="first">Kub</p>
        <p><b> {{$custom_request->cubm_min}} - {{$custom_request->cubm_max}}</b></p>
      </div>
      <div>
        <p class="first">Byudjet</p>
        <p> {{$custom_request->budget_min}} - {{$custom_request->budget_max}}</p>
      </div>
      <div>
        <p class="first">Awtoulag gornusi</p>
        <p> <b> {{$custom_request->car_body}} </b> </p>
      </div>
      <div>
        <p class="first">Bellik</p>
        <p> <b> {{$custom_request->note}} </b> </p>
      </div>
    </section>

    <section class="section_3">
      <div>
        <p class="first">Musderi ady</p>
        <p> <b> {{$custom_request->requestable->name}} </b> </p>
      </div>
      <div>
        <p class="first">E-mail</p>
        <p> <b>{{$custom_request->requestable->email}}</b> </p>
      </div>
      <div>
        <p class="first">Telefon</p>
        <p> <b>{{$custom_request->requestable->phone}}</b> </p>
      </div>
    </section>
  </div>

  <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
      font-size: 16px;
      color: #837e7e;
    }

    .main_container {
      padding: 20px 30px;
      margin: 0 auto;
      height: 90%;
      width: 90%;
      border: 1px solid #d9d9d9;
    }

    .section_1 {
      line-height: 1.5rem;
      border-bottom: 1px solid #d9d9d9;
      display: flex;
      justify-content: space-between;
      padding-bottom: 10px;
    }

    .section_2 {
      border-bottom: 1px solid #d9d9d9;
      display: flex;
      flex-direction: column;
      padding: 10px 0;
    }

    .section_2 div {
      display: flex;
    }

    .section_2 div .first {
      width: 14rem;
    }

    .section_3 {
      display: flex;
      flex-direction: column;
      padding: 10px 0;
    }

    .section_3 div {
      display: flex;
    }

    .section_3 div .first {
      width: 14rem;
    }
  </style>
</body>

</html>
