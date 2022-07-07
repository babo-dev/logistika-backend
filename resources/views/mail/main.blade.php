<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
  <META http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style></style>
</head>

<body>
  <section style="font-family:Nunito Sans,Helvetica,Arial,sans-serif;color:#51545e;max-width:700px;min-width:90%;width:80%;background-color:#fafbfc;padding:25px">
    <div style="display:flex;justify-content:space-between;">
     <h1> {{$title}} </h1>
      <a href="https://iber.biz/account/requests/{{ $custom_request->id }}" style=" font: 15px Arial; text-decoration: none; background-color: #2daf71; color: white;
  padding: 8px 14px;
  border-radius: 4px;" target="_blank">{{$button}}</a>
    </div>
    <table style="width:100%;border-collapse:collapse;border:1px solid gainsboro;background-color:white">
      <tbody>
        <tr>
          <td style="padding:10px 10px 5px">{{$date}}</td>
          <td style="padding:10px 10px 5px;text-align:right;font-weight:bold"> {{ \Carbon\Carbon::parse($custom_request->date1)->format('Y-m-d') }} - {{\Carbon\Carbon::parse($custom_request->date2)->format('Y-m-d')}} </td>
        </tr>
        <tr>
          <td style="padding:5px 10px">{{$custom_from}}</td>
          <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->source }} </td>
        </tr>
        <tr>
          <td style="padding:5px 10px">{{$custom_to}}</td>
          <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->destination}} </td>
        </tr>
        <tr>
          <td style="padding:5px 10px">{{$company}}</td>
          <td style="padding:5px 10px;text-align:right;font-weight:bold">
            @if($custom_request->companies->count() == 0)
            Ählisi
            @else
            @foreach($custom_request->companies as $company)
            @if ($loop->last)
            {{$company->name}}
            @else
            {{$company->name}},
            @endif
            @endforeach
            @endif
          </td>
        </tr>
        <tr style="border-bottom:1px solid gainsboro">
          <td style="padding:5px 10px 10px">{{$status}}</td>
          <td style="padding:5px 10px 10px;text-align:right;font-weight:bold">{{$waiting}}</td>
        </tr>
        <tr>
          <td style="padding:10px 10px 5px">{{$cargo}}</td>
          <td style="padding:10px 10px 5px;text-align:right;font-weight:bold"> {{$custom_request->title}} </td>
        </tr>
        <tr>
          <td style="padding:5px 10px">{{$weight}}</td>
          <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->weight_min}} - {{$custom_request->weight_max}}</td>
        </tr>
        <tr>
          <td style="padding:5px 10px">{{$cub}}</td>
          <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->cubm_min}} - {{$custom_request->cubm_max}}</td>
        </tr>
        <tr>
          <td style="padding:5px 10px">{{$budget}}</td>
          <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->budget_min}} - {{$custom_request->budget_max}}</td>
        </tr>
        <tr>
          <td style="padding:5px 10px">{{$car_type}}</td>
          <td style="padding:5px 10px;text-align:right;font-weight:bold">
            @if($custom_request->car_body == '')
            -
            @else
            {{$cargo_type}}
            @endif
          </td>
        </tr>
        <tr style="border-bottom:1px solid gainsboro">
          <td style="padding:5px 10px 10px">{{$note}}</td>
          <td style="padding:5px 10px 10px;text-align:right;font-weight:bold">
            @if($custom_request->note == '')
            -
            @else
            {{$custom_request->note}}
            @endif
          </td>
        </tr>
        <tr>
          <td style="padding:10px 10px 5px">{{$client_name}}</td>
          <td style="padding:10px 10px 5px;text-align:right;font-weight:bold">{{$custom_request->requestable->name}}</td>
        </tr>
        <tr>
          <td style="padding:5px 10px">E-mail</td>
          <td style="padding:5px 10px;text-align:right;font-weight:bold">{{$custom_request->requestable->email}}</td>
        </tr>
        <tr>
          <td style="padding:5px 10px 10px">{{$phone}}</td>
          <td style="padding:5px 10px 10px;text-align:right;font-weight:bold">{{$custom_request->requestable->phone}}</td>
        </tr>
      </tbody>
    </table>

    <p style="text-align:center;margin-top: 25px;">© 2022 {{$all_rights}}.</p>
  </section>
</body>

</html>
