<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Admin | {{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <style> 
    body {
      background-color: #F6FFFF; 
    }
  </style>
  <body>
    
@include('admin.layouts.header')

<div class="container-fluid">
  <div class="row">
    @include('admin.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('container')
    </main>
  </div>
</div>



      @include('sweetalert::alert')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </body>
  <script>
    $('.delete').click(function() {
      var codeId = $(this).attr('data-id');
      var code = $(this).attr('data-code');
      Swal.fire({
      title: 'Apa kamu yakin?',
      text: "Kamu akan menghapus coupon dengan code "+code,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location="/delete-coupon/"+codeId
        Swal.fire(
          'Deleted!',
          'Coupon berhasil dihapus',
          'success'
        )
      }
    })
  })
  </script>
</html>
