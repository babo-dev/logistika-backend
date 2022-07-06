<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><META http-equiv="Content-Type" content="text/html; charset=utf-8"><style></style></head><body><section style="font-family:Nunito Sans,Helvetica,Arial,sans-serif;color:#51545e;max-width:1000px;min-width:90%;width:80%;background-color:#fafbfc;padding:25px">
    <h1 style="text-align:center;padding-bottom:30px">Täze ýüzlenme!</h1>
    <table style="width:100%;border-collapse:collapse;border:1px solid gainsboro;background-color:white">
        <tbody>
            <tr>
                <td style="padding:10px 10px 5px">Sene</td>
                <td style="padding:10px 10px 5px;text-align:right;font-weight:bold"> {{ \Carbon\Carbon::parse($custom_request->date1)->format('Y-m-d') }} - {{\Carbon\Carbon::parse($custom_request->date2)->format('Y-m-d')}} </td>
            </tr>
            <tr>
                <td style="padding:5px 10px">Nireden</td>
                <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->source }} </td>
            </tr>
            <tr>
                <td style="padding:5px 10px">Nira</td>
                <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->destination}} </td>
            </tr>
            <tr>
                <td style="padding:5px 10px 10px">Hususy Kärhana</td>
                <td style="padding:5px 10px 10px;text-align:right;font-weight:bold">
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
                <td style="padding:10px 10px 5px">Ýagdaýy</td>
                <td style="padding:10px 10px 5px;text-align:right;font-weight:bold">Garaşylýar</td>
            </tr>
            <tr>
                <td style="padding:5px 10px">Haryt</td>
                <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->title}} </td>
            </tr>
            <tr>
                <td style="padding:5px 10px">Agramy</td>
                <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->weight_min}} - {{$custom_request->weight_max}}</td>
            </tr>
            <tr>
                <td style="padding:5px 10px">Kub</td>
                <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->cubm_min}} - {{$custom_request->cubm_max}}</td>
            </tr>
            <tr>
                <td style="padding:5px 10px">Býudjet</td>
                <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->budget_min}} - {{$custom_request->budget_max}}</td>
            </tr>
            <tr>
                <td style="padding:5px 10px">Awtoulag görnüşi</td>
                <td style="padding:5px 10px;text-align:right;font-weight:bold"> {{$custom_request->car_body}} </td>
            </tr>
            <tr style="border-bottom:1px solid gainsboro">
                <td style="padding:5px 10px 10px">Bellik</td>
                <td style="padding:5px 10px 10px;text-align:right;font-weight:bold"> {{$custom_request->note}} </td>
            </tr>
            <tr>
                <td style="padding:10px 10px 5px">Müşderi ady</td>
                <td style="padding:10px 10px 5px;text-align:right;font-weight:bold">{{$custom_request->requestable->name}}</td>
            </tr>
            <tr>
                <td style="padding:5px 10px">E-mail</td>
                <td style="padding:5px 10px;text-align:right;font-weight:bold">{{$custom_request->requestable->email}}</td>
            </tr>
            <tr>
                <td style="padding:5px 10px 10px">Telefon</td>
                <td style="padding:5px 10px 10px;text-align:right;font-weight:bold">{{$custom_request->requestable->phone}}</td>
            </tr>
        </tbody>
    </table>

    <p style="text-align:center;padding-top:50px">© 2022 Ähli Hukuklary Goralan.</p>
</section>
</body></html>
