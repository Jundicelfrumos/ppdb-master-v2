<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="../node_modules/prismjs/themes/prism.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/81db6b68ef.js" crossorigin="anonymous"></script>
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="asdf/css/stisla.css">
  <link rel="stylesheet" href="asdf/css/components.css">
  <link rel="stylesheet" href="asdf/css/form.css">
</head>
<body>

@yield('main-admin')

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="/asdf/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="/node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <!-- Template JS File -->
    <script src="/asdf/js/form.js"></script>
    <script src="/asdf/js/custom.js"></script>
    <script src="/asdf/js/stisla2.js"></script>
    <!-- Page Specific JS File -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="{{ asset('asdf/js/region.js') }}"></script>
    <script src="/asdf/js/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
      let datatable = $(".datatable");
      if (datatable != null) {
        $(".datatable").DataTable();
      }
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
          $(document).ready(function () {
          $('#provinsi_id').on('change', function () {
            var idProvinsi = this.value;
            $("#kota_id").html('');
            $.ajax({
                url: `/api/kota/${idProvinsi}`,
                type: "GET",
                data: {
                    provinsi_id: idProvinsi,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    console.log(result);
                    $('#kota_id').html('<option value="">-- Select Kota --</option>');
                    $.each(result, function (key, value) {
                        $("#kota_id").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        $('#kota_id').on('change', function () {
            var idKota = this.value;
            $("#kecamatan_id").html('');
            $.ajax({
                url: `/api/kecamatan/${idKota}`,
                type: "GET",
                data: {
                    kota_id: idKota,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#kecamatan_id').html('<option value="">-- Select Kecamatan --</option>');
                    $.each(res, function (key, value) {
                        $("#kecamatan_id").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

    });

    var formfield = document.getElementById('formfield');

function add(){
  var newField = document.createElement('input');
  newField.setAttribute('type','text');
  newField.setAttribute('name','text');
  newField.setAttribute('class','text');
  newField.setAttribute('siz',50);
  newField.setAttribute('placeholder','Optional Field');
  formfield.appendChild(newField);
}

function remove(){
  var input_tags = formfield.getElementsByTagName('input');
  if(input_tags.length > 2) {
    formfield.removeChild(input_tags[(input_tags.length) - 1]);
  }
}
</script>
</body>
</html>