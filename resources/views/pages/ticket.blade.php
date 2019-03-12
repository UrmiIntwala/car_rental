<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <title>CarRental</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    
        </head>
<body>
<div class="container">
    
    <div class="row" style="padding:10px 10px 10px 7px;font-family:'Helvetica';">
         <span style="color:rebeccapurple;">CarRental</span>
    </div>
    <div class="row" style="background-color:navy;color:white;">
      Hi {{$data['name']}},<br>
      Your Car E-receipt for {{$data['city']}} from {{$data['start_date']}} to {{$data['end_date']}} has been booked. See details below.
    </div>
     {{-- <div class="row" style="background-color:navy;color:white;padding:10px 10px 10px 37px;font-family:'Helvetica';">
      Hi ,<br>
      Your Car E-receipt for from  to  has been booked. See details below.
    </div> --}}
    <div class="row">
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col" style="font-family:'Helvetica';color:#4a4a4a;padding:15px 37px;width:100%;" colspan="2">Trip Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td style="width:50%;border-right:1px solid #ebebeb;border-bottom:1px solid #ebebeb;padding:15px 37px">
                        <div style="font-family:'Helvetica';font-size:14px;font-weight:400;color:#9b9b9b">Car Name & No.</div>
                        <div style="font-family:'Helvetica';font-size:18px;font-weight:600;color:#4a4a4a">WegonR / GJ-05-2110</div>
                </td>
                
                <td style="width:50%;border-right:1px solid #ebebeb;border-bottom:1px solid #ebebeb;padding:15px 0 15px 10%;">
                        <div style="font-family:'Helvetica';font-size:14px;font-weight:400;color:#9b9b9b">City</div>
                        <div style="font-family:'Helvetica';font-size:18px;font-weight:600;color:#4a4a4a">Surat</div>
                </td>

              </tr>
              <tr  >
                        <td style="width:50%;border-right:1px solid #ebebeb;border-bottom:1px solid #ebebeb;padding:10px 10px 10px 37px;" colspan="2">
                    <div style="font-family:'Helvetica';font-size:14px;font-weight:400;color:#9b9b9b">Paid Money</div>
                     <div style="font-family:'Helvetica';font-size:18px;font-weight:600;color:#4a4a4a">100</div>
                    </td>
              </tr>
            </tbody>
          </table>
        
    </div>
   
</div>
<div class="container">
        <div class="row">
          <div class="col text-center">
          <a href="{{ url('download_ticket') }}"><button class="btn btn-success" type="submit">Download Pdf</button></a> 
          </div>
        </div>
      </div>
</body>