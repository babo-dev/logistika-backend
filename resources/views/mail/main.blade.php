<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="color-scheme" content="light">
  <meta name="supported-color-schemes" content="light">
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; font-size: 16px; color: #837e7e;">
  <div style="padding: 20px 30px; margin: 0 auto; height: 90%; width: 90%; border: 1px solid #d9d9d9;">
    <section style="line-height: 1.5rem; border-bottom: 1px solid #d9d9d9; display: flex; justify-content: space-between; padding-bottom: 10px;">
      <div>
        <span> Sene </span> <br>
        <b> {{ \Carbon\Carbon::parse($custom_request->date1)->format('Y-m-d') }} - {{\Carbon\Carbon::parse($custom_request->date2)->format('Y-m-d')}} </b>
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

    <section style="border-bottom: 1px solid #d9d9d9; display: flex; flex-direction: column; padding: 10px 0;">
      <div style="display: flex;">
        <p style="width: 14rem;">Haryt</p>
        <p> <b> {{$custom_request->title}} </b></p>
      </div>
      <div style="display: flex;">
        <p style="width: 14rem;">Agramy</p>
        <p><b> {{$custom_request->weight_min}} - {{$custom_request->weight_max}}</b></p>
      </div>
      <div style="display: flex;">
        <p style="width: 14rem;">Kub</p>
        <p><b> {{$custom_request->cubm_min}} - {{$custom_request->cubm_max}}</b></p>
      </div>
      <div style="display: flex;">
        <p style="width: 14rem;">Byudjet</p>
        <p> {{$custom_request->budget_min}} - {{$custom_request->budget_max}}</p>
      </div>
      <div style="display: flex;">
        <p style="width: 14rem;">Awtoulag gornusi</p>
        <p> <b> {{$custom_request->car_body}} </b> </p>
      </div>
      <div style="display: flex;">
        <p style="width: 14rem;">Bellik</p>
        <p> <b> {{$custom_request->note}} </b> </p>
      </div>
    </section>

    <section style="display: flex; flex-direction: column; padding: 10px 0;">
      <div style="display: flex;width: 14rem;">
        <p style="width: 14rem;">Musderi ady</p>
        <p> <b> {{$custom_request->requestable->name}} </b> </p>
      </div>
      <div style="display: flex;">
        <p style="width: 14rem;">E-mail</p>
        <p> <b>{{$custom_request->requestable->email}}</b> </p>
      </div>
      <div style="display: flex;">
        <p style="width: 14rem;">Telefon</p>
        <p> <b>{{$custom_request->requestable->phone}}</b> </p>
      </div>
    </section>
  </div>

</body>

</html>
