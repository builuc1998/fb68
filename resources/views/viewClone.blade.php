<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('awesome/css/font-awesome.min.css') }}" />
        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('toastr/toastr.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('alt/skins.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('alt/AdminLTE.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('alt/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('js/pace/pace.min.css') }}" />
        <script src="{{ asset('js/pace/pace.min.js') }}"></script>
        <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('alt/adminlte.min.js') }}"></script>
        <script src="{{ asset('toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('js/lucdeptrai.js') }}"></script>
        <title>LikePro</title>
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="pace  pace-inactive pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div></div>
        <select>
            @foreach($status as $st)
               <option value="$st->status">$st->status</option>     
            @endforech
        </select>
        <table class="table">
    <thead>
      <tr>
        <th>Uid</th>
        <th>Email</th>
        <th>Password</th>
        <th>CMTID</th>
        <th>PHOTOID</th>
        <th>Link Suport</th>
        <th>Time Create</th>
      </tr>
    </thead>
    <tbody>
        @foreach($clone as $cl)
      <tr>
        <td>{{$cl->uid}}</td>
        <td>{{$cl->email}}</td>
        <td>{{$cl->password}}</td>
        <td>{{$cl->cmtid}}</td>
        <td>{{$cl->photoid}}</td>
        <td>{{$cl->linksp}}</td>
        <td>{{$cl->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $clone->links() }}
        <!--<div id="app">
            <router-view></router-view>
        </div>-->
    </body>
<!---jquery--->
<!--<script src="{{mix('js/app.js')}}" type="text/javascript"></script>-->
</html>
